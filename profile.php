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
<body class="bg-secondary">
<div class="col-lg-12 col-xl-12 px-2 py-2">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="Assets/img/user1.jpg" class="rounded-circle img-thumbnail" width="100" height="100" alt="profile">
                    <h5 class="text-muted">Gian Arce</h5>
                    <p class="text-muted">Web Developer</p>
                    <div class="d-flex justify-content-center gap-1">
                        <button type="button" class="btn btn-success btn-sm">Follow</button>
                        <button type="button" class="btn btn-danger btn-sm">Message</button>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="text-muted fs-6">ABOUT ME:</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.Est natus fugit, incidunt sint at modi laudantium cumque iure nobis aperiam id.</p>
                    <div class="mt-2 d-flex flex-column">
                        <label for="fullname" class="text-muted">Full Name:<span class="ms-2">Gian Arce</span></label>
                        <label for="mobile" class="text-muted">Mobile:<span class="ms-2">+51 999 999 999</span></label>
                        <label for="email" class="text-muted">Email<span class="ms-2"></span>gianmarco@hotmail.com</label>
                        <label for="country" class="text-muted">Country:<span class="ms-2">Peru</span></label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-muted fs-6">MESSAGES</h5>
                        <i class="ri-more-fill"></i>
                    </div>
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item d-flex justify-content-start">
                            <img src="Assets/img/user1.jpg" class="rounded-circle" width="40" height="40" alt="profile">
                            <div class="w-100 ms-2">
                                <h5 class="text-muted fs-6">Gian Arce</h5>
                                <p class="text-muted fs-6">I've finished it! See you so...</p>
                            </div>
                            <a class="text-primary fs-6" href="#">Reply</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-start">
                            <img src="Assets/img/user1.jpg" class="rounded-circle" width="40" height="40" alt="profile">
                            <div class="w-100 ms-2">
                                <h5 class="text-muted fs-6">Gian Arce</h5>
                                <p class="text-muted fs-6">I've finished it! See you so...</p>
                            </div>
                            <a class="text-primary fs-6" href="#">Reply</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <!-- NAV PILLS-->
                <div class="card-body">
                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#about" data-bs-toggle="pill" id="about-tab" role="tab" aria-controls="about" data-bs-toggle="pill" aria-selected="true" role="tab" class="nav-link active">About</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#timeline" data-bs-toggle="pill" id="timeline-tab" role="tab" aria-controls="timeline" data-bs-toggle="pill" aria-selected="false" role="tab" class="nav-link">Timeline</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#settings" data-bs-toggle="pill" id="settings-tab" role="tab" aria-controls="settings" data-bs-toggle="pill" aria-selected="false" role="tab" class="nav-link">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-content">
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <h5 class="text-muted"><i class="ri-user-4-fill"></i>EXPERIENCE</h5>
                            <h5 class="text-muted"><i class="ri-computer-fill"></i>PROJECTS</h5>
                            <!-- DATATABLE -->
                            <table id="example" class="table table-striped " style="width:100%">
                                <thead style="background-color:#edf2f7;">
                                    <tr>
                                        <th>#</th>
                                        <th>Clients</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="d-flex">
                                            <img src="Assets/img/user1.jpg" alt="pfl" class="rounded-circle" width="30" height="30">
                                            <h5 class="text-muted fs-6 ms-2">Gian Arce</h5>
                                        </td>
                                        <td>App design and development</td>
                                        <td>22/05/2024</td>
                                        <td>23/05/2024</td>
                                        <td><span class="badge badge-primary">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Facebook</td>
                                        <td>App design and development</td>
                                        <td>22/05/2024</td>
                                        <td>23/05/2024</td>
                                        <td>$15,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                            <h5 class="text-muted">TIMELINE:</h5>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <h5 class="text-muted">SETTINGS:</h5>
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