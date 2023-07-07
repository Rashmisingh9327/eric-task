<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Well Life Jobs') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		jQuery(document).ready(function() {
            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			jQuery(document).on('change', '#user_select', function() {
				var userID = $(this).find(":selected").val();

				$.ajax({
					type: "GET",
					url: "/patient/" + userID,
					success: function (result) {
						if (result) {
							// Populate the Inputs
							var userGender = result.patient.gender;
							var userBirthday = result.patient.birthday;
							var userHeight = result.patient.height;
							var userHeightUnit = result.patient.height_unit;
							var userWeight = result.patient.weight;
							var userWeightUnit = result.patient.weight_unit;
							var userEthnicity = result.patient.ethnicity;
							var userDiabetes = result.patient.diabetes;
							var userSmoke = result.patient.smoke;
							var userFhhx = result.patient.fhhx;
							var userLipid = result.patient.lipid;
							var userHtnmed = result.patient.htnmed;

							jQuery('select[name="gender"]').val(userGender);
							jQuery('input[name="birthday"]').val(userBirthday);
							jQuery('input[name="height"]').val(userHeight);
							jQuery('select[name="height_unit"]').val(userHeightUnit);
							jQuery('input[name="weight"]').val(userWeight);
							jQuery('select[name="weight_unit"]').val(userWeightUnit);
							jQuery('select[name="ethnicity"]').val(userEthnicity);
							jQuery('select[name="diabetes"]').val(userDiabetes);
							jQuery('select[name="smoke"]').val(userSmoke);
							jQuery('select[name="fhhx"]').val(userFhhx);
							jQuery('select[name="lipid"]').val(userLipid);
							jQuery('select[name="htnmed"]').val(userHtnmed);
						} else {
							alert("Failed!");
						}
					}
				});
			});

			// var data = [];
            // // jQuery("#get").click(function(){
            //     var title = jQuery("#repeatDiv").val();
            //     jQuery(".data").each(function(){
            //         var region = jQuery(this).find(".region").val();
            //         var bmd = jQuery(this).find(".bmd").val();
            //         let person = {"region":region,"bmd":bmd};
            //         data.push(person);
            //     });
            //     let formData = {"title": title, "data":data};
            //     console.log(person);
            // // });

            // jQuery(document).on('click', '#postbtn', function() {
            //     var patient_id = $("#user_select").val();
            //     var gender = $("#gender").val();
            //     var birthday = $("#birthday").val();
            //     var height = $("#height").val();
            //     var height_unit = $("#height_unit").val();
            //     var weight = $("#weight").val();
            //     var weight_unit = $("#weight_unit").val();
            //
            //     $.ajax({
            //         url: "/report-store",
            //         type: "POST",
            //         data: {
            //             patient_id: patient_id,
            //             gender: gender,
            //             birthday: birthday,
            //             height: height,
            //             height_unit: height_unit,
            //             weight: weight,
            //             weight_unit: weight_unit
            //         },
            //         success: function(result){
            //             console.log(result);
            //         }
            //     });
            // });
		});
	</script>
</head>
<body>
	<div class="container">
		<!-- <div class="row nav-col">
			<div class="col-lg-10">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ms-5">
							<a class="nav-item nav-link active" href="/">HOME</a>
							<a class="nav-item nav-link" href="/patient">PATIENT</a>
							<a class="nav-item nav-link" href="/all_reports">All Report</a>
						</div>
					</div>
				</nav>
			</div>
		</div> -->

		<div class="row report-col">
			<div class="col-lg-10 mt-2">
				<form class="form-inline" method="POST" action="{{ route('report.store') }}">
					@csrf
					<div class="card mt-5">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="patient">Patient: <span style="color: red">*</span></label>
										<select class="form-control" name="patient_id" id="user_select" required >
											<option value=""></option>
											@foreach ($patients AS $patient)
												<option value="{{ $patient->id}}">{{ $patient->first_name. ' '.$patient->last_name}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">Gender: <span style="color: red">*</span></label>
										<select class="form-control" name="gender"  id="gender" required>
											<option value=""></option>
											<option value="Male" >Male</option>
											<option value="Female" >Female</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Date of Birth: <span style="color: red">*</span></label>
										<input type="date" class="form-control" name="birthday" id="birthday" readonly />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Height: <span style="color: red">*</span></label>
										<input type="number" class="form-control" name="height" id="height" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Unit: <span style="color: red">*</span></label>
										<select class="form-control" name="height_unit" id="height_unit" required>
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
										<label for="cac">Weight: <span style="color: red">*</span></label>
										<input type="number" class="form-control" name="weight" id="weight" placeholder="" step="0.01" value="" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="weight_unit">Unit: <span style="color: red">*</span></label>
										<select class="form-control" name="weight_unit" id="weight_unit" required>
											<option value="kg">kg</option>
											<option value="g">g</option>
											<option value="lbs">lbs</option>
										</select>
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="ethnicity">Race / Ethnicity:</label>
										<select class="form-control" name="ethnicity" id="ethnicity" required >
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
										<select class="form-control" name="diabetes" >
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
										<select class="form-control" name="smoke" >
											<option value=""></option>
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="fhhx">Family History of Heart Attack:</label>
										<select class="form-control" name="fhhx" >
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
										<label for="lipid">Lipid Lowering Medication:</label>
										<select class="form-control" name="lipid" >
											<option value=""></option>
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="htnmed">On Hypertension Med:</label>
										<select class="form-control" name="htnmed" >
											<option value=""></option>
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Cardiovascular</b>
									<br />
								</div>
							</div>
							<div class="row">
								<p><b>Current Systolic Blood Pressure:</b></p>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="24_hr_bp_average">24 HR BP Average SBP</label>
										<input type="number" class="form-control" name="24_hr_bp_average" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="24_hr_bp_average">24 HR BP Average DBP</label>
										<input type="number" class="form-control" name="24_hr_bp_average_dbp" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Vo2max</label>
										<input type="number" class="form-control" name="vo_2_max" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="max_pulse_wave">Max Pulse Wave Form</label>
										<!-- <input type="number" class="form-control" name="max_pulse_wave" placeholder="" step="0.01" value=""  /> -->
										<select class="form-control" name="max_pulse_wave" id="">
											<option value=""></option>
											<option value="Wave Type-1">Wave Type-1</option>
											<option value="Wave Type-2">Wave Type-2</option>
											<option value="Wave Type-3">Wave Type-3</option>
											<option value="Wave Type-4">Wave Type-4</option>
											<option value="Wave Type-5">Wave Type-5</option>
											<option value="Wave Type-6">Wave Type-6</option>
											<option value="Wave Type-7">Wave Type-7</option>
										</select>
									</div>
								</div>
								<!-- <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Systolic Blood Pressure:</label>
										<input type="number" class="form-control" name="sbp" placeholder="" step="0.001" value=""  />
									</div>
								</div> -->
							</div>
							<div class="row">
								<div class="col-lg-6">

									<div class="form-group mb-3">

										<label for="cac">PWV (m/s):</label>

										<input type="number" class="form-control" name="pwv" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="pr_interval">PR Interval (msec)</label>
										<input type="number" class="form-control" name="pr_interval" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">HRV</label>
										<input type="number" class="form-control" name="hrv" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<hr/>
							<br/>
							<div class="row">
								<div class="col-lg-12">
									<b>Musculoskeletal</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Right hand Grip Strength:</label>
										<input type="number" class="form-control" name="right_hand_est_grip_strength" placeholder="" step="0.0000000001" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="tanita_metabolic_age">Tanita Metabolic Age</label>
										<input type="number" class="form-control" name="tanita_metabolic_age" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bf_percent">BF%</label>
										<input type="number" class="form-control" name="bf_percent" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">BBT Result</label>
										<input type="number" class="form-control" name="bbt_result" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Pulmonary</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">FEV1:</label>
										<input type="number" class="form-control" name="fev_1" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Neurological</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="psychomotor_speed">Psychomotor Speed</label>
										<input type="number" class="form-control" name="psychomotor_speed" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Labs</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Total Cholesterol (mg/dL):</label>
										<input type="number" class="form-control" name="chol" placeholder="" step="1" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HDL Cholesterol (mg/dL):</label>
										<input type="number" class="form-control" name="hdl" placeholder="" step="1" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Albumin - Liver (g/dL):</label>
										<input type="number" class="form-control" name="albumin_liver" placeholder="" step=".01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Alp - Liver ( U/L):</label>
										<input type="number" class="form-control" name="alp_liver" placeholder="" step="1" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Creatinine - Kidney (mg/dL):</label>
										<input type="number" class="form-control" name="creatinine_kidney" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Overnight Fasting Glucose - Pancreas (mg/dL):</label>
										<input type="number" class="form-control" name="glucose_pancreas" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">CRP - Immune (mg/L):</label>
										<input type="number" class="form-control" name="crp_immune" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Lymphocyte (% of total WBCs) - Immune:</label>
										<input type="number" class="form-control" name="lympho_immune" placeholder="" step="1" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">MCV - Bone marrow (fL):</label>
										<input type="number" class="form-control" name="mcv_bone_marrow" placeholder="" step=".01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">RDW - Bone marrow (%):</label>
										<input type="number" class="form-control" name="rdw_bone_marrow" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="trudiagnostic_truage">TruDiagnostic TruAge</label>
										<input type="number" class="form-control" name="trudiagnostic_truage" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Imaging</b>
									<br />
								</div>
							</div>
							<div class="row repeatDiv" id="repeatDiv">
								<div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="email">Region:</label>
                                        <select class="form-control" name="regions[]" class="region">
                                            <option value=""></option>
                                            <option value="Spine L1-L4">Spine L1-L4</option>
                                            <option value="Femur Neck">Femur Neck</option>
                                            <option value="Total Femur">Total Femur</option>
                                            <option value="Total Body Basic">Total Body Basic</option>
                                            <option value="Total Body Advanced">Total Body Advanced</option>
                                            <option value="33% Radius">33% Radius</option>
                                            <option value="Radius Total">Radius Total</option>
                                            <option value="Radius Ultradistal">Radius Ultradistal</option>
                                            <option value="Lateral Spine">Lateral Spine</option>
                                        </select>
                                    </div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">BMD:</label>
										<input type="number" class="form-control" name="bmds[]" class="bmd" placeholder="" step="0.001" value=""  />
									</div>
								</div>
							</div>
							<button type="button" class="btn btn-secondary mt-1" id="repeatDivBtn" data-increment="1">Add More Input</button>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Agatston Calcium Score (CAC):</label>
										<input type="number" class="form-control" name="cac" placeholder="" step="1" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="imt">IMT (µm)</label>
										<input type="number" class="form-control" name="imt" placeholder="" step="0.01" value=""  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="left_breast_thermography">Left Breast Thermography Rating</label>
										<select class="form-control" name="left_breast_thermography">
											<option value=""></option>
											<option value="TH-1">TH-1</option>
											<option value="TH-2">TH-2</option>
											<option value="TH-3">TH-3</option>
											<option value="TH-4">TH-4</option>
											<option value="TH-5">TH-5</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="right_breast_thermography">Right Breast Thermography Rating</label>
										<select class="form-control" name="right_breast_thermography">
											<option value=""></option>
											<option value="TH-1">TH-1</option>
											<option value="TH-2">TH-2</option>
											<option value="TH-3">TH-3</option>
											<option value="TH-4">TH-4</option>
											<option value="TH-5">TH-5</option>
										</select>
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Other Inputs</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="skin_age">Skin Age</label>
										<input type="number" class="form-control" name="skin_age" placeholder="" step="0.01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">Sleep AHI</label>
											<input type="number" class="form-control" name="sleep_ahi" placeholder="" step="0.01" value=""  />
										</div>
									</div>
								</div>
							</div>
							@if (\Session::has('error'))
								<br />
								<div class="alert alert-danger mt-3 mb-0" role="alert" style="width: 505px">
									{!! \Session::get('error') !!}
								</div>
							@endif
						<div class="card-footer">
							<div class="form-group">
								<input id="postbtn" type="submit" value="Enter" class="btn btn-block btn-primary">
							</div>
						</div>
					</div>
				</form>
				<br />
				<div class="accordion" id="accordion_reports">
					@foreach ($cardio AS $report)
						<div class="accordion-item">
							<h2 class="accordion-header" id="accordion_heading_{{ $report->id }}">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#report_{{ $report->id }}" aria-expanded="false" aria-controls="collapse_{{ $report->id }}">
									Report #{{ $report->id }}
								</button>
							</h2>
							<div id="report_{{ $report->id }}" class="accordion-collapse collapse" aria-labelledby="heading_{{ $report->id }}" data-bs-parent="#accordion_reports">
								<div class="accordion-body">
									<div class="card mt-3" id="responsive">
										<div class="card-header">
										</div>
										<div class="card-body">
											<h5><b>Patient Details</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Gender</td><td>{{ $report->gender }}</td></tr>
												<tr><td>Age</td><td>{{ $report->age }}</td></tr>
												<tr><td>Race / Ethnicity</td><td>{{ $report->ethnicity }}</td></tr>
												<tr><td>Diabetes</td><td>{{ $report->diabetes }}</td></tr>
												<tr><td>Smoke</td><td>{{ $report->smoke }}</td></tr>
												<tr><td>Family History of Heart Attack</td><td>{{ $report->fhhx }}</td></tr>
												<tr><td>Total Cholesterol (mg/dL)</td><td>{{ $report->chol }}</td></tr>
												<tr><td>HDL Cholesterol (mg/dL)</td><td>{{ $report->hdl }}</td></tr>
												<tr><td>Systolic Blood Pressure</td><td>{{ $report->sbp }}</td></tr>
												<tr><td>Lipid Lowering Medication</td><td>{{ $report->lipid }}</td></tr>
												<tr><td>On Hypertension Med</td><td>{{ $report->htnmed }}</td></tr>
												<tr><td>Agatston Calcium Score (CAC)</td><td>{{ $report->cac }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>CAC Risk Score:</b> {{ $report->cac_riskscore }}
														<br />
														<b>No CAC Risk Score:</b> {{ $report->nocac_riskscore }}
													</td>
												</tr>
											</table>
											
											<br />
											<h5><b>Lung Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Gender</td><td>{{ $report->gender }}</td></tr>
												<tr><td>Height in cm</td><td>{{ $report->height }}</td></tr>
												<tr><td>FEV 1</td><td>{{ $report->fev_1 }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Lung Age:</b> {{ $report->equivalent_age_for_lung }}
													</td>
												</tr>
											</table>
											<br />
											<h5><b>Phenotypic Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Albumin (Liver)</td><td>{{ $report->albumin_liver }}</td></tr>
												<tr><td>Alp (Liver)</td><td>{{ $report->alp_liver }}</td></tr>
												<tr><td>Creatinine (Kidney)</td><td>{{ $report->creatinine_kidney }}</td></tr>
												<tr><td>Overnight Fasting Glucose (Pancreas)</td><td>{{ $report->glucose_pancreas }}</td></tr>
												<tr><td>CRP (Immune)</td><td>{{ $report->crp_immune }}</td></tr>
												<tr><td>Lymphocyte % (of total WBCs) (Immune)</td><td>{{ $report->lympho_immune }}</td></tr>
												<tr><td>WBC total (Immune)</td><td>{{ $report->wbc_immune }}</td></tr>
												<tr><td>MCV (Bone marrow)</td><td>{{ $report->mcv_bone_marrow }}</td></tr>
												<tr><td>RDW (Bone marrow)</td><td>{{ $report->rdw_bone_marrow }}</td></tr>
												<tr><td>Age</td><td>{{ $report->age }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Biological Age:</b> {{ $report->biological_age }}
														<br />
														<b>Chance of dying in next 10 years:</b> {{ $report->chances_of_dying }}
													</td>
												</tr>
											</table>
											<!-- <br />
											<h5><b>Vascular Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">PWV (m/s)</td><td>{{ $report->pwv }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Vascular Age:</b> {{ $report->vascular_age }}
													</td>
												</tr>
											</table> -->
											<!-- <br />
											<h5><b>Vascular Age 2</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">IMT (µm)</td><td>{{ $report->imt }} <b>µm</b></td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Vascular Age 2:</b> {{ $report->vascular_age_2 }} <br>
														<b>Percentile:</b> {{ $report->percentile }}
													</td>
												</tr>
											</table> -->
											<!-- <br />
											<h5><b>Balance Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Age</td><td>{{ $report->age }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Balance Age:</b> {{ $report->balance_age }}
													</td>
												</tr>
											</table> -->
											<!-- <br />
											<h5><b>ECG Heart Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">PR Interval</td><td>{{ $report->pr_interval }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>ECG Heart Age:</b> {{ $report->ekg_heart_age }}
													</td>
												</tr>
											</table> -->
											<br />
											<h5><b>Heart Ages</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%"><b>Heart Age</b></td></tr>
												<tr><td width="50%">HRV</td><td>{{ $report->hrv }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Heart Age:</b> {{ $report->heart_age }}
													</td>
												</tr>
												<tr><td width="50%"><b>ECG Heart Age</b></td></tr>
												<tr><td width="50%">PR Interval</td><td>{{ $report->pr_interval }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>ECG Heart Age:</b> {{ $report->ekg_heart_age }}
													</td>
												</tr>
												<tr><td width="50%"><b>Vascular Age</b></td></tr>
												<tr><td width="50%">PWV (m/s)</td><td>{{ $report->pwv }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Vascular Age:</b> {{ $report->vascular_age }}
													</td>
												</tr>
												<tr><td width="50%"><b>Vascular Age 2</b></td></tr>
												<tr><td width="50%">IMT (µm)</td><td>{{ $report->imt }} <b>µm</b></td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Vascular Age 2:</b> {{ $report->vascular_age_2 }} <br>
														<b>Percentile:</b> {{ $report->percentile }}
													</td>
												</tr>
												<tr><td width="50%"><b>Arterial Age</b></td></tr>
												<tr><td width="50%">Agatston Calcium Score (CAC)</td><td>{{ $report->cac }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Arterial Age:</b> {{ $report->arterial_age }}
													</td>
												</tr>
												<tr>
													<td><b>Heart Age Average</b></td>
													<td>
														<b>Output:</b> {{ $report->heart_age_average }}
													</td>
												</tr>
											</table>
											<!-- <br />
											<h5><b>Heart Age Average</b></h5>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Heart Age Average:</b> {{ $report->heart_age_average }}
													</td>
												</tr>
											</table> -->
											<br />
											<h5><b>Musculoskeletal Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%"><b>BMD</b></td></tr>
												<tr><td width="50%">Age</td><td>{{ $report->age }}</td></tr>


												<tr><td>BMD</td><td>												
													<?php if (!empty($report->bmd)) 
												{
												foreach ($report->bmd as $bmd) 
													{
														echo "BMD: " . $bmd . "<br>";
												}
											}?>
											</td></tr>
												
												
												<tr><td>Gender</td><td>{{ $report->gender }}</td></tr>
												<tr><td>Region</td><td><?php if (!empty($report->region)) 
												{
												foreach ($report->region as $region) 
													{
														echo "Region: " . $region . "<br>";
												}
											}?></td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Expected BMD:</b> {{ $report->expected_bmd }}
														<br />
														<b>Equivalent Age:</b> {{ $report->equivalent_age }}
													</td>
												</tr>
												<tr><td width="50%"><b>Grip Strength</b></td></tr>
												<tr><td width="50%">Right hand Grip Strength</td><td>{{ $report->right_hand_est_grip_strength }}</td></tr>
												<tr><td>Height in cm</td><td>{{ $report->height }}</td></tr>
												<tr><td>Weight kg</td><td>{{ $report->weight }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Equivalent Age:</b> {{ $report->equivalent_age_for_grip_strength }}
													</td>
												</tr>
												<tr><td width="50%"><b>Balance Age</b></td></tr>
												<tr><td width="50%">Age</td><td>{{ $report->age }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Balance Age:</b> {{ $report->balance_age }}
													</td>
												</tr>
												<tr><td width="50%"><b>Musculoskeletal Age</b></td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Musculoskeletal Age:</b> {{ $report->musculoskeletal_age }}
													</td>
												</tr>
											</table>
											<br />
											<h5><b>Brain Age</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Psychomotor Speed on CNSVS</td><td>{{ $report->psychomotor_speed }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Brain Age:</b> {{ $report->brain_age }}
													</td>
												</tr>
											</table>
											<br />
											<h5><b>Skin Age</b></h5>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Skin Age:</b> {{ $report->skin_age }}
													</td>
												</tr>
											</table>
											<br />
											<h5><b>Lab Age</b></h5>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Lab Age:</b> {{ $report->lab_age }}
													</td>
												</tr>
											</table>
											<br />
											<h5><b>Bio Age</b></h5>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Bio Age:</b> {{ $report->bio_age }}
													</td>
												</tr>

											</table>
                                            <tr> <a href="{{ route('reports.download-pdf', ['id' => $report->id]) }}" class="btn btn-primary">Download Report PDF</a></tr>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<br />
			</div>
		</div>
	</div>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    function downloadTableData(tableId) {
        // Get table data
        var table = document.getElementById(tableId);
        var data = [];
        for (var i = 0; i < table.rows.length; i++) {
            var rowData = [];
            for (var j = 0; j < table.rows[i].cells.length; j++) {
                rowData.push(table.rows[i].cells[j].textContent);
            }
            data.push(rowData.join('\t'));
        }

        // Generate file content
        var content = data.join('\n');

        // Create a Blob object
        var blob = new Blob([content], { type: 'text/plain' });

        // Create a download link
        var link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'table_data.txt';

        // Append the link to the document and trigger the download
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>

   <script>
        $(document).ready(function() {
            $('#generate-pdf-btn').click(function() {
                $.ajax({
                    url: '/pdf',
                    method: 'GET',
                    success: function() {
                        alert('PDF generated successfully!');
                    },
                    error: function() {
                        alert('PDF generation failed!');
                    }
                });
            });
        });
    </script>

    <!-- <script type="text/javascript" src="script.js"></script> -->
</body>
</html>
