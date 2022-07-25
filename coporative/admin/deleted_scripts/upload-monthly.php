<?php
session_start();
if (! empty($_SESSION["staff_id"])) {

include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");


?>


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
            <div class="page-header">
              <h3 class="page-title text-black">Monthly Contribution</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
         
                </ol>
              </nav>
            </div>                    
                     <form class="form-horizontal row-fluid" enctype='multipart/form-data' action='scripts/upload-excel.php' method='post'>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Upload excel (.csv)</label>
                            <div class="col-sm-9">
                        
                        <div class="input-group col-xs-12">
                          <input type="file" name="filename">
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




          </div>
          <!-- content-wrapper ends -->
<?php
}
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>