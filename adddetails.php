<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body id="home-style">

    <?php include_once('./Components/nav.php') ?>


    <section class="mt-5">
        <div class="container">
            <div class="col-md-4">
                <div class="card-header text-white bg-primary shadow p-4">
                    Add Sector
                </div>
                <div class="card-body shadow p-4">
                    <label for="">Select Sector</label>
                    <select name="Sector" id="">
                        <option value="1">Carpets</option>
                        <option value="2">Home Textiles</option>
                        <option value="3">Apparel</option>
                        <option value="4">Home Furnishing</option>
                    </select>
                    <label for="" class="mt-2">Add Varities</label>
                    <input type="text" placeholder="Varities">
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