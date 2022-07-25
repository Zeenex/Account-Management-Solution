<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");

$purloan = mysqli_query($mysqli, "SELECT * FROM purchaseitem where name = '".$_SESSION["name"]."'");



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
                            <th> Item </th>
                            <th> Account</th>
                            <th> Amount </th>
                            <th> Payback</th>
                            <th> Date </th>
                            <th> Status </th>

                          </tr>
                        </thead>
                        <tbody>


                              <?php
                                      while($rows=mysqli_fetch_array($purloan)){

                              echo'
                              <tr>
                              
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['item_desc'].'</td>
                              <td>'.$rows['account_num'].'</td>                            
                              <td>'.$rows['item_amount'].'</td>
                              <td>'.$rows['payback'].'</td>                      
                              <td>'.$rows['purchase_date'].'</td>
                              <td>'.$rows['purchase_status'].'</td>                              
                              

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