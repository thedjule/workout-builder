<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return new UserCollection($users);
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
        if ($request->isMethod('put')) {
            $user = User::findOrFail($request->id);
        } else {
            $user = new User();
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->height = $request->input('height');
        $user->weight = $request->input('weight');

        // Change password when update ?

        if (!empty($request->password)) {
            $password = trim($request->password);
        } else {
            // Set the manual password
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $string = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < 10; ++$i) {
                $string .= $keyspace[random_int(0, $max)];
            }
            $password = $string;
        }

        $user->password = Hash::make($password);

        if ($user->save()) return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
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
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return new UserResource($user);
        }
    }
}
