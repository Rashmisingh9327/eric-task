<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Report</title>
</head>
<body>
@foreach ($cardiometabolicreport AS $report)
  <div class="page first-page d-flex flex-column">
    <div class="left-content d-flex flex-column">
      <div class="heading d-flex align-center justify-center">
        <div class="logo">
          <img src="images/logo.png" alt="logo" />
        </div>
      </div>
      <hr class="blue-divider" />
      <div class="info d-flex flex-column">
        <table class="table table-borderd">
          <h2>Patient's Details</h2>
          <tr>
            <td>
            <div class="info-item">
              <div class="info-heading">Patient First Name</div>
            </div>
            </td>
            <td>
            <div class="info-item">
              <div class="info-details">{{ $report->patient->first_name }}</div>
            </div>
            </td>
          </tr>
          <tr>
            <td>
            <div class="info-item">
              <div class="info-heading">Patient Last Name</div>
            </div>
            </td>
            <td>
            <div class="info-item">
              <div class="info-details">{{ $report->patient->last_name }}</div>
            </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="info-item">
                <div class="info-heading">phone</div>
              </div>
            </td>
            <td>
              <div class="info-item">
                <div class="info-details">{{ $report->patient->phone }}</div>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="info-item">
                <div class="info-heading">Email</div>
              </div>
            </td>
            <td>
            <div class="info-item">
          <div class="info-details">{{ $report->patient->email }}</div>
        </div>
            </td>
          </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Address</div>
        </div>
          </td>

          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->patient->address_line_1 }}</div>
        </div>
          </td>
        </tr>
        
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">City</div>
        </div>
          </td>

          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->patient->city }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Country</div>
        </div>
          </td>

          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->patient->country }}</div>
        </div>
          </td>
        </tr>
        <br>

        <h2>INFLAMMATION</h2>
        <br>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HS CRP</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hs_crp }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HS CRP Calculation</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hs_crp_calculate }}</div>
        </div>
          </td>
        </tr>
        
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Microalbumin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->microalbumin }}</div>
        </div>
          </td>
        </tr>
        <br>
        <h2>Lipid Panel</h2>
        <br>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Creatinine Urine Random</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->creatinine_urine_random }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Cholesterol Total</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->cholesterol_total }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HDL Cholesterol</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hdl_cholesterol }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Triglycerides</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->triglycerides }}</div>
        </div>
          </td>
        </tr>
    
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">LDL Cholesterol Calculated</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ldl_cholesterol_calculated }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Chol HDL c</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->chol_hdl_c }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Non HDL Cholesterol</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->non_hdl_cholesterol }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">TG HDL C</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->tg_hdl_hdl_C }}</div>
        </div>
          </td>
        </tr>
        <br>
        <h2>Lipoprotein Fractionation, NMR</h2>
        <br>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Lipoprotein Fractionation_nmr</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->lipoprotein_fractionation_nmr }}</div>
        </div>
          </td>
        </tr>
        <br>
        <h2>METABOLIC</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Glucose</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->glucose }}</div>
        </div>
          </td>
        </tr>
        
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Insulin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->insulin }}</div>
        </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">hba1c</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hba1c }}</div>
        </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Estimated Average Glucose</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->estimated_average_glucose }}</div>
        </div>
          </td>
        </tr>
        <br>
        <h2>VITAMINS/SUPPLEMENTS</h2>
        <br>
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Vitamin_b12</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->vitamin_b12 }}</div>
        </div>
        </td>
       </tr>

       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Lc ms</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->lc_ms }}</div>
        </div>
        </td>
       </tr>
       <br>
       <h2>FATTY ACIDS</h2>
       <br>

       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Omega Check</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->omegacheck }}</div>
        </div>
        </td>
       </tr>
        
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Arachidonic Acid Epa Ratio</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->arachidonic_acid_epa_ratio }}</div>
        </div>
        </td>
       </tr>
        
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Omega 6 total</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->omega6_total }}</div>
        </div>
        </td>
       </tr>
      
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Arachidonic Acid</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->arachidonic_acid }}</div>
        </div>
        </td>
       </tr>
       
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Linoleic Acid</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->linoleic_acid }}</div>
        </div>
        </td>
       </tr>

       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Omega-3 Total</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->omega3_total }}</div>
        </div>
        </td>
       </tr>


        <br>
        <h2>HYPERTENSION/HEART FAILURE</h2>
        <br>
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Nt Probnp</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->nt_probnp }}</div>
        </div>
        </td>
       </tr>
       <br>
       <h2>GENERAL CHEMISTRY</h2>
       <br>
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Creatine Kinase</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->creatine_kinase }}</div>
        </div>
        </td>
       </tr>
        
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">Uric Acid</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->uric_acid }}</div>
        </div>
        </td>
       </tr>
        <br>
        <h2>HORMONES</h2>
        <br>
       <tr>
        <td>
        <div class="info-item">
          <div class="info-heading">DHEAS</div>
        </div>
        </td>
        <td>
        <div class="info-item">
          <div class="info-details">{{ $report->dhea_s }}</div>
        </div>
        </td>
       </tr>
        <br>
        <h2>THYROID FUNCTION</h2>
        <br>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Thyroid</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->thyroid_stimulating_hormone }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Thyroxine</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->thyroxine }}</div>
        </div>
          </td>
        </tr>


        <!-- routine panel -->
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Glucose</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->glucose }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Calcium</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->calcium }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Sodium</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->sodium }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Potassium</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->potassium }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Chloride</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->chloride }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">CO2</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->co2 }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">BUN</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->bun }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">BUN/Creatinine Ratio</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->bun_creatinine_ratio }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Protein</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->protein }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Albumin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->albumin }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Globulin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->globulin }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Albumin/Globulin Ratio</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->albumin_globulin_ratio }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">ALP</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->alp }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">ALT</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->alt }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">AST</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ast }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Bilirubin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->bilirubin }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">eGFR</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->egfr }}</div>
        </div>
          </td>
        </tr>

        <h2><b>THYROID FUNCTION</b></h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Thyroglobulin Antibodies</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->thyroglobulin_antibodies }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Thyroid Peroxidase Ab</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->thyroid_peroxidase_ab }}</div>
        </div>
          </td>
        </tr>

        <h2><b>ENZYMES</b></h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Gamma Glutamyl Transferase (GGT)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ggt }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">LIPASE</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->lipase }}</div>
        </div>
          </td>
        </tr>

        <h2>ANEMIA/IRON METABOLISM</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Ferritin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ferritin }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Iron</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->iron }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">TIBC</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->tibc }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Transferrin Saturation</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->transferrin_saturation }}</div>
        </div>
          </td>
        </tr>

        <h2>TUMOR MARKER</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Prostatic Specific Ag, Total</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->prostatic_specific_ag }}</div>
        </div>
          </td>
        </tr>

        <h2>IMMUNE</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">ANA SCREEN, IFA</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ana_screen }}</div>
        </div>
          </td>
        </tr>

        <h2>RHEUMATOID FACTOR</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">RHEUMATOID FACTOR</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->rheuamatoid_factor }}</div>
        </div>
          </td>
        </tr>

        <h2>VIRUS/INFECTIOUS DISEASE</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">EBV Early Antigen Antibody</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->antigen_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">EBV VCA AB (IGM)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ab_igm }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">EBV VCA AB (IGG)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ab_igg }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">EBV EBNA AB (IGG)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ebnaabigg }}</div>
        </div>
          </td>
        </tr>


        <h2>Hepatitis Testing</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HEPATITIS B CORE AB(AMD)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->h_b_core_ab }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HEPATITIS B SURFACE AG(AMD)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->he_b_surface_ag }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HEPATITIS A IGM</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->h_a_igm }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HEPATITIS C ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->h_c_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">INDEX</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->index_1 }}</div>
        </div>
          </td>
        </tr>

        <h2>Lyme Disease Antibody with Reflex to Blot (IgG, IgM)</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">LYME AB SCREEN</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->labscreen }}</div>
        </div>
          </td>
        </tr>

        <h2>HEMATOLOGY</h2>
        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">WBC</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->wbc }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">RBC</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->rbc }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Hemoglobin</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hemoglobin }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Hematocrit</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hematocrit }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">MCV</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->mcv }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">MCH</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->mch }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">MCHC</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->mchc }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Red Cell Distribution Width</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->rcdw }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Platelet Count</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->platelet_count }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Mean Platelet Volume</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->mean_platelet_volume }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Neutrophil %</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->neutrophil }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Neutrophil Absolute</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->neutrophil_absolute }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Lymphocyte %</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->lymphocyte }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Lymphocyte Absolute</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->lymphocyte_absolute }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Monocyte %</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->monocyte }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Monocyte Absolute</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->monocyte_absolute }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Eosinophil %</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->eosinophil }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Eosinophil Absolute</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->eosinophil_absolute }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Basophil %</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->basophil }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Basophil Absolute</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->basophil_absolute }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">OxLDL</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->oxldl }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">ANA PATTERN</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ana_pattern }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">ANA TITER</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ana_titer }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">DNA (DS) ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->dna_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">SM/RNP ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->sm_rnp_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">RNP ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->rnp_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">SM ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->sm_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">CHROMATIN (NUCLEOSOMAL)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->chromatin }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">SJOGREN'S ANTIBODY (SS-A)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->sjogren_antibody_a }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">SJOGREN'S ANTIBODY (SS-A)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->sjogren_antibody_a }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">SJOGREN'S ANTIBODY (SS-B)</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->sjogren_antibody_b }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">SCL-70 ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->scl_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">JO-1 ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->jo1_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">RIBOSOMAL P ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ribosomal_p_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">CENTROMERE B(AMD) ANTIBODY</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->centromere_b_antibody }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">TG/HDL-C</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->tg_hdl_c }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">LDL-P</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ldl_p }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Small LDL-P</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->small_ldl_p }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">LDL Size</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->ldl_size }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HDL-P</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hdl_p }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Large HDL-P</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->large_hdl_p }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">HDL Size</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->hdl_size }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Large VLDL-P</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->large_vldl_p }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">Large HDL-P</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->large_hdl_p }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">VLDL Size</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->vldl_size }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">EGFR Non African Descent</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->egfr_non_african_descent }}</div>
        </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="info-item">
          <div class="info-heading">EGFR African Descent</div>
        </div>
          </td>
          <td>
          <div class="info-item">
          <div class="info-details">{{ $report->egfr_african_descent }}</div>
        </div>
          </td>
        </tr>


        </table>
      </div>
      
    </div>
  </div>



  
@endforeach
</body>
</html>
