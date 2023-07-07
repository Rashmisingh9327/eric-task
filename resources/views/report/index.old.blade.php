<!doctype html>
<html>
<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-lg-1">
				
            </div>
			<div class="col-lg-10">
				<form class="form-inline" method="POST" action="{{ route('report.store') }}">
					@csrf
					<div class="card mt-5">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">Gender:</label>
										<select class="form-control" name="gender" required>
											<option value=""></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">Date of Birth:</label>
										<input type="text" class="form-control" name="birthday" placeholder="YYYY-MM-DD" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">Region:</label>
										<select class="form-control" name="region" required>
											<option value=""></option>
											<option value="Spine L1-L4">Spine L1-L4</option>
											<option value="Femur Neck">Femur Neck</option>
											<option value="Total Femur">Total Femur</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">BMD:</label>
										<input type="number" class="form-control" name="bmd" placeholder="" step="0.001" value="" required />
									</div>
								</div>								
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Agatston Calcium Score (CAC):</label>
										<input type="number" class="form-control" name="cac" placeholder="" step="1" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Systolic Blood Pressure:</label>
										<input type="number" class="form-control" name="sbp" placeholder="" step="0.001" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="ethnicity">Race / Ethnicity:</label>
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
										<label for="diabetes">Diabetes:</label>
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
										<label for="smoke">Currently Smoke:</label>
										<select class="form-control" name="smoke" required>
											<option value=""></option>
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="fhhx">Family History of Heart Attack:</label>
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
										<label for="cac">Total Cholesterol (mg/dL):</label>
										<input type="number" class="form-control" name="chol" placeholder="" step="1" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HDL Cholesterol (mg/dL):</label>
										<input type="number" class="form-control" name="hdl" placeholder="" step="1" value="" required />
									</div>
								</div>
							</div>						
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="lipid">Lipid Lowering Medication:</label>
										<select class="form-control" name="lipid" required>
											<option value=""></option>
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="htnmed">On Hypertension Med:</label>
										<select class="form-control" name="htnmed" required>
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
										<label for="cac">Height in cm:</label>
										<input type="number" class="form-control" name="height" placeholder="" step="0.01" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Weight kg:</label>
										<input type="number" class="form-control" name="weight" placeholder="" step="0.01" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Right hand Grip Strength:</label>
										<input type="number" class="form-control" name="right_hand_est_grip_strength" placeholder="" step="0.0000000001" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">FEV1:</label>
										<input type="number" class="form-control" name="fev_1" placeholder="" step="0.01" value="" required />
									</div>
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Albumin (Liver):</label>
										<input type="number" class="form-control" name="albumin_liver" placeholder="" step="1" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Alp (Liver):</label>
										<input type="number" class="form-control" name="alp_liver" placeholder="" step="1" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Creatinine (Kidney):</label>
										<input type="number" class="form-control" name="creatinine_kidney" placeholder="" step="1" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Overnight Fasting Glucose (Pancreas):</label>
										<input type="number" class="form-control" name="glucose_pancreas" placeholder="" step="0.01" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">CRP (Immune):</label>
										<input type="number" class="form-control" name="crp_immune" placeholder="" step="0.01" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac"> Lymphocyte % (of total WBCs) (Immune):</label>
										<input type="number" class="form-control" name="lympho_immune" placeholder="" step="1" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">WBC total (Immune):</label>
										<input type="number" class="form-control" name="wbc_immune" placeholder="" step="0.01" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">MCV (Bone marrow):</label>
										<input type="number" class="form-control" name="mcv_bone_marrow" placeholder="" step="1" value="" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">RDW (Bone marrow):</label>
										<input type="number" class="form-control" name="rdw_bone_marrow" placeholder="" step="0.01" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Age:</label>
										<input type="number" class="form-control" name="age" placeholder="" step="1" value="" required />
									</div>
								</div>
							</div>
							@if (\Session::has('error'))
								<br />
								<div class="alert alert-danger mt-3 mb-0" role="alert" style="width: 505px">
									{!! \Session::get('error') !!}
								</div>
							@endif
						</div>
						<div class="card-footer">
							<div class="form-group">
								<input type="submit" value="Enter" class="btn btn-block btn-primary">
							</div>						
						</div>
					</div>
				</form>
				<div class="card mt-3">
					<div class="card-body">					
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col" style="background: #d7e8ff;"></th>
									<th scope="col" style="background: #fff4d8;">CAC (Arterial)</th>
									<th scope="col" style="background: #ffc8c8;">Risk Score</th>
									<th scope="col" style="background: #d8ffe2;">Grip Strength (Right)</th>
									<th scope="col" style="background: #d4d4d4;">Lung Age</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($reports AS $report)
									<tr>
										<td>
											Gender: {{ $report->gender }}
											<br />
											Birthday: {{ $report->birthday }}
										</td>
										<td>
											Region: {{ $report->region }}
											<br />
											BMD: {{ $report->bmd }}
											<br />
											Expected BMD: {{ $report->expected_bmd }}
											<br />
											Equivalent Age: {{ $report->equivalent_age }}
										</td>
										<td>
											{{ $report->cac }}
											<br />
											Age: {{ $report->arterial_age }}
										</td>
										<td>
											CAC Score: {{ $report->cac_riskscore }}
											<br />
											No CAC Score: {{ $report->nocac_riskscore }}
										</td>
										<td>
											{{ $report->right_hand_est_grip_strength }}
											<br />
											Equivalent Age: {{ $report->equivalent_age_for_grip_strength }}
										</td>
										<td>
											FEV1: {{ $report->fev_1 }}
											<br />
											Equivalent Age: {{ $report->equivalent_age_for_lung }}
										</td>										
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>			
			<div class="col-lg-1">

            </div>
		</div>
	</div>
</body>
</html>