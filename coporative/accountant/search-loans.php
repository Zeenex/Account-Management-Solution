<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");


?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Search for Member Loan</h4>

                    <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                     <select name="member_name" class="form-control" id='form1'>
                        <option>Select Member</option>
                              <?php
                              while($rows=mysqli_fetch_array($memberinv)){

                              echo'
                              <option value="'.$rows['name'].'">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                    </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                        <div class="input-group-append">
                           <button type="submit" name="submit_search" class="btn btn-primary mr-2">Submit</button>
                        </div>
                          </div>
                        </div>

                      </div>
              </form>

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th> Name </th>
                            <th> Loan Amount </th>
                            <th> Interest </th>
                            <th> Repayment Plan </th>
                            <th> Monthly Repay </th>
                            <th> Loan Date </th>
                            <th> Loan Status </th>
                          </tr>
                        </thead>
                        <tbody>
                              <?php
                              if(isset($_POST["submit_search"])){
  
                                  $member_name1 = $_POST['member_name'];

                                  $loaninv = mysqli_query($mysqli, "SELECT * FROM loans WHERE name='".$member_name1."'");

                                  while($rows=mysqli_fetch_array($loaninv)){

                              echo'
                              <tr>
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['loan_amount'].'</td>
                              <td>'.$rows['interest'].'</td>
                              <td>'.$rows['repayment_plan'].'</td>
                              <td>'.$rows['monthly_repay'].'</td>
                              <td>'.$rows['loan_date'].'</td>
                              <td>'.$rows['loan_status'].'</td>
                              </tr>
                              ';
                              }
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