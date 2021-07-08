<?php
    $full_query = null;
    $label = null;
    include('./php-include/conn.php');
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
                <div class="card">
                    <div class="card-header primary text-center">
                        <h3>Label Requistion Form</h3>
                    </div>
                    <div class="card-body">

                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <?php if($label == null){?><button class="nav-link <?php if($label == null){echo "active";}else{echo "";}?>" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Exporter Search</button>

                            <?php }else{?>    <button class="nav-link <?php if($label == 1){echo "active";}else{echo "";}?>" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Label Requistion</button><?php }?>

                                <!-- <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Label Requistion</button> -->

                                <!-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> -->
                            </div>

                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade <?php if($label == null){echo "show active";}else{echo "";}?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="expcode" id="expcode" placeholder="Enter Exporter Code">
                                                <button class="btn-success"><i class="bi bi-search"><input type="hidden" name="search" class="btn-success"></i></button>
                                            </div>

                                        </div>
                                    </form>
                                    <?php
                                        if($full_query != null){
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5><strong>Exporter Details</strong></h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h6><strong>Code: </strong><span><?php echo $full_query['exporter_code']; ?></span></h6>
                                            <h6><strong>Name: </strong><span><?php echo ucwords($full_query['exporter_name']); ?></span></h6>
                                            <h6><strong>Registration Date: </strong><span><?php echo date('d-M-Y', strtotime($full_query['registration_date'])); ?></span></h6>
                                            <h6><strong>Address: </strong><span><?php echo $full_query['address']; ?></span></h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6><strong>Status: </strong><span><strong style="color:<?php if($full_query['website'] == 1){echo "green";}else{echo "red";}?>;"><?php if($full_query['website'] == 1){echo "Active";}else{echo "Not-Active";} ?></strong></span></h6>
                                            <h6><strong>Country: </strong><span><?php echo $full_query['country']; ?></span></h6>
                                            <h6><strong>Website: </strong><span><a href="<?php echo $full_query['website']; ?>" target="blank"><?php echo $full_query['website']; ?></a></span></h6>
                                            <h6><strong>Delicensed Date: </strong><span><?php echo date('d-M-Y', strtotime($full_query['delicensed_date'])); ?></span></h6>
                                            <h6><strong>Re-Registration Date: </strong><span><?php echo date('d-M-Y', strtotime($full_query['re_registration_date'])); ?></span></h6>

                                        </div>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="col-md-12" style="text-align: right;">
                                            <input type="hidden" name="exp_code" value="<?php echo $full_query['exporter_code']; ?>">
                                            <input type="submit" name="confirm_exp" class="btn-success" value="Confirm Exporter Details">
                                        </div>
                                        </form>

                                    </div>
                                    <?php }?>

                                </div>                   

                                <div class="tab-pane fade <?php if($label == 1){echo "show active";}else{echo "";}?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <h5><strong>Label Requistion Details</strong></h5>
                                        </div>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

                                        <!--<div class="col-md-6">
                                            <label>Label Request Date <input type="date" name="labelreqdate" id="labelreqdate"></label>
                                            

                                        </div>-->
                                        <div class="col-md-6">
                                            <label>Number of Labels Required <input type="number" name="label_required" id="labelrequired" minlength="500" maxlength="1000"></label>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            
                                            <label>Label Type</label>

                                            <select name="labeltype" id="labeltype">
                                                <option value="select type" name="label_type">Select Label Type</option>
                                                <?php 
                                                    $label_d = mysqli_query($db, "select * from label_type where del_flg='N'");
                                                    while($ro = mysqli_fetch_assoc($label_d)){
                                                ?>
                                                <option value="<?php echo $ro['id']; ?>"><?php echo $ro['type_name']; ?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            
                                            <label>Currency Used</label>

                                            <select name="currency" id="labeltype">
                                                <option value="select type">Select Currency Type</option>
                                                <?php 
                                                    $label_d = mysqli_query($db, "select * from currency where del_flg='N'");
                                                    while($ro = mysqli_fetch_assoc($label_d)){
                                                ?>
                                                <option value="<?php echo $ro['id']; ?>"><?php echo $ro['name']; ?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                        <?php
                                            $q = mysqli_fetch_array(mysqli_query($db, "select * from intregration where id=1"));
                                            $op_inr = file_get_contents($q['curr_api_link']."INR&compact=ultra&apiKey=".$q['curr_api_keys']);
                                            $obj_inr = json_decode($op_inr);
                                            $op_eu = file_get_contents($q['curr_api_link']."EUR&compact=ultra&apiKey=".$q['curr_api_keys']);
                                            $obj_eu = json_decode($op_eu);
                                            $op_gbp = file_get_contents($q['curr_api_link']."GBP&compact=ultra&apiKey=".$q['curr_api_keys']);
                                            $obj_gbp = json_decode($op_gbp);
                                        ?>
                                            <h6><strong>Today's Exchange Value: </strong><br><br><span>₹ <?php echo number_format($obj_inr->USD_INR, 2, '.', ''); ?><br>€ <?php echo number_format($obj_eu->USD_EUR, 2, '.', ''); ?><br>£ <?php echo number_format($obj_gbp->USD_GBP, 2, '.', ''); ?></span></h6>
    
                                        </div>
                                        <input type="hidden" name="expcode" value="<?php echo $_SESSION['exp_code']; ?>">
                                        <input type="hidden" name="usd_inr" value="<?php echo number_format($obj_inr->USD_INR, 2, '.', ''); ?>">
                                        <input type="hidden" name="usd_euro" value="<?php echo number_format($obj_eu->USD_EUR, 2, '.', ''); ?>">
                                        <input type="hidden" name="usd_gbp" value="<?php echo number_format($obj_gbp->USD_GBP, 2, '.', ''); ?>">
                                    </div>
                                    <div class="col-md-12" style="text-align: right;">
                                            <input type="submit" class="btn-success" name="request_l" value="Request Labels">
                                        </div>
                                    </form>
                                </div>
                                

                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>

                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                            </div>
                        </div>









                    </div>
                </div>
            </div>
        </div>
    </div>
    



   <?php include_once('./Components/script.php') ?>

</body>

</html>