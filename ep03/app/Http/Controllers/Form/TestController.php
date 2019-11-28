<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();
        //dd($users);
        return view('listAllUsers', [
            'users' => $users
        ]);
    }

    public function listUser(User $user)
    {
        // dd($user);
        return view('listUser', [
            'user' => $user
        ]);
    }

    public function addUser()
    {
        return view('addUser');
    }

    public function storeUser(Request $request)
    {
        //dd($request);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.listAll');
    }

    public function editUser(User $user)
    {
        return view('editUser', [
            'user' => $user
        ]);
    }
}
