<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function salePage(){
        return view('page.dashbord.sale-page');
    }
}
