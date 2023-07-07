<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Report PDF</title>
        <!-- <link rel="stylesheet" href="{{ public_path('css/styles.css') }}"> -->
        <style>
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: "Lato", sans-serif;
  font-size: 14px;
  font-weight: 600;
  line-height: 1.5;
  color: #000;
  background-color: #fff;
}

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
} */
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
}
.page.second .heading .logo img {
  height: 100%;
} */
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
            @yield('content')

    </body>
</html>
