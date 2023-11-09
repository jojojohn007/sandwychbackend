<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwych</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <header>
        @include('layouts.header')
    </header>
   
    <section>
        <div class="container-fluid px-xl-5">
            <div class="content-top-sec d-flex justify-content-between align-items-sm-center flex-sm-row flex-column flex-wrap">
                <div class="title-wrp">
                    <h2 class="title-text">Welcome back, Amy</h2>
                    <p>Track, manage and review areas for client case improvement.</p>
                </div>
                <div class="date-picker-wrp d-flex">
                    <!-- <input type="date" class="rounded border-common grey-text shadow-common form-control h-100 px-2 me-2"> -->
                    <div id="reportrange" class="rounded border-common grey-text shadow-common me-2 multi-cal">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                    <button class="btn rounded border-common blue-text btn-type1 shadow-common nowrap-text"
                        type="button"><i class="fa fa-solid fa-download"></i><span class="ms-2 d-md-flex d-none">Export Data</span></button>
                </div>
            </div>
            <div class="row flex-grow-1 g-3 mt-3">
                <div class="col-sm-4 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="title-text mb-0">Overall Satisfaction</h6>
                            <div class="dropdown prsn-dtls-dropdown">
                                <button class="btn dropdown-toggle light-grey p-0" type="button" data-bs-toggle="modal" data-bs-target="#OverallSatisfaction">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <!-- <ul class="dropdown-menu">
                                    <li class="prsn-dtls-wrp">
                                        <span class="d-flex align-items-center px-3 pb-2">
                                            <span class="prfl-pic active position-relative">
                                                <img src="images/Avatar.png" alt="">
                                                <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">OR</span>
                                            </span>
                                            <span class="d-flex flex-column align-items-start ms-2">
                                                <span class="title-text">Olivia Rhye</span>
                                                <span class="common-text">olivia@sandwych.com</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li><a class="dropdown-item" href="#">View profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Log out</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="row flex-lg-row flex-sm-column-reverse flex-row g-2">
                            <div class="col-lg-7 col-sm-12 col-7">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <span class="value-info title-text d-flex align-items-center">53% <span class="tooltip-icon ms-2" data-bs-toggle="tooltip" data-bs-placement="right"
                                        data-bs-custom-class="custom-tooltip" data-bs-title="This is a satisfaction score for this resources of this month."><i class="bi bi-question-circle"></i></span></span>
                                    <span class="value-flow">
                                        <span class="d-flex align-items-center">
                                            <i class="fa fa-arrow-up success-value"></i>
                                            <span class="success-text ms-1">3%</span>
                                            <span class="ms-1">vs last month</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-5">
                                <div class="img-wrp h-100 d-flex align-items-end">
                                    <img src="images/Success_Chart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="title-text mb-0">Patient Confidence</h6>
                            <div class="dropdown prsn-dtls-dropdown">
                                <button class="btn dropdown-toggle light-grey p-0" type="button" data-bs-toggle="modal" data-bs-target="#PatientConfidence">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <!-- <ul class="dropdown-menu">
                                    <li class="prsn-dtls-wrp">
                                        <span class="d-flex align-items-center px-3 pb-2">
                                            <span class="prfl-pic active position-relative">
                                                <img src="images/Avatar.png" alt="">
                                                <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">OR</span>
                                            </span>
                                            <span class="d-flex flex-column align-items-start ms-2">
                                                <span class="title-text">Olivia Rhye</span>
                                                <span class="common-text">olivia@sandwych.com</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li><a class="dropdown-item" href="#">View profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Log out</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="row flex-lg-row flex-sm-column-reverse flex-row g-2">
                            <div class="col-lg-7 col-sm-12 col-7">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <span class="value-info title-text">Average</span>
                                    <span class="value-flow">
                                        <span class="d-flex align-items-center">
                                            <i class="fa fa-arrow-down error-value"></i>
                                            <span class="error-text ms-1">10%</span>
                                            <span class="ms-1">vs last month</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-5">
                                <div class="img-wrp h-100 d-flex align-items-end">
                                    <img src="images/Error_Chart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="title-text mb-0">Resource to Management Care</h6>
                            <div class="dropdown prsn-dtls-dropdown">
                                <button class="btn dropdown-toggle light-grey p-0" type="button" data-bs-toggle="modal" data-bs-target="#ResourceManagement">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <!-- <ul class="dropdown-menu">
                                    <li class="prsn-dtls-wrp">
                                        <span class="d-flex align-items-center px-3 pb-2">
                                            <span class="prfl-pic active position-relative">
                                                <img src="images/Avatar.png" alt="">
                                                <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">OR</span>
                                            </span>
                                            <span class="d-flex flex-column align-items-start ms-2">
                                                <span class="title-text">Olivia Rhye</span>
                                                <span class="common-text">olivia@sandwych.com</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="row flex-lg-row flex-sm-column-reverse flex-row g-2">
                            <div class="col-lg-7 col-sm-12 col-7">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <span class="value-info title-text">38%</span>
                                    <span class="value-flow">
                                        <span class="d-flex align-items-center">
                                            <i class="fa fa-arrow-up success-value"></i>
                                            <span class="success-text ms-1">20%</span>
                                            <span class="ms-1">vs last month</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-5">
                                <div class="img-wrp h-100 d-flex align-items-end">
                                    <img src="images/Success_Chart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow-1 g-3 mt-2">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="fw-400 mb-2">Discuss All Medications</div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <span class="value-info-type2 title-text">53%</span>
                            <span class="value-flow light-success-bg px-2 rounded-pill">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-arrow-up-short success-value"></i>
                                    <span class="success-text fw-500 ms-1">3%</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="fw-400 mb-2">Discuss Medication Usage</div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <span class="value-info-type2 title-text">18%</span>
                            <span class="value-flow light-success-bg px-2 rounded-pill">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-arrow-up-short success-value"></i>
                                    <span class="success-text fw-500 ms-1">12%</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="fw-400 mb-2">Discuss Medication Purpose</div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <span class="value-info-type2 title-text">40%</span>
                            <span class="value-flow light-error-bg px-2 rounded-pill">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-arrow-down-short error-value"></i>
                                    <span class="error-text fw-500 ms-1">2%</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="rounded border-common shadow-common p-3">
                        <div class="fw-400 mb-2">Discuss All Medications</div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <span class="value-info-type2 title-text">22%</span>
                            <span class="value-flow light-error-bg px-2 rounded-pill">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-arrow-down-short error-value"></i>
                                    <span class="error-text fw-500 ms-1">2%</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded border-common shadow-common p-3 mt-4 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="title-text mb-0">SDOH Risk Levels</h6>
                    <div class="dropdown prsn-dtls-dropdown">
                        <button class="btn dropdown-toggle light-grey p-0" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="prsn-dtls-wrp">
                                <span class="d-flex align-items-center px-3 pb-2">
                                    <span class="prfl-pic active position-relative">
                                        <img src="images/Avatar.png" alt="">
                                        <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">OR</span>
                                    </span>
                                    <span class="d-flex flex-column align-items-start ms-2">
                                        <span class="title-text">Olivia Rhye</span>
                                        <span class="common-text">olivia@sandwych.com</span>
                                    </span>
                                </span>
                            </li>
                            <li><a class="dropdown-item" href="#">View profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row g-md-5 px-5">
                    <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                        <div class="d-flex flex-column align-items-center">
                            <div class="fw-500 mb-3 text-center">Economic Stability</div>
                            <div class="border-bottom w-100 mb-3"></div>
                            <div style="width: 150px;" class="mx-auto">
                                <canvas id="myChart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                        <div class="d-flex flex-column align-items-center">
                            <div class="fw-500 mb-3 text-center">Neighborhood</div>
                            <div class="border-bottom w-100 mb-3"></div>
                            <div style="width: 150px;" class="mx-auto">
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                        <div class="d-flex flex-column align-items-center">
                            <div class="fw-500 mb-3 text-center">Education</div>
                            <div class="border-bottom w-100 mb-3"></div>
                            <div style="width: 150px;" class="mx-auto">
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                        <div class="d-flex flex-column align-items-center">
                            <div class="fw-500 mb-3 text-center">Food</div>
                            <div class="border-bottom w-100 mb-3"></div>
                            <div style="width: 150px;" class="mx-auto">
                                <canvas id="myChart4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                        <div class="d-flex flex-column align-items-center">
                            <div class="fw-500 mb-3 text-center">Community & Social</div>
                            <div class="border-bottom w-100 mb-3"></div>
                            <div style="width: 150px;" class="mx-auto">
                                <canvas id="myChart5"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6 col-12">
                        <div class="d-flex flex-column align-items-center">
                            <div class="fw-500 mb-3 text-center">Healthcare</div>
                            <div class="border-bottom w-100 mb-3"></div>
                            <div style="width: 150px;" class="mx-auto">
                                <canvas id="myChart6"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <ul class="list-group d-flex flex-row flex-wrap justify-content-center chart-legend-wrp">
                        <li class="d-flex align-items-center"><span class="unknown"></span> Unknown</li>
                        <li class="d-flex align-items-center"><span class="low-risk"></span> Low/No Risk</li>
                        <li class="d-flex align-items-center"><span class="medium-risk"></span> Medium Risk</li>
                        <li class="d-flex align-items-center"><span class="heigh-risk"></span> High Risk</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal - Overall Satisfaction - Start -->
    <div class="modal fade" id="OverallSatisfaction" tabindex="-1" aria-labelledby="OverallSatisfactionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <div class="rounded border-common shadow-common p-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="title-text mb-0">Overall Satisfaction</h6>
                        </div>
                        <div class="row flex-lg-row flex-sm-column-reverse flex-row g-2">
                            <div class="col-lg-7 col-sm-12 col-7">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <span class="value-info title-text">53%</span>
                                    <span class="value-flow">
                                        <span class="d-flex align-items-center">
                                            <svg class="svg-inline--fa fa-arrow-up fa-w-14 success-value" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg><!-- <i class="fa fa-arrow-up success-value"></i> Font Awesome fontawesome.com -->
                                            <span class="success-text ms-1">3%</span>
                                            <span class="ms-1">vs last month</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-5">
                                <div class="img-wrp">
                                    <img src="images/Success_Chart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive tabwrp mb-4">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="fw-500 p-md-3 px-2 py-3" style="width: 85%;">Name</th>
                                    <th class="fw-500 p-md-3 px-2 py-3 text-center" style="width: 15%;">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-md-4 px-2 py-3">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar5.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">BS</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="client-dashboard.html" class="title-text fw-400">Betty Smith</a>
                                                    <span class="common-text">bettysmith@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2">25%</td>
                                </tr>
                                <tr>
                                    <td class="px-md-4 px-2 py-3">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar3.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">AL</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="#" class="title-text fw-400">Ava Long</a>
                                                    <span class="common-text">avalong@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2">25%</td>
                                </tr>
                                
                                <tr>
                                    <td class="px-md-4 px-2 py-3 border-0">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar4.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">SB</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="#" class="title-text fw-400">Sally Brown</a>
                                                    <span class="common-text">sallybrown@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2 border-0">25%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-md-none d-flex justify-content-end">
                        <button type="button" class="btn rounded border-common grey-text btn-type1 shadow-common justify-content-center" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - Overall Satisfaction - End -->
    <!-- Modal - Patient Confidence - Start -->
    <div class="modal fade" id="PatientConfidence" tabindex="-1" aria-labelledby="PatientConfidenceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <div class="rounded border-common shadow-common p-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="title-text mb-0">Patient Confidence</h6>
                        </div>
                        <div class="row flex-lg-row flex-sm-column-reverse flex-row g-2">
                            <div class="col-lg-7 col-sm-12 col-7">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <span class="value-info title-text">Average</span>
                                    <span class="value-flow">
                                        <span class="d-flex align-items-center">
                                            <i class="fa fa-arrow-down error-value"></i>
                                            <span class="error-text ms-1">10%</span>
                                            <span class="ms-1">vs last month</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-5">
                                <div class="img-wrp">
                                    <img src="images/Error_Chart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive tabwrp mb-4">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="fw-500 p-md-3 px-2 py-3" style="width: 85%;">Name</th>
                                    <th class="fw-500 p-md-3 px-2 py-3 text-center" style="width: 15%;">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-md-4 px-2 py-3">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar5.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">BS</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="client-dashboard.html" class="title-text fw-400">Betty Smith</a>
                                                    <span class="common-text">bettysmith@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2">25%</td>
                                </tr>
                                <tr>
                                    <td class="px-md-4 px-2 py-3">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar3.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">AL</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="#" class="title-text fw-400">Ava Long</a>
                                                    <span class="common-text">avalong@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2">25%</td>
                                </tr>
                                
                                <tr>
                                    <td class="px-md-4 px-2 py-3 border-0">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar4.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">SB</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="#" class="title-text fw-400">Sally Brown</a>
                                                    <span class="common-text">sallybrown@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2 border-0">25%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-md-none d-flex justify-content-end">
                        <button type="button" class="btn rounded border-common grey-text btn-type1 shadow-common justify-content-center" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - Patient Confidence - End -->
    <!-- Modal - Resource to Management Care - Start -->
    <div class="modal fade" id="ResourceManagement" tabindex="-1" aria-labelledby="ResourceManagementLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <div class="rounded border-common shadow-common p-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="title-text mb-0">Resource to Management Care</h6>
                        </div>
                        <div class="row flex-lg-row flex-sm-column-reverse flex-row g-2">
                            <div class="col-lg-7 col-sm-12 col-7">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <span class="value-info title-text">38%</span>
                                    <span class="value-flow">
                                        <span class="d-flex align-items-center">
                                            <i class="fa fa-arrow-up success-value"></i>
                                            <span class="success-text ms-1">20%</span>
                                            <span class="ms-1">vs last month</span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-5">
                                <div class="img-wrp">
                                    <img src="images/Success_Chart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive tabwrp mb-4">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="fw-500 p-md-3 px-2 py-3" style="width: 85%;">Name</th>
                                    <th class="fw-500 p-md-3 px-2 py-3 text-center" style="width: 15%;">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-md-4 px-2 py-3">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar5.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">BS</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="client-dashboard.html" class="title-text fw-400">Betty Smith</a>
                                                    <span class="common-text">bettysmith@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2">25%</td>
                                </tr>
                                <tr>
                                    <td class="px-md-4 px-2 py-3">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar3.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">AL</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="#" class="title-text fw-400">Ava Long</a>
                                                    <span class="common-text">avalong@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2">25%</td>
                                </tr>
                                
                                <tr>
                                    <td class="px-md-4 px-2 py-3 border-0">
                                        <div class="prsn-dtls-wrp">
                                            <span class="d-flex align-items-center">
                                                <span class="prfl-pic position-relative">
                                                    <img src="images/Avatar4.png" alt="">
                                                    <span class="h6 uppercase fw-500 w-100 h-100 rounded-circle common-text mb-0">SB</span>
                                                </span>
                                                <span class="d-flex flex-column align-items-start ms-2">
                                                    <a href="#" class="title-text fw-400">Sally Brown</a>
                                                    <span class="common-text">sallybrown@gmail.com</span>
                                                </span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="fw-400 grey-text text-center p-md-3 px-2 border-0">25%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-md-none d-flex justify-content-end">
                        <button type="button" class="btn rounded border-common grey-text btn-type1 shadow-common justify-content-center" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - Resource to Management Care - End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
    <script class="text/javascript">
        /*****************************Datepicker*******************************/
        $(function () {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });
        /********************************************************************/

        var ctx1 = document.getElementById("myChart1").getContext('2d');
        var ctx2 = document.getElementById("myChart2").getContext('2d');
        var ctx3 = document.getElementById("myChart3").getContext('2d');
        var ctx4 = document.getElementById("myChart4").getContext('2d');
        var ctx5 = document.getElementById("myChart5").getContext('2d');
        var ctx6 = document.getElementById("myChart6").getContext('2d');

        var myChart1 = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ["Low/No Risk", "Medium RiskT", "High Risk", "Unknown"],
                datasets: [{
                    backgroundColor: [
                        "#244E5A",
                        "#FF9E1B",
                        "#931E42",
                        "#F2F4F7"
                    ],
                    data: [20, 40, 30, 10]
                }]
            },
            options: {
                borderWidth: 0,
                cutout: 55,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });


        var myChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ["Low/No Risk", "Medium RiskT", "High Risk", "Unknown"],
                datasets: [{
                    backgroundColor: [
                        "#244E5A",
                        "#FF9E1B",
                        "#931E42",
                        "#F2F4F7"
                    ],
                    data: [20, 40, 30, 10]
                }]
            },
            options: {
                borderWidth: 0,
                cutout: 55,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var myChart3 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: ["Low/No Risk", "Medium RiskT", "High Risk", "Unknown"],
                datasets: [{
                    backgroundColor: [
                        "#244E5A",
                        "#FF9E1B",
                        "#931E42",
                        "#F2F4F7"
                    ],
                    data: [20, 40, 30, 10]
                }]
            },
            options: {
                borderWidth: 0,
                cutout: 55,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var myChart4 = new Chart(ctx4, {
            type: 'doughnut',
            data: {
                labels: ["Low/No Risk", "Medium RiskT", "High Risk", "Unknown"],
                datasets: [{
                    backgroundColor: [
                        "#244E5A",
                        "#FF9E1B",
                        "#931E42",
                        "#F2F4F7"
                    ],
                    data: [20, 40, 30, 10]
                }]
            },
            options: {
                borderWidth: 0,
                cutout: 55,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var myChart5 = new Chart(ctx5, {
            type: 'doughnut',
            data: {
                labels: ["Low/No Risk", "Medium RiskT", "High Risk", "Unknown"],
                datasets: [{
                    backgroundColor: [
                        "#244E5A",
                        "#FF9E1B",
                        "#931E42",
                        "#F2F4F7"
                    ],
                    data: [20, 40, 30, 10]
                }]
            },
            options: {
                borderWidth: 0,
                cutout: 55,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var myChart6 = new Chart(ctx6, {
            type: 'doughnut',
            data: {
                labels: ["Low/No Risk", "Medium RiskT", "High Risk", "Unknown"],
                datasets: [{
                    backgroundColor: [
                        "#244E5A",
                        "#FF9E1B",
                        "#931E42",
                        "#F2F4F7"
                    ],
                    data: [20, 40, 30, 10]
                }]
            },
            options: {
                borderWidth: 0,
                cutout: 55,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
        
        // $(document).ready(function(){
        //     $(".modal").hidePrevented.bs.modal;
        // }) 
        /******************Tooltip start******************/
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        /*************************************************/
    </script>
</body>

</html>