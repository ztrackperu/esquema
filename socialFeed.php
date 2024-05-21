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
    <div class="col-lg-12 col-xl-12 px-3 py-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <i class="ri-more-fill"></i>
                        </div>
                        <div class="d-flex justify-content-start">
                            <img src="Assets/img/user1.jpg" width="42" height="45" alt="test">
                            <div class="w-100 overflow-hidden ms-2">
                                <h5 class="fs-6">Dominic Keller</h5>
                                <p class="text-muted fs-6">California, USA</p>
                            </div>
                        </div>
                        <div class="list-group list-group-flush mt-2">
                            <a href="#" class="list-group-item list-group-item-action text-primary border-0"><i class="ri-newspaper-line"></i> News Feed</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="ri-message-2-line"></i> Message</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="ri-calendar-2-line"></i> Events</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="ri-group-line"></i> Groups</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="ri-pages-line"></i> Pages</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 text-muted>PEOPLE YOU MAY KNOW</h5>
                            <i class="ri-more-fill"></i>
                        </div>
                        <div class="list-group list-group-flush mt-2">
                            <div class="list-group-item d-flex justify-content-start">
                                <img class="rounded-circle" src="Assets/img/user1.jpg" width="45" height="45">
                                <div class="w-100 overflow-hidden ms-2">
                                    <h5 class="text-muted"> Robb Stark</h5>
                                    <p class="fs-6 text-muted"> The first king in the North</p>
                                </div>
                                <button class="btn"><i class="ri-user-add-line"></i></button>
                            </div>
                            <div class="list-group-item d-flex justify-content-start">
                                <img class="rounded-circle" src="Assets/img/user1.jpg" width="45" height="45">
                                <div class="w-100 overflow-hidden ms-2">
                                    <h5 class="text-muted"> Robb Stark</h5>
                                    <p class="fs-6 text-muted"> The first king in the North</p>
                                </div>
                                <button class="btn"><i class="ri-user-add-line"></i></button>
                            </div>
                            <div class="list-group-item d-flex justify-content-start">
                                <img class="rounded-circle" src="Assets/img/user1.jpg" width="45" height="45">
                                <div class="w-100 overflow-hidden ms-2">
                                    <h5 class="text-muted"> Robb Stark</h5>
                                    <p class="fs-6 text-muted"> The first king in the North</p>
                                </div>
                                <button class="btn"><i class="ri-user-add-line"></i></button>
                            </div>
                            <div class="list-group-item d-flex justify-content-start">
                                <img class="rounded-circle" src="Assets/img/user1.jpg" width="45" height="45">
                                <div class="w-100 overflow-hidden ms-2">
                                    <h5 class="text-muted"> Robb Stark</h5>
                                    <p class="fs-6 text-muted"> The first king in the North</p>
                                </div>
                                <button class="btn"><i class="ri-user-add-line"></i></button>
                            </div><div class="list-group-item d-flex justify-content-start">
                                <img class="rounded-circle" src="Assets/img/user1.jpg" width="45" height="45">
                                <div class="w-100 overflow-hidden ms-2">
                                    <h5 class="text-muted"> Robb Stark</h5>
                                    <p class="fs-6 text-muted"> The first king in the North</p>
                                </div>
                                <button class="btn"><i class="ri-user-add-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 d-flex justify-content-start">
                            <textarea name="post" id="post" class="text-muted" cols="170" rows="5" placeholder="Write something..."></textarea>
                        </div>
                        <div class="btn-group">
                                <button class="btn btn-primary"><i class="ri-image-line"></i></button>
                                <button class="btn btn-primary"><i class="ri-gps-fill"></i></button>
                                <button class="btn btn-primary"><i class="ri-attachment-2"></i></button>
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