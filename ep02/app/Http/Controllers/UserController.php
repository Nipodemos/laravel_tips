<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        // $user = new User();
        // $user->name = "Alan";
        // $user->email = 'nipodemos13@gmail.com';
        // $user->password = Hash::make('123');
        // $user->save();
        $user = User::where('id', '=', 1)->first();
        // dd($user);
        return View('listUser', [
            'user' => $user
        ]);
    }
}
