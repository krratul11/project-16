<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function registrationPage(){
        return view('page.auth.registration-page');
    }
    public function loginPage(){
        return view('page.auth.login-page');
    }

    public function restPage(){
        return view('page.auth.rest-pass');
    }

    public function SendOtpPage(){
        return view('page.auth.send-otp-page');
    }

    public function verifyOtpPage(){
        return view('page.auth.verify-otp-page');
    }

    public function profilePage(){
        return view('page.dashbord.profile-page');
    }
}
