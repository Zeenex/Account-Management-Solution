<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");



?>     <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Profile</h4>

                    <form class="form-sample" action="scripts/upload-img.php" method='post' enctype='multipart/form-data'>



                      <div class="row">
                        <div class="col-md-9">
                    <div class="form-group">
                     <select name="member_name" class="form-control" id='form1'>
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
                        </div>

                      </div>

                      <p class="card-description"> Personal info </p>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Picture upload</label>
                            <div class="col-sm-9">
                        
                        <div class="input-group col-xs-12">
                          <input type="file" name="file">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" name="submit" type="submit">Upload</button>

                          </span>
                        </div>
                            </div>
                          </div>
                        </div>
                      </div>


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