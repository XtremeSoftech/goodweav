<?php

    //lOGIC for Exporter Registration
    if(isset($_POST['exporter'])){
        $exporter_code = mysqli_real_escape_string($db, $_POST['exporter_code']);
        $registered_date = mysqli_real_escape_string($db, $_POST['registered_date']);
        $exporter_name = mysqli_real_escape_string($db, $_POST['exporter_name']);
        $exporter_add = mysqli_real_escape_string($db, $_POST['exporter_add']);
        $exporter_country = mysqli_real_escape_string($db, $_POST['exporter_country']);
        $exporter_website = mysqli_real_escape_string($db, $_POST['exporter_website']);
        $source_country = mysqli_real_escape_string($db, $_POST['source_country']);
        $exporter_delicensed_date = mysqli_real_escape_string($db, $_POST['exporter_delicensed_date']);

        //query for checking data is present or not
        $ch_q = mysqli_query($db, "select * from expoter where website='$exporter_website' and flg='N'");
        if(mysqli_num_rows($ch_q) > 0){
            echo "<script>alert('Exporter Exists Already .');window.location.href='./addexporter.php';</script>";
        }
        else{
            //Insert Query
            $insert_query = mysqli_query($db, "insert into expoter (exporter_code, exporter_name, address, country, website) values ('$exporter_code', '$exporter_name', '$exporter_add', '$exporter_country', '$exporter_website')");
            if(!$insert_query){
                echo "<script>alert('Something Went Wrong .');window.location.href='./';</script>";
            }
            else{
                $insert_sub_info = mysqli_query($db, "insert into exporter_sub_info (exporter_code, registration_date, source_country, delicensed_date) values('$exporter_code', '$registered_date', '$source_country', '$exporter_delicensed_date')");
                echo "<script>alert('Registration New Expoter Sucessfully .');window.location.href='./';</script>";
            }
            
        }



    }

    //Logic for Importer
    if(isset($_POST['importer'])){
        $importer_code = mysqli_real_escape_string($db, $_POST['importer_code']);
        $registered_date = mysqli_real_escape_string($db, $_POST['registered_date']);
        $importer_name = mysqli_real_escape_string($db, $_POST['importer_name']);
        $importer_add = mysqli_real_escape_string($db, $_POST['importer_add']);
        $importer_country = mysqli_real_escape_string($db, $_POST['importer_country']);
        $importer_website = mysqli_real_escape_string($db, $_POST['importer_website']);
        $source_country = mysqli_real_escape_string($db, $_POST['source_country']);
        $importer_delicensed_date = mysqli_real_escape_string($db, $_POST['importer_delicensed_date']);

        //query for checking data is present or not
        $ch_q = mysqli_query($db, "select * from importer where website='$importer_website' and flg='N'");
        if(mysqli_num_rows($ch_q) > 0){
            echo "<script>alert('Importer Exists Already .');window.location.href='./addimporter.php';</script>";
        }
        else{
            //Insert Query
            $insert_query = mysqli_query($db, "insert into importer (importer_code, importer_name, address, country, website) values ('$importer_code', '$importer_name', '$importer_add', '$importer_country', '$importer_website')");
            if(!$insert_query){
                echo "<script>alert('Something Went Wrong .');window.location.href='./';</script>";
            }
            else{
                $insert_sub_info = mysqli_query($db, "insert into importer_sub_info (importer_code, registration_date, source_country, delicensed_date) values('$importer_code', '$registered_date', '$source_country', '$importer_delicensed_date')");
                echo "<script>alert('Registration New Importer Sucessfully .');window.location.href='./';</script>";
            }
            
        }
    }

?>