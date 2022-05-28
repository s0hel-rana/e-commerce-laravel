<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashbordController extends Controller
{
    public function admindashbord(){
        return view('Backend.dashbord');
    }
}
