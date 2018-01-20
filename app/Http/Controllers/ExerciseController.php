<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;
use App\Http\Resources\Exercise as ExerciseResource;
use App\Http\Resources\ExerciseCollection;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::paginate(5);
        return new ExerciseCollection($exercises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercise = $request->isMethod('put') ? Exercise::findOrFail($request->id) : new Exercise();

        $exercise->id = $request->input('id');
        $exercise->name = $request->input('name');
        $exercise->description = $request->input('description');
        $exercise->video = $request->input('video');
        $exercise->exercise_type_id = $request->input('type_id');

        if ($exercise->save()) {
            return new ExerciseResource($exercise);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise = Exercise::findOrFail($id);
        return new ExerciseResource($exercise);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::findOrFail($id);

        if ($exercise->delete()) {
            return new ExerciseResource($exercise);
        }
    }
}
