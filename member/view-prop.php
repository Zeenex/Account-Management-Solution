<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");

$purloan = mysqli_query($mysqli, "SELECT * FROM purchaseland where name = '".$_SESSION["name"]."'");



?>     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              


              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                  
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th> Name </th>
                            <th> Land Area</th>
                            <th> Land Title </th>
                            <th> Land Amount </th>
                            <th> 10% Deposit</th>
                            <th> Purchase Date</th>
                            <th> Status</th>

                          </tr>
                        </thead>
                        <tbody>


                              <?php
                                      while($rows=mysqli_fetch_array($purloan)){

                              echo'
                              <tr>

                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['land_area'].'</td>                              
                              <td>'.$rows['land_title'].'</td>                              
                              <td>'.$rows['land_amount'].'</td>
                              <td>'.$rows['land_deposit'].'</td>                              
                              <td>'.$rows['purchase_date'].'</td>
                              <td>'.$rows['land_stat'].'</td>
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