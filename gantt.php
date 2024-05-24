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
    <!-- DATATABLES CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.min.css">
</head>
<body style="background-color:#f6f7fb">
<div class="col-lg-12 px-2 py-2">
    <h5 class="text-muted fs-6">Gantt</h5>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="text-muted fs-6">Projects</h5>
                    <input type="text" class="form-control" placeholder="search by name..." style="background-color:#edf2f7">
                    <div class="mt-4">
                        <ul>
                            <li class="overflow-auto">
                                <div class="d-flex justiy-content-start">
                                    <i class="ri-moon-fill rounded-circle px-2 py-1"></i>
                                    <div class="w-100 overflow-y">
                                        <div class="d-flex">
                                            <h5 class="text-muted fs-6">Lunar</h5>
                                            <p class="badge bg-success ms-2">On Track</p>
                                        </div>
                                        <p class="text-muted">ID: proj101</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justiy-content-start">
                                    <i class="ri-contrast-2-line px-2 py-1"></i>
                                    <div class="w-100 overflow-y">
                                        <div class="d-flex">
                                            <h5 class="text-muted fs-6">Dark Moon</h5>
                                            <p class="badge bg-success ms-2">On Track</p>
                                        </div>
                                        <p class="text-muted">ID: proj102</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justiy-content-start">
                                    <i class="ri-haze-2-line px-2 py-1"></i>
                                    <div class="w-100 overflow-y">
                                        <div class="d-flex">
                                            <h5 class="text-muted fs-6">Aurora</h5>
                                            <p class="badge bg-warning ms-2">Locked</p>
                                        </div>
                                        <p class="text-muted">ID: proj103</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 offset-md-1">
                    <button type="button" class="btn btn-success text-color">Add New Task</button>
                    <div class="btn btn-group float-end">
                        <button type="button" class="btn btn-primary text-color">Quarter Day</button>
                        <button type="button" class="btn btn-light text-color">Half Day</button>
                        <button type="button" class="btn btn-light text-color">Day</button>
                        <button type="button" class="btn btn-light text-color">Week</button>
                        <button type="button" class="btn btn-primary text-color">Month</button>
                    </div>
                    <div class="mt-4">
                        <h1>FRAPPE GANTT - LIBRERIA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- DROPZONE JS -->
<script src="https://cjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<!-- CDN DATATABLES -->
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>
<script src="js/script2.js"></script>
</body>
</html>