<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");


?>     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                                <div class="page-header">
              <h4 class="card-title">Electronic Request </h4>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
                  <li class="breadcrumb-item"><a href="view-elect.php"><button type="button" class="btn btn-info btn-icon-text"> <i class="mdi mdi-arrow-down-bold-circle"></i> View Electronics </button></a></li>
                </ol>
              </nav>
            </div>
                    <p class="card-description"> Please carefully read and input all details required in the box. </p>
                    <form class="form-sample" action="scripts/purchase.php" method='post'>

                        <div class="row">
                          
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Item Description</label>
                            <div class="col-sm-9">
                              <input type="text" name="e_items" class="form-control" id="exampleInputUsername1" placeholder="Items to Buy">
                              <input type="hidden" name="member_name" class="form-control" value="<?php echo $_SESSION["name"]; ?>">
                            </div>
                          </div>   
                          </div>

                          <div class="col-md-6">
                          <div class="form-group row">

                          </div>
                          </div>
                        </div>

                    <div class="row">
                              <input type="hidden" name="member_name" class="form-control" value="<?php echo $_SESSION["name"]; ?>">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cost in Request</label>
                            <div class="col-sm-9">
                        
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">₦</span>
                        </div>
                        <input type="text" name="e_amount" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text text-black">.00</span>
                        </div>
                      </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Account Number</label>
                            <div class="col-sm-9">
                              <input type="text" name="e_accountNumber" class="form-control" id="exampleInputUsername1" placeholder="">
                              
                            </div>
                          </div>
                      </div>
                    </div>





             



                      <button type="submit" name="submit_purchase" class="btn btn-primary mr-2">Submit</button>
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