<?php

    //lOGIC for Exporter Registration
    if(isset($_POST['exporter'])){
        $exporter_code = mysqli_real_escape_string($db, $_POST['exporter_code']);
        $registered_date = mysqli_real_escape_string($db, $_POST['registered_date']);
        $exporter_name = mysqli_real_escape_string($db, $_POST['exporter_name']);
        $exporter_gstin_number = mysqli_real_escape_string($db, $_POST['exporter_gstin']);
        $exporter_license_name = mysqli_real_escape_string($db, $_POST['exporter_license_name']);
        $exporter_license_number = mysqli_real_escape_string($db, $_POST['exporter_license_number']);
        $exporter_email = mysqli_real_escape_string($db, $_POST['email']);
        $exporter_contact = mysqli_real_escape_string($db, $_POST['contact']);
        $exporter_add = mysqli_real_escape_string($db, $_POST['exporter_add']);
        $exporter_country = mysqli_real_escape_string($db, $_POST['exporter_country']);
        $exporter_website = mysqli_real_escape_string($db, $_POST['exporter_website']);
        $exporter_hash = strtoupper(md5($exporter_code));
        //$source_country = mysqli_real_escape_string($db, $_POST['source_country']);
        //$exporter_delicensed_date = mysqli_real_escape_string($db, $_POST['exporter_delicensed_date']);
        //$exporter_re_registration_date = mysqli_real_escape_string($db, $_POST['exporter_re_registration_date']);

        //query for checking data is present or not
        $ch_q = mysqli_query($db, "select * from expoter where website='$exporter_website' and flg='N'");
        if(mysqli_num_rows($ch_q) > 0){
            echo "<script>alert('Exporter Exists Already .');window.location.href='./addexp.php';</script>";
        }
        else{
            //Insert Query
            $insert_query = mysqli_query($db, "insert into expoter (exporter_code, exporter_name, gstin, license_name, license_number, email, contact, website, hash) values ('$exporter_code', '$exporter_name', '$exporter_gstin_number', '$exporter_license_name', '$exporter_license_number', '$exporter_email', '$exporter_contact','$exporter_website', '$exporter_hash')");
            if(!$insert_query){
                echo "<script>alert('Something Went Wrong .');window.location.href='./';</script>";
            }
            else{
                $insert_sub_info = mysqli_query($db, "insert into exporter_sub_info (exporter_code, address, country, registration_date) values ('$exporter_code', '$exporter_add', '$exporter_country', '$registered_date')");
                echo "<script>alert('Registration New Expoter Sucessfully .');window.location.href='./';</script>";
            }
            
        }



    }

    //Logic for Importer
    if(isset($_POST['importer'])){
        $importer_code = mysqli_real_escape_string($db, $_POST['importer_code']);
        $registered_date = mysqli_real_escape_string($db, $_POST['imp_registered_date']);
        $importer_name = mysqli_real_escape_string($db, $_POST['importer_name']);
        $importer_gstin_number = mysqli_real_escape_string($db, $_POST['importer_gstin']);
        $importer_license_name = mysqli_real_escape_string($db, $_POST['importer_license_name']);
        $importer_license_number = mysqli_real_escape_string($db, $_POST['importer_license_number']);
        $importer_email = mysqli_real_escape_string($db, $_POST['imp_email']);
        $importer_contact = mysqli_real_escape_string($db, $_POST['imp_contact']);
        $importer_add = mysqli_real_escape_string($db, $_POST['importer_add']);
        $importer_country = mysqli_real_escape_string($db, $_POST['importer_country']);
        $importer_website = mysqli_real_escape_string($db, $_POST['importer_website']);
        $importer_hash = strtoupper(md5($importer_code));
        //$source_country = mysqli_real_escape_string($db, $_POST['source_country']);
        //$importer_delicensed_date = mysqli_real_escape_string($db, $_POST['importer_delicensed_date']);
        //$importer_re_registration_date = mysqli_real_escape_string($db, $_POST['importer_re_registration_date']);

        //query for checking data is present or not
        $ch_q = mysqli_query($db, "select * from importer where website='$importer_website' and flg='N'");
        if(mysqli_num_rows($ch_q) > 0){
            echo "<script>alert('Importer Exists Already .');window.location.href='./addimporter.php';</script>";
        }
        else{
            //Insert Query
            $insert_query = mysqli_query($db, "insert into importer (importer_code, importer_name, gstin, license_name, license_number, email, contact, website, hash) values ('$importer_code', '$importer_name', '$importer_gstin_number', '$importer_license_name', '$importer_license_number', '$importer_email', '$importer_contact', '$importer_website', '$importer_hash')");
            if(!$insert_query){
                echo "<script>alert('Something Went Wrong .');window.location.href='./';</script>";
            }
            else{
                $insert_sub_info = mysqli_query($db, "insert into importer_sub_info (importer_code, address, country, registration_date) values('$importer_code', '$importer_add', '$importer_country', '$registered_date')");
                echo "<script>alert('Registration New Importer Sucessfully .');window.location.href='./';</script>";
            }
            
        }
    }

    //Search Expoter Code Logic Implementation
    if(isset($_POST['search'])){
        $check_code = null;
        $expcode = mysqli_real_escape_string($db, $_POST['expcode']);
        if(empty($expcode)){
            echo "<script>alert('Search Crieteria is Empty');window.location.href='./requestlabel.php';</script>";
        }
        else{
            $check_code = mysqli_query($db, "select * from expoter where exporter_code='$expcode'");
            if(mysqli_num_rows($check_code) > 0){
                $full_query = mysqli_fetch_assoc(mysqli_query($db, "select * from expoter ex join exporter_sub_info exp on ex.exporter_code = exp.exporter_code where ex.exporter_code='$expcode'"));
            }
            else{
                echo "<script>alert('Exporter Code Not Exist in Database');window.location.href='./requestlabel.php';</script>";
            }
        }
    }
    //confirm exporter & redirect to Label Request
    if(isset($_POST['confirm_exp'])){
        $exp_code = mysqli_real_escape_string($db, $_POST['exp_code']);
        $label = 1;
        $_SESSION['exp_code'] = $exp_code;
    }

    //currency request label
    if(isset($_POST['request_l'])){
        $label_required = mysqli_real_escape_string($db, $_POST['label_required']);
        $label_type = mysqli_real_escape_string($db, $_POST['labeltype']);
        $currency_type = mysqli_real_escape_string($db, $_POST['currency']);
        $exp_code = mysqli_real_escape_string($db, $_POST['expcode']);
        $usd_inr = mysqli_real_escape_string($db, $_POST['usd_inr']);
        $usd_euro = mysqli_real_escape_string($db, $_POST['usd_euro']);
        $usd_gbp = mysqli_real_escape_string($db, $_POST['usd_gbp']);

        ///Insert WQuery
        $insert_query = mysqli_query($db, "insert into requested_label (exporter_code, label_type, no_of_requested_label, currency_type, inr_price, euro_price, gbp_price) values ('$exp_code', '$label_type', '$label_required', '$currency_type', '$usd_inr', '$usd_euro', '$usd_gbp')");
        if(!$insert_query){
            echo "<script>alert('Something Went Wrong .');window.location.href='./requestlabel.php';</script>";
        }
        else{
            echo "<script>alert('Request label query raised sucesasafully .');window.location.href='./requestlabel.php';</script>";
        }
    }
    

    //importer linking logic implementation

    if(isset($_POST['search_imp'])){
        $impcode = mysqli_real_escape_string($db, $_POST['imp_code']);
        $rel_imp = mysqli_query($db, "select * from importer where importer_code='$impcode'");
        if(mysqli_num_rows($rel_imp) > 0){
            $l1 = 1;
            $rel_rr = mysqli_fetch_array(mysqli_query($db, "select * from importer where importer_code='$impcode'"));
        }
        else{
            echo "<script>alert('Entered Importer Code not found !!!');window.location.href='./exporter.php';</script>";
        }
    }

    if(isset($_POST['link_exp_imp'])){
        $exp_code = mysqli_real_escape_string($db, $_POST['exp_code']);
        $imp_code = mysqli_real_escape_string($db, $_POST['imp_code']);

        //query to insert data
        $p1 = mysqli_query($db, "insert into link_exp_to_imp (exp_code, imp_code) values ('$exp_code', '$imp_code')");
        if(!$p1){
            echo "<script>alert('Something Went Wrong .');window.location.href='./exporter.php';</script>";
        }
        else{
            echo "<script>alert('Importer Linked Successfully .');window.location.href='./exporter.php';</script>";
        }
    }

?>