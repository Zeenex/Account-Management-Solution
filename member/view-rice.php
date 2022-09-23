<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");

$purloan = mysqli_query($mysqli, "SELECT * FROM purchaserice where name = '".$_SESSION["name"]."'");



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
                            <th> Rice </th>
                            <th> Vegetable Oil </th>
                            <th> Palm Oil </th>
                            <th> Amount </th>
                            <th> Date</th>
                            <th> Status</th>

                          </tr>
                        </thead>
                        <tbody>


                              <?php
                                      while($rows=mysqli_fetch_array($purloan)){

                              echo'
                              <tr>

                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['rice'].'</td>                              
                              <td>'.$rows['vegetable_oil'].'</td>                              
                              <td>'.$rows['palm_oil'].'</td>
                              <td>'.$rows['amount'].'</td>                              
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