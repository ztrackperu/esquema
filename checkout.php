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
    <h5 class="text-muted fs-5">Checkout</h5>
    <div class="card">
        <div class="card-body">
            <!-- NAV PILLS -->
            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#billingInfo" data-bs-toggle="pill" id="billingInfo-tab" role="tab" class="nav-link active" aria-controls="billingInfo" aria-selected="true">
                        <i class="ri-user-3-line"></i>
                        <span class="d-none d-sm-block">Billing Info</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#shippingInfo" data-bs-toggle="pill" id="shippingInfo-tab" role="tab" class="nav-link" aria-controls="shippingInfo" aria-selected="false">
                        <i class="ri-truck-line"></i>
                        <span class="d-none d-sm-block">Shipping Info</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#paymentInfo" data-bs-toggle="pill" id="paymentInfo-tab" role="tab" class="nav-link" aria-controls="paymentInfo" aria-selected="false">
                        <i class="ri-money-dollar-box-line"></i>
                        <span class="d-none d-sm-block">Payment Info</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-content">
                <div class="tab-pane fade show active" id="billingInfo" role="tabpanel" aria-labelledby="billingInfo-tab">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="text-muted fs-5">Billing information</h5>
                            <p class="text-muted">Fill the form below in order to send you the order's invoice.</p>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="text-muted fs-6">First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your first name">
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="shippingInfo" role="tabpanel" aria-labelledby="shippingInfo-tab">
                    <h5>ShippingInfo</h5>
                </div>
                <div class="tab-pane fade" id="paymentInfo" role="tabpanel" aria-labelledby="paymentInfo-tab">
                    <h5>PaymentInfo</h5>
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