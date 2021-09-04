<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = DB::table('users')->get();
        //dd($users);
        return view('user.index', ['users' => $users]);
    }

    
    public function getlist()
    {
        $users = DB::table('users')->get();

       // $item = DB::table('users')->find(2);

      // $item =  DB::table('users')->where('email', 'ngantranbd@gmail.com')->get();

        //dd($item);

       // dd($users);
        return view('user.getlist', ['users' => $users]);
    }


    


 


}
