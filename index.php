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

<!--NAVBAR -->
<div class="row">
<aside id="sidebar" class="col-md-1 col-lx-1" style="display:none;">
    <h1>h</h1>
</aside>
<div class="col-lg-12 col-lx-12">
        <nav class="navbar bg-light p-2">
            
            <a class="navbar-brand p-2 toggle-btn" href="#">
                <i class="ri-align-justify"></i>
            </a>
            <ul class="navbar-nav list-group list-group-horizontal gap-4">
                <li class="nav-item">
                    <a class="nav-link border" href="email.php">Email</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="createProject.php">Create Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="socialFeed.php">Social Feed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="task.php">Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="taskDetail.php">Task Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="taskBoard.php">Task Board</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="invoice.php">Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="timeline.php">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php">Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gantt.php">Gant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fileManager.php">File Manager</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orderDetail.php">Order Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkout.php">Checkout</a>
                </li>
            </ul>
        </nav>
</div>
</div>

<div class="row">
    <div class="col-xl-5 col-lg-6">
        <div class="row rowDatos"></div>
    </div>
    <div class="col-xl-7 col-lg-6">
        <div class="row rowDatos2"></div>
    </div>

    <!--
    <div class="col-xl-7 col-lg-6">
        <div class="row">
            <div class="card cardGrafico">
                <div class="card-body shadow">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text overflow-auto"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </p>
                    
                </div>
            </div>
        </div>
    </div>-->
</div>

<div id="container3">
  <div class="card cardTest">
    <div class="card-body shadow">
      <h5 class="card-title">Título</h5>
      <p class="card-text">Contenido</p>
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