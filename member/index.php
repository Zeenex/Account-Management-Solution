<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/member/header.php");


?>

        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title text-black"> Your Profile </h3>

            </div>
          
          
            <div class="row">
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                    <div class="item">
                        <img src="<?php echo $imageURL; ?>" alt="">
                    </div>
                  </div>
                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                           <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow text-center">
                              <h6 class="preview-subject text-center"><?php echo $mName; ?></h6>
                              <p class="text-muted"><?php echo $mDept; ?></p>
                              <p class="text-muted"><?php echo $mCat_role; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                          
                    
       
                  </div>
                  
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Personal Information</h4>
                    
                    <div class="row">
                      <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <td>Address:  </td>
                          <td><?php echo $mAddress; ?></td>
                        </tr>
                        <tr>
                          <td>Email:  </td>
                          <td><?php echo $mEmail; ?></td>
                        </tr>
                        <tr>
                          <td>Mobile:  </td>
                          <td><?php echo $mMobile; ?></td>
                        </tr>
                        <tr>
                          <td>Staff ID:  </td>
                          <td><?php echo $mStaffid; ?></td>
                        </tr>
                        <tr>
                          <td>Marital Status:  </td>
                          <td><?php echo $mMarital; ?></td>
                        </tr>
                        <tr>
                          <td>Gender:  </td>
                          <td><?php echo $mGender; ?></td>
                        </tr>
                        <tr>
                          <td>Page Role:  </td>
                          <td><?php echo $mRole; ?></td>
                        </tr>

                      </table>
                    </div>
                    </div>
                  </div>


                </div>
              </div>

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Contribution Information</h4>
                    
                    <div class="row">
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <td>Contribution Amount:  </td>
                          <td>₦<?php echo $mAmountCont; ?></td>
                        </tr>
                        <tr>
                          <td>Date Joined:  </td>
                          <td><?php echo $mDoJ; ?></td>
                        </tr>
                        <tr>
                          <td>Next of Kin:  </td>
                          <td><?php echo $mName_kin; ?></td>
                        </tr>
                        <tr>
                          <td>Next of Kin Mobile:  </td>
                          <td><?php echo $mMobile_kin; ?></td>
                        </tr>
 
                        <tr>
                          <td>Kin Relationship:  </td>
                          <td><?php echo $mRelation_kin; ?></td>
                        </tr>
 
                      </table>
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