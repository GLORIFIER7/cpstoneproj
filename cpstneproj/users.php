<?php
include_once("Layouts/load.php");

?>

    <main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-4">User Management</div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-md-3 mb-3">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" href="#addUsermodal">
                        Add User <span class="right-icon ms-auto"><i class="bi bi-person-square" style="margin-left: 5px;"></i></span>
                    </button>
                </div>
            </div>

                        <!-- Supplier Data tables -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Data Tables
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped data-table" id="example" style="width: 100%;">

                                     <thead>
                                        <th>Select Supplier<th>
                                        <th>Company Name</th>
                                        <th>Contact Person</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </thead>
                                    <tbody>
                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <?php include_once "modals/modal.adduser.php"; ?>