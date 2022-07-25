<?php
session_start();
if (! empty($_SESSION["staff_id"])) {
include("$_SERVER[DOCUMENT_ROOT]/Coporative/admin/header.php");

?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update corporative member details</h4>
                    <form class="form-sample">

                    <div class="form-group">
                      <form action="scripts/update-member1.php" method='post'>
                      <select class="form-control" onchange="this.form.submit()">
                        <option value="AL">Select Member</option>
                              <?php
                              while($rows=mysqli_fetch_array($memberinv)){

                              echo'
                              <option value="AL">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                      </form>
                    </div>
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                       <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Gender</label>
                            <div class="col-sm-8">
                              <input class="form-control" readonly name="gender" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mobile Phone</label>
                            <div class="col-sm-8">
                              <input type="text" name="mobile" class="form-control"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                              <input type="text" readonly name="password" class="form-control"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input name="email" class="form-control"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Marital Status</label>
                            <div class="col-sm-8">
                              <select name="marital" class="form-control">
                                <option>---</option>
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
                              <input class="form-control" readonly name="date_joined" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="address" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State of Orgin</label>
                            <div class="col-sm-9">
                              <select  name="state" class="form-control">
                                <option>---</option>
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
                            <label class="col-sm-3 col-form-label">File upload</label>
                            <div class="col-sm-9">
                        
                        <div class="input-group col-xs-12">
                          <input type="file" name="img[]" class="file-upload-default">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" name="file" type="button">Upload</button>
                          </span>
                        </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Role</label>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" name="role" class="form-check-input" id="membershipRadios1" value="admin"> Admin </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" name="role" class="form-check-input" id="membershipRadios2" value="accountant"> Accountant </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" name="role" class="form-check-input" id="membershipRadios2" value="member"> Member </label>
                              </div>
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
                              <input class="form-control" name="staff_id" placeholder="445" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                              <select name="member_department" class="form-control">
                                <option>---</option>
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
                              <input type="text" name="name_kin" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="address_kin" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State of Orgin</label>
                            <div class="col-sm-9">
                              <select name="state_kin" class="form-control">
                                <option>---</option>
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
                            <label class="col-sm-3 col-form-label">Mobile Phone</label>
                            <div class="col-sm-9">
                              <input name="mobile_kin" class="form-control"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Relationship</label>
                            <div class="col-sm-9">
                              <select name="relation_kin" class="form-control">
                                <option>---</option>
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
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input name="email_kin" class="form-control"  />
                            </div>
                          </div>
                        </div>

                      </div>

                      <p class="card-description"> Contribution Detail</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Amount</label>
                            <div class="col-sm-9">
                              <input type="text" name="contrib_amount" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Bank</label>
                            <div class="col-sm-9">
                              <select name="contrib_bank" class="form-control">
                                <option>---</option>
                                <option value="Stanbic IBTC">Stanbic IBTC</option>
                                <option value="Zenith Bank">Zenith Bank</option>
                                <option value="UBA Bank">UBA Bank</option>
                                <option value="Rivers">Rivers</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>



          </div>
          <!-- content-wrapper ends -->
<?php
} 
include("$_SERVER[DOCUMENT_ROOT]/Coporative/footer.php");
?>