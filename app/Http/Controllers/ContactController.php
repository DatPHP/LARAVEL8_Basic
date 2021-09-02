<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

      /**
     * Provision a new web server.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // ...
    }
    
    public function show()
    {
        return     "<h1> Hello! THis is Contact Page"; //view('user.form');
    }
}