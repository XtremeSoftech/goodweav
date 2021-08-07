<?php
include('./php-include/conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>


    <section id="view-details">
        <h4>View all Exporter Details</h4>
        <div class="table-responsive">

            <table id="exporter" class="display wrap" >
                <thead>
                    <tr>
                        <!-- <th>Sl No.</th> -->
                        <th>Exp Code</th>
                        <th>Exp Name</th>
                        <th>Reg Date</th>
                        <th>Labels last Req</th>
                        <th>Importors Linked</th>
                        <th>Sub-Con Linked</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = 1;
                    $t = mysqli_query($db, "select e.exporter_code, exporter_name from expoter e join exporter_sub_info eb on e.exporter_code=eb.exporter_code WHERE e.flg='N'");
                    while ($r = mysqli_fetch_assoc($t)) {
                    ?>
                        <?php
                        $ep_c = $r['exporter_code'];
                        $p = mysqli_query($db, "select COUNT(*) as count from requested_label where exporter_code='$ep_c';");
                        while ($plo = mysqli_fetch_assoc($p)) {
                        ?>
                            <tr>
                                <!-- <td><?php echo $id++; ?></td> -->
                                <td><?php echo $r['exporter_code']; ?></td>
                                <td><a href="exporterdetails.php?id=<?php echo $ep_c; ?>"><?php echo $r['exporter_name']; ?></a></td>
                                <td>12 - March - 2020</td>
                                <td>10 - June - 2021</td>
                                <td><a href="#exampleModal1" data-toggle="modal" data-target="#exampleModal1"><i><span>101</span></i></a>&nbsp;&nbsp;<a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"><i><span>Link New Imp</span></i></a></td>
                                <td>3</td>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <!-- <th>Sl No.</th> -->
                        <th>Exp Code</th>
                        <th>Exp Name</th>
                        <th>Reg Date</th>
                        <th>Labels last Req</th>
                        <th>Importors Linked</th>
                        <th>Sub-Con Linked</th>
                    </tr>
                </tfoot>
            </table>
        </div>


    </section>



    <!-- Modal View Imp Starts -->

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal1Label">Viewing Current Imports List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="req_lab">

                <h5>List of Importers</h5>
                    <a href="#">IMP001</a>
                    <a href="#">IMP002</a>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal View Imp  Ends -->



    
    <!-- Modal Link New Imp Starts -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Link New Importer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="req_lab">

                <h5>Confirm Importer Details you want to Link</h5>
                    <form action="" method="POST">
                        <div>
                            <input type="text" name="expcode" id="expcode" placeholder="Enter Importer Code"><button><i class="bi bi-search"><input type="hidden" name="search" class="btn-success"></i></button>
                        </div>
                    </form>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Link Importer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Link New Imp  Ends -->


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