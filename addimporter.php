<?php 
    //connection File
    include('./php-include/conn.php');

    //Importer Logic
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
                        <h3>Add NEW Importer</h3>
                    </div>

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="mb-1 row">
                                <label for="expCode" class="col-sm-2 col-form-label">Importer Code</label>
                                <div class="col-sm-3">
                                    <input type="text" name="importer_code" class="form-control" id="expCode" placeholder="Enter Importer Code">
                                </div>
                                <label for="expRegDate" class="col-sm-3 col-form-label">Importer Registered Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="registered_date" class="form-control" id="expRegDate" placeholder="Enter Registered Date">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Importer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_name" class="form-control" id="expName" placeholder="Enter Importer Registered Name">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Importer Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="expName" placeholder="Enter Importer Email">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Importer Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contact" class="form-control" id="expName" placeholder="Enter Importer Mobile with country code">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Importer Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_add" class="form-control" id="expAddress" placeholder="Enter Importer Registered Address">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Importer Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_country" class="form-control" id="expAddress" placeholder="Enter Importer Country">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Importer Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_website" class="form-control" id="expAddress" placeholder="eg. https://example.com/">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expAddress" class="col-sm-2 col-form-label">Source Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="source_country" class="form-control" id="expAddress" placeholder="Enter Source Country">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Importer GSTIN</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_gstin" class="form-control" id="expName" placeholder="Enter Importer GSTIN Number">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Importer License Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_license_name" class="form-control" id="expName" placeholder="Enter Importer License Name">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="expName" class="col-sm-2 col-form-label">Importer License Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="importer_license_number" class="form-control" id="expName" placeholder="Enter Importer License Number">
                                </div>
                            </div>
                            <div class="mb-1 row">
                            <label for="expRegDate" class="col-sm-3 col-form-label">Importer Delicensed Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="importer_delicensed_date" class="form-control" id="expRegDate" placeholder="Enter Delicensed Date">
                                </div>
                            </div>
                            <div class="mb-1 row">
                            <label for="expRegDate" class="col-sm-3 col-form-label">Importer Re-Registration Date</label>
                                <div class="col-sm-4">
                                    <input type="date" name="importer_re_registration_date" class="form-control" id="expRegDate" placeholder="Enter Re-Registration Date">
                                </div>
                            </div>
                            <input type="submit" name="importer" Value="Submit">
                    </form>






                </div>
            </div>
        </div>
    </div>




    <?php include_once('./Components/script.php') ?>

</body>

</html>