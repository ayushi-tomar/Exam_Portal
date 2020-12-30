 @extends('student.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> JoinExam Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Join Exam</h3>
 </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <h3>Time : 3 Hrs</h3>
                  </div>
                  <div class="col-sm-4"> 
                    
                    <h3 class="text-center">Time : 3:00:00</h3>

                  </div>
                  <div class="col-sm-4"> 

                    <h3 class="text-right">Status : Pending</h3>
                </div>


                  </div>
                </div>
            <!-- /.card-body -->
                </div>
          <!-- /.card -->
             </div>
           </div>
           <!-- question------------------------------------------- -->
                 <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Question</h3>

                
                   </div>
                   <div class="card-body">
                    <div class="row">
                      <form method="post" action="{{url('student/submit_ques')}}">
                        @csrf
                      @foreach($show as $key=>$value)
                     <?php $opt=json_decode ($value->option);
                      //print_r($opt);
                      ?>
                     <div class="col-sm-12">
                     <p><b>{{$key+1}}.{{$value->question}}</b></p>
                     <input type="text" name="question{{$key+1}}" value="{{$data->id}}">
                     <ul class="question_option mt-4">

                      <li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option1}}">  {{$opt->option1}}</li>

                      <li><input type="radio" name="ans{{$key+1}}"value="{{$opt->option2}}">   {{$opt->option2}} </li>

                      <li><input type="radio" name="ans{{$key+1}}"value="{{$opt->option3}}">   {{$opt->option3}} </li>

                      <li><input type="radio" name="ans{{$key+1}}"value="{{$opt->option4}}"> {{$opt->option4}} </li>
                    </ul> 
                    </div>
                     @endforeach 

                    

                  <div class="col-sm-12 mt-4">
                   
                   <button class="btn btn-info btn-block">Submit</button>


                  </div> 
                  <!-- endquestion ---------------------------->

                  </div>
                </form>



    </div>
@endsection
