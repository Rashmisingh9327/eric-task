<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;

use App\Models\Report;
use App\Models\Patient;

use App\Http\Resources\ReportsResource;
use App\Http\Resources\ReportResource;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$reports = Report::orderBy('id', 'desc')->get();
		$patients = Patient::orderBy('id', 'asc')->get();

		$data = [
			'reports' => $reports,
			'patients' => $patients,
		];

		return view('report.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
        $rules = [];

        $_input = $request->input();

        $validator = Validator::make($_input, $rules);

        if ($validator->fails()) {
			$errors = $validator->errors()->toArray();

            $data = [
                'status' => 'Fail',
                'errors' => $errors
            ];

			return redirect('/report');
        } else {
			$patient_where = [
				['deprecated', '=', 0],
				['id', '=', $_input['patient_id']]
			];
            $patient = Patient::where($patient_where)->first();

			$record = new Report($_input);
			$record->status = "Active";
			$record->type = "BMD";

			$today = date("Y-m-d");
			$diff = date_diff(date_create($_input['birthday']), date_create($today));
			$age = $diff->format('%y');
			$record->age = $age;
//            $record->region = $_input['regions'];
//            $record->bmd = $_input['bmds'];

			//////  BMD  /////////////// OKAY ////

			if (isset($_input['regions'])) {
				$record->region = $_input['regions'];			
			}

			if (isset($_input['bmds'])) {
				$record->bmd = $_input['bmds'];

			}


			// $bmd_report = $record->bmd();
			// $record->expected_bmd = $bmd_report['expected_bmd'];
			// dd($record->expected_bmd)
			// $record->equivalent_age = $bmd_report['equivalent_age'];
			


			
			

			//////  Arterial Age  ////// OKAY ////
			$arterial_age_report = $record->arterial_age();
			$record->arterial_age = $arterial_age_report['arterial_age'];

			//////  Grip Strength  ///// CHCK ////
			$equivalent_age_for_grip_strength_report = $record->grip_strength();
			$record->equivalent_age_for_grip_strength = $equivalent_age_for_grip_strength_report['equivalent_age_for_grip_strength'];

			//////  Lung Age  ////////// OKAY ////
			$equivalent_age_for_lung_report = $record->lung_age();
			$record->equivalent_age_for_lung = $equivalent_age_for_lung_report['age'];

			//////  Risk Score  //////// OKAY ////
			$risk_score_report = $record->risk_score();
			if (isset($risk_score_report['cac_riskscore'])) {
				$record->cac_riskscore = $risk_score_report['cac_riskscore'];
			}

			if (isset($risk_score_report['nocac_riskscore'])) {
				$record->nocac_riskscore = $risk_score_report['nocac_riskscore'];
			}

			//////  Phenotypic Age  //// OKAY ////
			$phenotypic_age_report = $record->phenotypic_age();
			$record->biological_age = $phenotypic_age_report['biological_age'];
			$record->chances_of_dying = $phenotypic_age_report['chances_of_dying'];

			//////  Vascular Age  //// OKAY ////
			$vascular_age_report = $record->vascular_age_report();
			$record->vascular_age = $vascular_age_report['vascular_age'];

			//////  Vascular Age 2  //// OKAY ////
			$vascular_age_report_2 = $record->vascular_age_report_2();
			$record->vascular_age_2 = $vascular_age_report_2['vascular_age_2'];
			$record->percentile = $vascular_age_report_2['percentile'];

			//////  Balance Age  ////
			$balance_age_report = $record->balance_age_report();
			$record->balance_age = $balance_age_report['balance_age'];

			//////  EKG Heart Age  ////
			$ekg_heart_age_report = $record->ekg_heart_age_report();
			$record->ekg_heart_age = $ekg_heart_age_report['ekg_heart_age'];

			//////  Heart Age  ////
			$heart_age_report = $record->heart_age_report();
			$record->heart_age = $heart_age_report['heart_age'];

			//////  Heart Age Average ////
			$heart_age_average_report = $record->heart_age_average_report();
			$record->heart_age_average = $heart_age_average_report['heart_age_average'];

			//////  Lung Age  ////
			// $musculoskeletal_age_report = $record->musculoskeletal_age_report();
			// $record->musculoskeletal_age = $musculoskeletal_age_report['musculoskeletal_age'];

			//////  Brain Age  ////
			$brain_age_report = $record->brain_age_report();
			$record->brain_age = $brain_age_report['brain_age'];

			//////  Lab Age  ////
			$lab_age_report = $record->lab_age_report();
			$record->lab_age = $lab_age_report['lab_age'];

			//////  Bio Age  ////
			$bio_age_report = $record->bio_age_report();
			$record->bio_age = $bio_age_report['bio_age'];

            $record->patient()->associate($patient);

			$record->save();

            $data = [
                'status' => 'Success',
                'id' => $record->id
            ];
        }

		return redirect('/report');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	public function display()
    {
		$reports = Report::orderBy('id', 'desc')->get();
		$patients = Patient::orderBy('id', 'asc')->get();

		$data = [
			'reports' => $reports,
			'patients' => $patients,
		];

		return view('all_reports', $data);
    }

	public function test()
	{
		$biological_age = 0;
		$chances_of_dying = 0;

		// User Inputs (Start) //
		$albumin_liver = 4900 / 100; //B4
		$alp_liver = 86; //C4
		$creatinine_kidney = 91; //D4
		$glucose_pancreas = 6.5; //E4
		$crp_immune = 0.68; //F4
		$lympho_immune = 24; //G4
		$wbc_immune = 5.9; //H4
		$mcv_bone_marrow = 97; //I4
		$rdw_bone_marrow = 13.2; //J4
		$age = 84; //K4

		/*
		$albumin_liver = $this->albumin_liver; //B4
		$alp_liver = $this->alp_liver; //C4
		$creatinine_kidney = $this->creatinine_kidney; //D4
		$glucose_pancreas = $this->glucose_pancreas; //E4
		$crp_immune = $this->crp_immune; //F4
		$lympho_immune = $this->lympho_immune; //G4
		$wbc_immune = $this->wbc_immune; //H4
		$mcv_bone_marrow = $this->mcv_bone_marrow; //I4
		$rdw_bone_marrow = $this->rdw_bone_marrow; //J4
		$age = $this->age; //K4
		*/
		// User Inputs (End) //

		$albumin_liver_multiplier = 1; //B37
		$alp_liver_multiplier = 1; //C37
		$creatinine_kidney_multiplier = 1; //D37
		$glucose_pancreas_multiplier = 1; //E37
		$crp_immune_multiplier = 0.1; //F37
		$lympho_immune_multiplier = 1; //G37
		$wbc_immune_multiplier = 1; //H37
		$mcv_bone_marrow_multiplier = 1; //I37
		$rdw_bone_marrow_multiplier = 1; //J37
		$age_multiplier = 1; //K37

		$albumin_liver_gl = -0.0336; //B39
		$alp_liver_ul = 0.0019; //C39
		$creatinine_kidney_umol = 0.0095; //D39
		$glucose_pancreas_mmol = 0.1953; //E39
		$crp_immune_ln = 0.0954; //F39
		$lympho_immune_percent = -0.012; //G39
		$wbc_immune_cells = 0.0554; //H39
		$mcv_bone_marrow_fl = 0.0268; //I39
		$rdw_bone_marrow_persent = 0.3306; //J39
		$years = 0.0804; //K39

		$g = 0.0076927; //B43
		$bo = -19.9067; //B44

		$albumin_liver_result = $albumin_liver * $albumin_liver_multiplier;
		$alp_liver_result = $alp_liver * $alp_liver_multiplier;
		$creatinine_kidney_result = $creatinine_kidney * $creatinine_kidney_multiplier;
		$glucose_pancreas_result = $glucose_pancreas * $glucose_pancreas_multiplier;
		$crp_immune_result = round(log($crp_immune * $crp_immune_multiplier), 4);
		$lympho_immune_result = $lympho_immune * $lympho_immune_multiplier;
		$wbc_immune_result = $wbc_immune * $wbc_immune_multiplier;
		$mcv_bone_marrow_result = $mcv_bone_marrow * $mcv_bone_marrow_multiplier;
		$rdw_bone_marrow_result = $rdw_bone_marrow * $rdw_bone_marrow_multiplier;
		$age_result = $age * $age_multiplier;

		$albumin_liver_weighting_result = $albumin_liver_gl * $albumin_liver_result;
		$alp_liver_weighting_result = $alp_liver_result * $alp_liver_ul;
		$creatinine_kidney_weighting_result = $creatinine_kidney_umol * $creatinine_kidney_result;
		$glucose_pancreas_weighting_result = $glucose_pancreas_mmol * $glucose_pancreas_result;
		$crp_immune_weighting_result = $crp_immune_ln * $crp_immune_result;
		$lympho_immune_weighting_result = $lympho_immune_percent * $lympho_immune_result;
		$wbc_immune_weighting_result = $wbc_immune_cells * $wbc_immune_result;
		$mcv_bone_marrow_weighting_result = $mcv_bone_marrow_fl * $mcv_bone_marrow_result;
		$rdw_bone_marrow_weighting_result = $rdw_bone_marrow_persent * $rdw_bone_marrow_result;
		$years_result = $years * $age_result;

		$lincomb = $albumin_liver_weighting_result +  $creatinine_kidney_weighting_result + $glucose_pancreas_weighting_result + $crp_immune_weighting_result + $lympho_immune_weighting_result + $mcv_bone_marrow_weighting_result + $rdw_bone_marrow_weighting_result + $alp_liver_weighting_result +  $wbc_immune_weighting_result + $years_result + $bo;

		$year = 10; //B42
		$months = $year * 12;

		$mort_score = 1-exp(-exp($lincomb)*(exp($g*$months)-1)/$g);
		$phenotypic_age = 141.50225+log(-0.00553*log(1-$mort_score))/0.090165;
		$dnam_age = $phenotypic_age/(1+1.28047*exp(0.0344329*(-182.344+$phenotypic_age)));
		$mscore = 1-exp(-0.000520363523*exp(0.090165*$dnam_age));

		$biological_age = 141.50225+log(-0.00553*log(1-$mort_score))/0.090165;
		$chances_of_dying = $mort_score * 100;

		/*
		// echo $albumin_liver_result; //b38
		// echo $alp_liver_result ; //C38
		// echo $creatinine_kidney_result; //D38
		// echo $glucose_pancreas_result; //E38
		// echo $crp_immune_result; //F38
		// echo $lympho_immune_result; //G38
		// echo $wbc_immune_result; //H38
		// echo $mcv_bone_marrow_result; //I38
		// echo $rdw_bone_marrow_result; //J38
		// echo $age_result; //K38

		// echo $albumin_liver_weighting_result; //b40
		// echo $alp_liver_weighting_result; //C40
		// echo $creatinine_kidney_weighting_result; //d40
		// echo $glucose_pancreas_weighting_result; //e40
		// echo $crp_immune_weighting_result; //f40
		// echo $lympho_immune_weighting_result; //g40
		// echo $wbc_immune_weighting_result; //H40
		// echo $mcv_bone_marrow_weighting_result; //I40
		// echo $rdw_bone_marrow_weighting_result; //J40

		// echo $months; //E42
		// echo $years_result; //K40

		// echo $mort_score; //D46

		// echo $lincomb; //B46
		// echo $phenotypic_age ; //E46
		// echo $dnam_age; //f46
		// echo $mscore; //G46
		*/

		$data = [
			'biological_age' => round($biological_age, 1),
			'chances_of_dying' => round($chances_of_dying, 1)
		];

		return $data;
	}
}
