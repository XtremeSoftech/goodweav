<?php 
    //connection File
    include('./php-include/conn.php');

    //Exporter Logic
    include('./php-include/implementation.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body>


    <?php include_once('./Components/nav.php') ?>

    <div class="container mt-5">
        <div class="col-md-12">
            <div class="form-design">
                <div  id="add-form" class="card">
                    <div class="card-header primary text-center">
                        <h3>Add NEW Exporter</h3>
                    </div>

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="mb-1 row">
                                <label for="expCode" class="col-sm-2 col-form-label">Exporter Code</label>
                                <div class="col-sm-3">
                                    <input type="text" name="exporter_code" class="form-control" id="expCode" placeholder="Enter Exporter Code">
                                </div>
                                <label for="expRegDate" class="col-sm-3 col-form-label">Exporter Registered Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="registered_date" class="form-control" id="expRegDate" placeholder="Enter Registered Date">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Exporter Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_name" class="form-control" id="expName" placeholder="Enter Exporter Registered Name">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Exporter Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="expName" placeholder="Enter Exporter Email">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Exporter Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact" class="form-control" id="expName" placeholder="Enter Exporter Mobile with country code">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Exporter Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_add" class="form-control" id="expAddress" placeholder="Enter Exporter Registered Address">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Exporter Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_country" class="form-control" id="expAddress" placeholder="Enter Exporter Country">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Exporter Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_website" class="form-control" id="expAddress" placeholder="eg. https://example.com/">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Source Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="source_country" class="form-control" id="expAddress" placeholder="Enter Source Country">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Exporter GSTIN</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_gstin" class="form-control" id="expName" placeholder="Enter Exporter GSTIN Number">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Exporter License Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_license_name" class="form-control" id="expName" placeholder="Enter Exporter License Name">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Exporter License Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exporter_license_number" class="form-control" id="expName" placeholder="Enter Exporter License Number">
                                </div>
                            </div>
                            <div class="mb-1 row">
                            <label for="expRegDate" class="col-sm-3 col-form-label">Exporter Delicensed Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="exporter_delicensed_date" class="form-control" id="expRegDate" placeholder="Enter Delicensed Date">
                                </div>
                            </div>
                            <div class="mb-1 row">
                            <label for="expRegDate" class="col-sm-3 col-form-label">Exporter Re-Registration Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="exporter_re_registration_date" class="form-control" id="expRegDate" placeholder="Enter Re-Registration Date">
                                </div>
                            </div>
                            <input type="submit" name="exporter" Value="Submit">
                    </form>






                </div>
            </div>
        </div>
    </div>




    <?php include_once('./Components/script.php') ?>

</body>

</html>