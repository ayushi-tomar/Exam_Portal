<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\exammaster;
use App\students;

class PortaloperationController extends Controller
{
    public function dashboard()
    {
    	if(!Session::get('portal_session'))
    	{
    		return redirect(url('portal/login'));
    	}

    	 $view=exammaster::where('status','1')->get();
    	// echo"<pre>";
    	//print_r($data);
    	//exit();    
    	//echo $session_data=Session::get('portal_session');
    	return view('portal.dashboard',compact('view'));

    }
    public function examform($id)
    {
        $view=exammaster::where('id','=',$id)->get();
         //dd($view);

         return view('portal.examform',compact('view'));
    }
         public function submit(Request $request)
     {
        
       // dd($request->all());

         $data=  new students;
         $data->name = $request->name;
         $data->email = $request->email;
         $data->mobile = $request->mobile;
         $data->dob = $request->dob;
         $data->password = $request->password;
         $data->status = 1;
         $data->category = $request->exam;
         $data->exam = $request->exam;
         $data->save();
        
         //dd($data);

         if($data)
         {

      return redirect('portal/print/'.$data->id)->with('message','post successfully added');
          }


     }
     public function print($id)
     {
        $data=students::where('id',$id)->first();
        //dd($data);
        $exam=exammaster::where('id',$data->exam)->first();
        //dd($exam);

        return view('portal.print',compact('data','exam'));
     }
     public function updateform()
     {
        $data= students::where('status','1')->get();
        return view('portal.updateform',compact('data'));

     }
     public function studentexaminfo()
     {

        $studentinfo = students::where('mobile',$_GET['mobile'])->where('dob',$_GET['dob'])->where('exam',$_GET['exam'])->first();
         
        dd($studentinfo);

             return view('portal.studentexaminfo',compact('studentinfo'));
    }


     public function logout(Request $request)
   {

    $request->session()->forget('portal_session');

    return redirect(url('portal/login'));

   }

}
