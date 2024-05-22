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
<div class="col-lg-12 col-xl-12 px-2 py-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-white">
                <div class="card-body">
                  <h5 class="text-muted fs-6">Draft the new contract document for sales team</h5>
                  <div class="row mt-4">
                        <div class="col-sm-6">
                            <h5 class="text-muted fs-6">ASSIGNED TO</h5>
                            <div class="d-flex justify-content-start">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" width="25" height="25" alt="">
                                <h5 class="text-muted fs-6 ms-2">Arya Stark</h>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-muted fs-6">DUE DATE</h5>
                            <div class="d-flex justify-content-start">
                                <i class="ri-calendar-2-line"></i>
                                <h5 class="text-muted fs-6 ms-2">Today 10am</h5>
                            </div>
                        </div>
                  </div>
                  <div class="mt-2">
                        <h5 class="text-muted fs-6">Overview:</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem voluptatibus, id nam fugit perspiciatis asperiores? Temporibus amet minus dolores excepturi ducimus incidunt asperiores! Vero praesentium quaerat voluptates, maiores doloribus unde!</p>
                  </div>
                  <div class="mt-2">
                        <h5 class="text-muted fs-6">Checklist/Sub-tasks</h5>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label for="1" class="text-muted">Find out the old contract documents</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label for="2" class="text-muted">Find out the old contract documents</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label for="3" class="text-muted">Find out the old contract documents</label>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="d-flex justify-content-start">
                        <h5 class="text-muted">Comments</h5>
                        <span class="text-muted fs-6 ms-2">(258)</span>
                    </div>
                    <div class="d-flex mt-4">
                        <img src="Assets/img/user1.jpg" class="rounded-circle" width="30" height="30" alt="profileComment">
                        <div class="w-100">
                            <h5 class="text-muted fs-6">Gian Arce
                                <small class="float-end">8 hours ago</small>
                            </h5>
                            <p>Nice work, makes me think of The Money Pit.</p>
                            <i class="ri-reply-fill text-muted">Reply</i>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <img src="Assets/img/user1.jpg" class="rounded-circle" width="30" height="30" alt="profileComment">
                        <div class="w-100">
                            <h5 class="text-muted fs-6">Gian Arce
                            <small class="text-muted float-end">5 hours ago</small>
                            </h5>
                            <p>Nice work, makes me think of The Money Pit.</p>
                            <i class="ri-reply-fill text-muted">Reply</i>
                            <div class="d-flex mt-3">
                                <img src="Assets/img/user1.jpg" class="rounded-circle" width="30" height="30" alt="profileComment2">
                                <div class="w-100">
                                    <h5 class="text-muted fs-6">Gian Arce
                                        <small class="float-end">1 day ago</small>
                                    </h5>
                                    <p>Nice work, makes me think of The Money Pit.</p>
                                    <i class="ri-reply-fill text-muted">Reply</i>
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
<script src="https://cjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script src="js/script2.js"></script>
</body>
</html>