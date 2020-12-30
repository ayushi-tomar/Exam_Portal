<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\students;
use\App\exammaster;
use\App\exam_ques_masters;
use Session;

class Studentoperationcontroller extends Controller
{
    public function dashboard()
    {
    	echo Session::get('id');
    	    	if(!Session::get('student_session'))
    	{
    		return redirect(url('student/signup'));
    	}

    	$data=students::where('id',Session::get('student_session'))->get()->first();

    	//$data=student::where('status','1')->get();
    	//print_r($data);

    	return view('student.dashboard',compact('data'));

    }

    public function exam(){

    	$data=students::where('id',Session::get('student_session'))->get()->first();
        //dd($data);
    	$exam = exammaster::where('title',$data->exam)->first();

    	//dd($exam);
        return view('student.exam',compact('data','exam'));
    }


    public function joinexam($id)
    {
    $data=students::where('id',Session::get('student_session'))->get()->first();
    //dd($data);
    $show=exam_ques_masters::all();
    //dd($show);
    return view('student.joinexam',compact('data','show'));
    }
    public function submit_ques(Request $request)
    {
        echo'<pre>';
        print_r($request->all());

    }


    public function logout(Request $request)
    {

    $request->session()->forget('student_session');

    return redirect(url('student/signup'));
    }
}



