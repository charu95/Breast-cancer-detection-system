<!doctype html>
<?php
include(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <title>Oncologist</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">

        <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/color_skins.css">
    </head>
    <body class="theme-cyan">

        <!-- Overlay For Sidebars -->

        <div id="wrapper">

            <?php include 'navigation.php'; ?>

            <div id="main-content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Oncologist Dashboard</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>                            
                                    <li class="breadcrumb-item active">Oncologist Dashboard</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2>All Patients</h2>

                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom">
                                            <thead class="thead-dark">
                                                <tr>
                                                <tr>      
                                                    <th>Image</th>
                                                    <th>Patients ID</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Address</th>
                                                    <th>Status</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>      
                                                    <th>Image</th>
                                                    <th>Patients ID</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Address</th>
                                                    <th>Status</th>
                                                    <th>Options</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>

                                                <?php
                                                $AllPatientsOBj = new Patient(NULL);
                                                $AllPatients = $AllPatientsOBj->all();
                                                foreach ($AllPatients as $patient) {
                                                    ?>
                                                    <tr>
                                                        <td><span class="list-icon"><img class="patients-img" src="../upload/patient/<?php echo $patient['image_name'] ?>" alt=""></span></td>
                                                        <td><span class="list-name">PI <?php echo $patient['id'] ?></span></td>
                                                        <td> <?php echo $patient['name'] ?></td>
                                                        <td> <?php echo $patient['age'] ?></td>
                                                        <td> <?php echo $patient['address'] ?></td>
                                                        <td><span class="badge <?php
                                                            if ($patient['status'] == "Normal") {
                                                                echo 'badge-success';
                                                            } elseif ($patient['status'] == "Abnormal") {
                                                                echo 'badge-warning';
                                                            } else {
                                                                
                                                            }
                                                            ?>"> <?php echo $patient['status'] ?></span></td>
                                                        <td> <?php if ($patient['status'] !== "0") { ?><a href="patient-details.php?id=<?php echo $patient['id'] ?>"> <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Comments"><i class="icon-drawer" aria-hidden="true"></i></button></a><?php } ?></td>

                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>

        </div>

        <!-- Javascript -->
        <script src="assets/bundles/libscripts.bundle.js"></script>
        <script src="assets/bundles/vendorscripts.bundle.js"></script>

        <script src="assets/bundles/mainscripts.bundle.js"></script>
        <script src="assets/js/index.js"></script>



        <script src="assets/bundles/datatablescripts.bundle.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>


        <script src="assets/bundles/mainscripts.bundle.js"></script>
        <script src="assets/js/pages/tables/jquery-datatable.js"></script>

    </body>

</html>
