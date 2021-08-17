<?php
    $l1 = null;
    include('./php-include/conn.php');

    $exp_code_id = $_GET['exporter_id'];

    if(empty($_GET['exporter_id'])){
        echo "<script>alert('Something went wrong. Please try again .');window.location.href='./exporter.php';</script>";
    }
    $check_imp_id = mysqli_query($db, "select * from importer where hash='$exp_code_id'");
    if(mysqli_num_rows($check_imp_id) > 0){
        $epp = mysqli_fetch_array(mysqli_query($db, "select * from importer where hash='$exp_code_id'"));
        $code = $epp['importer_code'];
        $l1 = 2;
    }
    else{
        echo "<script>alert('Importer id is wrong. Please try again .');window.location.href='./exporter.php';</script>";
    }

    include('./php-include/implementation.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 20px;
  height: 150px; /* Should be removed. Only for demonstration */
}
</style>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>

    <section id="view-details">
        <h4>Importer Information</h4>

        <div class="row">
            <div class="column">
                <h6><strong>Impoter Code: </strong><span><?php echo ucwords($epp['importer_code']); ?></span></h6>
                <h6><strong>Name: </strong><span><?php echo ucwords($epp['importer_name']); ?></span></h6>
                <h6><strong>Email: </strong><span><?php echo $epp['email']; ?></span></h6>
                <h6><strong>Contact: </strong><span><?php echo $epp['contact']; ?></span></h6>
            </div>
            
            <div class="column">
                <h6><strong>Website: </strong><span><?php echo $epp['website']; ?></span></h6>
                <h6><strong>GSTIN NO: </strong><span><?php echo $epp['gstin']; ?></span></h6>
                <h6><strong>License Name: </strong><span><?php echo $epp['license_name']; ?></span></h6>
                <h6><strong>License Number: </strong><span><?php echo $epp['license_number']; ?></span></h6>
            </div>
        </div><hr>

        <div class="table-responsive">

            <table id="exporter" class="display wrap" >
                <thead>
                    <tr>
                        <!-- <th>Sl No.</th> -->
                        <th>Exp Code</th>
                        <th>Exp Name</th>
                        <th>Reg Date</th>
                        <th>GSTIN No</th>
                        <th>License No</th>
                    </tr>
                </thead>
                <?php
                        $p = mysqli_query($db, "select * from link_exp_to_imp where imp_code='$code'");
                        while($tt = mysqli_fetch_assoc($p)){
                            $imp = $tt['exp_code'];
                    ?>
                <tbody>
                    <tr>
                    <?php
                        $impp = mysqli_query($db, "select * from expoter where exporter_code='$imp'");
                        while($imp_d = mysqli_fetch_assoc($impp)){
                    ?>
                            <td><?php echo $imp_d['exporter_code']; ?></td>
                            <td><?php echo $imp_d['exporter_name']; ?></td>
                            <td><?php echo $imp_d['exporter_code']; ?></td>
                            <td><?php echo $imp_d['gstin']; ?></td>
                            <td><?php echo $imp_d['license_number']; ?></td>
                    <?php }?></tr>
                </tbody>

<?php }?>
                <tfoot>
                    <tr>
                        <!-- <th>Sl No.</th> -->
                        <th>Imp Code</th>
                        <th>Imp Name</th>
                        <th>Reg Date</th>
                        <th>GSTIN No</th>
                        <th>License No</th>
                    </tr>
                </tfoot>
            </table>
        </div>
</section>

    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#exporter thead tr').clone(true).appendTo('#exporter thead');
            $('#exporter thead tr:eq(1) th').each(function(i) {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });

            var table = $('#exporter').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });
        });
    </script>
    <?php include_once('./Components/script.php') ?>

</body>

</html>