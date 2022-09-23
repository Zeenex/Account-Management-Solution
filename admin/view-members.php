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
              <h3 class="page-title text-black"> View All Members</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">                  
               
                </ol>
              </nav>
            </div>                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th> Name </th>
                            <th> Gender </th>
                            <th> Mobile </th>
                            <th> Email </th>
                            <th> Marital Status </th>
                            <th> Address </th>
                            <th> Staff ID </th>
                            <th> Department </th>
                            <th> Monthly Contribution </th>
                            <th> Bank </th>
                            <th> Date Joined </th>
                          </tr>
                        </thead>
                        <tbody>
                                                        
                              <?php
                              $limit = 15;  
                              if (isset($_GET["page"])) {
                                $page  = $_GET["page"]; 
                                } 
                                else{ 
                                $page=1;
                                };  
                              $start_from = ($page-1) * $limit;
                              $member = mysqli_query($mysqli, "SELECT * FROM members ORDER BY id ASC LIMIT $start_from, $limit");
                                      while($rows=mysqli_fetch_array($member)){

                              echo'
                              <tr>
                              <td>'.$rows['name'].'</td>
                              <td>'.$rows['gender'].'</td>
                              <td>'.$rows['mobile'].'</td>
                              <td>'.$rows['email'].'</td>
                              <td>'.$rows['marital'].'</td>
                              <td>'.$rows['address'].'</td>
                              <td>'.$rows['staff_id'].'</td>
                              <td>'.$rows['member_department'].'</td>
                              <td>'.$rows['contrib_amount'].'</td>
                              <td>'.$rows['contrib_bank'].'</td>
                              <td>'.$rows['date_joined'].'</td>
                              </tr>
                              ';
                              }

                              ?>


                        </tbody>
                      </table>
                      <?php  

$result_db = mysqli_query($mysqli,"SELECT COUNT(id) FROM members"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='view-members.php?page=".$i."'>".$i."</a></li>"; 
}
echo $pagLink . "</ul>";  
?>
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