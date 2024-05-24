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
    <h5 class="text-muted fs-5">Chat</h5>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-title">
                    <div class="d-flex justify-content-start gap-2">
                        <h5 class="text-muted fs-6">All</h5>
                        <h5 class="text-muted fs-6">Favorites</h5>
                        <h5 class="text-muted fs-6">Friends</h5>
                    </div>
                </div>
                <div class="card-body">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="mt-4 overflow-x">
                    <ul>
                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>

                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" style="width:40px; height:40px">
                                    <div class="w-100">
                                        <h5 class="text-muted fs-6">Brandon Smith</h5>
                                        <p class="text-muted fs-6">How are you today?</p>
                                    </div>
                                <p class="text-muted fs-6">4:30am  <span class="badge bg-danger float-end">3</span></p>
                            </div>
                        </li>
                    </ul>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="text-end">
                        <i class="ri-close-fill"></i>
                    </div>
                    <img class="rounded-circle img-thumbnail" src="Assets/img/user1.jpg" style="width:130px; height:130px">
                    <h5 class="text-muted fs-5 mt-2">Sheryu N</h5>
                    <button type="button" class="btn btn-primary"><i class="ri-mail-send-fill"></i>Send Email</button>
                    <p class="text-muted fs-6">Last Interected. <span>Few hours back</span></p>
                    <div class="border-top text-start">
                        <h5 class="text-muted fs-6 mt-4">@ Email</h5>
                        <p class="text-muted">support@coderthemes.com</p>
                        <h5 class="text-muted fs-6 mt-4"><i class="ri-phone-fill"></i>Phone</h5>
                        <p class="text-muted">+51 999 999 999</p>
                        <h5 class="text-muted fs-6 mt-4"><i class="ri-map-pin-line"></i>Location</h5>
                        <p class="text-muted">Perú, Lima</p>
                        <h5 class="text-muted fs-6 mt-4"><i class="ri-global-line"></i>Languages</h5>
                        <p class="text-muted">English, Spain </p>
                        <h5 class="text-muted fs-6 mt-4"><i class="ri-group-line"></i>Groups:</h5>
                        <span class="badge bg-success">Work</span>
                        <span class="badge bg-primary">Friends</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
       <div class="card mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <h2>A better way to start building.</h2>
                    </div>     
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                            <i class="ri-folder-open-line bg-primary fs-1 rounded px-2 py-2 text-white"></i>
                            <h5 class="mt-4">Featured title</h5>
                            <p>Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                            <i class="ri-folder-open-line bg-primary fs-1 rounded px-2 py-2 text-white"></i>
                            <h5 class="mt-4">Featured title</h5>
                            <p>Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="card-body">
                            <i class="ri-folder-open-line bg-primary fs-1 rounded px-2 py-2 text-white"></i>
                            <h5 class="mt-4">Featured title</h5>
                            <p>Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                            <i class="ri-folder-open-line bg-primary fs-1 rounded px-2 py-2 text-white"></i>
                            <h5 class="mt-4">Featured title</h5>
                            <p>Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
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
<script src="https://cjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<!-- CDN DATATABLES -->
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script>

<script src="js/script2.js"></script>
</body>
</html>