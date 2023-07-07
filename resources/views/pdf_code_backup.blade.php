<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Well Life Jobs') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
@foreach ($reports AS $report)
						<div class="">
							<!-- <h2 class="accordion-header" id="accordion_heading_{{ $report->id }}">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#report_{{ $report->id }}">
									
								</button>
							</h2> -->
							<div>
								<div class="accordion-body">
									<div class="card mt-3" id="responsive">
										<div class="card-header">
										Report #{{ $report->id }}
										</div>
										<div class="card-body">
											<h2><b>Patient Details</b></h2>
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
											<h2><b>Risk Score</b></h2>
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
											<h2><b>Lung Age</b></h2>
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
											<h2><b>Phenotypic Age</b></h2>
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
											<br />
											<h2><b>Heart Ages</b></h2>
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
											<h2><b>Brain Age</b></h2>
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
											<h2><b>Skin Age</b></h2>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Skin Age:</b> {{ $report->skin_age }}
													</td>
												</tr>
											</table>
											<br />
											<h2><b>Lab Age</b></h2>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Lab Age:</b> {{ $report->lab_age }}
													</td>
												</tr>
											</table>
											<br />
											<h2><b>Bio Age</b></h2>
											<table class="table table-bordered">
												<tr>
													<td><b>OUTPUT</b></td>
													<td>
														<b>Bio Age:</b> {{ $report->bio_age }}
													</td>
												</tr>

											</table>
											<!-- <tr> <a href="{{ route('cardiometabolic_report.download-pdf', ['id' => $report->id]) }}" class="btn btn-primary">Download Report PDF</a></tr> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
</body>
</html>
