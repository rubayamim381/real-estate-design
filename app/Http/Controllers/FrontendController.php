<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //first page
    public function index(){
        return view('frontend.pages.main_page');
    }
}
