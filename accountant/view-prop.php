<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");


?>     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              


              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
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
            <div class="page-header">
              <h3 class="page-title text-black"> View Purchased Property</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
                  <li class="breadcrumb-item"><a href="purchase-prop.php"><button type="button" class="btn btn-info btn-icon-text"> <i class="mdi mdi-arrow-down-bold-circle"></i> Purchase Property </button></a></li>
                </ol>
              </nav>
            </div>
                    
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
                              if(isset($_POST["submit_search"])){
  
                                  $member_name1 = $_POST['member_name'];

                                  $loaninv = mysqli_query($mysqli, "SELECT * FROM purchaseland WHERE name='".$member_name1."'");

                                  while($rows=mysqli_fetch_array($loaninv)){

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