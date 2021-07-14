<?php
$full_query = null;
$label = null;
include('./php-include/conn.php');
include('./php-include/implementation.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>


    <section id="req_lab">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <h5>Confirm your Exporter Details</h5>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div>
                            <input type="text" name="expcode" id="expcode" placeholder="Enter Exporter Code"><button><i class="bi bi-search"><input type="hidden" name="search" class="btn-success"></i></button>
                        </div>
                    </form>
                    <?php
                    if ($full_query != null) {
                    ?>
                        <div class="col-md-12 details">

                            <h6><strong>Code: </strong><span><?php echo $full_query['exporter_code']; ?></span></h6>
                            <h6><strong>Name: </strong><span><?php echo ucwords($full_query['exporter_name']); ?></span></h6>
                            <h6><strong>Registration Date: </strong><span><?php echo date('d-M-Y', strtotime($full_query['registration_date'])); ?></span></h6>
                            <h6><strong>Address: </strong><span><?php echo $full_query['address']; ?></span></h6>
                            <hr>
                            <h6><strong>Status: </strong><span><strong style="color:<?php if ($full_query['website'] == 1) {
                                                                                        echo "green";
                                                                                    } else {
                                                                                        echo "red";
                                                                                    } ?>;"><?php if ($full_query['website'] == 1) {
                                                                                                echo "Active";
                                                                                            } else {
                                                                                                echo "Not-Active";
                                                                                            } ?></strong></span></h6>
                            <h6><strong>Country: </strong><span><?php echo $full_query['country']; ?></span></h6>
                            <h6><strong>Website: </strong><span><a href="<?php echo $full_query['website']; ?>" target="blank"><?php echo $full_query['website']; ?></a></span></h6>
                            <h6><strong>Delicensed Date: </strong><span><?php echo date('d-M-Y', strtotime($full_query['delicensed_date'])); ?></span></h6>
                            <h6><strong>Re-Registration Date: </strong><span><?php echo date('d-M-Y', strtotime($full_query['re_registration_date'])); ?></span></h6>
                        </div>
                        
                    <?php } ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <h5>Add Importer Details</h5>
                    <div class="select-imp">
                        <!-- <input type="text" name="impcode" id="impcode" placeholder="Enter Importer Code"><button><i class="bi bi-search"><input type="hidden" name="search" class="btn-success"></i></button> -->
                        <select name="" id="">
                            <option value="0">Select Importer</option>
                            <option value="1">IMP001</option>
                            <option value="2">IMP015</option>
                            <option value="3">IMP112</option>
                        </select>
                    </div>
                    <div class="col-md-12 details">

                        <h6><strong>Imp Code: </strong><span><?php echo $full_query['exporter_code']; ?></span></h6>
                        <h6><strong>Imp Name: </strong><span><?php echo ucwords($full_query['exporter_name']); ?></span></h6>

                    </div>

                </div>
            </div>
            <div class="col-md-4" id="label">
                <div class="card shadow">
                    <h5>Mention Label Details</h5>
                    <div class="row">
                        <input class="col-md-6" type="text" name="p-o" id="po" placeholder="PO# - PO Date">
                        <input class="col-md-5" type="date" name="p-o" id="podate" placeholder="PO Date">
                    
                        <select class="col-md-5" name="sector" id="">
                            <option value="0">Sectors</option>
                            <option value="1">Carpets</option>
                            <option value="2">Home Textile</option>
                        </select>

                        <select class="col-md-6" name="varieties" id="">
                            <option value="0">Varieties</option>
                            <option value="1">Hand-tufted</option>
                            <option value="2">Hand-knotted</option>
                            <option value="3">Handloom</option>
                        </select>

                        <select class="col-md-11" name="subcontractor" id="">
                            <option value="0">Sub Contractor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        
                        <input class="col-md-5" type="text" name="design_quality" id="design_quality" placeholder="Design & Quality">
                        
                        <select class="col-md-6" name="label_type" id="label_type">
                            <option value="0">Label Type</option>
                            <option value="1">M-Series</option>
                            <option value="2">T-Series</option>
                        </select>
                        
                        <input class="col-md-3" type="number" name="rolls" id="rolls" placeholder="No of Rolls (If applicable)">

                        <input class="col-md-5" type="number" name="pieces" id="rolls" placeholder="No of Pieces">

                        <input class="col-md-3" type="text" name="Cost_per_uni" id="Cost_per_unit" placeholder="Cost/Unit">
                    </div>
                    <br>
                    
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="col-md-12" style="text-align: center;">
                                <input type="hidden" name="exp_code" value="<?php echo $full_query['exporter_code']; ?>">
                                <button type="submit" name="confirm_exp">SUBMIT REQUEST</button>
                            </div>
                        </form>

                </div>


            </div>
        </div>
    </section>


    <?php include_once('./Components/script.php') ?>

</body>

</html>