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
              <h4 class="card-title">Purchase of Landed Property </h4>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
                  <li class="breadcrumb-item"><a href="view-prop.php"><button type="button" class="btn btn-info btn-icon-text"> <i class="mdi mdi-arrow-down-bold-circle"></i> View Property</button></a></li>
                </ol>
              </nav>
            </div>
                    <p class="card-description"> Please carefully read and input all details required in the box. </p>
                    <form class="form-sample" action="scripts/purchase_land.php" method='post'>
                              <input type="hidden" name="member_name" class="form-control" value="<?php echo $_SESSION["name"]; ?>">

     


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
                   


                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
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