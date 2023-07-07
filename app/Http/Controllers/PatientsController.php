<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;

use App\Models\Patient;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::where('deprecated', '=', 0)->orderBy('id', 'asc')->get();
		
		$data = [
			'patients' => $patients
		];
		
		return view('patient.patient', $data);
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
			
			return redirect('/patient');
        } else {
			$patient = new Patient($_input);

			$today = date("Y-m-d");
			$diff = date_diff(date_create($_input['birthday']), date_create($today));
			$age = $diff->format('%y');
			$patient->age = $age;

			$patient->save();
        }
		
		return redirect('/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $where = [
            ['deprecated', '=', 0],
            ['id', '=', $id]
        ];
        $_patient = Patient::where($where)->first();

        if ($_patient) {
            $patient = [
                'id' => $_patient->id,

                'first_name' => $_patient->first_name,
                'last_name' => $_patient->last_name,

                'phone' => $_patient->phone,
                'email' => $_patient->email,

                'address_line_1' => $_patient->address_line_1,
                'address_line_2' => $_patient->address_line_2,
                'city' => $_patient->city,
                'province' => $_patient->province,
                'country' => $_patient->country,
                'zip' => $_patient->zip,

                'gender' => $_patient->gender,
                'age' => $_patient->age,
                'height' => $_patient->height,
                'height_unit' => $_patient->height_unit,
                'weight' => $_patient->weight,
                'weight_unit' => $_patient->weight_unit,

                'birthday' => $_patient->birthday,

                'ethnicity' => $_patient->ethnicity,
                'diabetes' => $_patient->diabetes,
                'smoke' => $_patient->smoke,
                'fhhx' => $_patient->fhhx,
                'lipid' => $_patient->lipid,
                'htnmed' => $_patient->htnmed
            ];

            $data = [
			    'patient' => $patient
            ];

            return response()->json($data);
        } else {
            $errors = [
                'Patient does not exist'
            ];

            $data = [
                'status' => 'Fail',
                'errors' => $errors
            ];

            return response()->json($data);
        }
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

    public function create_patient()
    {
		return view('patient.createpatient');
    }
}
