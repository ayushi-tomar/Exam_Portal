@extends("admin.master")
@section('content')


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Question</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Add Question</a>
              </div>
            </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                   <th>Question</th>
                  <th>Ans</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 @foreach($datas as $datas)
                 <td>{{$datas->id}}</td>
                 <td>{{$datas->question}}</td>
                 <td>{{$datas->ans}}</td> 
                 <td><input type="checkbox" name="status"></td>
                 <td>
                  <a href=" {{url('/editquestion/'.$datas->id)}}" class="btn btn-info">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                 </td>
                </tr>
                @endforeach
              </tbody>

                
              </table>
          
     
              </div>
              <!-- /.card-body -->
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action="{{url('/savequestion')}}" method="post">
               @csrf
        <input type="hidden" name="id" value="{{$datas->id}}">
        <div class="form-group">
         <label>Enter Question</label>
          <input type="text" name="question" placeholder="Enter Question" class="form-control">
        </div>

        <div class="form-group">
       <label>Enter option 1</label>
          <input type="text" name="option1" placeholder="Enter opt1" class="form-control">
        </div>

         <div class="form-group">
       <label>Enter option 2</label>
          <input type="text" name="option2" placeholder="Enter opt2" class="form-control">
       
        </div>

         <div class="form-group">
         <label>Enter option 3</label>
          <input type="text" name="option3" placeholder="Enter opt3" class="form-control">
        </div>

         <div class="form-group">
         <label>Enter option 4</label>
          <input type="text" name="option4" placeholder="Enter opt4" class="form-control">
       
        </div>

        

        <div class=" form-group">
        <label>Enter right answer</label>
          <input type="text" name="ans" placeholder="Enter right answer" class="form-control">
      </div>

        
      <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Add Question</button>
      </div>
      </form>
       
      </div>
      
    </div>
  </div>
</div>
    






         </form>

      </div>
    </div>
  </div>
</div>



@endsection