<?php
session_start();
if (! empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");

$complete = "complete";




?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View your Loans</h4>

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table">
              <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Loan </th>
                            <th> Interest </th>
                            <th> Repayment Plan </th>
                            <th> Monthly Loan Repay </th>
                            <th> Monthly Deduction</th>
                            <th> Loan Count </th>
                            <th> Applied Date</th>
                            <th> Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php
                          $userloan = mysqli_query($mysqli, "SELECT * FROM loans WHERE name = '".$_SESSION["name"]."' AND loan_status != '$complete'");

                                while($rows=mysqli_fetch_array($userloan)){
                                  
                              echo'
                              <tr>
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['loan_amount'].'</td>
                              <td>'.$rows['interest'].'</td>
                              <td>'.$rows['repayment_plan'].'</td>
                              <td>'.$rows['loan_repay'].'</td> 
                              <td>'.$rows['monthly_repay'].'</td>                              
                              <td>'.$rows['loancount'].'</td>
                              <td>'.$rows['loan_date'].'</td>
                              <td>'.$rows['loan_status'].'</td>
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
                </div>
              </div>
            </div>



          </div>
          <!-- content-wrapper ends -->

<?php
}
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>