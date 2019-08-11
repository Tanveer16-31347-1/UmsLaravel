<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
    	return view('page.index');
    }
    public function admin(){
    	return view('page.admin');
    } public function login(){
    	return view('page.login');
    }
    
}
