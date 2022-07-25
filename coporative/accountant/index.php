<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/accountant/header.php");


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
                              <p class="text-muted"><?php echo $mDept ?></p>
                              <p class="text-muted"><?php echo $mRole ?></p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                          
                    
       
                  </div>
                  
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><u>Personal Information</u></h4>
                    
                    <div class="row">
                      <div class="col-md-4">
                        <address>
                          <h6>Address: </h6>
                          <h6>Email: </h6>
                          <h6>Mobile: </h6>
                          <h6>Staff ID: </h6>
                          <h6>Marital Status: </h6>                          
                          <h6>Gender: </h6>
                          <h6>Designation: </h6>

                        </address>
                      </div>
                      <div class="col-md-8">
                        <address class="text-primary">
                          <h6><?php echo $mAddress; ?> </h6>
                          <h6><?php echo $mEmail; ?></h6>
                          <h6><?php echo $mMobile; ?></h6>
                          <h6><?php echo $mStaffid; ?></h6>
                          <h6><?php echo $mMarital; ?></h6>                          
                          <h6><?php echo $mGender; ?></h6>
                          <h6><?php echo $mCat_role; ?></h6>
                        </address>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

              <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><u>Contribution Information</u></h4>
                    
                    <div class="row">
                      <div class="col-md-8">
                        <address>
                          <h6>Monthly Contribution:</h6>
                          <h6>Bank: </h6>
                          <h6>Date Joined:</h6>
                        
                         
                        </address>
                      </div>
                      <div class="col-md-4">
                        <address class="text-success">
                          <h6>₦<?php echo $mAmountCont; ?> </h6>
                          <h6><?php echo $mBank; ?></h6>
                          <h6><?php echo $mDoJ; ?></h6>
                          
                          
                        </address>
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