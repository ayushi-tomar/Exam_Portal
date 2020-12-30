 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	<div class="container-fluid">
    <div class="row">
     <div>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <h1 style="width:fit-content; font-family: 'Abril Fatface', cursive; color: #b98c96 ;font-size: xxx-large;" >ONLINE EXAM PORTAL 2020
        </h1>
    </div>
    
<br>

<div class="col-md-6" style="margin-top: 5%;
    color: darkblue;">
	<div class="cards mx-auto">
	
	<div class="card-body">
		<div>
		<i class='fas fa-user-circle' style="font-size: 24px"></i><h1>name:{{$data->name}}</h1></label>
		</div>
				

		<div>
	    <i class='fas fa-id-card-alt' style="font-size: 24px"></i><h1>email:{{$data->email}}</h1></label>
		</div>

		<div class="form-group">
	    <i class='fas fa-id-card-alt' style="font-size: 24px"><h1>mobile:{{$data->mobile}}</h1></i></label>
		</div>


		<div class="form-group">
	     <i class='fas fa-key' style="font-size: 24px"></i><h1>examdate:{{$exam->examdate}}</h1></label>
		</div>

          <div>
	    <i class='fas fa-id-card-alt' style="font-size: 24px"></i><h1>dob:{{$data->dob}}</h1></label>
		</div>

		<div>
	    <i class='fas fa-id-card-alt' style="font-size: 24px"></i><h1>exam:{{$data->exam}}</h1></label>
		</div>

        <div>
                  
         <p> <button  onclick="window.print()" class="btn btn-primary">PRINT</button> </p>
         </div>
		 </form>
					
				</div><!--end card -body-->
				
			</div>
</div>
 </div>
 </div>




    </div><!-- row -->	
	</div><!-- container-fluid -->

</body>
</html>





<!-- h1>examdate:{{$exam->examdate}}</h1>
<h1>name:{{$data->name}}</h1>
<h1>email:{{$data->email}}</h1>
<h1>dob:{{$data->dob}}</h1>
<h1>mobile:{{$data->mobile}}</h1>
<h1>exam:{{$exam->title}}</h1>

<br>
<button onclick="window.print()">print</button> -->