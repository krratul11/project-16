<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Component;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPage(){
        return view('page.dashbord.category-page');
    }
}
