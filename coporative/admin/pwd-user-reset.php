<?php
session_start();
if (! empty($_SESSION["staff_id"])) {


include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Change Member Password</h4>
                    
                    <form action="scripts/dashboard.php" id='form1' method='post'>
                     
                    <div class="form-group">
                      

                      <select name="member_name4" class="form-control" id='form1'>
                        <option value="AL">Select Member</option>
                              <?php
                              while($rows=mysqli_fetch_array($memberinv)){

                              echo'
                              <option value="'.$rows['name'].'">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                     
                    </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="password2" />
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