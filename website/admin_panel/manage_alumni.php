<?php 
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');

$editId=$_GET['id1'];
if(isset($_REQUEST['del']))
{
$delid=intval($_GET['del']);
$sql = "UPDATE `ksmbbv_site_alumni` SET alumniStatus=0 WHERE  alumniId='$delid' ";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();
echo "<script>window.location='manage_alumni.php'</script>";
}

if(isset($_POST['update']))
{
$alumniName=trim($_POST['alumniName']);
$alumniComment=trim($_POST['alumniComment']);
$alumniPhoto=$rand.$_FILES["alumniPhoto"]["name"]; 
move_uploaded_file($_FILES["alumniPhoto"]["tmp_name"],"images/alumni_image/".$_FILES["alumniPhoto"]["name"]);

if(!empty($alumniPhoto))
{
$sql="UPDATE `ksmbbv_site_alumni` SET alumniName='$alumniName',alumniComment='$alumniComment',alumniPhoto='$alumniPhoto' WHERE alumniId='$editId' ";
}
if(empty($alumniPhoto))
{
$sql="UPDATE `ksmbbv_site_alumni` SET alumniName='$alumniName',alumniComment='$alumniComment' WHERE alumniId='$editId' ";
}
$query = $dbh->prepare($sql);
$query->bindParam(':alumniName',$alumniName,PDO::PARAM_STR);
$query->bindParam(':alumniComment',$alumniComment,PDO::PARAM_STR);
$query->bindParam(':alumniPhoto',$alumniPhoto,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Alumni Details Update Successfully.');</script>";
echo "<script>window.location='manage_alumni.php'</script>";
}

if(isset($_POST['submit']))
{
$alumniName=trim($_POST['alumniName']);
$alumniComment=trim($_POST['alumniComment']);
$alumniPhoto=$rand.$_FILES["alumniPhoto"]["name"]; 
$AlumniUploadDate=date('Y-m-d');

move_uploaded_file($_FILES["alumniPhoto"]["tmp_name"],"images/alumni_image/".$_FILES["alumniPhoto"]["name"]);

$sql="INSERT INTO `ksmbbv_site_alumni`(`alumniPhoto`, `alumniName`, `alumniComment`, `AlumniUploadDate`)
VALUES('$alumniPhoto', '$alumniName', '$alumniComment', '$AlumniUploadDate')";
$query = $dbh->prepare($sql);
$query->bindParam(':alumniPhoto',$alumniPhoto,PDO::PARAM_STR);
$query->bindParam(':alumniName',$alumniName,PDO::PARAM_STR);
$query->bindParam(':alumniComment',$alumniComment,PDO::PARAM_STR);
$query->bindParam(':AlumniUploadDate',$AlumniUploadDate,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Alumni Details Upload Successfully.');</script>";
echo "<script>window.location='manage_alumni.php'</script>";
}


$sql ="SELECT alumniPhoto,alumniName,alumniComment  FROM `ksmbbv_site_alumni` WHERE alumniId ='$editId' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
}}           
$alumniPhoto=htmlentities($result->alumniPhoto);
$alumniName=htmlentities($result->alumniName);
$alumniComment=htmlentities($result->alumniComment);
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Alumni</h4>
                                    <form method="POST" enctype="multipart/form-data" class="forms-sample">
                                        <div class="form-group">
                                        <label for="exampleInputUsername1">Alumni Name</label>
                                            <input type="text" name="alumniName" value="<?php echo $alumniName; ?>" class="form-control" id="alumniName" placeholder="Alumni Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alumni Comment</label>
                                            <textarea rows="12" cols="50" class="form-control"  name="alumniComment" id="alumniComment"  required><?php echo $alumniComment; ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alumni Photo</label>
                                            <input type="file"  name="alumniPhoto" class="form-control" id="alumniPhoto">
                                        </div>
                                        <?php 
                                        if(empty($editId))
                                        {
                                        ?>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary mr-2">
                                       <?php } ?>

                                       <?php 
                                        if(!empty($editId))
                                        {
                                        ?>
                                        <input type="submit" name="update" value="Update" class="btn btn-success mr-2">
                                       <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Alumni Details</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No.</th>
                          <th>Alumni Name</th>
                          <th>Photo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql ="SELECT alumniName,alumniPhoto,alumniId  FROM `ksmbbv_site_alumni` WHERE alumniStatus=1";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {       
                        $alumniName=htmlentities($result->alumniName);
                        $alumniPhoto=htmlentities($result->alumniPhoto);
                        $alumniId=htmlentities($result->alumniId);
                        ?>
                        <tr>
                          <td><?php echo $cnt; ?></td>
                          <td><?php echo $alumniName; ?></td>
                          <td><img src="images/alumni_image/<?php echo $alumniPhoto;?>" style="width: 60px;height:60px;"></td>
                          <td>
                          <a href="manage_alumni.php?id1=<?php echo $alumniId;?>" class="btn btn-info a-btn-slide-text btn-sm" title="Edit">
                                <span class="fa fa-edit " aria-hidden="true">Edit</span>
                                <span><strong></strong></span>            
                            </a>

                          <a href="manage_alumni.php?del=<?php echo $alumniId;?>" class="btn btn-danger a-btn-slide-text btn-sm" title="Delete" onclick="return confirm('Do you want to delete ?');">
                                <span class="fa fa-trash " aria-hidden="true">Delete</span>
                                <span><strong></strong></span>            
                            </a>
                          </td>
                        </tr>
                        <?php $cnt=$cnt+1;}} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         </div>
        </div>
        <?php include('footer.php');?>