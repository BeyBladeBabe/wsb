<?php

namespace App\Http\Controllers;

use Couchbase\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function showCarTable(){
        //$data = DB::table("car")->get();
        $data = DB::table('car')->paginate(3);
        return view('carTable', ['car' => $data]);
    }
    public function AddUser(Request $request){

        $brand = $request->input('brand');
        $model = $request->input('model');
        $capacity = $request->input('capacity');

        $result = DB::insert('insert into car (brand, model, capacity) values (?, ?, ?)', [$brand, $model, $capacity]);

        if($result != null) return 'Dodano';
        else return redirect()->back()->with('result','Nie dodano');

        //return $request -> input();
    }
}