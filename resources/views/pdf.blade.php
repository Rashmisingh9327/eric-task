<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Report PDF</title>
        <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->
      <style>
   
.d-flex {
  display: flex;
}

.flex-column {
  flex-direction: column;
}

.align-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.flex-wrap {
  flex-wrap: wrap;
}

.text-capitalize {
  text-transform: capitalize;
}

.w-100 {
  width: 100%;
}

.color-blue {
  color: #029ae3;
}

.bg-blue {
  background: #029ae3;
}

.color-green {
  color: #a6c33a;
}

.color-white {
  color: #fff;
}

.color-light-green {
  color: #a8c43b;
}

.color-light-blue {
  color: #039be6 !important;
}

.line {
  height: 4px;
  width: 100%;
  background-color: #a6c33a;
}

.mb-4 {
  margin-bottom: 4px;
}

.p-10 {
  padding: 10px;
}

.text-center {
  text-align: center !important;
}

.page {
  position: relative;
  max-width: 21cm;
  margin: 50px auto;
  height: 29.7cm;
  border: 1px solid #000;
  padding-top: 23px;
}
.page .left-content {
  position: absolute;
  left: 30px;
  padding-bottom: 30px;
  border-radius: 30px;
  width: 230px;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
  overflow: hidden;
  z-index: 2;
  background: #fff;
}
.page .left-content .blue-divider {
  height: 4px;
  width: 100%;
  background-color: #029ae3;
  border: none;
}
.page .left-content .heading {
  padding: 10px 20px 8px;
  gap: 20px;
}
/* .page .left-content .heading .logo img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}  */
.page .left-content .info,
.page .left-content .instructions,
.page .left-content .contact {
  padding: 20px 10px;
  gap: 10px;
}
.page .left-content .info .info-heading,
.page .left-content .instructions .info-heading,
.page .left-content .contact .info-heading {
  color: #029be5;
}
.page .left-content .info .info-details,
.page .left-content .instructions .info-details,
.page .left-content .contact .info-details {
  color: #2d2d2d;
}
.page .left-content .info .info-sub-details,
.page .left-content .instructions .info-sub-details,
.page .left-content .contact .info-sub-details {
  color: #a2a2a2;
}
.page .left-content .info .info-link,
.page .left-content .instructions .info-link,
.page .left-content .contact .info-link {
  text-decoration: underline;
}
.page .left-content .info .info-m-no,
.page .left-content .instructions .info-m-no,
.page .left-content .contact .info-m-no {
  color: #039be6;
}
.page .first-h1 {
  padding-left: 34%;
  padding-top: 8px;
  padding-bottom: 8px;
  background: #fff;
}
.page .first-h1 span {
  margin-left: 4px;
}
.page .right-content {
  background: #ecf3ec;
  height: 100%;
}
.page .right-content .heading-section {
  position: relative;
  padding: 8px;
  gap: 8px;
  margin-bottom: 4px;
}
.page .right-content .heading-section.second {
  padding-right: 150px;
}
.page .right-content .heading-section .card {
  position: absolute;
  top: -10px;
  right: 30px;
  border-radius: 10px;
  background: #fff;
  height: 110px;
  padding: 40px;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
  color: #039be5;
}
.page .right-content .heading-section .card .grade {
  color: #02c7e5;
}
.page .right-content .inner-wrapper {
  padding-left: 260px;
}
.page .right-content .inner-wrapper .list {
  margin-top: 12px;
  justify-content: space-around;
}
.page .right-content .inner-wrapper .list .list-row {
  gap: 10px;
}
.page .right-content .inner-wrapper .list .list-row .list-item {
  gap: 8px;
}
.page .right-content .inner-wrapper .list .list-row .list-item:nth-child(4n+1) .list-indecator {
  color: #039be4;
}
.page .right-content .inner-wrapper .list .list-row .list-item:nth-child(4n+2) .list-indecator {
  color: #02c8e5;
}
.page .right-content .inner-wrapper .list .list-row .list-item:nth-child(4n+3) .list-indecator {
  color: #02e596;
}
.page .right-content .inner-wrapper .list .list-row .list-item:nth-child(4n+4) .list-indecator {
  color: #a8c43c;
}
.page .right-content .inner-wrapper .biomarkers {
  padding: 10px 15px;
}
.page .right-content .inner-wrapper .biomarkers .text {
  font-size: 16px;
  font-weight: 600;
  line-height: 1.5;
  color: #333;
  margin-bottom: 8px;
}
.page .right-content .inner-wrapper .biomarkers .tabs {
  gap: 8px;
  justify-content: space-between;
}
.page .right-content .inner-wrapper .biomarkers .tabs .tab {
  background: white;
  border-radius: 40px;
  overflow: hidden;
  align-items: center;
  padding-left: 4px;
  gap: 4px;
  width: 150px;
  justify-content: space-between;
}
.page .right-content .inner-wrapper .biomarkers .tabs .tab .img-wrapper {
  height: 35px;
  width: 35px;
  border-radius: 50%;
}
.page .right-content .inner-wrapper .biomarkers .tabs .tab .img-wrapper img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.page .right-content .inner-wrapper .biomarkers .tabs .tab .details {
  padding: 2px 15px;
  border-radius: 40px;
}
.page .right-content .cards-wrapper {
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
  gap: 10px;
  justify-content: space-between;
}
.page .right-content .cards-wrapper .card {
  width: 30%;
  gap: 8px;
  justify-content: space-between;
}
.page .right-content .cards-wrapper .card .card-image {
  width: 70px;
  min-width: 70px;
  height: 100%;
  align-self: center;
}
.page .right-content .cards-wrapper .card .card-image img {
  width: 100%;
  height: 100%;
  -o-object-fit: contain;
     object-fit: contain;
}
.page .right-content .cards-wrapper .card .card-details {
  flex: 1 1;
}
.page .right-content .cards-wrapper .card .card-details .primary {
  color: #039be6;
}
.page .right-content .cards-wrapper .card .card-details .card-details {
  color: #2e2e2e;
}
.page.second .heading {
  padding: 0px 30px 20px;
  justify-content: space-between;
  align-items: center;
}
 /* .page.second .heading .logo {
  height: 70px;
}  */
/* .page.second .heading .logo img {
  height: 100%;
}  */
.page.second .heading .text {
  flex: 1 1;
  text-align: center;
}
.page.second .table {
  margin: 50px 20px;
  background: #f4f7e6;
}
.page.second .table table {
  border-collapse: collapse;
  border-spacing: 0;
}
.page.second .table th {
  color: #fff !important;
}
.page.second .table th,
.page.second .table td {
  text-align: left;
  padding: 6px 6px;
  border-bottom: 1px solid #ddd;
  color: #2f3c42;
}
.page.second .table tr:nth-child(2n) {
  background: #f4f7e6;
}
.page.second .table tr {
  background: #ececec;
}
.page.second .table tr .master-row {
  padding: 8px;
  color: #039be4;
  background: #bae3f7;
}
.page.second .table tr td:nth-child(2) {
  color: #a8c43b;
}/*# sourceMappingURL=styles.css.map */
        </style>
    </head>
    <body>
<div class="page first-page d-flex flex-column">
      <div class="left-content d-flex flex-column">
        <div class="heading d-flex align-center justify-center">
          <div class="logo">
          <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo.png'))) }}" width="150px;"/>
          </div>
        </div>
        <hr class="blue-divider" />
        <div class="info d-flex flex-column">
          <div class="info-item">
            <div class="info-heading">Name</div>
            <div class="info-details">Ms. Patient Name</div>
          </div>
          <div class="info-item">
            <div class="info-heading">Provider</div>
            <div class="info-details">Dr. John Doe</div>
            <div class="info-sub-details">Cardiovascular Department</div>
          </div>
          <div class="info-item">
            <div class="info-heading">Visit</div>
            <div class="info-details">03/01/2021</div>
            <div class="info-details">(Follow-Up 9)</div>
          </div>
        </div>
        <hr class="blue-divider" />
        <div class="instructions">
          <div class="info-heading">Patient Portal Instructions</div>
          <div class="info-details">
            Access your patient portal, powered by PhysioAge Health Analytics,
            from your device or desktop at
          </div>
          <div class="info-link color-light-green">
            https://welllifem.com.pages.on-traport.net/ExecutivePhysicals
          </div>
        </div>
        <hr class="blue-divider" />
        <div class="contact">
          <div class="info-details">
            You may contact Well Life Family Medicine by calling us at
          </div>
          <div class="info-m-no">(806) 355-9355</div>
        </div>
      </div>
      <h1 class="first-h1 color-blue w-100 d-flex justify-center">
        Executive <span class="color-green">Physical Exam</span>
      </h1>
      <div class="right-content w-100">
        <div class="inner-wrapper d-flex flex-column align-center w-100">
          <div
            class="heading-section bg-blue w-100 d-flex flex-column align-center"
          >
            <h1 class="summary color-white">Your Result Summary</h1>
            <span class="visit color-white"
              >Visit your patient to see individual results</span
            >
          </div>
          <div class="w-100 line"></div>
          <div class="biomarkers d-flex flex-column">
            <p class="text">Your Biomarkers of Aging</p>
            <div class="d-flex tabs flex-wrap">
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/bubble.png'))) }}" width="20px" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">PhysioAge</span>
                  <span class="color-white">51.1 Years</span>
                </div>
              </div>
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="{{ asset('images/dna.png') }}" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">TelomerAge</span>
                  <span class="color-white">58 Years</span>
                </div>
              </div>
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="{{ asset('images/shield.png') }}" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">ImmunoAge</span>
                  <span class="color-white">54 Years</span>
                </div>
              </div>
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="{{ asset('images/heart.png') }}" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">CardioAge</span>
                  <span class="color-white">57 Years</span>
                </div>
              </div>
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="{{ asset('images/lungs.png') }}" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">PulmoAge</span>
                  <span class="color-white">88 Years</span>
                </div>
              </div>
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="{{ asset('images/mind.png') }}" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">NeuroAge</span>
                  <span class="color-white">30 Years</span>
                </div>
              </div>
              <div class="tab d-flex">
                <div class="img-wrapper">
                  <img src="{{ asset('images/sun.png') }}" alt="heart" />
                </div>
                <div class="details bg-blue d-flex flex-column">
                  <span class="color-white">CutoAge</span>
                  <span class="color-white">35 Years</span>
                </div>
              </div>
            </div>
          </div>
          <div
            class="heading-section bg-blue w-100 d-flex flex-column align-center second"
          >
            <h1 class="card d-flex align-center justify-center">
              <span class="grade">B -</span> 2.95
            </h1>
            <h1 class="summary color-white">Your Report Card</h1>
            <span class="visit color-white">Your GPA (4-point scale):</span>
          </div>
          <div class="w-100 line"></div>
          <div class="list w-100 d-flex">
            <div class="list-row d-flex flex-column">
              <div class="list-item d-flex">
                <span class="list-indecator">A</span
                ><span>Helthspan Potential</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">B</span><span>Heart Health</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">C</span
                ><span>Cardiovascular Risk</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">D</span
                ><span>Diabetes & Glucose</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">A</span
                ><span>Body Composition</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">A</span><span>Lung Health</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">C</span><span>Brain Health</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">D</span><span>Hormone Health</span>
              </div>
              <div class="list-item d-flex"></div>
            </div>
            <div class="list-row d-flex flex-column">
              <div class="list-item d-flex">
                <span class="list-indecator">A</span><span>Blood</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">B</span><span>Nutrition</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">C</span
                ><span>Trace Essential Minerals</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">D</span
                ><span>Major Essential Minerals</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">B</span
                ><span>Kidney Functions</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">B</span
                ><span>Liver Functions</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">C</span
                ><span>Immune Health and Inflammation</span>
              </div>
              <div class="list-item d-flex">
                <span class="list-indecator">D</span
                ><span>Infectious disease</span>
              </div>
              <div class="list-item d-flex"></div>
            </div>
          </div>
        </div>
        <div
            class="heading-section bg-blue w-100 d-flex flex-column align-center"
          >
            <h1 class="summary color-white">Your Recommendations</h1>
            <h2 class="visit color-white"
              >From Dr. John Doe</h2
            >
          </div>
          <div class="w-100 line"></div>
          <div class="cards-wrapper">
            <div class="card d-flex">
              <div class="card-image">
                <img src="{{ asset('images/diet.png') }}" alt="heart" />
              </div>
              <div class="card-details d-flex flex-column">
                <div class="primary">Time restriction eating</div>
                <div class="card-details">Eat between 12 pm to 8 pm daily Based on your Percent Bodyfat</div>
              </div>
            </div>
            <div class="card d-flex">
              <div class="card-image">
                <img src="{{ asset('images/lifestyle.png') }}" alt="heart" />
              </div>
              <div class="card-details d-flex flex-column">
                <div class="primary">Start meditation</div>
                <!-- <div class="card-details">Eat between 12 pm to 8 pm daily Based on your Percent Bodyfat</div> -->
              </div>
            </div>
            <div class="card d-flex">
              <div class="card-image">
                <img src="{{ asset('images/Exeercise.png') }}" alt="heart" />
              </div>
              <div class="card-details d-flex flex-column">
                <div class="primary">Start HIIT training</div>
                <div class="card-details">follow the guide Based on your ImmunoAge</div>
              </div>
            </div>
            <div class="card d-flex">
              <div class="card-image">
                <img src="{{ asset('images/supplimments.png') }}" alt="heart" />
              </div>
              <div class="card-details d-flex flex-column">
                <div class="primary">Vitamin C 500 mg</div>
                <div class="card-details">Take one a day with food</div>
              </div>
            </div>
            <div class="card d-flex">
              <div class="card-image">
                <img src="{{ asset('images/supplimments.png') }}" alt="heart" />
              </div>
              <div class="card-details d-flex flex-column">
                <div class="primary">TA-65 500 IU</div>
                <div class="card-details">Take one a day first thing in the morning Based on your TelomerAge</div>
              </div>
            </div>
            <div class="card d-flex">
              <div class="card-image">
                <img src="{{ asset('images/hormone.png') }}" alt="heart" />
              </div>
              <div class="card-details d-flex flex-column">
                <div class="primary">Estradiol 5 mg/ml cream 30 ml Topi-pump</div>
                <div class="card-details">Apply 2 pumps behind knees daily after showing Based on your Estradiol</div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="page second ">
      <div class="heading d-flex">
        <div class="logo">
          <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo.png'))) }}" width="150px;"/>

        </div>
        <h1 class="text color-green"><span class="color-blue">Executive</span> Physical Exam</h1>
      </div>
      <div class="mb-4 p-10 bg-blue d-flex align-center justify-center flex-column">
        <h1 class="color-white">Execeptional Results</h1>
        <span class="color-white">Physician's Report</span>
      </div>
      <div class="line w-100"></div>
      <div class="table">
        <table class="w-100">
          <tr>
            <th class="bg-blue color-white">Name</th>
            <th class="bg-blue color-white">Result</th>
            <th class="bg-blue color-white">Units</th>
            <th class="bg-blue color-white">Lab Ref Range</th>
            <th class="bg-blue color-white">Optimal Range</th>
            <th class="bg-blue color-white">Baseline</th>
            <th class="bg-blue color-white">Change</th>
            <th class="bg-blue color-white">Source</th>
          </tr>
          <tr>
            <td colspan="8" class="master-row">Arterial Thickness</td>
          </tr>
          <tr>
            <td>Right Carotid Artery Plaque</td>
            <td>ABSENT</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="color-light-blue text-center" colspan="2">ABSENT</td>
            <td></td>
          </tr>
          <tr>
            <td>Left Carotid Artery Plaque</td>
            <td>ABSENT</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="color-light-blue text-center" colspan="2">ABSENT</td>
            <td></td>
          </tr>
          <tr>
            <td class="master-row" colspan="8">Cardiovascular Risk</td>
          </tr>
          <tr>
            <td>Total Cholesterol</td>
            <td>167</td>
            <td>mg/dL</td>
            <td>125-200</td>
            <td>122-175</td>
            <td></td>
            <td>173</td>
            <td>-3%</td>
          </tr>
          <tr>
            <td>Very Low Density Lipoprotein 1</td>
            <td>16</td>
            <td>mg/dL</td>
            <td>5-40</td>
            <td>&lt;30</td>
            <td></td>
            <td>24</td>
            <td>-33%</td>
          </tr>
          <tr>
            <td>Cholesterol/HDL Ratio</td>
            <td>1.6</td>
            <td>Ratio</td>
            <td></td>
            <td>&lt;3.0</td>
            <td></td>
            <td>3.3</td>
            <td>-52%</td>
          </tr>
          <tr>
            <td>Coenzyme Q10</td>
            <td>1.8</td>
            <td>mg/dL</td>
            <td>0.44-1.64</td>
            <td>1.50-3.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>LDL/HDL Ratio</td>
            <td>1.9</td>
            <td>Ratio</td>
            <td></td>
            <td>1.50-3.00</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="master-row" colspan="8">Diabetes & Glucose</td>
          </tr>
          <tr>
            <td>Insulin</td>
            <td>10</td>
            <td>μlU/mL</td>
            <td>&lt;16</td>
            <td>&lt;5.0</td>
            <td></td>
            <td>12.8</td>
            <td>-22%</td>
          </tr>
          <tr>
            <td class="master-row" colspan="8">Cognitive Function</td>
          </tr>
          <tr>
            <td>Standard Composite Memory</td>
            <td>117</td>
            <td></td>
            <td>90-109</td>
            <td>&gt;109</td>
            <td></td>
            <td>106</td>
            <td>10%</td>
          </tr>
          <tr>
            <td>Standard Verbal Memory</td>
            <td>122</td>
            <td></td>
            <td>90-109</td>
            <td>&gt;109</td>
            <td></td>
            <td>109</td>
            <td>12%</td>
          </tr>
          <tr>
            <td>Standard Visual Memory</td>
            <td>118</td>
            <td></td>
            <td>90-109</td>
            <td>&gt;109</td>
            <td></td>
            <td>100</td>
            <td>18%</td>
          </tr>
          <tr>
            <td>Standard Phychoomotor Speed</td>
            <td>109</td>
            <td></td>
            <td>90-109</td>
            <td>&gt;109</td>
            <td></td>
            <td>94</td>
            <td>16%</td>
          </tr>
          <tr>
            <td>Standard Cognitive Flexibility</td>
            <td>110</td>
            <td></td>
            <td>90-109</td>
            <td>&gt;109</td>
            <td></td>
            <td>110</td>
            <td>0%</td>
          </tr>
          <tr>
            <td class="master-row" colspan="8">Sex Hormones</td>
          </tr>
          <tr>
            <td>Free Testosterone</td>
            <td>5</td>
            <td>pg/mL</td>
            <td>0.1-6.4.4</td>
            <td>4.0-10.0</td>
            <td></td>
            <td>4.4</td>
            <td>14%</td>
          </tr>
          <tr>
            <td>Free Testosterone %</td>
            <td>2</td>
            <td>%</td>
            <td>0.5-1.8</td>
            <td>1.00-2.00</td>
            <td></td>
            <td>1.00</td>
            <td>100%</td>
          </tr>
          <tr>
            <td>Estradiol</td>
            <td>67</td>
            <td>pg/mL</td>
            <td></td>
            <td>50.0-200.0</td>
            <td></td>
            <td>8.7</td>
            <td>670%</td>
          </tr>
          <tr>
            <td class="master-row" colspan="8">Thyroid Function</td>
          </tr>
          <tr>
            <td>Thyroid Stimulating Hormone</td>
            <td>1.2</td>
            <td>mlU/L</td>
            <td>0.4-4.5</td>
            <td>0.025-1.500</td>
            <td></td>
            <td>1.400</td>
            <td>-14%</td>
          </tr>
        </table>
      </div>
    </div>
    </body>
</html>