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
    <h5 class="text-muted fs-5">File Manager</h5>
    <div class="card">
        <div class="row">
            <div class="col-md-3">
                <div class="card-body">
                    <div class="text-center">
                    <button type="button" class="btn btn-success shadow">+ Create New</button>
                    </div>
                    <div class="mt-4 row gap-4">
                        <a href="#" class="text-muted"><i class="ri-folder-line"></i>My Files</a>
                        <a href="#" class="text-muted"><i class="ri-drive-line"></i>Google Drive</a>
                        <a href="#" class="text-muted"><i class="ri-dropbox-line"></i>Dropbox</a>
                        <a href="#" class="text-muted"><i class="ri-share-line"></i>Share with me</a>
                        <a href="#" class="text-muted"><i class="ri-history-line"></i>Recent</a>
                        <a href="#" class="text-muted"><i class="ri-star-line"></i>Starred</a>
                        <a href="#" class="text-muted"><i class="ri-delete-bin-6-line"></i>Deleted Files</a>
                    </div>
                    <div class="mt-4 py-5">
                        <p class="badge bg-primary">FREE</p>
                        <h6 class="text-muted text-uppercase mt-4">storage</h6>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width:40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted">7.0 GB (40%) of 15 GB used</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 position-relative">
                            <input type="text" class="form-control" placeholder="Search files..." style="background-color:#edf2f7">
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-light"><i class="ri-equalizer-line"></i></button>
                            <button type="button" class="btn btn-light"><i class="ri-apps-fill"></i></button>
                            <button type="button" class="btn btn-light"><i class="ri-error-warning-line"></i></button>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5 class="text-muted fs-6">Quick Access</h5>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="avatar-sm d-flex justify-content-start">
                                                <span class="rounded bg-light px-3 py-3">
                                                    <i class="ri-folder-fill"></i>
                                                </span>
                                                <div class="w-100">
                                                <h5 class="text-muted fs-6 ms-2">Hyper-sketch.zip</h5>
                                                <p class="text-muted ms-2">2.3 MB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <p>1</p>
                                        </div>
                                    </div>
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