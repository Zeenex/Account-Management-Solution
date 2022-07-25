<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");

$purloan = mysqli_query($mysqli, "SELECT * FROM purchaserice where staff_id = '".$_SESSION["staff_id"]."'");



?>     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Rice & Oil Request </h4>
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
                            
                         <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Rice</label>
                            <div class="col-sm-8">
                              <select name="r_rice" class="form-control">
                                <option>---</option>
                                <option value="None">None</option>
                                <option value="1/2 Bag">1/2 Bag</option>
                                <option value="1 Bag">1 Bag</option>
                                <option value="2 Bags">2 Bags</option>
                              </select>
                            </div>
                          </div>
                            </div>
                            <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Vegetable Oil</label>
                            <div class="col-sm-8">
                              <select name="r_vegoil" class="form-control">
                                <option>---</option>
                                <option value="None">None</option>
                                <option value="1 Litre">1 Litre</option>
                                <option value="2 Litres">2 Litres</option>
                              </select>
                            </div>
                          </div>                             
                            </div>
                            <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Palm Oil</label>
                            <div class="col-sm-8">
                              <select name="r_palmoil" class="form-control">
                                <option>---</option>
                                <option value="None">None</option>
                                <option value="1 Litre">1 Litre</option>
                                <option value="2 Litres">2 Litres</option>
                              </select>
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
                        <input type="text" name="r_amount" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                            </div>
                          </div>                              

                            </div>
                            <div class="col-md-6">
                              
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                        
                              <input type="text" class="form-control" id="exampleInputUsername1" name="r_date" placeholder="22/10/2021">
                            </div>
                          </div>
                            </div>
                          </div>


                      <button type="submit" name="submit_purchase2" class="btn btn-primary mr-2">Submit</button>
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