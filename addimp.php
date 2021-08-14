<?php
    include('./php-include/conn.php');
    include('./php-include/implementation.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>


    <section id="expimp">
        <div class="container">
            <div class="col-lg-12 col-sm-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12 expimp-left">
                        <i class="fas fa-file-export"></i>
                        <h3>Add Importer</h3>
                        <p>Importer details to be entered as in GWI records</p>
                    </div>
                    <div class="col-md-9 col-sm-12 expimp-right">
                        <h4>Enter NEW Importer Details</h4>
                        <div class="fields">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                
                                    <div class="form-group">
                                        <input class="col-md-3 col-sm-12" type="text" name="importer_code" placeholder="Importer Code" required>
                                        <input class="col-md-3 col-sm-12" type="date" name="imp_registered_date" placeholder="Registration Date" required>
                                        <input class="col-md-5 col-sm-12" type="email" name="imp_email" placeholder="Importer Email" required>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <input class="col-md-7 col-sm-12" type="text" name="importer_name" placeholder="importer Name" required>
                                        <input class="col-md-4 col-sm-12" type="text" name="imp_contact" placeholder="Contact No. with Country Code" required>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <input class="col-md-11" type="text" name="importer_add" placeholder="Importer Address" required>
                                    </div>

                                    <div class="form-group">
                                        <input class="col-md-4" type="text" name="importer_country" placeholder="Importer Country" required>
                                        <input class="col-md-4" type="url" name="importer_website" placeholder="Importer Website URL" required>
                                        <input class="col-md-3" type="text" name="importer_gstin" placeholder="Importer GSTIN" required>
                                    </div>

                                    <!-- <hr> -->

                                    <div class="form-group">
                                        <input class="col-md-7 col-sm-12" type="text" name="importer_license_name" placeholder="Importer License Name" required>
                                        <input class="col-md-4 col-sm-12" type="text" name="importer_license_number" placeholder="Importer License Number" required>
                                    </div>
                                    <div><input type="submit" name="importer" value="Add Importer"></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once('./Components/script.php') ?>

</body>

</html>