<?php
include_once("Layouts/load.php");
require_once('connections/inventoryclass.php');


?>
    <main class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-3">Dasboard</div>
            </div>

            <!-- Cards -->
            <div class="row mt-3 mb-3">
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body">
                          <h5 class="card-header"> Products list</h5>
                          <p class="card-text">
                            <p>Total Product: 35</p>
                            <span class="right-icon ms-auto"  style="float: right; margin-right: 15px;"><i class="bi bi-cart-fill" style="font-size: 60px;"></i></span>
                          </p>

                        </div>
                        <a href="#" class="text-decoration-none" style=" align-items: center; width: 100%;">
                            <div class="card-footer text-white">
                                View Details
                                <span class="right-icon ms-auto" style="float: right;"><i class="bi bi-caret-right-fill"></i></span>
                            </div>
                        </a>
                      </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card text-white h-100" style="background-color: rgb(215, 146, 77);">
                        <div class="card-body">
                          <h5 class="card-header">Category List</h5>
                          <p class="card-text">
                            <p>Total Categories: <?php $users = $invt->getTotalUsers();
print_r($users); ?></p>
                            <span class="right-icon ms-auto"  style="float: right; margin-right: 15px;"><i class="bi bi-microsoft" style="font-size: 60px;"></i></span>
                          </p>
                        </div>

                        <a href="#" class="text-decoration-none" style=" align-items: center; width: 100%;">
                            <div class="card-footer text-white">
                                View Details
                                <span class="right-icon ms-auto" style="float: right;"><i class="bi bi-caret-right-fill"></i></span>
                            </div>
                        </a>
                      </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card text-white h-100" style="background-color: rgb(190, 137, 195);">
                        <div class="card-body">
                          <h5 class="card-header">Suppliers List</h5>
                          <p class="card-text">
                            <p>Total Supplier: 10</p>
                            <span class="right-icon ms-auto"  style="float: right; margin-right: 15px;"><i class="bi bi-truck" style="font-size: 60px;"></i></span>
                          </p>
                        </div>

                        <a href="#" class="text-decoration-none" style=" align-items: center; width: 100%;">
                            <div class="card-footer text-white">
                                View Details
                                <span class="right-icon ms-auto" style="float: right;"><i class="bi bi-caret-right-fill"></i></span>
                            </div>
                        </a>
                      </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card text-white h-100" style="background-color: rgb(86, 149, 148);">
                        <div class="card-body">
                          <h5 class="card-header">Users List</h5>
                          <p class="card-text">
                            <p>Total Users: 10</p>
                            <span class="right-icon ms-auto"  style="float: right; margin-right: 15px;"><i class="bi bi-people-fill" style="font-size: 60px;"></i></span>
                          </p>
                        </div>

                        <a href="#" class="text-decoration-none" style=" align-items: center; width: 100%;">
                            <div class="card-footer text-white">
                                View Details
                                <span class="right-icon ms-auto" style="float: right;"><i class="bi bi-caret-right-fill"></i></span>
                            </div>
                        </a>
                      </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Data Tables
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%;">

                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Postion</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start Date</th>
                                        <th>Salaray</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jhon Doe</td>
                                            <td>Sales manager</td>
                                            <td>Main Office</td>
                                            <td>35</td>
                                            <td>September 29, 2022</td>
                                            <td>$35,000</td>
                                            <td>Active</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Jane Doe</td>
                                            <td>Sales manager</td>
                                            <td>Main Office</td>
                                            <td>35</td>
                                            <td>September 29, 2022</td>
                                            <td>$35,000</td>
                                            <td>Active</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Recently Added Products
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%;">
                                    <thead>
                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Quantity</th>
                                        <th>Date Added</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hard Drive Disk</td>
                                            <td>50</td>
                                            <td>September 2, 2000</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Hard Drive Disk</td>
                                            <td>50</td>
                                            <td>September 2, 2000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>





<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
<script src="components/js/bootstrap.bundle.min.js"></script>
<script src="components/js/jquery-3.6.0.js"></script>
<script src="components/js/jquery.dataTables.min.js"></script>
<script src="components/js/dataTables.bootstrap5.min.js"></script>
<script src="components/js/script.js"></script>
</body>
</html>