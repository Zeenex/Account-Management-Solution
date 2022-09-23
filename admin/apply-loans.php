<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");

?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Apply for a Loan</h4>
                    <p class="card-description"> FIll below form to apply for a loan </p>
                    <form class="form-sample" action="scripts/add-loan.php" method='post'>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Member Name</label>
                      <select name="member" class="form-control" id='form1'>
                        <option value="">Select Member</option>
                              <?php
                              while($rows=mysqli_fetch_array($memberinv)){

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
                            <label class="col-sm-3 col-form-label">Loan Amount</label>
                            <div class="col-sm-9">
                        
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">₦</span>
                        </div>
                        <input type="text" name="l_amt" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Loan Purpose</label>
                            <div class="col-sm-9">
                              <input type="text" name="l_purpose" class="form-control" id="exampleInputUsername1" placeholder="Loan Purpose">
                            </div>
                          </div>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Repayment Plan</label>
                         <div class="row">                      
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="repay_plan" id="membershipRadios1" value="3 Months"> 3 Months </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="repay_plan" id="membershipRadios2" value="6 Months"> 6 Months </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="repay_plan" id="membershipRadios2" value="9 Months"> 9 Months</label>
                              </div>
                            </div>

                          </div>
                         <div class="row">                      
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="repay_plan" id="membershipRadios1" value="12 Months"> 12 Months </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="repay_plan" id="membershipRadios2" value="18 Months"> 18 Months </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="repay_plan" id="membershipRadios2" value="24 Months"> 24 Months</label>
                              </div>
                            </div>

                          </div>
                      </div>


 
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Guarantor</label>
                            <div class="col-sm-7">
                                  <input type="text" class="form-control" id="exampleInputUsername1" name="gurantor_name" placeholder="Guarantor Name">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Guarantor Department</label>
                            <div class="col-sm-8">
                     <div class="form-group">
                      <select class="form-control" name="guarantor_department">
                                <option>---</option>
                                <option value="Billing Admin">Billing Admin</option>
                                <option value="Support">Support</option>
                                <option value="NMC">NMC</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Account Management">Account Management</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Residential Management">Accounting</option>
                                <option value="Service Delivery">Service Delivery</option>
                                <option value="Managed Service">Managed Service</option>
                                <option value="Credit Control">Credit Control</option>
                                <option value="Sales">Sales</option>
                                <option value="Personnel">Personnel</option>
                                <option value="Admin">Admin</option>
                                <option value="RF Operation">RF Operation</option>
                                <option value="RF Planning">RF Planning</option>
                                <option value="FOC">FOC</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="IP ops">IP ops</option>
                                <option value="PS ops">PS ops</option>                   
                      </select>
                    </div>
                            </div>
                          </div>
                        </div>
                      </div>



                      <button type="submit" name="submit_loan" class="btn btn-primary mr-2">Submit</button>
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