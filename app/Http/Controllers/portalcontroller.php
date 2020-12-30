<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portal;
use Session;

class portalcontroller extends Controller
{
    public function signup()
    {
    	return view('portal.signup');

    }
         public function saveportal(Request $request)
     {


         $data=  new portal;
         $data->name = $request->name;
         $data->email = $request->email;
         $data->mobile = $request->mobile;
          $data->password = $request->password;
          $data->status = 1;
         $data->save();
        //dd($data);

         if($data)
         {

      return redirect('portal/login');
          }


     }
        public function login()
    {
    	return view('portal.login');

    }
    public function savelogin(Request $request)
    {
    	//print_r('$request->all()');
     $portal =portal::where('email',$request->email)->where('password',$request->password)->get()->toArray();
     //print_r($portal);

     if($portal)
     {
     	//echo "okay";
     	if($portal[0]['status']==1){
     		//echo "login";
     		$request->session()->put('portal_session',$portal[0]['id']);
     	return redirect('portal/dashboard')->with('message','login successfully');
     }
     else{
     	//echo "your account deactivate";
     	return redirect('portal/login')->with('message','your account deactivate successfully');

     }
     
     }
     else
     {
     	//echo "not okay";
     return redirect('portal/login')->with('message','email and password does not match');

     }


     }

}
