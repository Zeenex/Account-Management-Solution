<?php
session_start();
if (!isset($_SESSION["staff_id"])) {

header("Location: ../index.php");
}

include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");
?>



        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="row">
              <div class="col-sm-3 grid-margin">
                <a href="view-members.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Members</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $num_rows; ?></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"> Active Members</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-contacts text-green ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>

              <div class="col-sm-3 grid-margin">
                <a href="view-members.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Members</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">0</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">Inactive Members</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-contacts text-blue ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-sm-3 grid-margin">
                <a href="manage-loans.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Running Loans</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $num_rows1; ?></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">Running Loans</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-table-large text-green ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-sm-3 grid-margin">
                <a href="reports.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Reports</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo date('F'); ?></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">report </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">View reports Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-file text-pink ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>




          </div>
          <!-- content-wrapper ends -->
<?php 

include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>