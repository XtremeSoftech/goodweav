<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="home-style">

    <?php include_once('./Components/nav.php') ?>

    <section>
        <div class="container mt-5">
            <div class="card shadow p-2">
                <div class="table-responsive">
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

                            <tr>
                                <td>1</td>
                                <td>1234567</td>
                                <td><a href="requestdetails.php">Digital Tech Services Pvt Ltd</a></td>
                                <td>12</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>1234567</td>
                                <td>Xtreme Digital Tech Services Pvt Ltd</td>
                                <td>12</td>
                            </tr>


                            <tr>
                                <td>1</td>
                                <td>1234567</td>
                                <td>Xtreme Digital Tech Services Pvt Ltd</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>1234567</td>
                                <td>Xtreme Digital Tech Services Pvt Ltd</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>1234567</td>
                                <td>Xtree Digital Tech Services Pvt Ltd</td>
                                <td>134</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
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