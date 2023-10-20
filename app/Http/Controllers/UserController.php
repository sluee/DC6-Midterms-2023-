<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return inertia('User/index', [
            'users'=>$users
        ]);
    }

    public function create(){
        return inertia('User/create');
    }

    public function edit(User $user){
        return inertia('User/edit');
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect('/users')->with('message', 'User successfully deleted');;
    }
}
