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
                    <h4>Confirm your Exporter Details</h4>
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
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="col-md-12" style="text-align: right;">
                            <input type="hidden" name="exp_code" value="<?php echo $full_query['exporter_code']; ?>">
                            <button type="submit" name="confirm_exp">Confirm Exporter Details</button>
                            </div>
                        </form>
                    <?php } ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <h4>Add Importer Details</h4>
                    <div>
                        <input type="text" name="impcode" id="impcode" placeholder="Enter Importer Code"><button><i class="bi bi-search"><input type="hidden" name="search" class="btn-success"></i></button>
                    </div>

                    <!-- Fetch all Import details Like Exporter                                                                       -->

                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <h4>Mention Label Details</h4>
                </div>
            </div>
        </div>
    </section>


    <?php include_once('./Components/script.php') ?>

</body>

</html>