<?php 
session_start();
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');
$user_id=$_SESSION['alogin'];

if(isset($_POST['submit']))
{
$password=MD5($_POST['password']);
$sql = "UPDATE `ksmbbv_site_users` SET userPassword='$password' WHERE  userLoginId='$user_id' ";
$query = $dbh->prepare($sql);
$query -> bindParam(':userLoginId',$user_id, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Password Change Successfully.');</script>";
echo "<script>window.location='change_password.php'</script>";
}
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Change Password</h4>
                                    <form method="POST"  class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Enter New Password</label>
                                            <input type="password" name="password" id="password"  class="form-control"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Re-enter New Password </label>
                                            <input type="password" name="password" id="confirm_password"  class="form-control" required>
                                        </div>
                                        <input type="submit" name="submit" value="Change Password" class="btn btn-success mr-2">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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