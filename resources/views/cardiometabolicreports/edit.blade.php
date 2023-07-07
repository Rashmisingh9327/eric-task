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
		<div class="row nav-col">
			<div class="col-lg-10">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav ms-5">
							<a class="nav-item nav-link" href="/">HOME</a>
							<a class="nav-item nav-link" href="/patient">PATIENT</a>
							<a class="nav-item nav-link active" href="/all_reports">All Report</a>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="row report-col">
			<div class="col-lg-10 mt-2">
            @foreach ($cardio AS $report)
				<form class="form-inline" method="POST" action="{{ route('cardiometabolic_report.update',$report->id) }}">
                    @method('PATCH')
					@csrf
					<div class="card mt-5">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="patient">Patient: <span style="color: red">*</span></label>
										<select class="form-control" name="patient_id" id="user_select" readonly >
												<option value="{{ $report->patient->id}}" readonly>{{ $report->patient->first_name. ' '.$report->patient->last_name}}</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="email">Gender: <span style="color: red">*</span></label>
										<select class="form-control" name="gender"  id="gender" readonly>
											<option value="{{ $report->patient->gender}}" >{{ $report->patient->gender}}</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Date of Birth: <span style="color: red">*</span></label>
										<input type="date" class="form-control" name="birthday" id="birthday" value="{{ $report->patient->birthday}}" readonly />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Height: <span style="color: red">*</span></label>
										<input type="number" class="form-control" name="height" id="height" value="{{ $report->patient->height}}" readonly />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Unit: <span style="color: red">*</span></label>
										<select class="form-control" name="height_unit" id="height_unit" readonly>
											<option value="{{ $report->patient->height_unit}}">{{ $report->patient->height_unit}}</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Weight: <span style="color: red">*</span></label>
										<input type="number" class="form-control" name="weight" id="weight" placeholder="" step="0.01" value="{{ $report->patient->weight}}" readonly />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="weight_unit">Unit: <span style="color: red">*</span></label>
										<select class="form-control" name="weight_unit" id="weight_unit" required>
											<option value="{{ $report->patient->weight_unit}}">{{ $report->patient->weight_unit}}</option>
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
										<select class="form-control" name="ethnicity" id="ethnicity" readonly >
											<option value="{{ $report->patient->ethnicity}}">{{ $report->patient->ethnicity}}</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="diabetes">Diabetes:</label>
										<select class="form-control" name="diabetes" readonly>
											<option value="{{ $report->patient->diabetes}}">{{ $report->patient->diabetes}}</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="smoke">Currently Smoke:</label>
										<select class="form-control" name="smoke" readonly>
											<option value="{{ $report->patient->smoke}}">{{ $report->patient->smoke}}</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="fhhx">Family History of Heart Attack:</label>
										<select class="form-control" name="fhhx"readonly>
											<option value="{{ $report->patient->fhhx}}">{{ $report->patient->fhhx}}</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="lipid">Lipid Lowering Medication:</label>
										<select class="form-control" name="lipid" readonly>
											<option value="{{ $report->patient->lipid}}">{{ $report->patient->lipid}}</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="htnmed">On Hypertension Med:</label>
										<select class="form-control" name="htnmed" readonly>
											<option value="{{ $report->patient->htnmed}}">{{ $report->patient->htnmed}}</option>
										</select>
									</div>
								</div>
							</div>
							<hr />
							<br />


							<div class="row">
								<div class="col-lg-12">
									<b>INFLAMMATION</b>
									<br />
								</div>
							</div>
							<div class="row">
								<!-- <p><b>Current Systolic Blood Pressure:</b></p> -->
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="24_hr_bp_average">hs-CRP</label>
										<input type="number" class="form-control" name="hs_crp" placeholder="" step="0.01" value="{{ $report->hs_crp }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="24_hr_bp_average">Microalbumin</label>
										<input type="number" class="form-control" name="microalbumin" placeholder="" step="0.01" value="{{ $report->microalbumin }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Creatinine, Urine, Random</label>
										<input type="number" class="form-control" name="creatinine_urine_random" placeholder="" step="0.01" value="{{ $report->creatinine_urine_random }}"  />
									</div>
								</div>
								<!-- <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="max_pulse_wave">Max Pulse Wave Form</label>
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
								</div> -->
							</div>
							<!-- <div class="row">
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
							</div> -->
							<hr/>
							<br/>
							<div class="row">
								<div class="col-lg-12">
									<b>LIPIDS</b>
									<br />
								</div>
							</div>
							<div class="row">
								<p>Lipid Panel</p>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Cholesterol, Total</label>
										<input type="number" class="form-control" name="cholesterol_total" placeholder="" step="0.0000000001" value="{{ $report->cholesterol_total }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="tanita_metabolic_age">HDL Cholesterol</label>
										<input type="number" class="form-control" name="hdl_cholesterol" placeholder="" step="0.01" value="{{ $report->hdl_cholesterol }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bf_percent">Triglycerides</label>
										<input type="number" class="form-control" name="triglycerides" placeholder="" step="0.01" value="{{ $report->triglycerides }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">LDL Cholesterol, Calculated</label>
										<input type="number" class="form-control" name="ldl_cholesterol_calculated" placeholder="" step="0.01" value="{{ $report->ldl_cholesterol_calculated }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">Chol/HDL-C</label>
										<input type="number" class="form-control" name="chol_hdl_c" placeholder="" step="0.01" value="{{ $report->chol_hdl_c }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">Non-HDL Cholesterol</label>
										<input type="number" class="form-control" name="non_hdl_cholesterol" placeholder="" step="0.01" value="{{ $report->non_hdl_cholesterol }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">TG/HDL-C</label>
										<input type="number" class="form-control" name="tg_hdl_hdl_C" placeholder="" step="0.01" value="{{ $report->tg_hdl_hdl_C }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Lipoprotein Fractionation, NMR</b>
									<br />
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Lipoprotein Fractionation, NMR:</label>
										<input type="number" class="form-control" name="lipoprotein_fractionation_nmr" placeholder="" step="0.01" value="{{ $report->lipoprotein_fractionation_nmr }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<!-- <div class="row">
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
							</div> -->
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>METABOLIC</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Glucose:</label>
										<input type="number" class="form-control" name="glucose" placeholder="" step="1" value="{{ $report->glucose }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Insulin:</label>
										<input type="number" class="form-control" name="insulin" placeholder="" step="1" value="{{ $report->insulin }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HbA1c:</label>
										<input type="number" class="form-control" name="hba1c" placeholder="" step=".01" value="{{ $report->hba1c }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Estimated Average Glucose:</label>
										<input type="number" class="form-control" name="estimated_average_glucose" placeholder="" step="1" value="{{ $report->estimated_average_glucose }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>VITAMINS/SUPPLEMENTS</b>
									<br />
								</div>
							</div>
							<div class="row repeatDiv" id="repeatDiv">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Vitamin B12:</label>
										<input type="number" class="form-control" name="vitamin_b12" placeholder="" step=".01" value="{{ $report->vitamin_b12 }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Vitamin D, 25-Hydroxy by LC-MS/(2) MS:</label>
										<input type="number" class="form-control" name="lc_ms" placeholder="" step="1" value="{{ $report->lc_ms }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>FATTY ACIDS</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="skin_age">OmegaCheck®</label>
										<input type="number" class="form-control" name="omegacheck" placeholder="" step="0.01" value="{{ $report->omegacheck }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="sleep_ahi">Arachidonic Acid/EPA Ratio</label>
										<input type="number" class="form-control" name="arachidonic_acid_epa_ratio" placeholder="" step="0.01" value="{{ $report->arachidonic_acid_epa_ratio }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">EPA</label>
											<input type="number" class="form-control" name="epa" placeholder="" step="0.01" value="{{ $report->epa }}"  />
										</div>
								</div>
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">DPA</label>
											<input type="number" class="form-control" name="dpa" placeholder="" step="0.01" value="{{ $report->dpa }}"  />
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">DHA</label>
											<input type="number" class="form-control" name="dha" placeholder="" step="0.01" value="{{ $report->dha }}"  />
										</div>
								</div>
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">Omega-6 total</label>
											<input type="number" class="form-control" name="omega6_total" placeholder="" step="0.01" value="{{ $report->omega6_total }}"  />
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">Arachidonic Acid</label>
											<input type="number" class="form-control" name="arachidonic_acid" placeholder="" step="0.01" value="{{ $report->arachidonic_acid }}"  />
										</div>
								</div>
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">Linoleic Acid</label>
											<input type="number" class="form-control" name="linoleic_acid" placeholder="" step="0.01" value="{{ $report->linoleic_acid }}"  />
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
										<div class="form-group mb-3">
											<label for="sleep_ahi">Omega-3 total</label>
											<input type="number" class="form-control" name="omega3_total" placeholder="" step="0.01" value=""  />
										</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b> HYPERTENSION/HEART FAILURE</b>
									<br />
								</div>
							</div>
							<div class="row repeatDiv" id="repeatDiv">
								<div class="col-lg-12">
									<div class="form-group mb-3">
										<label for="cac">NT-proBNP:</label>
										<input type="number" class="form-control" name="nt_probnp" placeholder="" step=".01" value="{{ $report->nt_probnp }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>GENERAL CHEMISTRY</b>
									<br />
								</div>
							</div>
							<div class="row repeatDiv" id="repeatDiv">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Creatine Kinase:</label>
										<input type="number" class="form-control" name="creatine_kinase" placeholder="" step=".01" value="{{ $report->creatine_kinase }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Uric Acid:</label>
										<input type="number" class="form-control" name="uric_acid" placeholder="" step=".01" value="{{ $report->uric_acid }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>HORMONES</b>
									<br />
								</div>
							</div>
							<div class="row repeatDiv" id="repeatDiv">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">DHEA-S:</label>
										<input type="number" class="form-control" name="dhea_s" placeholder="" step=".01" value="{{ $report->dhea_s }}"  />
									</div>
								</div>
							</div>

							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>THYROID FUNCTION</b>
									<br />
								</div>
							</div>
							<div class="row repeatDiv" id="repeatDiv">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Thyroid Stimulating Hormone:</label>
										<input type="number" class="form-control" name="thyroid_stimulating_hormone" placeholder="" step=".01" value="{{ $report->thyroid_stimulating_hormone }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Thyroxine:</label>
										<input type="number" class="form-control" name="thyroxine" placeholder="" step=".01" value="{{ $report->thyroxine }}"  />
									</div>
								</div>
							</div>


							<!-- other fields start  -->
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Routine Panels</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="24_hr_bp_average">Glucose</label>
										<input type="number" class="form-control" name="glucose" placeholder="" step="0.01" value="{{ $report->glucose }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="24_hr_bp_average">Calcium</label>
										<input type="number" class="form-control" name="calcium" placeholder="" step="0.01" value="{{ $report->calcium }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Sodium</label>
										<input type="number" class="form-control" name="sodium" placeholder="" step="0.01" value="{{ $report->sodium }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Potassium</label>
										<input type="number" class="form-control" name="potassium" placeholder="" step="0.01" value="{{ $report->potassium }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Chloride</label>
										<input type="number" class="form-control" name="chloride" placeholder="" step="0.01" value="{{ $report->chloride }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="pr_interval">CO2 (Carbon Dioxide, Bicarbonate)</label>
										<input type="number" class="form-control" name="co2" placeholder="" step="0.01" value="{{ $report->co2 }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">BUN (Blood Urea Nitrogen)</label>
										<input type="number" class="form-control" name="bun" placeholder="" step="0.01" value="{{ $report->bun }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">BUN/Creatinine Ratio</label>
										<input type="number" class="form-control" name="bun_creatinine_ratio" placeholder="" step="0.01" value="{{ $report->bun_creatine_ratio }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">Protein</label>
										<input type="number" class="form-control" name="protein" placeholder="" step="0.01" value="{{ $report->protine }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">Albumin</label>
										<input type="number" class="form-control" name="albumin" placeholder="" step="0.01" value="{{ $report->albumin }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">Globulin</label>
										<input type="number" class="form-control" name="globulin" placeholder="" step="0.01" value="{{ $report->globulin }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">Albumin/Globulin Ratio</label>
										<input type="number" class="form-control" name="albumin_globulin_ratio" placeholder="" step="0.01" value="{{ $report->albumin_globulin_ratio }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">ALP (Alkaline Phosphatase)</label>
										<input type="number" class="form-control" name="alp" placeholder="" step="0.01" value="{{ $report->alp }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">ALT (Alanine Amino Transferase)</label>
										<input type="number" class="form-control" name="alt" placeholder="" step="0.01" value="{{ $report->alt }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">AST (Aspartate Amino Transferase)</label>
										<input type="number" class="form-control" name="ast" placeholder="" step="0.01" value="{{ $report->ast }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">Bilirubin</label>
										<input type="number" class="form-control" name="bilirubin" placeholder="" step="0.01" value="{{ $report->albumin_globulin_ratioalt }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="hrv">eGFR</label>
										<input type="number" class="form-control" name="egfr" placeholder="" step="0.01" value="{{ $report->egfr }}"  />
									</div>
								</div>
							</div>


							<hr/>
							<br/>
							<div class="row">
								<div class="col-lg-12">
									<b>Testosterone, Free, Total and Bioavailable</b>
									<br />
								</div>
							</div>
							<div class="row">
								<!-- <p>Lipid Panel</p> -->
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Testosterone</label>
										<input type="number" class="form-control" name="testosterone" placeholder="" step="0.0000000001" value="{{ $report->testosterone }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="tanita_metabolic_age">Testosterone, Free</label>
										<input type="number" class="form-control" name="testosterone_free" placeholder="" step="0.01" value="{{ $report->testosterone_free }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bf_percent">Testosterone, % Free</label>
										<input type="number" class="form-control" name="testosterone_free_pt" placeholder="" step="0.01" value="{{ $report->testosterone_free_pt }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">Testosterone, Bioavailable</label>
										<input type="number" class="form-control" name="testosterone_bioavailable" placeholder="" step="0.01" value="{{ $report->testosterone_bioavailable }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="bbt_result">Sex Hormone Binding Globulin</label>
										<input type="number" class="form-control" name="shbg" placeholder="" step="0.01" value="{{ $report->shbg }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>THYROID FUNCTION</b>
									<br />
								</div>
							</div>
							<br>
							<div class="row">
								<p>Thyroid Antibodies</p>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Thyroglobulin Antibodies</label>
										<input type="number" class="form-control" name="thyroglobulin_antibodies" placeholder="" step="0.01" value="{{ $report->thyroglobulin_antibodies }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Thyroid Peroxidase Ab</label>
										<input type="number" class="form-control" name="thyroid_peroxidase_ab" placeholder="" step="0.01" value="{{ $report->thyroid_peroxidase_ab }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>ENZYMES</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="psychomotor_speed">Gamma Glutamyl Transferase (GGT)</label>
										<input type="number" class="form-control" name="ggt" placeholder="" step="0.01" value="{{ $report->ggt }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="psychomotor_speed">LIPASE</label>
										<input type="number" class="form-control" name="lipase" placeholder="" step="0.01" value="{{ $report->lipase }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>ANEMIA/IRON METABOLISM</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Ferritin:</label>
										<input type="number" class="form-control" name="ferritin" placeholder="" step="1" value="{{ $report->ferritin }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Iron:</label>
										<input type="number" class="form-control" name="iron" placeholder="" step="1" value="{{ $report->iron }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">TIBC:</label>
										<input type="number" class="form-control" name="tibc" placeholder="" step=".01" value="{{ $report->tibc }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Transferrin Saturation:</label>
										<input type="number" class="form-control" name="transferrin_saturation" placeholder="" step="1" value="{{ $report->transferrin_saturation }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>TUMOR MARKER</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Prostatic Specific Ag, Total:</label>
										<input type="number" class="form-control" name="prostatic_specific_ag" placeholder="" step=".01" value="{{ $report->prostatic_specific_ag }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>IMMUNE</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">ANA SCREEN, IFA</label>
										<input type="number" class="form-control" name="ana_screen" placeholder="" step=".01" value="{{ $report->ana_screen }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Rheumatoid Factor</b>
									<br />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">RHEUMATOID FACTOR</label>
										<input type="number" class="form-control" name="rheuamatoid_factor" placeholder="" step=".01" value="{{ $report->rheuamatoid_factor }}"  />
									</div>
								</div>
							</div>
							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>VIRUS/INFECTIOUS DISEASE</b>
									<br />
								</div>
							</div>
							<div class="row">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">EBV Early Antigen Antibody,:</label>
										<input type="number" class="form-control" name="antigen_antibody" placeholder="" step=".01" value="{{ $report->antigen_antibody }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">EBV VCA AB (IGM):</label>
										<input type="number" class="form-control" name="ab_igm" placeholder="" step="1" value="{{ $report->ab_igm }}"  />
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">EBV VCA AB (IGG):</label>
										<input type="number" class="form-control" name="ab_igg" placeholder="" step=".01" value="{{ $report->ab_igg }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">(AMD) EBV EBNA AB (IGG):</label>
										<input type="number" class="form-control" name="ebnaabigg" placeholder="" step="1" value="{{ $report->ebnaabigg }}"  />
									</div>
								</div>
							</div>

							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Hepatitis Testing</b>
									<br />
								</div>
							</div>
							<div class="row">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HEPATITIS B CORE AB(AMD):</label>
										<input type="number" class="form-control" name="h_b_core_ab" placeholder="" step=".01" value="{{ $report->h_b_core_ab }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HEPATITIS B SURFACE AG(AMD):</label>
										<input type="number" class="form-control" name="he_b_surface_ag" placeholder="" step="1" value="{{ $report->he_b_surface_ag }}"  />
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HEPATITIS A IGM:</label>
										<input type="number" class="form-control" name="h_a_igm" placeholder="" step=".01" value="{{ $report->h_a_igm }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">HEPATITIS C ANTIBODY:</label>
										<input type="number" class="form-control" name="h_c_antibody" placeholder="" step="1" value="{{ $report->h_c_antibody }}"  />
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">INDEX:</label>
										<input type="number" class="form-control" name="index_1" placeholder="" step=".01" value="{{ $report->index_1 }}"  />
									</div>
								</div>
							</div>

							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>Lyme Disease Antibody with Reflex to Blot (IgG, IgM)</b>
									<br />
								</div>
							</div>
							<div class="row">
							<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">LYME AB SCREEN:</label>
										<input type="number" class="form-control" name="labscreen" placeholder="" step=".01" value="{{ $report->labscreen }}"  />
									</div>
								</div>
							</div>

							<hr />
							<br />
							<div class="row">
								<div class="col-lg-12">
									<b>HEMATOLOGY</b>
									<br />
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">WBC:</label>
										<input type="number" class="form-control" name="wbc" placeholder="" step=".01" value="{{ $report->wbc }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">RBC:</label>
										<input type="number" class="form-control" name="rbc" placeholder="" step=".01" value="{{ $report->rbc }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Hemoglobin:</label>
										<input type="number" class="form-control" name="hemoglobin" placeholder="" step=".01" value="{{ $report->hemoglobin }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Hematocrit:</label>
										<input type="number" class="form-control" name="hematocrit" placeholder="" step=".01" value="{{ $report->hematocrit }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">MCV:</label>
										<input type="number" class="form-control" name="mcv" placeholder="" step=".01" value="{{ $report->mcv }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">MCH:</label>
										<input type="number" class="form-control" name="mch" placeholder="" step=".01" value="{{ $report->mch }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">MCHC:</label>
										<input type="number" class="form-control" name="mchc" placeholder="" step=".01" value="{{ $report->mchc }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Red Cell Distribution Width:</label>
										<input type="number" class="form-control" name="rcdw" placeholder="" step=".01" value="{{ $report->rcdw }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Platelet Count:</label>
										<input type="number" class="form-control" name="platelet_count" placeholder="" step=".01" value="{{ $report->platelet_count }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Mean Platelet Volume:</label>
										<input type="number" class="form-control" name="mean_platelet_volume" placeholder="" step=".01" value="{{ $report->mean_platelet_volume }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Neutrophil %:</label>
										<input type="number" class="form-control" name="neutrophil" placeholder="" step=".01" value="{{ $report->neutrophil }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Neutrophil Absolute:</label>
										<input type="number" class="form-control" name="neutrophil_absolute" placeholder="" step=".01" value="{{ $report->neutrophil_absolute }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Lymphocyte %:</label>
										<input type="number" class="form-control" name="lymphocyte" placeholder="" step=".01" value="{{ $report->lymphocyte }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Lymphocyte Absolute:</label>
										<input type="number" class="form-control" name="lymphocyte_absolute" placeholder="" step=".01" value="{{ $report->lymphocyte_absolute }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Monocyte %:</label>
										<input type="number" class="form-control" name="monocyte" placeholder="" step=".01" value="{{ $report->monocyte }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Monocyte Absolute:</label>
										<input type="number" class="form-control" name="monocyte_absolute" placeholder="" step=".01" value="{{ $report->monocyte_absolute }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Eosinophil %:</label>
										<input type="number" class="form-control" name="eosinophil" placeholder="" step=".01" value="{{ $report->eosinophil }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Eosinophil Absolute:</label>
										<input type="number" class="form-control" name="eosinophil_absolute" placeholder="" step=".01" value="{{ $report->eosinophil_absolute }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Basophil %:</label>
										<input type="number" class="form-control" name="basophil" placeholder="" step=".01" value="{{ $report->basophil }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Basophil Absolute:</label>
										<input type="number" class="form-control" name="basophil_absolute" placeholder="" step=".01" value="{{ $report->basophil_absolute }}"  />
									</div>
								</div>
							</div>

							<!-- <div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Basophil %:</label>
										<input type="number" class="form-control" name="basophil" placeholder="" step=".01" value=""  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="cac">Basophil Absolute:</label>
										<input type="number" class="form-control" name="basophil_absolute" placeholder="" step=".01" value=""  />
									</div>
								</div>
							</div> -->

							<!-- other fields -->
							<div class="row">
								<!-- <div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Creatinine, Urine, Random</label>
										<input type="number" class="form-control" name="creatinine_urine_random" placeholder="" step="0.01" value=""  />
									</div>
								</div> -->
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">OxLDL</label>
										<input type="number" class="form-control" name="oxldl" placeholder="" step="0.01" value="{{ $report->oxldl }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">ANA PATTERN</label>
										<input type="number" class="form-control" name="ana_pattern" placeholder="" step="0.01" value="{{ $report->ana_pattern }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">ANA TITER</label>
										<input type="number" class="form-control" name="ana_titer" placeholder="" step="0.01" value="{{ $report->ana_titer }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">DNA (DS) ANTIBODY</label>
										<input type="number" class="form-control" name="dna_antibody" placeholder="" step="0.01" value="{{ $report->dna_antibody }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">SM/RNP ANTIBODY</label>
										<input type="number" class="form-control" name="sm_rnp_antibody" placeholder="" step="0.01" value="{{ $report->sm_rnp_antibody }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">RNP ANTIBODY</label>
										<input type="number" class="form-control" name="rnp_antibody" placeholder="" step="0.01" value="{{ $report->rnp_antibody }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">SM ANTIBODY</label>
										<input type="number" class="form-control" name="sm_antibody" placeholder="" step="0.01" value="{{ $report->sm_antibody }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">CHROMATIN (NUCLEOSOMAL)</label>
										<input type="number" class="form-control" name="chromatin" placeholder="" step="0.01" value="{{ $report->chromatin }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">SJOGREN'S ANTIBODY (SS-A)</label>
										<input type="number" class="form-control" name="sjogren_antibody_a" placeholder="" step="0.01" value="{{ $report->sjogren_antibody_a }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">SJOGREN'S ANTIBODY (SS-B)</label>
										<input type="number" class="form-control" name="sjogren_antibody_b" placeholder="" step="0.01" value="{{ $report->sjogren_antibody_b }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">SCL-70 ANTIBODY</label>
										<input type="number" class="form-control" name="scl_antibody" placeholder="" step="0.01" value="{{ $report->scl_antibody }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">JO-1 ANTIBODY</label>
										<input type="number" class="form-control" name="jo1_antibody" placeholder="" step="0.01" value="{{ $report->jo1_antibody }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">RIBOSOMAL P ANTIBODY</label>
										<input type="number" class="form-control" name="ribosomal_p_antibody" placeholder="" step="0.01" value="{{ $report->ribosomal_p_antibody }}"  />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">CENTROMERE B(AMD) ANTIBODY</label>
										<input type="number" class="form-control" name="centromere_b_antibody" placeholder="" step="0.01" value="{{ $report->centromere_b_antibody }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">TG/HDL-C</label>
										<input type="number" class="form-control" name="tg_hdl_c" placeholder="" step="0.01" value="{{ $report->tg_hdl_c }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">LDL-P</label>
										<input type="number" class="form-control" name="ldl_p" placeholder="" step="0.01" value="{{ $report->ldl_p }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Small LDL-P</label>
										<input type="number" class="form-control" name="small_ldl_p" placeholder="" step="0.01" value="{{ $report->small_ldl_p }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">LDL Size</label>
										<input type="number" class="form-control" name="ldl_size" placeholder="" step="0.01" value="{{ $report->ldl_size }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">HDL-P</label>
										<input type="number" class="form-control" name="hdl_p" placeholder="" step="0.01" value="{{ $report->hdl_p }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Large HDL-P</label>
										<input type="number" class="form-control" name="large_hdl_p" placeholder="" step="0.01" value="{{ $report->large_hdl_p }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">HDL Size</label>
										<input type="number" class="form-control" name="hdl_size" placeholder="" step="0.01" value="{{ $report->hdl_size }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">Large VLDL-P</label>
										<input type="number" class="form-control" name="large_vldl_p" placeholder="" step="0.01" value="{{ $report->large_vldl_p }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mb-3">
										<label for="vo_2_max">VLDL Size</label>
										<input type="number" class="form-control" name="vldl_size" placeholder="" step="0.01" value="{{ $report->vldl_size }}"  />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">EGFR Non African Descent</label>
										<input type="number" class="form-control" name="egfr_non_african_descent" placeholder="" step="0.01" value="{{ $report->egfr_non_african_descent }}"  />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mb-3">
										<label for="vo_2_max">EGFR African Descent</label>
										<input type="number" class="form-control" name="egfr_african_descent" placeholder="" step="0.01" value="{{ $report->egfr_african_descent }}"  />
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
                @endforeach
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
											<tr><td width="50%">Patient First Name</td><td>{{ $report->patient->first_name }}</td></tr>
												<tr><td>Patient Last Name</td><td>{{ $report->patient->last_name }}</td></tr>
												<tr><td>phone</td><td>{{ $report->patient->phone }}</td></tr>
												<tr><td>Email</td><td>{{ $report->patient->email }}</td></tr>
												<tr><td>Address</td><td>{{ $report->patient->address_line_1 }}</td></tr>
												<tr><td>City</td><td>{{ $report->patient->city }}</td></tr>
												<tr><td>Country</td><td>{{ $report->patient->country }}</td></tr>
												<tr><td>Race / Ethnicity</td><td>{{ $report->patient->ethnicity }}</td></tr>
												<tr><td>Diabetes</td><td>{{ $report->patient->diabetes }}</td></tr>
												<tr><td>Currently Smoke</td><td>{{ $report->patient->smoke }}</td></tr>
												<tr><td>Family History of Heart Attack:</td><td>{{ $report->patient->fhhx }}</td></tr>
												<tr><td>Lipid Lowering Medication</td><td>{{ $report->patient->lipid }}</td></tr>
												<tr><td>On Hypertension Med:</td><td>{{ $report->patient->htnmed }}</td></tr>



												
											</table>
											
											<br />
											<h5><b>INFLAMMATION</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">hs-CRP</td><td>{{ $report->hs_crp }}</td></tr>
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>HS CRP Calculation:</b> {{ $report->hs_crp_calculate }} <br>
													</td>
												</tr> 
												<tr><td>Microalbumin</td><td>{{ $report->microalbumin }}</td></tr>
												<tr><td>Creatinine, Urine, Random</td><td>{{ $report->creatinine_urine_random }}</td></tr>
											</table>
											<br />
											<h5><b>Lipid Panel</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Cholesterol, Total</td><td>{{ $report->cholesterol_total }}</td></tr>
												<tr><td>HDL Cholesterol</td><td>{{ $report->hdl_cholesterol }}</td></tr>
												<tr><td>Triglycerides</td><td>{{ $report->triglycerides }}</td></tr>
												<tr><td>LDL Cholesterol, Calculated</td><td>{{ $report->ldl_cholesterol_calculated }}</td></tr>
												<tr><td>Chol/HDL-C</td><td>{{ $report->chol_hdl_c }}</td></tr>
												<tr><td>Non-HDL Cholesterol</td><td>{{ $report->non_hdl_cholesterol }}</td></tr>
												<tr><td>TG/HDL-C</td><td>{{ $report->tg_hdl_hdl_C }}</td></tr>
											</table>
											<br />
											<h5><b>Lipoprotein Fractionation, NMR</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Lipoprotein Fractionation, NMR</td><td>{{ $report->lipoprotein_fractionation_nmr }}</td></tr>
											</table>
											<br />
											<h5><b>METABOLIC</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Glucose</td><td>{{ $report->glucose }} </td></tr>
												<tr><td width="50%">Insulin</td><td>{{ $report->insulin }} </td></tr>
												<tr><td width="50%">HbA1c</td><td>{{ $report->hba1c }}</td></tr>
												<tr><td width="50%">Estimated Average Glucose</td><td>{{ $report->estimated_average_glucose }}</td></tr>
												<!-- <tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Vascular Age 2:</b> {{ $report->vascular_age_2 }} <br>
														<b>Percentile:</b> {{ $report->percentile }}
													</td>
												</tr> -->
											</table>
											<br />
											<h5><b>VITAMINS/SUPPLEMENTS</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Vitamin B12</td><td>{{ $report->vitamin_b12 }}</td></tr>
												<tr><td width="50%">Vitamin D, 25-Hydroxy by LC-MS/(2) MS</td><td>{{ $report->lc_ms }}</td></tr>
												
											</table>
											 <br />
											<h5><b>FATTY ACIDS</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">OmegaCheck®</td><td>{{ $report->omegacheck }}</td></tr>
												<tr><td width="50%">Arachidonic Acid/EPA Ratio</td><td>{{ $report->arachidonic_acid_epa_ratio }}</td></tr>
												<tr><td width="50%">EPA</td><td>{{ $report->epa }}</td></tr>
												<tr><td width="50%">DPA</td><td>{{ $report->dpa }}</td></tr>
												<tr><td width="50%">DHA</td><td>{{ $report->dha }}</td></tr>
												<tr><td width="50%">Omega-6 total</td><td>{{ $report->omega6_total }}</td></tr>
												<tr><td width="50%">Arachidonic Acid</td><td>{{ $report->arachidonic_acid }}</td></tr>
												<tr><td width="50%">Linoleic Acid</td><td>{{ $report->linoleic_acid }}</td></tr>
												<tr><td width="50%">Omega-3 total </td><td>{{ $report->omega3_total }}</td></tr>
											</table>
											<br />
											<h5><b>HYPERTENSION/HEART FAILURE</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">NT-proBNP</td><td>{{ $report->nt_probnp }}</td></tr>
											</table>
											<br />
											<h5><b>GENERAL CHEMISTRY</b></b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Creatine Kinase</td><td>{{ $report->creatine_kinase }}</td></tr>
												<tr><td width="50%">Uric Acid</td><td>{{ $report->uric_acid }}</td></tr>
											</table>
											<br />
											<h5><b>HORMONES</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">DHEA-S</td><td>{{ $report->dhea_s }}</td></tr>
											</table>
											<br />
											<h5><b>THYROID FUNCTION</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Thyroid Stimulating Hormone:</td><td>{{ $report->thyroid_stimulating_hormone }}</td></tr>
												<tr><td width="50%">Thyroxine</td><td>{{ $report->thyroxine }}</td></tr>
											</table>
											<br />

											<!-- other fields display routine panels -->
											<br />
											<h5><b>Routine Panels</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Glucose:</td><td>{{ $report->glucose }}</td></tr>
												<tr><td width="50%">Calcium</td><td>{{ $report->calcium }}</td></tr>
												<tr><td width="50%">Sodium</td><td>{{ $report->sodium }}</td></tr>
												<tr><td width="50%">Potassium</td><td>{{ $report->potassium }}</td></tr>
												<tr><td width="50%">Chloride</td><td>{{ $report->chloride }}</td></tr>
												<tr><td width="50%">CO2</td><td>{{ $report->co2 }}</td></tr>
												<tr><td width="50%">BUN</td><td>{{ $report->bun }}</td></tr>
												<tr><td width="50%">BUN/Creatinine Ratio</td><td>{{ $report->bun_creatinine_ratio }}</td></tr>
												<tr><td width="50%">Protein</td><td>{{ $report->protein }}</td></tr>
												<tr><td width="50%">Albumin</td><td>{{ $report->albumin }}</td></tr>
												<tr><td width="50%">Globulin</td><td>{{ $report->globulin }}</td></tr>
												<tr><td width="50%">Albumin/Globulin Ratio</td><td>{{ $report->albumin_globulin_ratio }}</td></tr>
												<tr><td width="50%">ALP</td><td>{{ $report->alp }}</td></tr>
												<tr><td width="50%">ALT</td><td>{{ $report->alt }}</td></tr>
												<tr><td width="50%">AST</td><td>{{ $report->ast }}</td></tr>
												<tr><td width="50%">Bilirubin</td><td>{{ $report->bilirubin }}</td></tr>
												<tr><td width="50%">eGFR</td><td>{{ $report->egfr }}</td></tr>
												
												<tr><td width="50%">Thyroglobulin Antibodies</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
											</table>

											<br />
											<h5><b>Testosterone, Free, Total and Bioavailable</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Testosterone</td><td>{{ $report->testosterone }}</td></tr>
												<tr><td width="50%">Testosterone, Free</td><td>{{ $report->testosterone_free }}</td></tr>
												<tr><td width="50%">Testosterone, % Free</td><td>{{ $report->testosterone_free_pt }}</td></tr>
												<tr><td width="50%">Testosterone, Bioavailable</td><td>{{ $report->testosterone_bioavailable }}</td></tr>
											</table>

											<br />
											<h5><b>THYROID FUNCTION</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Thyroglobulin Antibodies</td><td>{{ $report->thyroglobulin_antibodies }}</td></tr>
												<tr><td width="50%">Thyroid Peroxidase Ab</td><td>{{ $report->thyroid_peroxidase_ab }}</td></tr>
											</table>

											<br />
											<h5><b>ENZYMES</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Gamma Glutamyl Transferase (GGT)</td><td>{{ $report->ggt }}</td></tr>
												<tr><td width="50%">LIPASE</td><td>{{ $report->lipase }}</td></tr>
											</table>

											<br />
											<h5><b>ANEMIA/IRON METABOLISM</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Ferritin</td><td>{{ $report->ferritin }}</td></tr>
												<tr><td width="50%">Iron</td><td>{{ $report->iron }}</td></tr>
												<tr><td width="50%">TIBC</td><td>{{ $report->tibc }}</td></tr>
												<tr><td width="50%">Transferrin Saturation</td><td>{{ $report->transferrin_saturation }}</td></tr>
											</table>


											<br />
											<h5><b>TUMOR MARKER</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">Prostatic Specific Ag, Total</td><td>{{ $report->prostatic_specific_ag }}</td></tr>
											</table>

											<br />
											<h5><b>IMMUNE</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">ANA SCREEN, IFA</td><td>{{ $report->ana_screen }}</td></tr>
											</table>

											<br />
											<h5><b>RHEUMATOID FACTOR</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">RHEUMATOID FACTOR</td><td>{{ $report->rheuamatoid_factor }}</td></tr>
											</table>

											<br />
											<h5><b>VIRUS/INFECTIOUS DISEASE</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">EBV Early Antigen Antibody</td><td>{{ $report->antigen_antibody }}</td></tr>
												<tr><td width="50%">EBV VCA AB (IGM)</td><td>{{ $report->ab_igm }}</td></tr>
												<tr><td width="50%">EBV VCA AB (IGG)</td><td>{{ $report->ab_igg }}</td></tr>
												<tr><td width="50%">EBV EBNA AB (IGG)</td><td>{{ $report->ebnaabigg }}</td></tr>
											</table>

											<br />
											<h5><b>Hepatitis Testing</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">HEPATITIS B CORE AB(AMD)</td><td>{{ $report->h_b_core_ab }}</td></tr>
												<tr><td width="50%">HEPATITIS B SURFACE AG(AMD)</td><td>{{ $report->he_b_surface_ag }}</td></tr>
												<tr><td width="50%">HEPATITIS A IGM</td><td>{{ $report->h_a_igm }}</td></tr>
												<tr><td width="50%">HEPATITIS C ANTIBODY</td><td>{{ $report->h_c_antibody }}</td></tr>
												<tr><td width="50%">INDEX</td><td>{{ $report->index_1 }}</td></tr>
											</table>

											<br />
											<h5><b>Lyme Disease Antibody with Reflex to Blot (IgG, IgM)</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">LYME AB SCREEN</td><td>{{ $report->labscreen }}</td></tr>
											</table>

											<br />
											<h5><b>HEMATOLOGY</b></h5>
											<table class="table table-bordered">
												<tr><td width="50%">WBC</td><td>{{ $report->wbc }}</td></tr>
												<tr><td width="50%">RBC</td><td>{{ $report->rbc }}</td></tr>
												<tr><td width="50%">Hemoglobin</td><td>{{ $report->hemoglobin }}</td></tr>
												<tr><td width="50%">Hematocrit</td><td>{{ $report->hematocrit }}</td></tr>
												<tr><td width="50%">MCV</td><td>{{ $report->mcv }}</td></tr>
												<tr><td width="50%">MCH</td><td>{{ $report->mch }}</td></tr>
												<tr><td width="50%">MCHC</td><td>{{ $report->mchc }}</td></tr>
												<tr><td width="50%">Red Cell Distribution Width</td><td>{{ $report->rcdw }}</td></tr>
												<tr><td width="50%">Platelet Count</td><td>{{ $report->platelet_count }}</td></tr>
												<tr><td width="50%">Mean Platelet Volume</td><td>{{ $report->mean_platelet_volume }}</td></tr>
												<tr><td width="50%">Neutrophil %</td><td>{{ $report->neutrophil }}</td></tr>
												<tr><td width="50%">Neutrophil Absolute</td><td>{{ $report->neutrophil_absolute }}</td></tr>
												<tr><td width="50%">Lymphocyte %</td><td>{{ $report->lymphocyte }}</td></tr>
												<tr><td width="50%">Lymphocyte Absolute</td><td>{{ $report->lymphocyte_absolute }}</td></tr>
												<tr><td width="50%">Monocyte %</td><td>{{ $report->monocyte }}</td></tr>
												<tr><td width="50%">Monocyte Absolute</td><td>{{ $report->monocyte_absolute }}</td></tr>
												<tr><td width="50%">Eosinophil %</td><td>{{ $report->eosinophil }}</td></tr>
												<tr><td width="50%">Eosinophil Absolute</td><td>{{ $report->eosinophil_absolute }}</td></tr>
												<tr><td width="50%">Basophil %</td><td>{{ $report->basophil }}</td></tr>
												<tr><td width="50%">Basophil Absolute</td><td>{{ $report->basophil_absolute }}</td></tr>
												<tr><td width="50%">OxLDL</td><td>{{ $report->oxldl }}</td></tr>
												<tr><td width="50%">ANA PATTERN</td><td>{{ $report->ana_pattern }}</td></tr>
												<tr><td width="50%">ANA TITER</td><td>{{ $report->ana_titer }}</td></tr>
												<tr><td width="50%">DNA (DS) ANTIBODY</td><td>{{ $report->dna_antibody }}</td></tr>
												<tr><td width="50%">SM/RNP ANTIBODY</td><td>{{ $report->sm_rnp_antibody }}</td></tr>
												<tr><td width="50%">RNP ANTIBODY</td><td>{{ $report->rnp_antibody }}</td></tr>
												<tr><td width="50%">SM ANTIBODY</td><td>{{ $report->sm_antibody }}</td></tr>
												<tr><td width="50%">CHROMATIN (NUCLEOSOMAL)</td><td>{{ $report->chromatin }}</td></tr>
												<tr><td width="50%">SJOGREN'S ANTIBODY (SS-A)</td><td>{{ $report->sjogren_antibody_a }}</td></tr>
												<tr><td width="50%">SJOGREN'S ANTIBODY (SS-B)</td><td>{{ $report->sjogren_antibody_b }}</td></tr>
												<tr><td width="50%">SCL-70 ANTIBODY</td><td>{{ $report->scl_antibody }}</td></tr>
												<tr><td width="50%">JO-1 ANTIBODY</td><td>{{ $report->jo1_antibody }}</td></tr>
												<tr><td width="50%">RIBOSOMAL P ANTIBODY</td><td>{{ $report->ribosomal_p_antibody }}</td></tr>
												<tr><td width="50%">CENTROMERE B(AMD) ANTIBODY</td><td>{{ $report->centromere_b_antibody }}</td></tr>
												<tr><td width="50%">TG/HDL-C</td><td>{{ $report->tg_hdl_c }}</td></tr>
												<tr><td width="50%">LDL-P</td><td>{{ $report->ldl_p }}</td></tr>
												<tr><td width="50%">Small LDL-P</td><td>{{ $report->small_ldl_p }}</td></tr>
												<tr><td width="50%">LDL Size</td><td>{{ $report->ldl_size }}</td></tr>
												<tr><td width="50%">HDL-P</td><td>{{ $report->hdl_p }}</td></tr>
												<tr><td width="50%">Large HDL-P</td><td>{{ $report->large_hdl_p }}</td></tr>
												<tr><td width="50%">HDL Size</td><td>{{ $report->hdl_size }}</td></tr>
												<tr><td width="50%">Large VLDL-P</td><td>{{ $report->large_vldl_p }}</td></tr>
												<tr><td width="50%">Large HDL-P</td><td>{{ $report->large_hdl_p }}</td></tr>
												<tr><td width="50%">VLDL Size</td><td>{{ $report->vldl_size }}</td></tr>
												<tr><td width="50%">EGFR Non African Descent</td><td>{{ $report->egfr_non_african_descent }}</td></tr>
												<tr><td width="50%">EGFR African Descent</td><td>{{ $report->egfr_african_descent }}</td></tr>
											</table>

											<br />
											<br />
											<tr> <a href="{{ route('cardiometabolic_report.download-pdf', ['id' => $report->id]) }}" class="btn btn-primary">Download Report PDF</a></tr>
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
