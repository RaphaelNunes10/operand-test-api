<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    // public function select(Int $id)
    // {
    //     return User::where('id', $id)->first();
    // }

    public function store(Request $request)
    {
        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
        ]);

        return $user;
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input("password"));

        $user->save();

        return $user;
    }

    public function remove(User $user)
    {
        $user->delete();
    }
}
