<html>
    <head>
        <title>All Reports</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name', 'Well Life Jobs') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

<!-- <div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Report Type</th>
      <th scope="col" colspan="2" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><a>Create</a></td>
      <td>Show</td>
    </tr>

  </tbody>
</table>
</div> -->

<div class="container">
        <div class="row nav-col">
			<div class="col-lg-10">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ms-5">
							<a class="nav-item nav-link" href="/">HOME</a>
							<a class="nav-item nav-link" href="/patient">PATIENT</a>
							<a class="nav-item nav-link active" href="/all_reports">All reports</a>
						</div>
					</div>
				</nav>
			</div>
		</div>

<div class="row report-col">
            <div class="col-lg-10">
                <div class="card mt-5">
                    <div class="card-body">
                    
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Report Type</th>
                                    <th scope="col" colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cardiometabolic Reports</td>
                                    <td><a href="/cardiometabolic_report" class="button btn btn-primary">Create</a></td>
                                    <td><a href="/cardiometabolic_report/show" class="button btn btn-primary">Show</a></td>
                                </tr>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
</div>
    </body>
</html>



