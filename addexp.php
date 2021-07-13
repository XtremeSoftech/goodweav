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
                        <h3>Add Exporter</h3>
                        <p>Exporter details to be entered as in GWI records</p>
                    </div>
                    <div class="col-md-9 col-sm-12 expimp-right">
                        <h4>Enter NEW Exporter Details</h4>
                        <div class="fields">
                            <form action="addnewexporter">
                                
                                    <div class="form-group">
                                        <input class="col-md-3 col-sm-12" type="text" placeholder="Exporter Code" required>
                                        <input class="col-md-3 col-sm-12" type="date" placeholder="Registration Date" required>
                                        <input class="col-md-5 col-sm-12" type="email" placeholder="Exporter Email" required>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <input class="col-md-7 col-sm-12" type="text" placeholder="Exporter Name" required>
                                        <input class="col-md-4 col-sm-12" type="text" placeholder="Contact No. with Country Code" required>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <input class="col-md-11" type="text" placeholder="Exporter Address" required>
                                    </div>

                                    <div class="form-group">
                                        <input class="col-md-4" type="text" placeholder="Exporter Country" required>
                                        <input class="col-md-4" type="url" placeholder="Exporter Website URL" required>
                                        <input class="col-md-3" type="text" placeholder="Exporter GSTIN" required>
                                    </div>

                                    <!-- <hr> -->

                                    <div class="form-group">
                                        <input class="col-md-7 col-sm-12" type="text" placeholder="Exporter License Name" required>
                                        <input class="col-md-4 col-sm-12" type="text" placeholder="Exporter License Number" required>
                                    </div>
                                
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