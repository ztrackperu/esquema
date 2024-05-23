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
<div class="col-lg-12 col-xl-12 px-2 py-2">
   <h5 class="text-muted fs-5">Timeline</h5>
   <!-- BREAD CRUMB-->
   <nav class="breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active text-primary" aria-current="page">Timeline</li>
    </ol>
   </nav>
   <!-- TIME-LINE-->
   <div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-5">
            <div class="timeline">
                <div class="timeline-item d-flex justify-content-start">
                    <p class="rounded" style="background-color:#dde2e6">Today</p>
                </div>
                <div class="timeline-item border-start border-3 p-3 ms-3">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Completed UX design project for our client</h5>
                                    <span class="text-muted">22 July, 2019</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisic. Expedita, incidunt aspernatur.</p>
                                    <div class="btn-group gap-2">
                                        <button class="btn btn-primary rounded"><i class="ri-thumb-up-line"></i>17</button>
                                        <button class="btn btn-danger rounded"><i class="ri-heart-line"></i>89</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item border-start border-3 p-3 ms-3">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Tarea Completada</h5>
                                    <span class="text-muted">22 July, 2019</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisic. Expedita, incidunt aspernatur.</p>
                                    <div class="btn-group gap-2">
                                        <button class="btn btn-primary rounded"><i class="ri-thumb-up-line"></i>17</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item d-flex justify-content-start">
                    <p class="rounded" style="background-color:#dde2e6">Yesterday</p>
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
<script src="https://cjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<!-- CDN DATATABLES -->
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>
<script src="js/script2.js"></script>
</body>
</html>