<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDbController extends Controller{
    public function showDbTable(){
        // DB::table("user_test")->get();

        // $data = DB::table('user_test') 
        //     -> count();
        // return $data;

        // $data = DB::table("user_test")
        //     ->where('lastName', 'Nowak')
        //     ->get();
        //echo $data;
        //print_r($data);

        // return DB::table("user_test")
        //     -> where('lastName', 'Nowak')
        //     -> delete();

        /*DB::table("user_test")
        ->insert([
            'firstName' => 'Janusz',
            'lastName' => 'Kowal',
            'birthday' => '2000-08-21',
        ]);*/

        /*$data = DB::table("user_test")
            ->where('lastName', 'Kowal')
            ->update([
                'firstName' => 'Paweł',
                'lastName' => 'Pawlak',
            ]);
        echo $data;*/

        //return number_format(DB::table("user_test")->avg('weight'),'2');

        //return number_format(DB::table("user_test")->count('weight'),0,",",".");

        $tab = DB::table("user_test")
            ->select('user_test.firstname', 'city.cityName')
            ->join("city","city_id","city.id")
            ->get();
        return view('widok', ['tab' => $tab]);

    }
    
}
