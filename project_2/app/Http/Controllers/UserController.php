<?php

namespace App\Http\Controllers;

use Couchbase\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showUserTable(){
        $data = DB::table("users")->get();
        return view('userTable', ['user' => $data]);
    }
    public function AddHumanUser(Request $request){

        $validated = $request->validate([
            'name'=> 'required|min:2',
            'email'=> 'required|email|min:5|same:email_validate',
            'password'=> 'required|min:6|same:password_validate|regex:/(?=.*[0-9])/(?=.*[a-z])/(?=.*[A-Z])',
        ]);

        $hashedPassword = Hash::make($validated['password']);

        $name = $request->input('name');
        $email = $request->input('email');

        $result = DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $hashedPassword]);

        if($result != null) return 'Dodano';
        else return redirect()->back()->with('result','Nie dodano');

    }
}