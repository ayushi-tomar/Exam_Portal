@extends("portal.master")
@section('content')


     <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         @foreach($view as $view)
         <?php
         //echo date('y-m-d');
         //echo"<br>";
         //echo $view['examdate']
         if(strtotime(date('y-m-d'))>strtotime($view['examdate']))
         {
          $cls="bg-danger";
         }
         else
         {

          $cls="bg-success";
         }
         ?>
         <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box {{$cls}}">
              <div class="inner">
                <h3>{{$view->title}}</h3>
                 <p>{{$view->category}}</p>
                 <p>{{$view->examdate}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              @if(strtotime(date('y-m-d'))< strtotime($view['examdate']))

        <a href="{{url('portal/examform',$view->id)}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          @endforeach
     
          </div>
        </div>

@endsection

