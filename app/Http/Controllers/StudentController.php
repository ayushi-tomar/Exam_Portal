<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\ students;
use Session;

class StudentController extends Controller
{
    public function signup()
    {
    	return view ('student.signup');

    }
    public function savesignup(Request $request)
    {
    	    	//print_r('$request->all()');
     $student =students::where('email',$request->email)->where('password',$request->password)->get()->toArray();
     //print_r($portal);

     if($student)
     {
     	//echo "okay";
     	if($student[0]['status']==1){
     		//echo "login";
     		$request->session()->put('student_session',$student[0]['id']);
     	return redirect('student/dashboard')->with('message','login successfully');
     }
     else{
     	//echo "your account deactivate";
     	return redirect('student/login')->with('message','your account deactivate successfully');

     }
     
     }
     else
     {
     	//echo "not okay";
     return redirect('student/login')->with('message','email and password does not match');

     }




    }
}
