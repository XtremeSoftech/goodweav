<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="expimp-bg">


    <?php include_once('./Components/nav.php') ?>


    <section id="view-details">
        <h4>View all Exporter Details</h4>
        <div class="table-responsive">
            <table id="exporter_details" class="display wrap">
                <thead>
                    <tr>
                        <th>Actions</th>
                        <th>Exp Code</th>
                        <th>Exp Name</th>
                        <th>Reg Date</th>
                        <th>Status</th>
                        <th>Labels last Req</th>
                        <th>Imp List</th>
                        <th>Sub-Con List</th>
                        <th>Delicensed Date</th>
                        <th>Re-Registration Date</th>
                        <th>Website</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pen"></i></a></td>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                    </tr>

                </tbody>

            </table>
        </div>



    </section>

    <!-- Modal Starts -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ends -->

    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#exporter_details thead tr').clone(true).appendTo('#exporter_details thead');
            $('#exporter_details thead tr:eq(1) th').each(function(i) {
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

            var table = $('#exporter_details').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });
        });
    </script>


    <?php include_once('./Components/script.php') ?>

</body>

</html>