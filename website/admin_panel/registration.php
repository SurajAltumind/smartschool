<?php 
include('header.php');
include('nav.php');
include('config.php');

if(isset($_POST['submit']))
{
$userName=trim($_POST['userName']);
$userLoginId=trim($_POST['userLoginId']);
$userPassword=trim($_POST['userPassword']);

$sql="INSERT INTO `ksmbbv_site_users`(userName,userLoginId,userPassword)
VALUES('$userName','$userLoginId','$userPassword')";

$query = $dbh->prepare($sql);
$query->bindParam(':userName',$userName,PDO::PARAM_STR);
$query->bindParam(':userLoginId',$userLoginId,PDO::PARAM_STR);
$query->bindParam(':userPassword',$userPassword,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('User Registered Successfully.');</script>";
//echo "<script>window.location='registration.php'</script>";
}
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">User Registartion Form</h4>
                                    <form method="POST" class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name</label>
                                            <input type="text" name="userName" class="form-control" id="exampleInputUsername1" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Id</label>
                                            <input type="text" class="form-control" name="userLoginId" id="exampleInputEmail1" placeholder="User Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="userPassword" class="form-control" id="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_password" placeholder="Password" required>
                                        </div>
                                        
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary mr-2">
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hoverable Table</h4>
                  <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                          <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <script>
                var password = document.getElementById("password")
                , confirm_password = document.getElementById("confirm_password");
                function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
                }
                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
                </script>
               <?php include('footer.php');?>