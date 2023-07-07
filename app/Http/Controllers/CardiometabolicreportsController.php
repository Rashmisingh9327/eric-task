<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;

use App\Models\Report;
use App\Models\Patient;
use App\Models\Cardiometabolicreport;

use App\Http\Resources\ReportsResource;
use App\Http\Resources\ReportResource;

class CardiometabolicreportsController extends Controller
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
		$cardiometabolicreports = Cardiometabolicreport::orderBy('id', 'asc')->get();

		$data = [
			'reports' => $reports,
			'patients' => $patients,
			'cardiometabolicreports' => $cardiometabolicreports,
		];

		return view('cardiometabolicreports.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
{
    $input = $request->input();

    $rules = [
        // Add validation rules for input fields
        // For example:
        'patient_id' => 'required|exists:patients,id'
    ];

    $validator = Validator::make($input, $rules);

    if ($validator->fails()) {
        return redirect('/cardiometabolicreports')
            ->withInput($input)
            ->withErrors($validator);
    }

    $patient = Patient::find($input['patient_id']);

    if (!$patient) {
        $error = ['patient_id' => 'Invalid patient'];

        return redirect('/cardiometabolicreports')
            ->withInput($input)
            ->withErrors($error);
    }

    $record = new Cardiometabolicreport();
    $record->fill($input);
    $record->status = "Active";

		$hs_crp_calculate = $record->hs_crp_calculate();
		$record->hs_crp_calculate = $hs_crp_calculate['hs_crp_calculate'];
		// dd($record->hs_crp_calculate);

    $record->patient()->associate($patient);
    $record->save();

    $data = [
        'status' => 'Success',
        'id' => $record->id
    ];

    return redirect('/cardiometabolic_report')
        ->with('data', $data);
}


	


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

		$cardio = Cardiometabolicreport::with('patient')->get();

		$data = [
			'cardio' => $cardio,
		];

		return view('cardiometabolicreports.show', $data);
    }

	public function show_report($id)
    {

		$cardio = Cardiometabolicreport::with('patient')->where('id',$id)->get();
		$data = [
			'cardio' => $cardio,
		];
		// dd($data);

		return view('cardiometabolicreports.show_report', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function edit($id)
	{
		// $record = Cardiometabolicreport::find($id);
		$cardio = Cardiometabolicreport::with('patient')->where('id',$id)->get();


		if (!$cardio) {
			$error = ['record' => 'Invalid record'];
	
			return redirect('/cardiometabolicreports.index')
				->withErrors($error);
		}
	
		// Retrieve other necessary data for the edit view, if needed
		// For example:
		// $patients = Patient::all();
		$data = [
			// 'record' => $record,
			// 'patients' => $patients,
			'cardio' => $cardio,
		];
		return view('cardiometabolicreports.edit', $data);
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
		$_input = $request->input();
	
		$rules = [
			// Add validation rules for input fields
		];
	
		$validator = Validator::make($request->all(), $rules);
	
		if ($validator->fails()) {
			$errors = $validator->errors()->toArray();
	
			return redirect('/cardiometabolicreports/' . $id . '/edit')
				->withInput()
				->withErrors($errors);
		} else {
			$patient = Patient::find($request->input('patient_id'));
	
			if (!$patient) {
				$error = ['patient_id' => 'Invalid patient'];
	
				return redirect('/cardiometabolicreports.index')
					->withInput()
					->withErrors($error);
			}
	
			$record = Cardiometabolicreport::find($id);
	
			if (!$record) {
				$error = ['record' => 'Invalid record'];
	
				return redirect('/cardiometabolicreports.index')
					->withInput()
					->withErrors($error);
			}
	
			$record->fill($_input);
			$record->status = "Active";

			// hs crp calculation
			$hs_crp_calculate = $record->hs_crp_calculate();
			$record->hs_crp_calculate = $hs_crp_calculate['hs_crp_calculate'];

			

			$record->patient()->associate($patient);
	
			$record->save();
	
			$data = [
				'status' => 'Success',
				'id' => $record->id
			];
	
			// return redirect('/cardiometabolic_report')
				// ->with('data', $data);
			return back()->with('data', $data);
		}
	}
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy($id)
	{
		$cardiometabolic_report = Cardiometabolicreport::findOrFail($id);
		$cardiometabolic_report->delete();
		return redirect('/cardiometabolic_report/show')->with('success', 'Cardiometabolic report has been deleted successfully');
	}
	
	
	

	public function display()
    {
		$reports = Report::orderBy('id', 'desc')->get();
		$patients = Patient::orderBy('id', 'asc')->get();

		$data = [
			'reports' => $reports,
			'patients' => $patients,
		];

		return view('cardiometabolicreports.all_reports', $data);
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
