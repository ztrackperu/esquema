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
    <!-- FLAG ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
</head>
<body>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <h4 class="text-muted">Project Details</h4>
            <div class="col-lg-6 col-xl-6">
                <div class="card d-block bg-light">
                    <div class="card-body d-flex justify-content-between">
                        <h5>App designd and development</h5>
                        <i class="ri-more-line"></i>
                    </div>  
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minus hic repellendus perspiciatis laboriosam atque laudantium, aspernatur, ducimus ea qui placeat eveniet error modi corrupti porro reprehenderit molestiae, non a.</p>
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-muted">Start Date</h5>
                                <p>20 May 2024 12:02pm</p>
                            </div>   
                            <div class="col-md-4">
                                <h5 class="text-muted">End Date</h5>
                                <p>20 May 2024 6:00pm</p>
                            </div>  
                            <div class="col-md-4">
                                <h5 class="text-muted">Budget</h5>
                                <p>$15,800</p>
                            </div>   
                        </div>
                        <div class="tooltip-container">
                            <h5 class="text-muted">Team members:</h5>
                            <a href="">
                                <img src="Assets/img/user1.jpg" alt="team_member_1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Gian Arce" aria-label="Gian Arce" class="rounded-circle img-thumbnail" width="45" height="45">
                            </a>
                            <a href="">
                                <img src="Assets/img/user1.jpg" alt="team_member_2" data-bs-toggle="tooltip" data-bs-placement="top" title="Pedro Quiñones" class="rounded-circle img-thumbnail" width="45" height="45">
                            </a>
                            <a href="">
                                <img src="Assets/img/user1.jpg" alt="team_member_3" data-bs-toggle="tooltip" data-bs-placement="top" title="Pepito Rosales" class="rounded-circle img-thumbnail" width="45" height="45">
                            </a>
                        </div>                
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="text-muted">Comments (258)</h5>
                        <textarea class="form-control" placeholder="Write message"></textarea>
                        <div class="text-end mt-2">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-sm text-muted fs-5">
                                    <i class="ri-attachment-2"></i>
                                </button>
                            </div>
                            <div class="btn-group mb-2 ms-2">
                                <button class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <img src="Assets/img/user1.jpg" class="rounded-circle" width="45" height="45" alt="profile_comment">
                            <div class="w-100 overflow-hidden">
                                <h5 class="mt-0">Gian Arce</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione illum, dolorum nobis inventore ut eius distinctio dolores quasi sapiente officia possimus quia expedita aspernatur porro illo, assumenda ad molestiae nulla!</p>
                                <div class="d-flex align-items-start">
                                   <a class="pe-3" href="#">
                                        <img src="Assets/img/user1.jpg" class="rounded-circle" width="45" height="45" alt="profile_comment">
                                   </a>
                                   <div class="w-100 overflow-hidden">
                                        <h5 class="mt-0">Gian Arce</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum vero distinctio laudantium. Repellat animi aliquam odio nemo saepe ea repudiandae id praesentium nihil ducimus quos enim, velit nam suscipit assumenda.</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="card d-block bg-light">
                    <div class="card-body">
                        <h5>Gráfico</h5>
                    </div>  
                </div>
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="text-muted card-title mb-3">Files</h5>
                        <div class="card border mb-1">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="Assets/img/user1.jpg" alt="file" class="img-thumbnail" width="50" height="50">
                                    </div>
                                    <div class="col ps-0">
                                        <h5 class="text-muted">Hyper-admin-design.zip</h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ri-download-2-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border mb-1">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="Assets/img/user1.jpg" alt="file" class="img-thumbnail" width="50" height="50">
                                    </div>
                                    <div class="col ps-0">
                                        <h5 class="text-muted">Dashboard-design.jpg</h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ri-download-2-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border mb-0">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="Assets/img/user1.jpg" alt="file" class="img-thumbnail" width="50" height="50">
                                    </div>
                                    <div class="col ps-0">
                                        <h5 class="text-muted">Dashboard.zip</h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="ri-download-2-line"></i>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/script2.js"></script>
</body>
</html>