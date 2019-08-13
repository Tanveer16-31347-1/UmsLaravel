<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class portalController extends Controller
{
	public function sessionCheck($req){
        if($req->session()->has('username')){
            return true;
        }else{
            return false;
        }
    }
    

    public function index(Request $req){

        if($this->sessionCheck($req)){
        	
        	if($req->session()->get('type') == 'faculty')
        	{
        		return view('page.portal.faculty.portal');
        	}
        	
        	if($req->session()->get('type') == 'admin')
        	{
        		return view('page.portal.admin.portal');
        	}
        	
        	if($req->session()->get('type') == 'register')
        	{
        		return view('page.portal.register.portal');
        	}
        	
        	if($req->session()->get('type') == 'student')
        	{
        		return view('page.portal.student.portal');
        	}

        	else{
        		$req->session()->flash('msg', "invalid usertype!");
        		return redirect()->route('login.index');
        	    }

            

        }else{

            return redirect()->route('login.index');
        }

    }
}
