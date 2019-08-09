<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\StudentRequest;


class HomeController extends Controller
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
            return view('home.index');
        }else{
            return redirect()->route('login.index');
        }

    }

    public function details(Request $req, $sid){

        // if($this->sessionCheck($req)){
            
        //     $s = User::find($sid);
        //     return view('home.details', ['std'=> $s]);
        // }else{
        //     return redirect()->route('login.index');
        // }
    }

    public function add(){
    	return view('home.add');
    }
	
	public function create(StudentRequest $req){
  
        // $req->validate([

        //     'uname'=>'required|unique:users',
        //     'password'=>'required|max:3',
        //     'name'=>'required|same:uname',
        //     'cgpa'=>'required',
        //     'dept'=>'required'
        // ]);

/*        $this->validate($req, [

            'uname'=>'required|unique:users',
            'password'=>'required|max:3',
            'name'=>'required|same:uname',
            'cgpa'=>'required',
            'dept'=>'required'
        ]);*/

/*        $validation = Validator::make($req->all(), [

            'uname'=>'required|unique:users',
            'password'=>'required|max:3',
            'name'=>'required|same:uname',
            'cgpa'=>'required',
            'dept'=>'required'
        ])->validate();*/

        //$validation->validate();

        /*if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors());
        } */       

    	// $user  = new User();
     //    $user->username = $req->uname; 
     //    $user->password = $req->password;
     //    $user->type = 'admin';
     //    $user->name = $req->name;
     //    $user->dept = $req->dept;
     //    $user->cgpa = $req->cgpa;
     //    $user->save();
    	// $user = User::where('username', $req->uname)->where('password', $req->password)->get();

    	// echo $user;
		//return redirect()->route('home.details', $user[0]->userId);
    }

    public function show(){

    	// $std = User::all();
    	// return view('home.show', ['stdlist'=>$std]);
    }

    public function edit($sid){

    // 	$s = User::find($sid);
    // 	return view('home.edit', ['std'=> $s]);
    }

    public function update(Request $req, $sid){

     //    $user = User::find($sid);

     //    $user->name = $req->name;
     //    $user->dept = $req->dept;
     //    $user->cgpa = $req->cgpa;
     //    $user->save();

    	// return redirect()->route('home.details', $sid);
	    
    }

    public function delete($sid){
    	
     //    $s = User::find($sid);
    	// return view('home.delete', ['std'=> $s]);
    }

    public function destroy(Request $req, $sid){
    
        // User::destroy($sid);
        // return redirect()->route('home.stdlist');
    }

    
}








