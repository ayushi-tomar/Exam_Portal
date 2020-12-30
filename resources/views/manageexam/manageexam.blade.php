@extends("admin.master")
@section('content')


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manageexam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">manageexam</li>
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
                  <a class="btn btn-info btn-sm" href="javascript:;"data-toggle="modal" data-target="#exampleModal">Add New</a>
              </div>
            </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>title</th>
                  <th>category</th>
                  <th>examdate</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
    @foreach($view as $view)

                 <tr>
                 <td>{{$view->id}}</td>
                 <td>{{$view->title}}</td>
                  <td>{{$view->category}}</td> 
                 <td>{{$view->examdate}}</td> 
                 <td><input type="checkbox" name="status"></td>
                 <td>
                  <a href="{{url('/editexam/'.$view->id)}}" class="btn btn-info">Edit</a>
                  <a href="{{url('/deleteexam/'.$view->id)}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('/addquestion/'.$view->id)}}" class="btn btn-info">Add question</a>



                </td>
                </tr>
            
                
                </tbody>
     @endforeach

                
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
        <form action="{{url('savemanage')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
                  <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
              <option>Select Category</option>
              @foreach($data as $datas)
              <option>{{$datas->name}}</option>
              @endforeach
            </select>
        </div>

          <div class="form-group">
            <label> Exam date</label>
            <input type="date" name="examdate" class="form-control">
        </div>
        <br>
      <button type="submit" class="btn-btn-secondary">Add</button>


         </form>

      </div>
    </div>
  </div>
</div>



@endsection