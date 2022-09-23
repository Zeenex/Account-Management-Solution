<?php
session_start();
if (! empty($_SESSION["staff_id"])) {

include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");


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
                  <li class="breadcrumb-item"><a href="#"><button type="button" class="btn btn-info btn-icon-text"> <i class="mdi mdi-arrow-down-bold-circle"></i> Add Monthly Contribution</button></a></li>
                </ol>
              </nav>
            </div>                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th> Name </th>
                            <th> Monthly Contribution </th>
                            <th> Savings </th>
                            <th> Designation </th>
                            <th> Month </th>
                          </tr>
                        </thead>
                        <tbody>
                                                        
                              <?php
                                      while($rows=mysqli_fetch_array($contribinv)){

                              echo'
                              <tr>
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['contrib_amount'].'</td>
                              <td>'.$rows['savings'].'</td>
                              <td>'.$rows['cat_role'].'</td>
                              <td>'.$rows['month'].'</td>
                              </tr>
                              ';
                              }

                              ?>

                        </tbody>
                      </table>
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