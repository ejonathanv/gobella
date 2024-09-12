<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('landing-page.index');
    }

    public function privacyPolicies(){
        return view('landing-page.policies');
    }

    public function shippingAndReturnPolicy(){
        return view('landing-page.shipping-and-return-policies');
    }
}
