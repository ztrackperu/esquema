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
    <h5>Invoice</h5>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3 class="text-uppercase">HYPER</h3>
                <h3 class="fs-5">Invoice</h3>
            </div>
            <div class="mt-2 row">
                <div class="col-md-6">
                <h5 class="text-muted fs-6 text-muted">Hello, Cooper Hobson</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quoerum alias adipisci animi. Delectus, nihil aut!</p>
                </div>
                <div class="col-md-6">
                   <div class="row">
                          <div class="col-sm-6 offset-md-6">
                            <div class="float-sm-end">
                                <p class="fs-6 text-muted">Invoice Number
                                    <span class="text-dark float-end">INV-0001</span>
                                </p>
                                <p class="fs-6 text-muted">Order Status
                                    <span class="badge bg-success float-end">Paid</span>
                                </p>
                                <p class="fs-6 text-muted">Order ID
                                    <span class="text-dark float-end">ORD-0001</span>
                                </p>
                            </div>
                          </div>
                       
                   </div>
                </div>
            </div>

            <div class="mt-4 row">
                <div class="col-sm-3">
                    <h5 class="fs-6 text-muted">Billing Address</h5>
                    <p>Lynne K. Higby</p>
                    <p>795 Folsom Ave, Suite 600</p>
                    <p>San Francisco, CA 94107</p>
                    <p>999 999 999</p>
                </div>
                <div class="col-sm-3">
                    <h5 class="fs-6 text-muted">Shipping Address</h5>
                    <p>Cooper Hobson</p>
                    <p>795 Folsom Ave, Suite 600</p>
                    <p>San Francisco, CA 94107</p>
                    <p>999 999 999</p>
                </div>
                <div class="col-sm-6">
                    <img class="float-end" src="Assets/img/user1.jpg" alt="logo" width="100" height="100">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table" style="width:100%">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Item</td>
                            <td>Quantity</td>
                            <td>Unit Cost</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laptop</td>
                            <td>1</td>
                            <td>S/. 1000</td>
                            <td>S/. 1000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="text-muted fs-6">Notes:</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quoerum alias adipisci animi. Delectus, nihil autdolor sit amet consectetur adipisicing elit. Quoerum alias adipisci animi. Delectus, nihi!</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end mt-3 mt-sm-0">
                            <div class="row">
                                <p class="text-muted">Sub-total: 
                                    <span class="text-dark float-end">S/. 1000</span>
                                </p>
                                <p class="text-muted">Shipping: 
                                    <span class="text-dark float-end">S/. 100</span>
                                </p>
                                <span class="text-muted text-center">S/. 1100</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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