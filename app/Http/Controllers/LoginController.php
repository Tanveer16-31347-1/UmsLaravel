<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	public function index(){
		return view('page.login.login');
	}

	public function valid(Request $req){
		
		
       $req->validate([

            'uname'=>'required',
            'password'=>'required|max:3',
            
        ]); 


		
		$result	= DB::table('t_users')->where('u_name', $req->uname)
				 ->where('u_password', $req->password)
				 ->get();

		//echo $result;

		if(count($result) > 0){
			
			$req->session()->put('username', $req->uname );
			$req->session()->put('type', $result[0]->u_type );
			
			return redirect()->route('home.index');
		}else{
			$req->session()->flash('msg', "invalid username or password!");
			
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}

}
