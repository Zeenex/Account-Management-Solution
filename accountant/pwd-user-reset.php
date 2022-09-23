<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");


?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reset Account Password</h4>
                   <form action="scripts/password-reset.php" id='form1' method='post'>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="password2" />
                              <input type="hidden" name="staff_id" class="form-control" value="<?php echo $_SESSION["staff_id"]; ?>">
                            </div>
                          </div>
                        </div>

                      </div>


                      <button type="submit" name="submit_pwd" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>

                      </form>
                  </div>
                </div>
              </div>

              </div>

          <!-- content-wrapper ends -->
<?php
}
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>