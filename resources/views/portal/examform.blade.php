@extends("portal.master")
@section("content")
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Examform</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">examform</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
               <div class="card-body">
                <div class="row">
                  @foreach($view as $view)
                    <div class="col-sm-6">
                      <h3><span class="float-left">{{$view->title}}</span></h3>
                    </div>
                    <div class="col-sm-6">
                      <h3><span class="float-right">{{$view->examdate}}</span></h3>
                       </div>
                </div>
                @endforeach

                

                <form action="{{ url('submit')}}" class="" method="post">
                  @csrf

                  <input type="hidden" name="exam" value="{{$view->id}}">
                  
                <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Name</label>
                      
                        <input type="text" name="name" class="form-control">
                      </div>  
                    </div>
                        <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter E-Mail</label>
                        <input type="email" name="email" class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Mobile </label>
                        <input type="text" name="mobile" class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter DOB</label>
                        <input type="date" name="dob" class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <button class="btn btn-info" > Save</button>
                      </div>  
                    </div>
                </div>     
               </div>
           </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection






