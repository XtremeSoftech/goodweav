<!DOCTYPE html>
<html lang="en">

<?php include_once('./Components/head.php') ?>

<body>

<?php include_once('./Components/nav.php') ?>

    <div class="container mt-5">
        <div class="col-md-12">
            <div class="form-design">
                <div class="card">
                    <div class="card-header primary text-center">
                        <h3>Label Requistion Form</h3>
                    </div>
                    <div class="card-body">

                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Exporter Search</button>

                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Label Requistion</button>

                                <!-- <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Label Requistion</button> -->

                                <!-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> -->
                            </div>

                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="expcode" id="expcode" placeholder="Enter Exporter Code">
                                            <button class="btn-success"><i class="bi bi-search"></i></button>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5><strong>Exporter Details</strong></h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h6><strong>Code: </strong><span>12345</span></h6>
                                            <h6><strong>Name: </strong><span>Xtreme Digi Tech</span></h6>
                                            <h6><strong>Registration Date: </strong><span>25-June-2020</span></h6>
                                            <h6><strong>Address: </strong><span>Indiranagar, Bangalore</span></h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6><strong>Status: </strong><span><strong style="color:green">ACTIVE</strong></span></h6>
                                            <h6><strong>Country: </strong><span>India</span></h6>
                                            <h6><strong>Website: </strong><span><a href="https://www.google.co.in/" target="blank">www.google.com</a></span></h6>
                                            <h6><strong>Delicensed Date: </strong><span>N/A</span></h6>
                                            <h6><strong>Re-Registration Date: </strong><span>N/A</span></h6>

                                        </div>
                                        <div class="col-md-12" style="text-align: right;">
                                            <button type="submit" class="btn-success">Confirm Exporter Details</button>
                                        </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <h5><strong>Label Requistion Details</strong></h5>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Label Request Date <input type="date" name="labelreqdate" id="labelreqdate"></label>
                                            

                                        </div>
                                        <div class="col-md-6">
                                            <label>Number of Labels Required <input type="number" name="labelrequired" id="labelrequired" minlength="500" maxlength="1000"></label>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            
                                            <label>Label Type</label>

                                            <select name="labeltype" id="labeltype">
                                                <option value="select type">Select Label Type</option>
                                                <option value="1">M Series</option>
                                                <option value="2">TD Series</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            
                                            <label>Currency Used</label>

                                            <select name="labeltype" id="labeltype">
                                                <option value="select type">Select Currency Type</option>
                                                <option value="1">USD</option>
                                                <option value="2">INR</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <h6><strong>Today's Exchange Value: </strong><br><span>$ 49.001</span></h6>
    
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="text-align: right;">
                                            <button type="submit" class="btn-success">Request Labels</button>
                                        </div>


                                </div>

                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>

                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                            </div>
                        </div>









                    </div>
                </div>
            </div>
        </div>
    </div>
    



   <?php include_once('./Components/script.php') ?>

</body>

</html>