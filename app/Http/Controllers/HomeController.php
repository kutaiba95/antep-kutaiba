<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowView() {
        $Name = "Kutaiba Mahmutoglu";
        $Meslek = "Mechanical Engineering";
        $City = "Gaziantep";

        return view('hakkimda', compact('Name','Meslek','City'));
    }
}
