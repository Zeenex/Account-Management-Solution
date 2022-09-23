<?php
session_start();
if (! empty($_SESSION["name"])) {

include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");


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
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th> Name </th>
                            <th> Total Savings</th>
                            <th> Monthly Contribution </th>
                            <th> Designation </th>
                            <th> Month </th>
                          </tr>
                        </thead>
                        <tbody>
                                                        
                              <?php
                              $contribinv = mysqli_query($mysqli, "SELECT * FROM contribution WHERE name = '".$_SESSION["name"]."'");
                                while($rows=mysqli_fetch_array($contribinv)){

                              echo'
                              <tr>
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['total_contrib'].'</td>
                              <td>'.$rows['monthly'].'</td>
                              <td>'.$rows['desgn'].'</td>
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