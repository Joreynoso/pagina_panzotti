<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    
    public function mostrar(){

        return view('/panel/principal');
    }

}
