<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="home-style">

    <?php include_once('./Components/nav.php') ?>

    <section>
        <div class=" mt-5">
            <div class="card shadow p-4">
                <h3>Exporter Name: <span> Digital Tech Services Pvt Ltd</span></h3>
                <h4>Exporter Code: <span> 123456</span></h4>

                <hr>
                <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Date</th>
                                <th>Purchase Order No.</th>
                                <th>DCPI No</th>
                                <th>Sub-Contractor/Factory</th>
                                <th>Item</th>
                                <th>Product Type</th>
                                <th>Design & Quality</th>
                                <th>Label Type</th>
                                <th>No. of Rolls</th>
                                <th>No. of Pieces</th>
                                <th>Width</th>
                                <th>Length</th>
                                <th>Total Area <span>inch/cm</span></th>
                                <th>No. of Rolls</th>
                                <th>No. of Pieces</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td><input type="date"></td>
                                <td><input type="text"></td>
                                <td>066-04-7648</td>
                                <td>Obeetee Pvt Ltd (Unit-2) </td>
                                <td>Rug</td>
                                <td>FLAT WEAVE</td>
                                <td>EPT0011785</td>
                                <td><select name="labelType" id="labelType">
                                        <option value="1">Test</option>
                                        <option value="2">Test 2</option>
                                    </select></td>
                                <td>rolls</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>14-june-2021</td>
                                <td>36321118</td>
                                <td>066-04-7648</td>
                                <td>Obeetee Pvt Ltd (Unit-2) </td>
                                <td>Rug</td>
                                <td>FLAT WEAVE</td>
                                <td>EPT0011785</td>
                                <td><select name="labelType" id="labelType">
                                        <option value="1">Test</option>
                                        <option value="2">Test 2</option>
                                    </select></td>
                                <td>rolls</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>

                            </tr>

                            <tr>
                                <td>3</td>
                                <td>10-june-2021</td>
                                <td>369342</td>
                                <td>066-04-7648</td>
                                <td>Obeetee Pvt Ltd (Unit-2) </td>
                                <td>Rug</td>
                                <td>FLAT WEAVE</td>
                                <td>EPT0011785</td>
                                <td><select name="labelType" id="labelType">
                                        <option value="1">Test</option>
                                        <option value="2">Test 2</option>
                                    </select></td>
                                <td>rolls</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>

                            </tr>

                            <tr>
                                <td>4</td>
                                <td>12-june-2021</td>
                                <td>3693168</td>
                                <td>066-04-7648</td>
                                <td>xdt </td>
                                <td>Rug</td>
                                <td>FLAT WEAVE</td>
                                <td>EPT0011785</td>
                                <td><select name="labelType" id="labelType">
                                        <option value="1">Test</option>
                                        <option value="2">Test 2</option>
                                    </select></td>
                                <td>rolls</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td>12-june-2021</td>
                                <td>3693168</td>
                                <td>066-04-7648</td>
                                <td>xdt </td>
                                <td>Rug</td>
                                <td>FLAT WEAVE</td>
                                <td>EPT0011785</td>
                                <td><select name="labelType" id="labelType">
                                        <option value="1">Test</option>
                                        <option value="2">Test 2</option>
                                    </select></td>
                                <td>rolls</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>

                            </tr>

                            <tr>
                                <td>6</td>
                                <td>14-june-2021</td>
                                <td>36321118</td>
                                <td>066-04-7648</td>
                                <td>Obeetee Pvt Ltd (Unit-2) </td>
                                <td>Rug</td>
                                <td>FLAT WEAVE</td>
                                <td>EPT0011785</td>
                                <td><select name="labelType" id="labelType">
                                        <option value="1">Test</option>
                                        <option value="2">Test 2</option>
                                    </select></td>
                                <td>rolls</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>
                                <td>600</td>
                                <td>10</td>
                                <td>20</td>

                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>





    <?php include_once('./Components/script.php') ?>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>




</body>

</html>