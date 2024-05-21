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
<body>
<div class="container-fluid">
    <div class="col-lg-12 col-xl-12">
        <div class="card bg-light px-2 py-2 mt-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="mb-3">
                            <h5 class="text-muted">Name</h5>
                            <input for="name" class="form-control" placeholder="Enter project name">
                        </div>
                        <div class="mb-3">
                            <h5 class="text-muted">Overview</h5>
                            <textarea name="overview" id="overview" class="form-control" cols="10" rows="5" placeholder="Enter some brief about project..."></textarea>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-muted">Budget</h5>
                            <input for="name" class="form-control" placeholder="Enter project budget">
                        </div>
                        <div class="mb-3">
                            <h5 class="text-muted">Team Members</h5>
                            <select class="form-select">
                                <option value="1">Select</option>
                                <option value="2">Gian Arce</option>
                            </select>
                            <div class="d-flex justify-content-start mt-2">
                                <img src="Assets/img/user1.jpg" alt="pfl" class="rounded-circle" width="30" height="30">
                                <img src="Assets/img/user1.jpg" alt="pfl" class="rounded-circle" width="30" height="30">
                                <img src="Assets/img/user1.jpg" alt="pfl" class="rounded-circle" width="30" height="30">
                                <img src="Assets/img/user1.jpg" alt="pfl" class="rounded-circle" width="30" height="30">
                                <img src="Assets/img/user1.jpg" alt="pfl" class="rounded-circle" width="30" height="30">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="text-muted">Avatar</h5>
                        <p class="text-muted">Recommended thumbnail size 800x400 (px).</p>
                        <form action="/file-upload" class="dropzone my-dropzone" id="my-awesome-dropzone">
                            <div class="dz-message text-muted fs-6">
                                <i class="ri-upload-cloud-line fs-2 text-muted"></i>
                                <h4>Drop files here or click to upload.</h4>
                            </div>
                        </form>
                        <div class="mt-3">
                            <h5 for="dueDate" class="text-muted">Due Date</h5>
                            <input type="text" class="form-control" placeholder="">
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