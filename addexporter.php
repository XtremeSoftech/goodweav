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


                    <div class="mb-1 row">
                        <label for="expCode" class="col-sm-2 col-form-label">Exporter Code</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="expCode" placeholder="Enter Exporter Code">
                        </div>
                        <label for="expRegDate" class="col-sm-3 col-form-label">Exporter Registered Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="expRegDate" placeholder="Enter Exporter Code">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="expName" class="col-sm-2 col-form-label">Exporter Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="expName" placeholder="Enter Exporter Registered Name">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="expAddress" class="col-sm-2 col-form-label">Exporter Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="expAddress" placeholder="Enter Exporter Registered Address">
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>




    <?php include_once('./Components/script.php') ?>

</body>

</html>