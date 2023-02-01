<?php
// require_once('layouts/load.php');
require_once('connections/inventoryclass.php');
$invt->add_user();
?>


<!-- Add User Modal -->
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" id="addUsermodal">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Add User </h6>
            </div>
            <form action="" class="form-horizontal" auto-complete="off" method="post">
              <div class="modal-body">

                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-6">
                      First Name
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="first_name" id="first_name" required>
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                      Last name
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="last_name" id="last_name" required>
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                      Username
                      </label>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type=text" class="form-control" name="user_name" id="user_name" required>
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                      Password
                      </label>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="password" class="form-control" name="password" id="password" required>
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                        User status
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="status" id="status" required>
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="" class="col-md-6 col-sm-6 col-xs-12">
                      User level
                      </label>
                      
                      <div class="col-md-12 col-sm-6 col-xs-6 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" name="user_level" id="user_level" required>
                              <span id="trapping"></span>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="add" id=""> Save <i class="bi bi-save" style="padding-left: 8px;"></i> </button>
                <button type="submit" class="btn btn-secondary" name="close" id="" data-dismiss="modal"> Close <i class="bi bi-x-square" style="padding-left: 8px;"></i> </button>
              </div>


            </form>

        </div>
    </div>
</div>