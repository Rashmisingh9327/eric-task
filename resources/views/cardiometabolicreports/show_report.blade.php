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
</head>
<body>
@foreach ($cardio AS $report)
						<div class="">
							<!-- <h2 class="accordion-header" id="accordion_heading_{{ $report->id }}">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#report_{{ $report->id }}">
									
								</button>
							</h2> -->
							<div>
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
												
												<tr><td width="50%">Thyroglobulin Antibodies</td><td>{{ $report->thyroglobulin_antibodies }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<!-- <tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr>
												<tr><td width="50%">Sex Hormone Binding Globulin</td><td>{{ $report->shbg }}</td></tr> -->
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
</body>
</html>
