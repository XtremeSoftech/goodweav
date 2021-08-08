<?php
    
    //connection file
    include('./php-include/conn.php');
    $label1 = null;
    $rel_rr = null;


    $exp_code_id = $_GET['importer_linking_id'];

    if(empty($_GET['importer_linking_id'])){
        echo "<script>alert('Something went wrong. Please try again .');window.location.href='./exporter.php';</script>";
    }
    $check_exp_id = mysqli_query($db, "select * from expoter where hash='$exp_code_id'");
    if(mysqli_num_rows($check_exp_id) > 0){
        $epp = mysqli_fetch_array(mysqli_query($db, "select * from expoter where hash='$exp_code_id'"));
    }
    else{
        echo "<script>alert('Exporter id is wrong. Please try again .');window.location.href='./exporter.php';</script>";
    }

    //logic file
    include('./php-include/implementation.php');
    
?>


<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>


    <section id="req_lab">
        <center>
            
            <?php if($label1 == 0){?>
            <div class="col-md-4">
                <div class="card shadow">
                    <h5>Confirm Importer Details you want to Link</h5>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div>
                            <input type="text" name="imp_code" id="expcode" placeholder="Enter Importer Code"><button><i class="bi bi-search"><input type="hidden" name="search_imp" class="btn-success"></i></button>
                        </div>
                    </form>
                    <?php
                    if ($rel_rr != null) {
                    ?>
                        <div class="col-md-12 details">

                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-left: 0px;">

                                <h6><strong>Code: </strong><span><?php echo strtoupper($rel_rr['importer_code']); ?></span></h6>
                                <h6><strong>Name: </strong><span><?php echo ucwords($rel_rr['importer_name']); ?></span></h6>
                                <h6><strong>Email: </strong><span><?php echo $rel_rr['email']; ?></span></h6>
                                <h6><strong>Contact: </strong><span><?php echo $rel_rr['contact']; ?></span></h6>
                                <h6><strong>Website: </strong><span><a href="<?php echo $rel_rr['website']; ?>" target="blank"><?php echo $rel_rr['website']; ?></a></span></h6>
                                <input type="hidden" name="exp_code" value="<?php echo $epp['exporter_code']; ?>">
                                <input type="hidden" name="imp_code" value="<?php echo $rel_rr['importer_code']; ?>">
                                <input type="submit" name="link_exp_imp" value="Link With <?php echo strtoupper($epp['exporter_code']); ?>">
                            </form>
                        </div>

                    <?php } ?>

                </div>
            </div><?php }?>
        </center>
    </section>

    
    <?php include_once('./Components/script.php') ?>

</body>

</html>