<?php

namespace App\Http\Controllers;

use App\Workout;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Workout as WorkoutResource;
use App\Http\Resources\WorkoutCollection;
use Auth;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return new WorkoutCollection($user->workouts()->paginate(5));
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
        $workout = $request->isMethod('put') ? Workout::findOrFail($request->id) : new Workout();

        $workout->id = $request->input('id');
        $workout->name = $request->input('name');
        $workout->notes = $request->input('notes');

        if ($workout->save()) {
            return new WorkoutResource($workout);
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
        $workout = Workout::findOrFail($id);

        return new WorkoutResource($workout);
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
        $workout = Workout::findOrFail($id);

        if ($workout->delete()) {
            return new WorkoutResource($workout);
        }
    }
}
