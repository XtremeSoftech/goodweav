<?php
    include('./php-include/conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="home-style">

    <?php include_once('./Components/nav.php') ?>

    <section>
        <div class="container mt-5">
            <div class="card shadow p-2">
        <table id="table_id" class="table table-striped table-bordered wrap" style="width:100%">
            <thead>
                <tr>
                    <th>Sl No.</th>
                    <th>Exporter Code</th>
                    <th>Exporter Name</th>
                    <th>Labels Requested</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $id=1;
                    $t = mysqli_query($db, "select e.exporter_code, exporter_name from expoter e join exporter_sub_info eb on e.exporter_code=eb.exporter_code WHERE e.flg='N'");
                    while($r = mysqli_fetch_assoc($t)){
                ?>
                    <?php
                        $ep_c = $r['exporter_code'];
                        $p = mysqli_query($db, "select COUNT(*) as count from requested_label where exporter_code='$ep_c';");
                        while($plo = mysqli_fetch_assoc($p)){
                    ?>
                    <tr>
                        <td><?php echo $id++; ?></td>
                        <td><?php echo $r['exporter_code']; ?></td>
                        <td><a href="requestdetails.php?id=<?php echo $ep_c; ?>"><?php echo $r['exporter_name']; ?></a></td>
                        <td><?php echo $plo['count']; ?></td>
                    </tr>
                <?php }
                }
                ?>
            
            </tbody>
        </table>
        </div>
        </div>
    </section>





    <?php include_once('./Components/script.php') ?>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>




</body>

</html>