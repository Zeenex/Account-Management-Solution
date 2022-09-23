<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="row">
              <div class="col-sm-4 grid-margin">
                <a href="report-loan.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Generate Report on Loans</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal">Report Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chart-bubble text-blue ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-sm-4 grid-margin">
                <a href="report-contribution.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Generate Report on Contributions</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> Report Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chart-bubble text-green ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
              <div class="col-sm-4 grid-margin">
                <a href="report-elect.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Generate Report on Electronic Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal">Report Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chart-bubble text-red ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

             <div class="row">
              <div class="col-sm-4 grid-margin">
                <a href="report-rice.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Generate Report on Rice Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal">Report Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chart-bubble text-gold ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-sm-4 grid-margin">
                <a href="report-land.php">
                <div class="card">
                  <div class="card-body">
                    <h5>Generate Report on Land Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> Report Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chart-bubble text-pink ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-sm-4 grid-margin">
                <a href="#">
                <div class="card">
                  <div class="card-body">
                    <h5>Generate Financial Report</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal">Report Since this month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chart-bubble text-light-blue ml-auto"></i>
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
}
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>