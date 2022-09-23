<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");

error_reporting(E_ALL ^ E_NOTICE);
$name = $_GET['name'];
$ncontribution = $_GET['contribution'];
$nloan = $_GET['loan'];
$ninterest = $_GET['interest'];
$nform = $_GET['form'];
$nrice = $_GET['rice'];
$nfine = $_GET['fine'];
$ngadget = $_GET['gadget'];
$ntotal = $_GET['total'];
$nmonth = $_GET['month'];
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

             <div class="row">              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Search for Member Financial Record</h4>

                    <form class="form-sample" action="scripts/fin-rec.php" method='post'>

                      <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                    <div class="form-group">
                     <select name="month" class="form-control" id='form1'>
                        <option>Select Month</option>
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                              <option value="May">May</option>
                              <option value="June">June</option>
                              <option value="July">July</option>
                              <option value="August">August</option>
                              <option value="September">September</option>
                              <option value="October">October</option>
                              <option value="November">November</option>
                              <option value="December">December</option>
                  
                      </select>
                    </div>
                        </div>
                        <div class="col-md-2">
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
                            <th> Contribution </th>
                            <th> Loan </th>
                            <th> Interest </th>
                            <th> Form </th>
                            <th> Rice/Gnut oil </th>
                            <th> Fine </th>
                            <th> Gadget </th>
                            <th> Total </th>
                          </tr>
                        </thead>
                        <tbody>
                              <tr>
                              <td><?php echo $name; ?></td>
                              <td><?php echo $ncontribution; ?></td>
                              <td><?php echo $nloan; ?></td>
                              <td><?php echo $ninterest; ?></td>
                              <td><?php echo $nform; ?></td>
                              <td><?php echo $nrice; ?></td>
                              <td><?php echo $nfine; ?></td>
                              <td><?php echo $ngadget; ?></td>
                              <td><?php echo $ntotal; ?></td>
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