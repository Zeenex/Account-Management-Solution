<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");



?>     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Purchase of Landed Property </h4>
                    <p class="card-description"> Please carefully read and input all details required in the box. </p>
                    <form class="form-sample" action="scripts/purchase.php" method='post'>

                      <input type="hidden" name="staff_id" class="form-control" value="<?php echo $_SESSION["staff_id"]; ?>">
                    <div class="form-group">
                     <select name="member_name" class="form-control" id='form1'>
                        <option value="AL">Select Member</option>
                              <?php
                              while($rows=mysqli_fetch_array($memberinv1)){

                              echo'
                              <option value="'.$rows['name'].'">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Area Land is located</label>
                            <div class="col-sm-9">
                              <input type="text" name="area" class="form-control" id="exampleInputUsername1" placeholder="">
                            </div>
                          </div>

                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title of Document</label>
                            <div class="col-sm-9">
                              <input type="text" name="l_title" class="form-control" id="exampleInputUsername1" placeholder="">
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Amount</label>
                            <div class="col-sm-9">
                        
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">₦</span>
                        </div>
                        <input type="text" name="l_amount" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                            </div>
                          </div>

                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Initial Deposit (10%)</label>
                            <div class="col-sm-9">
                        
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">₦</span>
                        </div>
                        <input type="text" name="l_deposit" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                            </div>
                          </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
  

                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                        
                              <input type="text" class="form-control" id="exampleInputUsername1" name="land_date" placeholder="22/10/2021">
                            </div>
                          </div>
                      </div>
                    </div>


                   


                      <button type="submit" name="submit_purchase3" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>



          </div>
          <!-- content-wrapper ends -->

<?php
}
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>