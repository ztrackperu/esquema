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
   <h5 class="text-muted fs-6">Order Details</h5>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <div class="step active">1</div>
                    <div class="step-desc">Paso 1</div>
                </div>
                <div>
                    <div class="step">2</div>
                    <div class="step-desc">Paso 2</div>
                </div>
                <div>
                    <div class="step">3</div>
                    <div class="step-desc">Paso 3</div>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted fs-6 text-uppercase">Items from Order #12537</h5>
                    <div class="table-responsive">
                        <table class="table mt-4">
                            <thead>
                                <tr style="background-color:#edf2f7;">
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-muted">The Military Duffle Dag</td>
                                    <td>3</td>
                                    <td>$128</td>
                                    <td>$384</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Mountain Basket Ball</td>
                                    <td>1</td>
                                    <td>$199</td>
                                    <td>$199</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Wavex Canvas Messenger Bag</td>
                                    <td>5</td>
                                    <td>$180</td>
                                    <td>$900</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">The Utility Shirt</td>
                                    <td>2</td>
                                    <td>$79</td>
                                    <td>$158</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted fs-6 text-uppercase">Order Summary</h5>
                    <div class="table-responsive">
                        <table class="table mt-4">
                            <thead>
                                <tr style="background-color:#edf2f7;">
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-muted">Grand Total:</td>
                                    <td clasS="text-muted">$1641</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Shipping Charge:</td>
                                    <td clasS="text-muted">$23</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Estimated Tax:</td>
                                    <td clasS="text-muted">$19.22</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-muted">Total:</td>
                                    <td class="fw-bold text-muted">$1683.22</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <div class="row mt-2">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted fs-6 text-uppercase">Shipping Information</h5>
                    <div class="mt-4">
                        <h5 class="text-muted fs-6 mb-1">Stanley Jones</h5>
                        <p class="text-muted">795 Folsom Ave, Suite 600
                        <br>
                        San Francisco, CA 94107
                        <br>
                        P; (123) 456-7890
                        <br>
                        M; (+01) 12345 67890
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="text-muted fs-6 text-uppercase">Billing Information</h5>
                    <div class="mt-4">
                        <ul>
                            <li>
                                <p class="text-muted mb-2">Payment Type: <span class="text-muted"> Credit Card</span></p>
                            </li>
                            <li>
                                <p class="text-muted mb-2">Provider:<span class="text-muted"> Visa ending in 2851</span></p>
                            </li>
                            <li>
                                <p class="text-muted mb-2">Valid Date:<span class="text-muted"> 02/2020</span></p>
                            </li>
                            <li>
                                <p class="text-muted mb-0">CVV: <span class="text-muted"> xxx</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="text-muted fs-6 text-uppercase">Delivery Info</h5>
                    <div class="text-center">
                        <i class="ri-truck-fill fs-2"></i>
                        <p class="fw-bold text-uppercase text-muted">Ups Delivery</p>
                        <ul>
                            <li>
                                <p class="mb-0">Order ID: <span> xxxx235</span></p>
                            </li>
                            <li>
                                <p class="mb-0">Payment Mode: <span> COD</span></p>
                            </li>
                        </ul>
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