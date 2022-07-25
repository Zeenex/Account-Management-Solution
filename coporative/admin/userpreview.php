<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");

$nName = $_GET['fname'];

?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add new corporative member</h4>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><u>Personal Information</u></h4>
                    
                    <div class="row">
                      <div class="col-md-4">
                        <address>
                          <h6>Name: </h6>


                        </address>
                      </div>
                      <div class="col-md-8">
                        <address class="text-primary">
                          <h6><?php echo $nName; ?> </h6>

                        </address>
                      </div>
                    </div>
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