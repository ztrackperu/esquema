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
<div class="row">
    <div class="col-lg-12 col-xl-12">
        <div class="row">
            <div class="col-md-3 card">
                <div class="card-body bg-light">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-warning">Compose</button>

                    </div>
                </div>
            </div>
            <div class="col-md-9 card">
                <div class="card-body bg-light">
                    <div class="d-flex justify-content-start gap-1">
                        <div class="btn-group">
                            <button class="btn btn-secondary"><i class="ri-mail-fill"></i></button>
                            <button class="btn btn-secondary"><i class="ri-file-warning-fill"></i></button>
                            <button class="btn btn-secondary"><i class="ri-delete-bin-4-fill"></i></button>
                        </div>
                        <div class="btn-group dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-folder-fill"></i></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Inbox</a>
                            </div>
                        </div>
                        <div class="btn-group dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-line"></i>More</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Spam</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <ul class="email-list">
                            <li class="unread">
                                <div class="email-sender-info">
                                    <div class="checkbox-wrapper-email">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </div>
                                    <span class="ri-star-line text-warning"></span>
                                    <a class="email-title">Gian Arce Perez</a>
                                </div>
                                <div class="email-content">
                                    <a href="#" class="email-subject">
                                        Te enviaron un mensaje de Ztrack
                                    </a>
                                    <div class="email-date">
                                        11:49am
                                    </div>
                                </div>
                            </li>
                        </ul>
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
<script src="js/script.js"></script>
</body>
</html>