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
              <h3 class="page-title text-black"> Running Loans</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
            
                </ol>
              </nav>
            </div>
            <form name="form1" method="post" action="scripts/loanstop2.php">                   
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> Name </th>
                            <th> Loan </th>
                            <th> Interest </th>
                            <th> Repayment Plan </th>
                            <th> Monthly Loan Repay </th>
                            <th> Monthly Deduction</th>
                            <th> Applied Date</th>
                            <th> Loan Status</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                                                        
                              <?php
                                      
                                    $ongoingloan = mysqli_query($mysqli, "SELECT * FROM stoploans");
                                      while($rows=mysqli_fetch_array($ongoingloan)){


  ?>
                            
                              <tr>
                              <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'></td>
                              <td><?php echo $rows['name']; ?></td>
                              <td><?php echo $rows['loan_amount']; ?></td>
                              <td><?php echo $rows['interest']; ?></td>
                              <td><?php echo $rows['repayment_plan']; ?></td>
                              <td><?php echo $rows['loan_repay']; ?></td>
                              <td><?php echo $rows['monthly_repay']; ?></td>
                              <td><?php echo $rows['loan_date']; ?></td>
                              <td><?php echo $rows['loan_status']; ?></td>
                             
                            </tr>

                      <?php }?>

                        </tbody>
                      </table>
                    </div>

                      <div class="row">
                        
                        <input name="start" class="btn btn-primary" type="submit" id="start" value="Start Loan">

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