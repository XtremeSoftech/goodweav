<?php
$full_query = null;
$label = null;
$imp_d = null;
include('./php-include/conn.php');
include('./php-include/implementation.php');

?>

<?php
if(isset($_POST['imp_det'])){
    $imp_code = mysqli_real_escape_string($db, $_POST['imp_code']);
    $exp_code = mysqli_real_escape_string($db, $_POST['exp_code']);
    $imp_d = mysqli_fetch_array(mysqli_query($db, "select * from importer where importer_code='$imp_code'"));

    $label = 1;
    $_SESSION['expp_code'] = $exp_code;
}

if(isset($_POST['send'])){
    $imp_code = mysqli_real_escape_string($db, $_POST['imp_code']);
    $exp_code = mysqli_real_escape_string($db, $_POST['exp_code']);

    $label = 2;
    $_SESSION['exppp_code'] = $exp_code;
    $_SESSION['imp_code'] = $imp_code;
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>


    <section id="req_lab">
        <center>
            <?php if($label == 0){?>
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

                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

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
                                <h6><strong>Delicensed Date: </strong><span><?php if($full_query['delicensed_date'] == NULL){echo "N/A";}else{echo date('d-M-Y', strtotime($full_query['delicensed_date']));} ?></span></h6>
                                <h6><strong>Re-Registration Date: </strong><span><?php if($full_query['re_registration_date'] == NULL){echo "N/A";}else{echo date('d-M-Y', strtotime($full_query['re_registration_date']));} ?></span></h6>
                                <input type="hidden" name="exp_code" value="<?php echo $full_query['exporter_code']; ?>">
                                <input type="submit" name="confirm_exp" value="Confirm Details">
                            </form>
                        </div>

                    <?php } ?>

                </div>
            </div><?php }?>

            <?php
                if($label == 1){
            ?>

            <div class="col-md-4">
                <div class="card shadow">
                    <h5>Add Importer Details</h5>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="select-imp">
                        <!-- <input type="text" name="impcode" id="impcode" placeholder="Enter Importer Code"><button><i class="bi bi-search"><input type="hidden" name="search" class="btn-success"></i></button> -->
                        <select name="imp_code" id="">
                        <option disabled selected>Select Importer</option>
                        <?php
                            $e_code = $_SESSION['exp_code'];
                            $ep_code = mysqli_query($db, "select * from link_exp_to_imp where exp_code='$e_code'");
                            while($roo = mysqli_fetch_assoc($ep_code)){
                        ?>
                            <option value="<?php echo $roo['imp_code']; ?>"><?php echo strtoupper($roo['imp_code']); ?></option>
                        <?php }?>
                        </select><br>
                        <input type="hidden" name="exp_code" value="<?php echo $e_code; ?>">
                        <input type="submit" name="imp_det" value="Confirm Importer">
                    </div>
                    </form>

                    <?php if($imp_d != null){?>
                    <hr>
                    <div class="col-md-12 details">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                            <h6><strong>Imp Code: </strong><span><?php echo strtoupper($imp_d['importer_code']); ?></span></h6>
                            <h6><strong>Imp Name: </strong><span><?php echo ucwords($imp_d['importer_name']); ?></span></h6>
                            <input type="hidden" name="imp_code" value="<?php echo $imp_d['importer_code']; ?>">
                            <input type="hidden" name="exp_code" value="<?php echo $_SESSION['expp_code']; ?>">
                            <input type="submit" name="send" value="Label Request">
                        </form>
                    </div>
                    <?php }?>

                </div>
            </div><?php }?>
            <?php if($label == 2){?>
            <div class="col-md-4" id="label">
                <div class="card shadow">
                    <h5>Mention Label Details</h5>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row">
                        <label for="p-o" class="col-md-12">PO Number
                            <input class="col-md-5" type="text" name="p-o" id="po" placeholder="PO Number">

                            <label for="podate" class="col-md-12">PO Date &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="col-md-5" type="date" name="podate" id="podate" placeholder="PO Date"></label>

                            <input class="col-md-11" type="text" name="dpci" id="dpci" placeholder="DPCI NO.">

                            <select class="col-md-5" name="sector" id="">
                                <option disabled selected>Sectors</option>
                                <?php
                                    $sec = mysqli_query($db, "select * from sector where flg='N'");
                                    while($secc = mysqli_fetch_assoc($sec)){
                                ?>
                                    <option value="<?php echo $secc['id']; ?>"><?php echo ucwords($secc['sector_name']); ?></option>
                                <?php }?>
                            </select>

                            <select class="col-md-6" name="varieties" id="">
                                <option disabled selected>Varieties</option>
                                <?php
                                    $ve = mysqli_query($db, "select * from varities where flg='N'");
                                    while($vee = mysqli_fetch_assoc($ve)){
                                ?>
                                <option value="<?php echo $vee['id']; ?>"><?php echo ucwords($vee['varitie_name']); ?></option>
                                <?php }?>
                            </select>

                            <select class="col-md-11" name="subcontractor" id="">
                                <option value="0">Sub Contractor</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>

                            <input class="col-md-5" type="text" name="design_quality" id="design_quality" placeholder="Design & Quality">

                            <select class="col-md-6" name="label_type" id="label_type">
                                <option disabled selected>Label Type</option>
                                <?php
                                    $le = mysqli_query($db, "select * from label_type where del_flg='N'");
                                    while($let = mysqli_fetch_assoc($le)){
                                ?>
                                    <option value="<?php echo $let['id']; ?>"><?php echo ucwords($let['type_name']); ?></option>
                                    <?php }?>
                            </select>

                            <input class="col-md-3" type="number" name="rolls" id="rolls" placeholder="No of Rolls (If applicable)">

                            <input class="col-md-4" type="number" name="pieces" id="rolls" placeholder="No of Pieces">

                            <input class="col-md-3" type="text" name="Cost_per_unit" id="Cost_per_unit" placeholder="Cost/Unit">
                    </div>
                    <br>
                        <div class="col-md-12" style="text-align: center;">
                            <input type="hidden" name="exp_code" value="<?php echo $_SESSION['exppp_code'] ?>">
                            <input type="hidden" name="imp_code" value="<?php echo $_SESSION['imp_code'] ?>">
                            <button type="submit" name="request_raised">SUBMIT REQUEST</button>
                        </div>
                    </form>

                </div>


            </div><?php }?>
        </center>
    </section>


    <?php include_once('./Components/script.php') ?>

</body>

</html>