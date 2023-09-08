<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    //
    public function forminput(){
        return view('pages.forminput');
    }

    public function welcome(Request $request){

        $firstName = $request['first_name'];
        $lastName = $request['last_name'];

        return view('pages.welcome', compact('firstName','lastName'));
    }

}
