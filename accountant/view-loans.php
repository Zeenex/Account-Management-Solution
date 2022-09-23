<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");

$userloan = mysqli_query($mysqli, "SELECT * FROM loans where staff_id = '".$_SESSION["staff_id"]."'");

while($rows=mysqli_fetch_array($userloan)){

  
  $mName = $rows['name'];
  $mStaffid = $rows['staff_id'];
  $mLoan_amount = $rows['loan_amount'];
  $mLoan_purpose = $rows['loan_purpose'];
  $mRepayment_plan = $rows['repayment_plan'];
  $mGuarantor = $rows['guarantor'];
  $mGuarantor_dept = $rows['guarantor_dept'];
  $mLoan_date = $rows['loan_date'];
  $mLoan_status = $rows['loan_status'];


  }

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
                        <thead>
                          <tr>

                            <th> Name </th>
                            <th> Staff ID </th>
                            <th> Loan Amount </th>
                            <th> Loan Purpose </th>
                            <th> Repayment Plan </th>
                            <th> Guarantor </th>
                            <th> Guarantor Dept </th>
                            <th> Loan Date </th>
                            <th> Loan Status </th>
                          </tr>
                        </thead>
                        <tbody>

                              <tr>
                              <td><?php echo $mName; ?></td>
                              <td><?php echo $mStaffid; ?></td>
                              <td><?php echo $mLoan_amount; ?></td>
                              <td><?php echo $mLoan_purpose; ?></td>
                              <td><?php echo $mRepayment_plan; ?></td>
                              <td><?php echo $mGuarantor; ?></td>
                              <td><?php echo $mGuarantor_dept; ?></td>
                              <td><?php echo $mLoan_date; ?></td>
                              <td><?php echo $mLoan_status; ?></td>
                              </tr>


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