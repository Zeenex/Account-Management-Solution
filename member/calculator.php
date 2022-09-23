<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");



?>     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Loan Calculator</h4>
                    
                    <form class="forms-sample">

                    <div class="form-group">
                      <label for="exampleInputPassword1">Loan Amount</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">₦</span>
                        </div>
                        <input type="text" class="form-control" >
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                    </div>
                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Duration</label>
                         <div class="row">                      
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value=""> 3 Months </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> 6 Months </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> 12 Months</label>
                              </div>
                            </div>
                          </div>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Monthly repayment</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">₦</span>
                        </div>
                        <input type="text" class="form-control" >
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                    </div>                     

                     <button type="submit" class="btn btn-primary mr-2">Check</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><u></u></h4>
                    
                    <div class="row">
                      <div class="col-md-4">
                        <address>
                          <h6>Loan Amount</h6>
                          <h6>Loan Duration</h6>
                          <h6>Loan Interest Rate</h6>
                          <h6>Payment</h6>
                         
                        </address>
                      </div>
                      <div class="col-md-8">
                        <address class="text-primary">
                          <h6>5000 </h6>
                          <h6>12 Months</h6>
                          <h6>5.0% </h6>
                          <h6></h6>
                          <h6></h6>
                        </address>
                      </div>
                    </div>
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