@extends('student.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Student Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!--table start-->
    <table class="table">
      <tr>
        <th>#</th>
        <th>exam title</th>
        <th>exam date</th>
        <th>result</th>
        <th>status</th>
        <th>action</th>
      </tr>
      <tr>
        <td>1</td>
        <td>{{$exam->title}}</td>
         <td>{{$exam->examdate}}</td>
          <td></td>
          <td>
            <?php
                      if(strtotime($exam->examdate)<strtotime(date('Y-m-d')))
                      {
                          echo "Completed";
                      }
                      else if(strtotime($exam->examdate)==strtotime(date('Y-m-d')))
                      {
                         echo "Running";
                      }  
                      else
                      {
                        echo "pending";
                      }
                
?>
          </td>
          
           <td><a href="{{url('student/joinexam/'.$exam->id)}}" class="btn btn-info" >join exam</a></td>


      </tr>

    </table>
    <!--table end-->
</div>
@endsection
