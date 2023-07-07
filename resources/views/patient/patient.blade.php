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

        <div class="row">
            <div class="col-lg-10 mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary modal-btn" data-toggle="modal" data-target="#exampleModal">
                    + NEW
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content patient-modal">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ADD PATIENT</h5>
                                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-inline" method="POST" action="{{ route('patient.store') }}">
                                        @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">First Name: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="first_name" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Last Name: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="last_name" placeholder="" required />
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Contact Number: <span style="color: red">*</span></label>
                                                            <input type="tel" class="form-control" name="phone" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Email Address: <span style="color: red">*</span></label>
                                                            <input type="email" class="form-control" name="email" placeholder="" required />
                                                        </div>
                                                    </div>						
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="gender">Gender: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="gender" required>
                                                                <option value=""></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="age">Birthday: <span style="color: red">*</span></label>
                                                            <input type="date" class="form-control" name="birthday" placeholder="" required />
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="height">Height: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="height" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="height_unit">Unit: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="height_unit" required>
                                                                <option value=""></option>
                                                                <option value="ft">ft</option>
                                                                <option value="cm">cm</option>
                                                                <option value="m">m</option>
                                                                <option value="inch">inch</option>
                                                            </select>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="weight">Weight: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="weight" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="weight_unit">Unit: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="weight_unit" required>
                                                                <option value=""></option>
                                                                <option value="kg">kg</option>
                                                                <option value="g">g</option>
                                                                <option value="lbs">lbs</option>
                                                            </select>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Address Line 1: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="address_line_1" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Address Line 2: </label>
                                                            <input type="text" class="form-control" name="address_line_2" placeholder=""  />
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">City: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="city" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Province: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="province" placeholder="" required />
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Country: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="country" placeholder="" required />
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Zip: <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" name="zip" placeholder="" required />
                                                        </div>
                                                    </div>						
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Race/Ethnicity: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="ethnicity" required>
                                                                <option value=""></option>
                                                                <option value="1">Caucasian</option>
                                                                <option value="2">Chinese</option>
                                                                <option value="3">African American</option>
                                                                <option value="4">Hispanic</option>
                                                            </select>
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cac">Diabetes: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="diabetes" required>
                                                                <option value=""></option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="smoke">Currently Smoke: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="smoke" required>
                                                                <option value=""></option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="fhhx">Family History of Heart Attack: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="fhhx" required>
                                                                <option value=""></option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="lipid">Lipid Lowering Medication: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="lipid" required>
                                                                <option value=""></option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>	
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label for="htnmed">On Hypertension Medication: <span style="color: red">*</span></label>
                                                            <select class="form-control" name="htnmed" required>
                                                                <option value=""></option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>						
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col-lg-6 modal-save">
                                                        <button type="type" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input type="submit" value="Save" class="btn btn-primary"></button>
                                                    </div>						
                                                </div> -->
                                                <div class="modal-footer">
                                                    <button type="type" class="btn btn-secondary modal-close-btn" data-dismiss="modal">Close</button>
                                                    <input type="submit" value="Save" class="btn btn-primary modal-save-btn"></button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
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
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address Line 1</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients AS $patient)
                                <tr>
                                    <th scope="row">{{$patient->id}}</th>
                                    <td>{{$patient->first_name}}</td>
                                    <td>{{$patient->last_name}}</td>
                                    <td>{{$patient->phone}}</td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{$patient->address_line_1}}</td>
                                    <td>{{$patient->city}}</td>
                                    <td>{{$patient->country}}</td>
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