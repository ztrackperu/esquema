<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashboardV2</title>
    <!--CDN BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!-- REMIX ICON-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!-- DROPZONE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
    <!-- FLAG ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
</head>
<body class="bg-light">
<div class="container-fluid">
    <div class="col-lg-12 col-xl-12">
        <h5 class="m-0 pb-2">
            <a class="text-center" data-bs-toggle="collapse" href="#todayTasks" aria-controls="todayTasks" data-bs-placement="bottom" aria-expanded="true">
                <i class="ri-arrow-down-wide-fill"></i>Today
                <span class="text-muted">(10)</span>
            </a>
        </h5>
        <div class="collapse show" id="todayTasks">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="col-auto d-flex justify-content-between">
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-start">
                                <input type="checkbox" class="form-check-input">
                                <h5 class="text-muted fs-6 ms-2">Draft the new contract document for sales team</h5>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between">
                                <div id="tooltip-container">
                                    <img src="Assets/img/user1.jpg" width="28" height="28" class="rounded-circle" alt="taskPhoto">
                                </div>
                                <div>
                                    <ul class="list-group list-group-horizontal gap-2">
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>Today 10am</li>
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>3/7</li>
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>21</li>
                                        <li class="ps-0"><span class="badge bg-danger">High</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex justify-content-between mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-start">
                                <input type="checkbox" class="form-check-input">
                                <h5 class="text-muted fs-6 ms-2">Draft the new contract document for sales team</h5>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between">
                                <div id="tooltip-container">
                                    <img src="Assets/img/user1.jpg" width="28" height="28" class="rounded-circle" alt="taskPhoto">
                                </div>
                                <div>
                                    <ul class="list-group list-group-horizontal gap-2">
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>Today 10am</li>
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>3/7</li>
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>21</li>
                                        <li class="ps-0"><span class="badge bg-danger">High</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex justify-content-between mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-start">
                                <input type="checkbox" class="form-check-input">
                                <h5 class="text-muted fs-6 ms-2">Draft the new contract document for sales team</h5>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-between">
                                <div id="tooltip-container">
                                    <img src="Assets/img/user1.jpg" width="28" height="28" class="rounded-circle" alt="taskPhoto">
                                </div>
                                <div>
                                    <ul class="list-group list-group-horizontal gap-2">
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>Today 10am</li>
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>3/7</li>
                                        <li class="text-muted ps-0"><i class="ri-calendar-2-line"></i>21</li>
                                        <li class="ps-0"><span class="badge bg-success">Medium</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- DROPZONE JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script src="js/script2.js"></script>
</body>
</html>