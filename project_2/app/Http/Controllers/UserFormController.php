<?php

namespace App\Http\Controllers;

use Couchbase\View;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showForm(Request $request){
        $request ->validate([
            'firstName' => 'required | min:2 | max:20',
            'lastName' => 'required',
            'email' => 'required | min:3 | max:15 | email',
        ]);
        return View('showuser', $request);
    }
}
