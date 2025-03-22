<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashbordPage(){
        return view('page.dashbord.dashBord-page');
    }
}
