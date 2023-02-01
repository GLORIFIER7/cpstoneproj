<?php
// require_once('layouts/load.php');
require_once('connections/inventoryclass.php');
$invt->add_user();
?>

<main class="mt-5 pt-5">
        <div class="container-fluid">
                <h1>Add new user</h1>
                <div class="row">
                 <div class="col-md-6">
                <div class="form-container mt-4">
                        <form action="" method="post">
                                <div class="form-group mt-4">  
                                        <label>First Name:</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>
                                <div class="form-group mt-4">
                                        <label>Last Name:</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>
                            
                                <div class="form-group mt-4">
                                        <label>Username</label>
                                        <input type="text" name="user_name" id="user_name" class="form-control" required>
                                </div>

                                <div class="form-group mt-4">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <div class="form-group mt-4">
                                        <label>User Status</label>
                                        <input type="text" name="status" id="status" class="form-control" required>
                                </div>

                                <div class="form-group mt-4">
                                        <label>User Level</label>
                                        <input type="text" name="user_level" id="user_level" class="form-control" required>
                                </div>
                                
                             <button type="submit" name="add" class="btn btn-primary mt-4">Save</button>
                        </form>
                </div>
        </div>
                </div>
        </div>
</main>