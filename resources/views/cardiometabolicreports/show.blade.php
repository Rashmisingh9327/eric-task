<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name', 'Well Life Jobs') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
        <div class="row nav-col">
			<div class="col-lg-10">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ms-5">
							<a class="nav-item nav-link" href="/">HOME</a>
							<a class="nav-item nav-link active" href="/patient">PATIENT</a>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Patient First Name</th>
                                    <th scope="col">Patient Last Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Country</th>
                                    <th scope="col" colspan="4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cardio AS $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->patient->first_name}}</td>
                                    <td>{{$item->patient->last_name}}</td>
                                    <td>{{$item->patient->phone}}</td>
                                    <td>{{$item->patient->email}}</td>
                                    <td>{{$item->patient->address_line_1}}</td>
                                    <td>{{$item->patient->city}}</td>
                                    <td>{{$item->patient->country}}</td>
                                    <td>
                                        <a href="{{ url('cardiometabolic_report/show_report/'.$item->id) }}" class="btn btn-sm btn-block btn-primary">Show</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('cardiometabolic_report.edit',$item->id) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('cardiometabolic_report.destroy',$item->id) }}" method="Post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    
                                   
                                    <td>
                                    <a href="{{ route('cardiometabolic_report.download-pdf', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">Download</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
</body>
</html>