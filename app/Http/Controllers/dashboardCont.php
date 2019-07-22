<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardCont extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewdashboard(){
        return view('dashboard')
        ->with('act','viewdashboard');
        

     }
}
