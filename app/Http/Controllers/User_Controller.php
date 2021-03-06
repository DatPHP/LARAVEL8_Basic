<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;


class User_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = DB::select('select * from users');

          return view('user/view',['users'=>$users]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/user/news_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email= $request->input('email');
        $password=$request->input('password');
        DB::table('users')->insert([
           'name' => $name,
           'email' => $email,
           'password' => Hash::make($password),
       ]);


       action([User_Controller::class, 'create']);
       return Redirect::action([User_Controller::class, 'index']);  

     //  redirect('/user/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('/user/user_update',['news'=>$users]);
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
        $name = $request->input('name');
        $email= $request->input('email');    
        DB::update('update users set name = ? ,email = ? where id = ?',[$name,$email,$id]);
        return Redirect::action([User_Controller::class, 'index']);    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return Redirect::action([User_Controller::class, 'index']);
    }
}
