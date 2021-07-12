<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="index-style">

    <?php include_once('./Components/nav.php') ?>


    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="card shadow">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/img/icons/index/export_home.png" alt="Exporter Icon">
                            </div>
                            <div class="col-md-8">
                                <h2><strong>1224</strong></h2><span>Exporters</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="card shadow">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/img/icons/index/import_home.png" alt="Importer Icon">
                            </div>
                            <div class="col-md-8">
                                <h2><strong>256</strong></h2><span>Importers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="card shadow">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/img/icons/index/admin-user.png" alt="Admin User Icon">
                            </div>
                            <div class="col-md-8">
                                <h2><strong>12</strong></h2><span>Admin Users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div id="alt-card" class="card shadow">
                        <h4>Labels issued for the Month</h4>
                        <!-- <div class="row"> -->
                        <div class="col-md-12 col-xs-12">
                            <div class="card shadow">
                                <h2>25</h2><span>Issued</span>
                            </div>
                        </div>
                        <a href="labelsrequested.php">
                        <div class="col-md-12 col-xs-12">
                            <div class="card shadow">
                                <h2>25</h2><span>Pending</span>
                            </div>
                        </div>
                        </a>
                        <div class="col-md-12 col-xs-12">
                            <div class="card shadow">
                                <h2>25</h2><span>In-Progress</span>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>



        </div>
        </div>
    </section>



    <?php include_once('./Components/script.php') ?>

</body>

</html>