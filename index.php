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
            <ul class="navbar-nav d-flex flex-row-reverse gap-4">
                <li class="nav-item">
                    <a class="nav-link border" href="#"><i class="ri-notification-3-fill">PROFILE</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="ri-user-3-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="ri-settings-3-fill"></i></a>
                </li>
            </ul>
        </nav>
</div>
</div>
<!--
<div class="row">
    <div class="col-md-12" style="background-color:red;">
    <h1>Rojo</h1>
    </div>  
</div>
<div class="row">
    <div class="col-md-5" style="background-color:green;">
        <h1>Table</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>asd</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>asd</td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-7" style="background-color:black;">
        <h1>Mapa</h1>
    </div>
</div>-->
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


<!--
<div class="row">
    <div class="col-lg-4">
        <div class="row m-2">
            <div class="col-sm-6">
                <div class="d-flex justify-content-center border card card1 c1 c11">
                    <h1>1</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-center border card card2 c2 c22">
                    <h1>2</h1>
                </div>
            </div>
        </div>
        <div class="row m-4">
            <div class="d-flex justify-content-center col-sm-12 border c3">
                <h1>3</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row m-2">
            <div class="col-sm-12 border c4">
                <h1>4</h1>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="modalText"></p>
  </div>
</div>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/script.js"></script>
</body>
</html>