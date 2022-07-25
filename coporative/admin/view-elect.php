<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");





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
              <h3 class="page-title text-black"> View Purchased Electronics</h3>



              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
                  <li class="breadcrumb-item"><a href="purchase-elect.php"><button type="button" class="btn btn-info btn-icon-text"> <i class="mdi mdi-arrow-down-bold-circle"></i> Purchase Electronics </button></a></li>
                </ol>
              </nav>
            </div>

            
            <form name="form1" method="get" action="#">                   
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
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
                              if(isset($_POST["submit_search"])){
  
                                  $member_name1 = $_POST['member_name'];
 
                                    $ongoingloan = mysqli_query($mysqli, "SELECT * FROM purchaseitem WHERE name='".$member_name1."'");
                                      while($rows=mysqli_fetch_array($ongoingloan)){


  ?>
                            
                              <tr>
                              <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value='<?php echo $rows['id']; ?>'></td>
                              <td><?php echo $rows['name']; ?></td>
                              <td><?php echo $rows['item_desc']; ?></td>
                              <td><?php echo $rows['account_num']; ?></td>
                              <td><?php echo $rows['item_amount']; ?></td>
                              <td><?php echo $rows['payback']; ?></td>
                              <td><?php echo $rows['purchase_date']; ?></td>
                              <td><?php echo $rows['purchase_status']; ?></td>
                             
                            </tr>

                      <?php } }?>

                        </tbody>
                      </table>
                    </div>
                      <div class="row">
                        
                        <div class="col-md-12">
                          
                        </div>
                        
         

                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <input name="approve" class="btn btn-success m-2" formaction="scripts/approve_elect.php" type="submit" id="approve" value="Approve">
                        </div>
                        <div class="col-md-2">
                          <input name="reject" class="btn btn-danger m-2" method="post" formaction="scripts/reject_elect.php" type="submit" id="reject" value="Reject">
                        </div>
                        <div class="col-md-2">
                          <input name="complete" class="btn btn-warning m-2" method="post" formaction="scripts/complete_elect.php" type="submit" id="complete" value="Complete">
                        </div>
                        
         

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