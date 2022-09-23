<?php
session_start();
if (!empty($_SESSION["staff_id"]) && !empty($_SESSION["name"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");


                              


?>     <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Profile</h4>


                    <form class="form-sample" action="<?PHP $_PHP_SELF ?>" method='post'>

                      <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                     <select name="member_name" class="form-control">
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
                           <button type="submit" name="submit" class="btn btn-primary mr-2">View</button>
                        </div>
                          </div>
                        </div>

                      </div>
              </form>

 <?php

 if(isset($_POST["submit"])){



  if(isset($_POST["member_name"])){

    $member_name = $_POST['member_name'];

    $userpro = mysqli_query($mysqli, "SELECT * FROM members where name = '".$member_name."'");

                                      while($rows=mysqli_fetch_array($userpro)){


                        echo'                     


                    <form class="form-sample" action="scripts/update-member.php" method="post" enctype="multipart/form-data">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="fname" class="form-control" readonly value="'. $rows['name'].'" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Gender</label>
                            <div class="col-sm-8">
                              <input type="text" name="gender" class="form-control" readonly value="'.$rows['gender'].'" />

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mobile Phone</label>
                            <div class="col-sm-8">
                              <input type="text" name="mobile" class="form-control" value="'.$rows['mobile'].'" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input name="email" class="form-control"  value="'.$rows['email'].'"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Marital Status</label>
                            <div class="col-sm-8">
                              <select name="marital" class="form-control">
                                <option value="'.$rows['marital'].'">'.$rows['marital'].'</option>
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Date Joined</label>
                            <div class="col-sm-8">
                              <input class="form-control" readonly name="date_joined" readonly value="'.$rows['date_joined'].'" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="address" class="form-control" value="'.$rows['address'].'"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State of Orgin</label>
                            <div class="col-sm-9">
                              <select  name="state" class="form-control">
                                <option value="'.$rows['state'].'">'.$rows['state'].'</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">Federal Capital Territory</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p class="card-description"> Staff Details </p>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Staff ID</label>
                            <div class="col-sm-9">
                              <input class="form-control" readonly name="staff_id" readonly value="'.$rows['staff_id'].'" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                              <select name="member_department" class="form-control">
                                <option value="'.$rows['member_department'].'">'.$rows['member_department'].'</option>
                                <option value="Billing Admin">Billing Admin</option>
                                <option value="Support">Support</option>
                                <option value="NMC">NMC</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Account Management">Account Management</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Residential Management">Accounting</option>
                                <option value="Service Delivery">Service Delivery</option>
                                <option value="Managed Service">Managed Service</option>
                                <option value="Credit Control">Credit Control</option>
                                <option value="Sales">Sales</option>
                                <option value="Personnel">Personnel</option>
                                <option value="Admin">Admin</option>
                                <option value="RF Operation">RF Operation</option>
                                <option value="RF Planning">RF Planning</option>
                                <option value="FOC">FOC</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="IP ops">IP ops</option>
                                <option value="PS ops">PS ops</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p class="card-description"> Next of Kin </p>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name of Next of Kin</label>
                            <div class="col-sm-9">
                              <input type="text" name="name_kin" class="form-control" value="'.$rows['name_kin'].'"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="address_kin" class="form-control" value="'.$rows['address_kin'].'"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State of Orgin</label>
                            <div class="col-sm-9">
                              <select name="state_kin" class="form-control">
                                <option value="'.$rows['state_kin'].'">'.$rows['state_kin'].'</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">Federal Capital Territory</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Next of Kin Mobile</label>
                            <div class="col-sm-9">
                              <input name="mobile_kin" class="form-control" value="'.$rows['mobile_kin'].'" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Relationship</label>
                            <div class="col-sm-9">
                              <select name="relation_kin" class="form-control">
                                <option value="'.$rows['relation_kin'].'">'.$rows['relation_kin'].'</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Children">Children</option>
                                <option value="Sister">Sister</option>
                                <option value="Brother">Brother</option>
                                <option value="Colleague">Colleague</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Next of Kin Email</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="email_kin" value="'.$rows['email_kin'].'" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contribution Amount</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="contrib_amount" value="'.$rows['contrib_amount'].'" />
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary" name="submit" mr-2>Updated</button>
                      <button class="btn btn-dark">Cancel</button>

                      </form>

';


}   

  }else{
    echo "<script>";echo " alert('Please select a name');window.location.href='profile-edit.php';</script>";
  }
}

?>


                  </div>
                </div>
              </div>




          </div>
          <!-- content-wrapper ends -->
<?php
}
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>