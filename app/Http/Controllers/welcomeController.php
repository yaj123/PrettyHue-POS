<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function loginv2(){
        return view(".auth.login");
    }
}
