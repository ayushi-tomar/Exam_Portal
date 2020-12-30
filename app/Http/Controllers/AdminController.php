<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Auth;
use App\category;
use App\exammaster;
use App\students;
use App\portal;
use App\exam_ques_masters;





class AdminController extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view ('admin.index');
    }
            public function category()
     {
     	//print_r($view);
     	//die;
     	$view= category::all();
    return view ('category.category',compact('view'));
     }

    public function savecategory(Request $request)
    {

    	   $data =  new category;
         $data->name = $request->name;
         $data->status = 1;
         $data->save();

         if($data)
         {
         return redirect('category');
         }
    }
    public function editcategory($id)
    {
       // echo $id;
        $data= Category::find($id);
       //print_r($data);
       // die();
        //dd($data);
      return view('category.editcategory' ,compact('data'));
    }
     public function update(Request $request)
 {
//print_r($request->all());
    $data= Category::find($request->id);
         
         $data->name = $request->name;    //table(title) from
          $data->save();
         if($data)
         {
            return redirect('/category')->with('message','update successfully Added');  //flash message session
         }
     }

        public function delete($id)
        {
        $data =Category::find($id);
        $deleted =$data->delete();
        if($deleted)
        {

     return redirect('/category')->with('message','Post Successfully Deleted');
        }
    }



        public function manageexam()
     {
     	$view= exammaster::all();
     	$data=category::all();
    	return view ('manageexam.manageexam',compact('view','data'));
     }


     public function savemanage(Request $request)
     {


         $data=  new exammaster;
         $data->title = $request->title;
         $data->category = $request->category;
         $data->examdate = $request->examdate;
          $data->status = 1;
         $data->save();
        //dd($data);

         if($data)
         {

      return redirect('manageexam');
          }


     }
         public function editexam($id)
    {
       // echo $id;
        $data= exammaster::find($id);
       //print_r($data);
       // die();
        //dd($data);
      return view('manageexam.editexam' ,compact('data'));
    }
         public function updateexam(Request $request)
 {
          //print_r($request->all());
         $data=exammaster::find($request->id);
        $data->title = $request->title;    //table(title) from
         $data->category = $request->category;    //table(title) from
        $data->examdate = $request->examdate;    //table(title) from

        $data->save();
         if($data)
         {
            return redirect('/manageexam')->with('message','update successfully Added');  //flash message session
         }
     }
        public function deleteexam($id)
        {
        $data =exammaster::find($id);
        $deleted =$data->delete();
        if($deleted)
        {

     return redirect('/manageexam')->with('message','Post Successfully Deleted');
        }
    }
    public function addquestion($id)
    {
        //echo "$id";
        $view= exammaster::find($id);
        $datas=exam_ques_masters::where('exam_id',$id)->get();

        return view('manageexam.addquestion',compact('view','datas'));

    }
    public function savequestion(Request $request)
    {
         $data= new exam_ques_masters;
         $data->exam_id = $request->id;
         $data->question = $request->question;
         $data->ans = $request->ans;
         $data->option = json_encode(array('option1'=>$request->option1,'option2'=>$request->option2,'option3'=>$request->option3,'option4'=>$request->option4));
         $data->status = 1;
         $data->save();
        //dd($data);
         if($data)
         {
            return  redirect('/addquestion/'. $request->id);

         }
     }
        
     public function editquestion($id)
    {

       // echo $id;
     $data= exam_ques_masters::find($id);
       //print_r($data);
       // die();
        //dd($data);
    return view('manageexam.editquestion',compact('data'));
    }
    public function updatequestion(Request $request)
    {
        $data= exam_ques_masters::find($request->id);
         $data->exam_id = $request->id;
         $data->question = $request->question;
         $data->ans = $request->ans;
         $data->status = 1;
         $data->save();
        //dd($data);
         if($data)
         {
         return  redirect('/addquestion/'. $request->id);

         }



    }






     public function managestudent()
     {
     $view= students::all();
     $data=category::all();
    $mello=exammaster::all();

     return view ('managestudent.managestudent',compact('view','data','mello'));
     }
          public function savestudent(Request $request)
     {


         $data=  new students;
         $data->name = $request->name;
        $data->email = $request->email;
         $data->mobile = $request->mobile;
         $data->category = $request->category;
         $data->exam = $request->exam;
        $data->password = $request->password;
         $data->status = 1;
         $data->save();
        //dd($data);

         if($data)
         {

      return redirect('managestudent');
          }

     }
     public function editstudent($id)
    {
       // echo $id;
     $data= students::find($id);
       //print_r($data);
       // die();
        //dd($data);
     return view('managestudent.editstudent' ,compact('data'));
    }

    public function updatestudent(Request $request)

    {         

        $data=students::find($request->id);
         $data->name = $request->name;
        $data->email = $request->email;
         $data->mobile = $request->mobile;
         $data->category = $request->category;
         $data->exam = $request->exam;
        $data->password = $request->password;
         $data->status = 1;
         $data->save();
        //dd($data);

         if($data)
         {
        return redirect('/managestudent')->with('message','update successfully Added');  //flash message session
         }

     }
        public function deletestudent($id)
        {
        $data =students::find($id);
        $deleted =$data->delete();
        if($deleted)
        {

     return redirect('/managestudent')->with('message','Post Successfully Deleted');
        }
    }




     public function portal()
     {
        //print_r($view);
        //die;
     $view= portal::all();
    return view ('portal.portal',compact('view'));
     }







}
