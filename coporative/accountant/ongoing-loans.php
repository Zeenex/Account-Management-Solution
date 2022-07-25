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
              <h3 class="page-title text-black"> Running Loans</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
                  <li class="breadcrumb-item"><a href="#"><button type="button" class="btn btn-info btn-icon-text"> <i class="mdi mdi-arrow-down-bold-circle"></i> Download CSV </button></a></li>
                </ol>
              </nav>
            </div>                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Total Loan </th>
                            <th> Total Interest </th>
                            <th> Monthly Interest </th>
                            <th> Repayment Plan </th>
                            <th> Monthly Loan</th>
                            <th> Loan Date </th>
                            <th> Loan Status </th>
                          </tr>
                        </thead>
                        <tbody>
                                                        
                              <?php
                                      
                                    $ongoingloan = mysqli_query($mysqli, "SELECT * FROM loans WHERE loan_status = 'ongoing'");
                                      while($rows=mysqli_fetch_array($ongoingloan)){

                                        $status=$rows['loan_status'];
                                        $name=$rows['name'];

  ?>
                            
                              <tr>
                              <td><?php echo $rows['name']; ?></td>
                              <td><?php echo $rows['loan_amount']; ?></td>
                              <td><?php echo $rows['interest']; ?></td>
                              <td><?php echo $rows['interest_repay']; ?></td>
                              <td><?php echo $rows['repayment_plan']; ?></td>
                              <td><?php echo $rows['loan_repay']; ?></td>
                              <td><?php echo $rows['loan_date']; ?></td>
                             
                            
                                  <td>
                                      <?php
                                        if($status=="ongoing")
                                        {
                                        ?>
                                        <button class="btn btn-success mr-2"><a href="scripts/loanaction2.php?name=<?php echo $name;?>" 
                                         onclick="return confirm('Complete <?php echo $name?> Loan');"> Ongoing </a></button>
                                        <?php
                                        }
                                        ?>
                                      
                                  </td>

                              </tr>

                      <?php        }

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