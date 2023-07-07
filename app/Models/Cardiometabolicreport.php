<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
https://api.thorne.com/swagger-ui.html

jeno.g.cabrera@gmail.com
PW: WlFm806

https://welllifefm.com/wp-admin/
jeno.g.cabrera@gmail.com
jenojenoVB88

https://api.thorne.com/api/v1/products

https://www.thorne.com/products/dp/amino-complex-berry
https://www.thorne.com/products/dp/basic-b-complex
https://www.thorne.com/products/dp/buffered-c-powder
https://www.thorne.com/products/dp/catalyte-lemon-lime
https://www.thorne.com/products/dp/enteromend
https://www.thorne.com/products/dp/mediclear-sgs-trade
https://www.thorne.com/products/dp/niacel-200
https://www.thorne.com/products/dp/resveracel
https://www.thorne.com/products/dp/veganpro-complex-chocolate
https://www.thorne.com/products/dp/vitamin-d-k2-liquid
*/

class Cardiometabolicreport extends Model
{
    use HasFactory;

	protected $table = 'cardiometabolicreports';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

	protected $casts = [
		'region' => 'array',
        'bmd' => 'array',
		'expected_bmd' => 'array',
		'equivalent_age' => 'array',
	];

    protected $fillable = [
        'hs_crp',
		'hs_crp_calculate',
        'microalbumin',

        'creatinine_urine_random',

        'cholesterol_total',
		'hdl_cholesterol',

		'triglycerides',

		'ldl_cholesterol_calculated', 
		'chol_hdl_c',
		'non_hdl_cholesterol', 
		'tg_hdl_hdl_C', 

		'lipoprotein_fractionation_nmr', 
		'glucose', 

		'insulin', // For Grip Strength //
		'hba1c', // For Grip Strength //
		'estimated_average_glucose', // For Grip Strength //
		'vitamin_b12', // For Grip Strength //
		'lc_ms', // For Grip Strength //
		'omegacheck', // For Grip Strength //

		'arachidonic_acid_epa_ratio', // For Lung //
		'epa', // For Lung //

		'dpa',
		'dha',
		'omega6_total',
		'omega3_total',
		'arachidonic_acid',
		'linoleic_acid',
		'nt_probnp',
		'creatine_kinase',
		'uric_acid',
		'dhea_s',

		'thyroid_stimulating_hormone',
		'thyroxine',



		'calcium',
		'sodium',
		'potassium',
		'chloride',
		'co2',
		'bun',
		'creatinine',
		'bun_creatinine_ratio',
		'protein',
		'albumin',
		'globulin',
		'albumin_globulin_ratio',
		'alp',
		'alt',
		'ast',
		'bilirubin',
		'egfr',
		'testosterone',
		'testosterone_free',
		'testosterone_free_pt',
		'testosterone_bioavailable',
		'shbg',
		'thyroid_peroxidase_ab',
		'thyroglobulin_antibodies',
		'ggt',
		'lipase',
		'ferritin',
		'iron',
		'tibc',
		'transferrin_saturation',
		'prostatic_specific_ag',
		'ana_screen',
		'rheuamatoid_factor',
		'antigen_antibody',
		'ab_igm',
		'ab_igg',
		'ebnaabigg',
		'h_b_core_ab',	
		'h_b_core_ab_igm',	
		'he_b_surface_ag',	
		'h_a_igm',
		'h_c_antibody',
		'index_1',
		'labscreen',
		'wbc',
		'rbc',
		'hemoglobin',
		'hematocrit',
		'mcv',
		'mch',
		'mchc',
		'rcdw',
		'platelet_count',
		'mean_platelet_volume',
		'neutrophil',
		'neutrophil_absolute',
		'lymphocyte',
		'lymphocyte_absolute',
		'monocyte',
		'monocyte_absolute',
		'eosinophil',
		'eosinophil_absolute',
		'basophil',
		'basophil_absolute',

		'homocysteine',
		'vitamin_d',

		'oxldl',
		'ana_pattern',
		'ana_titer',
		'dna_antibody',
		'sm_rnp_antibody',
		'rnp_antibody',
		'sm_antibody',
		'chromatin',
		'sjogren_antibody_a',
		'sjogren_antibody_b',
		'scl_antibody',
		'jo1_antibody',
		'ribosomal_p_antibody',
		'centromere_b_antibody',
		'egfr_non_african_descent', //pending
		'egfr_african_descent', //pending
		'tg_hdl_c',
		'ldl_p',
		'small_ldl_p',
		'ldl_size',
		'hdl_p',
		'large_hdl_p',
		'hdl_size',
		'large_vldl_p',

		'vldl_size',//pending
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

	public function patient()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }

	public function bmds()
    {
        return $this->hasMany(Bmd::class);
    }

	public function bmd() // OKAY //
	{
		/*
		// Regions //
		Spine L1-L4
		Femur Neck
		Total Femur
		Total Body Basic
		Total Body Advanced
		33% Radius
		Radius Total
		Radius Ultradistal
		Lateral Spine
		*/

		// Variables (Start) //
		$bmd = $this->bmd;
		$age = $this->age;
		$gender = $this->gender;
		$region = $this->region;
		// $region = json_encode($this->region);
		// Variables (End) //

		if ($bmd == '' OR $age == '' OR $gender == '' OR $region == '') {
			$data = [
				'expected_bmd' => '',
				'equivalent_age' => ''
			];
		} else {
			$bmd_data = [
				'Female' => [
					'Spine L1-L4' => [
						[ 'age' => 25, 'bmd' => 1.180 ],
						[ 'age' => 35, 'bmd' => 1.180 ],
						[ 'age' => 45, 'bmd' => 1.180 ],
						[ 'age' => 55, 'bmd' => 1.185 ],
						[ 'age' => 65, 'bmd' => 0.990 ],
						[ 'age' => 75, 'bmd' => 0.970 ],
						[ 'age' => 85, 'bmd' => 0.950 ]
					],
					'Femur Neck' => [
						[ 'age' => 25, 'bmd' => 0.990 ],
						[ 'age' => 35, 'bmd' => 0.970 ],
						[ 'age' => 45, 'bmd' => 0.950 ],
						[ 'age' => 55, 'bmd' => 0.880 ],
						[ 'age' => 65, 'bmd' => 0.810 ],
						[ 'age' => 75, 'bmd' => 0.770 ],
						[ 'age' => 85, 'bmd' => 0.730 ]
					],
					'Total Femur' => [
						[ 'age' => 25, 'bmd' => 1.005 ],
						[ 'age' => 35, 'bmd' => 0.995 ],
						[ 'age' => 45, 'bmd' => 0.985 ],
						[ 'age' => 55, 'bmd' => 0.925 ],
						[ 'age' => 65, 'bmd' => 0.865 ],
						[ 'age' => 75, 'bmd' => 0.810 ],
						[ 'age' => 85, 'bmd' => 0.755 ]
					],
					'Total Body Basic' => [
						[ 'age' => 25, 'bmd' => 1.125 ],
						[ 'age' => 35, 'bmd' => 1.125 ],
						[ 'age' => 45, 'bmd' => 1.125 ],
						[ 'age' => 55, 'bmd' => 1.075 ],
						[ 'age' => 65, 'bmd' => 1.025 ],
						[ 'age' => 75, 'bmd' => 1.005 ],
						[ 'age' => 85, 'bmd' => 0.985 ]
					],
					'Total Body Advanced' => [
						[ 'age' => 25, 'bmd' => 1.080 ],
						[ 'age' => 35, 'bmd' => 1.080 ],
						[ 'age' => 45, 'bmd' => 1.080 ],
						[ 'age' => 55, 'bmd' => 1.017 ],
						[ 'age' => 65, 'bmd' => 0.954 ],
						[ 'age' => 75, 'bmd' => 0.929 ],
						[ 'age' => 85, 'bmd' => 0.904 ]
					],
					'33% Radius' => [
						[ 'age' => 25, 'bmd' => 0.887 ],
						[ 'age' => 35, 'bmd' => 0.887 ],
						[ 'age' => 45, 'bmd' => 0.887 ],
						[ 'age' => 55, 'bmd' => 0.847 ],
						[ 'age' => 65, 'bmd' => 0.767 ],
						[ 'age' => 75, 'bmd' => 0.687 ],
						[ 'age' => 85, 'bmd' => 0.607 ]
					],
					'Radius Total' => [
						[ 'age' => 25, 'bmd' => 0.683 ],
						[ 'age' => 35, 'bmd' => 0.683 ],
						[ 'age' => 45, 'bmd' => 0.683 ],
						[ 'age' => 55, 'bmd' => 0.655 ],
						[ 'age' => 65, 'bmd' => 0.600 ],
						[ 'age' => 75, 'bmd' => 0.545 ],
						[ 'age' => 85, 'bmd' => 0.489 ]
					],
					'Radius Ultradistal' => [
						[ 'age' => 25, 'bmd' => 0.469 ],
						[ 'age' => 35, 'bmd' => 0.469 ],
						[ 'age' => 45, 'bmd' => 0.469 ],
						[ 'age' => 55, 'bmd' => 0.448 ],
						[ 'age' => 65, 'bmd' => 0.407 ],
						[ 'age' => 75, 'bmd' => 0.365 ],
						[ 'age' => 85, 'bmd' => 0.324 ]
					],
					'Lateral Spine' => [
						[ 'age' => 25, 'bmd' => 0.790 ],
						[ 'age' => 35, 'bmd' => 0.770 ],
						[ 'age' => 45, 'bmd' => 0.715 ],
						[ 'age' => 55, 'bmd' => 0.625 ],
						[ 'age' => 65, 'bmd' => 0.535 ],
						[ 'age' => 75, 'bmd' => 0.495 ],
						[ 'age' => 85, 'bmd' => 0.455 ]
					],
				],
				'Male' => [
					'Spine L1-L4' => [
						[ 'age' => 25, 'bmd' => 1.220 ],
						[ 'age' => 35, 'bmd' => 1.220 ],
						[ 'age' => 45, 'bmd' => 1.210 ],
						[ 'age' => 55, 'bmd' => 1.189 ],
						[ 'age' => 65, 'bmd' => 1.168 ],
						[ 'age' => 75, 'bmd' => 1.147 ],
						[ 'age' => 85, 'bmd' => 1.126 ]
					],
					'Femur Neck' => [
						[ 'age' => 25, 'bmd' => 1.090 ],
						[ 'age' => 35, 'bmd' => 1.050 ],
						[ 'age' => 45, 'bmd' => 1.010 ],
						[ 'age' => 55, 'bmd' => 0.970 ],
						[ 'age' => 65, 'bmd' => 0.930 ],
						[ 'age' => 75, 'bmd' => 0.890 ],
						[ 'age' => 85, 'bmd' => 0.850 ]
					],
					'Total Femur' => [
						[ 'age' => 25, 'bmd' => 1.105 ],
						[ 'age' => 35, 'bmd' => 1.075 ],
						[ 'age' => 45, 'bmd' => 1.045 ],
						[ 'age' => 55, 'bmd' => 1.020 ],
						[ 'age' => 65, 'bmd' => 0.995 ],
						[ 'age' => 75, 'bmd' => 0.965 ],
						[ 'age' => 85, 'bmd' => 0.935 ]
					],
					'Total Body Basic' => [
						[ 'age' => 25, 'bmd' => 1.220 ],
						[ 'age' => 35, 'bmd' => 1.220 ],
						[ 'age' => 45, 'bmd' => 1.220 ],
						[ 'age' => 55, 'bmd' => 1.220 ],
						[ 'age' => 65, 'bmd' => 1.195 ],
						[ 'age' => 75, 'bmd' => 1.170 ],
						[ 'age' => 85, 'bmd' => 1.145 ]
					],
					'Total Body Advanced' => [
						[ 'age' => 25, 'bmd' => 1.200 ],
						[ 'age' => 35, 'bmd' => 1.200 ],
						[ 'age' => 45, 'bmd' => 1.200 ],
						[ 'age' => 55, 'bmd' => 1.200 ],
						[ 'age' => 65, 'bmd' => 1.169 ],
						[ 'age' => 75, 'bmd' => 1.137 ],
						[ 'age' => 85, 'bmd' => 1.106 ]
					],
					'33% Radius' => [
						[ 'age' => 25, 'bmd' => 1.002 ],
						[ 'age' => 35, 'bmd' => 1.002 ],
						[ 'age' => 45, 'bmd' => 1.002 ],
						[ 'age' => 55, 'bmd' => 0.982 ],
						[ 'age' => 65, 'bmd' => 0.942 ],
						[ 'age' => 75, 'bmd' => 0.902 ],
						[ 'age' => 85, 'bmd' => 0.862 ]
					],
					'Radius Total' => [
						[ 'age' => 25, 'bmd' => 0.762 ],
						[ 'age' => 35, 'bmd' => 0.762 ],
						[ 'age' => 45, 'bmd' => 0.762 ],
						[ 'age' => 55, 'bmd' => 0.749 ],
						[ 'age' => 65, 'bmd' => 0.721 ],
						[ 'age' => 75, 'bmd' => 0.694 ],
						[ 'age' => 85, 'bmd' => 0.667 ]
					],
					'Radius Ultradistal' => [
						[ 'age' => 25, 'bmd' => 0.528 ],
						[ 'age' => 35, 'bmd' => 0.528 ],
						[ 'age' => 45, 'bmd' => 0.528 ],
						[ 'age' => 55, 'bmd' => 0.518 ],
						[ 'age' => 65, 'bmd' => 0.498 ],
						[ 'age' => 75, 'bmd' => 0.478 ],
						[ 'age' => 85, 'bmd' => 0.458 ]
					],
					'Lateral Spine' => [
						[ 'age' => 25, 'bmd' => 0.930 ],
						[ 'age' => 35, 'bmd' => 0.930 ],
						[ 'age' => 45, 'bmd' => 0.890 ],
						[ 'age' => 55, 'bmd' => 0.810 ],
						[ 'age' => 65, 'bmd' => 0.730 ],
						[ 'age' => 75, 'bmd' => 0.720 ],
						[ 'age' => 85, 'bmd' => 0.710 ]
					],
				]
			];

			/*
			if (!isset($bmd_data[$gender][$region])) {
				$data = [
					'expected_bmd' => '',
					'equivalent_age' => ''
				];

				return $data;
			}
			*/
			$data_points = $bmd_data[$gender][$region];

			$expected_bmd = $data_points[0]['bmd'];
			foreach ($data_points AS $data_point_index => $data_point) {
				if ($age == $data_point['age']) {
					$expected_bmd[] = $data_point['bmd'];
				} else if ($age > $data_point['age']) {
					if (isset($data_points[$data_point_index + 1])) {
						$age_from = $data_point['age'];
						$age_to = $data_points[$data_point_index + 1]['age'];

						$bmd_from = $data_point['bmd'];
						$bmd_to = $data_points[$data_point_index + 1]['bmd'];

						$age_difference = $age_to - $age_from;
						$age_step = $age - $age_from;

						$age_percentage = 0;
						if ($age_difference > 0) {
							$age_percentage = $age_step / $age_difference;
						}

						$bmd_difference = $bmd_from - $bmd_to;
						$bmd_step = $bmd_difference * $age_percentage;

						$expected_bmd = $bmd_from - $bmd_step;
					} else {
						$expected_bmd = $data_point['bmd'];
					}
				}
			}

			// dd($this->gender." ".$this->region." ".$bmd." ".$age." | BMD: ".$bmd_from." to ".$bmd_to." | Age: ".$age_from." to ".$age_to." | Expected BMD: ".$expected_bmd);

			$equivalent_age = $data_points[0]['age'];
			foreach ($data_points AS $data_point_index => $data_point) {
				if ($bmd == $data_point['bmd']) {
					$equivalent_age[] = $data_point['age'];
				} else if ($bmd < $data_point['bmd']) {
					if (isset($data_points[$data_point_index + 1])) {
						$age_from = $data_point['age'];
						$age_to = $data_points[$data_point_index + 1]['age'];

						$bmd_from = $data_point['bmd'];
						$bmd_to = $data_points[$data_point_index + 1]['bmd'];

						$bmd_difference = $bmd_from - $bmd_to;
						$bmd_step = $bmd_from - $bmd;

						$bmd_percentage = 0;
						if ($bmd_difference > 0) {
							$bmd_percentage = $bmd_step / $bmd_difference;
						}

						$age_difference = $age_to - $age_from;
						$age_step = $age_difference * $bmd_percentage;

						$equivalent_age = $age_from + $age_step;
					} else {
						$equivalent_age = $data_point['age'];
					}
				}
			}

			// dd($this->gender." ".$this->region." ".$bmd." ".$age." | BMD: ".$bmd_from." to ".$bmd_to." | Age: ".$age_from." to ".$age_to." | Equivalent Age: ".$equivalent_age);

			$data = [
				'expected_bmd' => round($expected_bmd, 3),
				'equivalent_age' => round($equivalent_age)
			];
		}

		return $data;
	}

	public function risk_score() // OKAY // AFI //
	{
		/*
		// Reference: https://www.mesa-nhlbi.org/MESACHDRisk/MesaRiskScore/RiskScore.aspx

		$url = "https://www.mesa-nhlbi.org/MESACHDRisk/MesaRiskScore/api/score/m/46/1/0/0/0/2/2/80/0/0/120";
		GET api/score/{gender}/{age}/{ethnicity}/{diabetes}/{smoke}/{fhhx}/{chol}/{hdl}/{sbp}/{lipid}/{htnmed}/{cac}

		Sample Data:
		Male, 46, 1
		0, 0, 0,
		2, 2, 80
		0, 0, 120

		Output:
		cac_riskscore = 3.4%
		nocac_riskscore = 1.2%
		*/

		// Variables (Start) //
		$age = $this->age;
		$ethnicity = $this->ethnicity;
		$diabetes = $this->diabetes;
		$smoke = $this->smoke;
		$fhhx = $this->fhhx;
		$chol = $this->chol;
		$hdl = $this->hdl;
		$sbp = $this->sbp;
		$lipid = $this->lipid;
		$htnmed = $this->htnmed;
		$cac = $this->cac;
		// Variables (End) //

		if ($ethnicity == '' OR $diabetes == '' OR $smoke == '' OR $fhhx == '' OR $chol == '' OR $hdl == '' OR $sbp == '' OR $lipid == '' OR $htnmed == '' OR $cac == '') {
			$result_arr = [
				'cac_riskscore' => '',
				'nocac_riskscore' => ''
			];
		} else {
			$gender = "";
			if ($this->gender == 'Female') {
				$gender = "f";
			} else if ($this->gender == 'Male') {
				$gender = "m";
			}

			$url = "https://www.mesa-nhlbi.org/MESACHDRisk/MesaRiskScore/api/score/".
				$gender."/".$age."/".$ethnicity."/".$diabetes."/".$smoke."/".$fhhx."/".$chol."/".$hdl."/".$sbp."/".$lipid."/".$htnmed."/".$cac."";

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$result = curl_exec($ch);
			curl_close($ch);

			$result_arr = json_decode($result, true);
		}

		return $result_arr;
	}

	public function arterial_age() // OKAY // AFI //
	{
		/*
		// Reference: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2621006/pdf/nihms84880.pdf
		*/

		// Variables (Start) //
		$cac = $this->cac;
		// Variables (End) //

		if ($cac == '')
		{
			$data = [
				'arterial_age' => ''
			];
		} else {
			$cac_data = [
				[ 'cac' => 0, 'age' => 39 ],
				[ 'cac' => 10, 'age' => 56 ],
				[ 'cac' => 20, 'age' => 61 ],
				[ 'cac' => 30, 'age' => 64 ],
				[ 'cac' => 40, 'age' => 66 ],
				[ 'cac' => 50, 'age' => 68 ],
				[ 'cac' => 60, 'age' => 69 ],
				[ 'cac' => 70, 'age' => 70 ],
				[ 'cac' => 80, 'age' => 71 ],
				[ 'cac' => 90, 'age' => 72 ],
				[ 'cac' => 100, 'age' => 73 ],
				[ 'cac' => 200, 'age' => 78 ],
				[ 'cac' => 300, 'age' => 80 ],
				[ 'cac' => 400, 'age' => 83 ],
				[ 'cac' => 500, 'age' => 84 ],
				[ 'cac' => 750, 'age' => 87 ],
				[ 'cac' => 1000, 'age' => 89 ],
				[ 'cac' => 1500, 'age' => 92 ],
				[ 'cac' => 2000, 'age' => 94 ],
				[ 'cac' => 2500, 'age' => 96 ]
			];

			$data_points = $cac_data;

			$arterial_age = $data_points[0]['age'];
			foreach ($data_points AS $data_point_index => $data_point) {
				if ($cac == $data_point['cac']) {
					$arterial_age = $data_point['age'];
				} else if ($cac > $data_point['cac']) {
					if (isset($data_points[$data_point_index + 1])) {
						$cac_from = $data_point['cac'];
						$cac_to = $data_points[$data_point_index + 1]['cac'];

						$age_from = $data_point['age'];
						$age_to = $data_points[$data_point_index + 1]['age'];

						$cac_difference = $cac_to - $cac_from;
						$cac_step = $cac - $cac_from;

						$cac_percentage = 0;
						if ($cac_difference > 0) {
							$cac_percentage = $cac_step / $cac_difference;
						}

						$age_difference = $age_from - $age_to;
						$age_step = $age_difference * $cac_percentage;

						$arterial_age = $age_from - $age_step;
					} else {
						$arterial_age = $data_point['age'];
					}
				}
			}

			$data = [
				'arterial_age' => round($arterial_age)
			];
		}

		return $data;
	}

	public function grip_strength() // CHECK // AFI //
	{
		/*
		// Original Formula //
		$right_hand_est_grip_strength = $rc_mu40_right_hand + ($bc_mu40_age * $age) + ($bc_mu40_height * $height) + ($bc_mu40_weight * $weight) + ($bc_mu40_quetelet_index * $quetelet_index);

		// Step 01 //
		$bc_mu40_age * $age = ($rc_mu40_right_hand + ($bc_mu40_height * $height) + ($bc_mu40_weight * $weight) + ($bc_mu40_quetelet_index * $quetelet_index) - $right_hand_est_grip_strength) * 1;
		*/

		// Constant Values //
		$rc_mu40_right_hand = -33.59;
		$rc_mu40_left_hand = -41.82;

		$bc_mu40_height = 0.26;
		$bc_mu40_weight = 0.33;
		$bc_mu40_quetelet_index = 0.31;
		$bc_mu40_age = 0.2;

		// Sample Data //
		/*
		$right_hand_est_grip_strength = 50.05648983;
		$height = 1.77; // Meters
		$weight = 70; // Kg
		$quetelet_index = 22.34351559; // Not sure about this?
		*/

		// Variables (Start) //
		$right_hand_est_grip_strength = $this->right_hand_est_grip_strength;

		$height = $this->height;
		$height_unit = $this->height_unit;

		$weight = $this->weight;
		$weight_unit = $this->weight_unit;

		// Conversions //
		if ($height_unit == 'ft') {
			$height_in_m = $height * 0.3048;
			$height_in_cm = $height_in_m * 100;
		} else if ($height_unit == 'cm') {
			$height_in_m = $height * 0.01;
			$height_in_cm = $height;
		} else if ($height_unit == 'm') {
			$height_in_m = $height;
			$height_in_cm = $height * 100;
		} else if ($height_unit == 'inch') {
			$height_in_m = $height * 0.0254;
			$height_in_cm = $height * 2.54;
		}

		if ($weight_unit == 'g') {
			$weight = $weight * 0.001;
		} else if ($weight_unit == 'lbs') {
			$weight = $weight * 0.453592;
		}
		// Variables (End) //

		if ($right_hand_est_grip_strength == '' OR $height_in_m == '' OR $height_unit == '' OR $weight == '' OR $weight_unit == '') {
			$data = [
				'equivalent_age_for_grip_strength' => ''
			];
		} else {
			$quetelet_index = $weight / ($height_in_m * $height_in_m);

			$equivalent_age_for_grip_strength = (($rc_mu40_right_hand + ($bc_mu40_height * $height_in_cm) + ($bc_mu40_weight * $weight) + ($bc_mu40_quetelet_index * $quetelet_index) - $right_hand_est_grip_strength) * (-1)) / $bc_mu40_age;

			$data = [
				'equivalent_age_for_grip_strength' => round($equivalent_age_for_grip_strength)
			];
		}

		return $data;
	}

	public function lung_age() // OKAY // AFI //
	{
		/*
		// Reference: https://www.empr.com/home/tools/medical-calculators/lung-age/

		Formula
		Age(M) = (0.0414*height-2.19-FEV1)/0.0244
		Age(F) = (0.0342*height-1.578-FEV1)/0.0255

		Input:
		Gender: Male
		Height: 2.00 m
		FEV = 5

		Output: 44.6721

		(0.0414 * 1.8288 - 2.19 - FEV1) / 0.0244
		*/

		// Variables (Start) //
		$gender = $this->gender;
		$fev_1 = $this->fev_1;

		$height = $this->height;
		$height_unit = $this->height_unit;

		// Conversions //
		if ($height_unit == 'ft') {
			$height = $height * 30.48;
		} else if ($height_unit == 'cm') {
			$height = $height;
		} else if ($height_unit == 'm') {
			$height = $height * 100;
		} else if ($height_unit == 'inch') {
			$height = $height * 2.54;
		}
		// Variables (End) //

		if ($gender == '' OR $fev_1 == '' OR $height == '' OR $height_unit == '') {
			$data = [
				'age' => ''
			];
		} else {
			$age = 0;

			if ($gender == 'Male') {
				$age = ((0.0414 * $height) - 2.19 - $fev_1) / 0.0244;
			} else if ($gender == 'Female') {
				$age = ((0.0342 * $height) - 1.578 - $fev_1) / 0.0255;
			} else {
				$age = 0;
			}

			$data = [
				'age' => round($age, 2)
			];
		}

		return $data;
	}

	public function phenotypic_age() // OKAY // AFI //
	{
		/*
		Also it needs to go to 2 decimals for the wbc and creatine, need to make sure you put the units
		on there and make sure to use the usa units so:

		albumin should be g/dL
		creatine mg/dL
		blood sugar mg/dL

		Albumin (g/dL to g/L) -> INPUT * 10
		Creatinine (mg/dL to mmol/L) -> INPUT * 88.401
		Sugar (mg/dL to mmol/L) -> INPUT * 6.4935
		*/

		// Sample Data //
		/*
		$albumin_liver = 49 * 100 = 4900; // B4
		$alp_liver = 86; // C4
		$creatinine_kidney = 91; // D4
		$glucose_pancreas = 6.5; // E4
		$crp_immune = 0.68; // F4
		$lympho_immune = 24; // G4
		$wbc_immune = 5.9; // H4
		$mcv_bone_marrow = 97; // I4
		$rdw_bone_marrow = 13.2; // J4
		$age = 84; // K4
		*/

		// Variables (Start) //
		$albumin_liver = $this->albumin_liver; // B4 (g/dL to g/L)
		$alp_liver = $this->alp_liver; // C4
		$creatinine_kidney = $this->creatinine_kidney; // D4 (mg/dL to umol/L)
		$glucose_pancreas = $this->glucose_pancreas; // E4 (mg/dL to umol/L)
		$crp_immune = $this->crp_immune; // F4
		$lympho_immune = $this->lympho_immune; // G4
		$wbc_immune = $this->wbc_immune; // H4
		$mcv_bone_marrow = $this->mcv_bone_marrow; // I4
		$rdw_bone_marrow = $this->rdw_bone_marrow; // J4
		$age = $this->age; // K4
		// Variables (End) //

		if ($albumin_liver == '' OR $alp_liver == '' OR $creatinine_kidney == '' OR $glucose_pancreas == '' OR $crp_immune == '' OR $lympho_immune == '' OR $wbc_immune == '' OR $mcv_bone_marrow == '' OR $rdw_bone_marrow == '') {
			$data = [
				'biological_age' => '',
				'chances_of_dying' => ''
			];
		} else {
			$albumin_liver = ($albumin_liver * 10); // B4 (g/dL to g/L)
			$creatinine_kidney = ($creatinine_kidney * 88.401); // D4 (mg/dL to umol/L)
			$glucose_pancreas = ($glucose_pancreas * 0.0555); // E4 (mg/dL to umol/L)

			$albumin_liver_multiplier = 1; // B37
			$alp_liver_multiplier = 1; // C37
			$creatinine_kidney_multiplier = 1; // D37
			$glucose_pancreas_multiplier = 1; // E37
			$crp_immune_multiplier = 0.1; // F37
			$lympho_immune_multiplier = 1; // G37
			$wbc_immune_multiplier = 1; // H37
			$mcv_bone_marrow_multiplier = 1; // I37
			$rdw_bone_marrow_multiplier = 1; // J37
			$age_multiplier = 1; // K37

			$albumin_liver_gl = -0.0336; // B39
			$alp_liver_ul = 0.0019; // C39
			$creatinine_kidney_umol = 0.0095; // D39
			$glucose_pancreas_mmol = 0.1953; // E39
			$crp_immune_ln = 0.0954; // F39
			$lympho_immune_percent = -0.012; // G39
			$wbc_immune_cells = 0.0554; // H39
			$mcv_bone_marrow_fl = 0.0268; // I39
			$rdw_bone_marrow_persent = 0.3306; // J39
			$years = 0.0804; // K39

			$g = 0.0076927; // B43
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

			$lincomb = $albumin_liver_weighting_result + $creatinine_kidney_weighting_result + $glucose_pancreas_weighting_result + $crp_immune_weighting_result + $lympho_immune_weighting_result + $mcv_bone_marrow_weighting_result + $rdw_bone_marrow_weighting_result + $alp_liver_weighting_result + $wbc_immune_weighting_result + $years_result + $bo;

			$year = 10; // B42
			$months = $year * 12;

			$mort_score = 1 - exp(-exp($lincomb) * (exp($g*$months) - 1) / $g);
			$phenotypic_age = 141.50225 + log (-0.00553 * log(1-$mort_score)) / 0.090165;
			$dnam_age = $phenotypic_age / (1 + 1.28047 * exp(0.0344329 * (-182.344 + $phenotypic_age)));
			$mscore = 1 - exp(-0.000520363523 * exp(0.090165 * $dnam_age));

			$biological_age = 141.50225 + log(-0.00553 * log(1 - $mort_score)) / 0.090165;
			$chances_of_dying = $mort_score * 100;

			/*
			echo $albumin_liver_result; //b38
			echo $alp_liver_result ; //C38
			echo $creatinine_kidney_result; //D38
			echo $glucose_pancreas_result; //E38
			echo $crp_immune_result; //F38
			echo $lympho_immune_result; //G38
			echo $wbc_immune_result; //H38
			echo $mcv_bone_marrow_result; //I38
			echo $rdw_bone_marrow_result; //J38
			echo $age_result; //K38

			echo $albumin_liver_weighting_result; //b40
			echo $alp_liver_weighting_result; //C40
			echo $creatinine_kidney_weighting_result; //d40
			echo $glucose_pancreas_weighting_result; //e40
			echo $crp_immune_weighting_result; //f40
			echo $lympho_immune_weighting_result; //g40
			echo $wbc_immune_weighting_result; //H40
			echo $mcv_bone_marrow_weighting_result; //I40
			echo $rdw_bone_marrow_weighting_result; //J40

			echo $months; //E42
			echo $years_result; //K40

			echo $mort_score; //D46

			echo $lincomb; //B46
			echo $phenotypic_age ; //E46
			echo $dnam_age; //f46
			echo $mscore; //G46
			*/

			$data = [
				'biological_age' => round($biological_age, 1),
				'chances_of_dying' => round($chances_of_dying, 1)
			];
		}

		return $data;
	}

	public function vascular_age_report() // AFI //
	{
		// Variables (Start) //
		$pwv = $this->pwv;
		// Variables (End) //

		if ($pwv == '') {
			$data = [
				'vascular_age' => ''
			];
		} else {
			$vascular_age = (sqrt(($pwv - 5.55) / (0.83 * 10 ** -3)));

			$data = [
				'vascular_age' => round($vascular_age, 2)
			];
		}

		return $data;
	}

	public function vascular_age_report_2() // AFI //
	{
		/* Variables (Start) */
		$gender = $this->gender;
		$age = $this->age;
		$imt = $this->imt;
		/* Variables (End) */

		if ($gender == '' OR $age == '' OR $imt == '') {
			$data = [
				'vascular_age_2' => '',
				'percentile' => '',
			];
		} else {
			if ($gender == 'Male') {
				$vascular_age_2 = ($imt -323.5) / 5.201;
				$z = ($imt-323.5-(5.201 * $age))/(57.24 + (0.9027 * $age));
			} else if ($gender == 'Female') {
				$vascular_age_2 = ($imt -321.7) / 4.971;
				$z = ($imt-321.7-(4.971 * $age))/(54.50 + (0.8256 * $age));
			}

			if ($z < -1.96) {
				$percentile = '< 2.5 %';
			} else if ($z >= -1.96 AND $z < -1.28) {
				$percentile = '2.5 - 10 %';
			} else if ($z >= -1.28 AND $z < -0.67) {
				$percentile = '10 - 25 %';
			} else if ($z >= -0.67 AND $z < 0) {
				$percentile = '25 - 50 %';
			} else if ($z >= 0 AND $z < 0.67) {
				$percentile = '50 - 75 %';
			} else if ($z >= 0.67 AND $z < 1.28) {
				$percentile = '75 - 90 %';
			} else if ($z >= 1.28 AND $z < 1.96) {
				$percentile = '90 - 97.5 %';
			} else if ($z >= 1.96) {
				$percentile = '> 97.5 %';
			}

			$data = [
				'vascular_age_2' => round($vascular_age_2),
				'percentile' => $percentile,
			];
		}

		return $data;
	}

	public function balance_age_report()
	{
		/* Variable Start */
		$bbt_result = $this->bbt_result;
		$age = $this->age;

		$x_variable_1 = 0.371090209926078;
		$intercept = 10.6332344055007;
		/* Variable End */

		$balance_age = 0;

		if ($age == '') {
			$data = [
				'balance_age' => ''
			];
		} else {
			$balance_age = ($x_variable_1 * $bbt_result) + $intercept;

			$data = [
				'balance_age' => $balance_age
			];
		}

		return $data;
	}

	public function ekg_heart_age_report()
	{
		/* Variable (Start) */
		$pr_interval = $this->pr_interval;
		/* Variable (End) */

		if ($pr_interval == '') {
			$data = [
				'ekg_heart_age' => ''
			];
		} else {
			$ekg_heart_age = (1.96 * $pr_interval) - 259.23;

			$data = [
				'ekg_heart_age' => $ekg_heart_age
			];
		}

		return $data;
	}

	public function heart_age_report()
	{
		// Variables (Start) //
		$hrv = $this->hrv;
		// Variables (End) //

		if ($hrv == '') {
			$data = [
				'heart_age' => ''
			];
		} else {
			$heart_age = (85 - $hrv) / 0.57;

			$data = [
				'heart_age' => round($heart_age, 2)
			];
		}

		return $data;
	}

	public function heart_age_average_report()
	{
		// Variables (Start) //
		$pwv = $this->pwv;
		$imt = $this->imt;
		$arterial_age = $this->arterial_age;
		$heart_age = $this->heart_age;
		$ekg_heart_age = $this->ekg_heart_age;
		// Variables (End) //

		if ($pwv == '' OR $imt == '' OR $arterial_age == '' OR $heart_age == '') {
			$data = [
				'heart_age_average' => ''
			];
		} else {
			$heart_age_average = ($pwv + $imt + $arterial_age + $heart_age + $ekg_heart_age) / 5;

			$data = [
				'heart_age_average' => $heart_age_average
			];
		}

		return $data;
	}

	public function musculoskeletal_age_report()
	{
		// Variables (Start) //
		$bmd = $this->bmd;
		$equivalent_age_for_grip_strength = $this->equivalent_age_for_grip_strength;
		$balance_age = $this->balance_age;
		$tanita_metabolic_age = $this->tanita_metabolic_age;
		// Variables (End) //

		if ($bmd == '' OR $equivalent_age_for_grip_strength == '' OR $balance_age == '' OR $tanita_metabolic_age == '') {
			$data = [
				'musculoskeletal_age' => ''
			];
		} else {
			$musculoskeletal_age = ($bmd + $equivalent_age_for_grip_strength + $balance_age + $tanita_metabolic_age) / 4;

			$data = [
				'musculoskeletal_age' => $musculoskeletal_age
			];
		}

		return $data;
	}

	public function brain_age_report()
	{
		// Variables (Start) //
		$psychomotor_speed = $this->psychomotor_speed;
		// Variables (End) //

		if ($psychomotor_speed == '') {
			$data = [
				'brain_age' => ''
			];
		} else {
			$brain_age = (-0.80 * $psychomotor_speed) + 178.64;

			$data = [
				'brain_age' => $brain_age
			];
		}

		return $data;
	}

	public function lab_age_report()
	{
		// Variables (Start) //
		$trudiagnostic_truage = $this->trudiagnostic_truage;
		$biological_age = $this->biological_age;
		// Variables (End) //

		if ($trudiagnostic_truage == '' OR $biological_age == '') {
			$data = [
				'lab_age' => ''
			];
		} else {
			$lab_age = ($trudiagnostic_truage + $biological_age) / 2;

			$data = [
				'lab_age' => $lab_age
			];
		}

		return $data;
	}

	public function bio_age_report()
	{
		// Variables (Start) //
		$heart_age = $this->heart_age;
		$musculoskeletal_age = $this->musculoskeletal_age;
		$brain_age = $this->brain_age;
		$equivalent_age_for_lung = $this->equivalent_age_for_lung;
		$skin_age = $this->skin_age;
		$lab_age = $this->lab_age;
		// Variables (End) //

		if ($heart_age == '' OR $musculoskeletal_age == '' OR $brain_age == '' OR $equivalent_age_for_lung == '' OR $skin_age == '' OR $lab_age == '') {
			$data = [
				'bio_age' => ''
			];
		} else {
			$bio_age = ($heart_age + $musculoskeletal_age + $brain_age + $equivalent_age_for_lung + $skin_age + $lab_age) / 6;

			$data = [
				'bio_age' => $bio_age
			];
		}

		return $data;
	}


	public function hs_crp_calculate()
    {
        // Retrieve input data from the request
        $hs_crp = $this->hs_crp;


        // Perform the necessary calculations based on the input data
        $calculatedHsCRP = $hs_crp * 2; // Replace with your actual calculation

        $data = [
            'hs_crp_calculate' => $calculatedHsCRP
        ];

        // Return the calculated hs-CRP value or interpretation
        return $data;
    }
}
