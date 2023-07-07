<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name', 'Well Life Jobs') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-1">

			</div>
			<div class="col-lg-10">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ms-5">
							<a class="nav-item nav-link" href="/">Home</a>
							<a class="nav-item nav-link" href="/patient">Patients</a>
							<a class="nav-item nav-link active" href="/createpatient">Add Patient</a>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-1">

            </div>
			<div class="col-lg-10">
				<form class="form-inline" method="POST" action="{{ route('patient.store') }}">
					@csrf
					<div class="card mt-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">First Name: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="first_name" placeholder="" required />
									</div>
								</div>	
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Last Name: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="last_name" placeholder="" required />
									</div>
								</div>						
							</div>
                            <div class="row">
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Contact Number: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="phone" placeholder="" required />
									</div>
								</div>	
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Email Address: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="email" placeholder="" required />
									</div>
								</div>						
							</div>
                            <hr/>
                            <br/>
                            <div class="row">
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Address Line 1: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="address_line_1" placeholder="" required />
									</div>
								</div>	
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Address Line 2: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="address_line_2" placeholder="" required />
									</div>
								</div>						
							</div>
                            <div class="row">
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">City: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="city" placeholder="" required />
									</div>
								</div>	
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Province: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="province" placeholder="" required />
									</div>
								</div>						
							</div>
                            <div class="row">
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Country: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="country" placeholder="" required />
									</div>
								</div>	
                                <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Zip: <span style="color: red"></span></label>
										<input type="text" class="form-control" name="zip" placeholder="" required />
									</div>
								</div>						
							</div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <input type="submit" value="Post" class="btn btn-block btn-primary">
                                </div>						
						    </div>
                        </div>
                    </div>
				</form>
			</div>
			<div class="col-lg-1">

            </div>
		</div>
	</div>
</body>
</html>