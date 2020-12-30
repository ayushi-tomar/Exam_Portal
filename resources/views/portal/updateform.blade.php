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
                    <div class="col-sm-6">
                      <h3><span class="float-right"></span></h3>
                    </div>
                    <div class="col-sm-6">
                      <h3><span class="float-right"></span></h3>
                       </div>
                </div>
                 <form action= "{{url('portal/studentexaminfo')}}" class="database_operation">
                  {{csrf_field()}}
                <div class="row">

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
                      <div class="form-group" class="form-control">
                        <label>exam</label>
                       <select name="exam" class="form-control">
                        <option >select exam</option>
                        @foreach($data as $data)
                     <option value="{{$data->id}}">{{$data->title}}</option>
                    @endforeach
                    </select>
                      </div>
                       </div>  

      

                    <div class="col-sm-12">
                      <div class="form-group">
                        <button class="btn btn-info"> Update</button>
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






