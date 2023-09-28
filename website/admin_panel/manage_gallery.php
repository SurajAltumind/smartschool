<?php 
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');

$editId=$_GET['id1'];
if(isset($_REQUEST['del']))
{
$delid=intval($_GET['del']);
$sql = "UPDATE `ksmbbv_site_gallery` SET galleryStatus=0 WHERE  galleryId ='$delid' ";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();

echo "<script>window.location='manage_gallery.php'</script>";
}

if(isset($_POST['update']))
{
$galleryModalTitle=trim($_POST['galleryModalTitle']);
$galleryModalDescription=trim($_POST['galleryModalDescription']);
$galleryImage=$rand.$_FILES["galleryImage"]["name"]; 
move_uploaded_file($_FILES["galleryImage"]["tmp_name"],"images/gallery_image/".$_FILES["galleryImage"]["name"]);

if(!empty($galleryImage))
{
$sql="UPDATE `ksmbbv_site_gallery` SET galleryModalTitle='$galleryModalTitle',galleryModalDescription='$galleryModalDescription',galleryImage='$galleryImage' WHERE galleryId='$editId' ";
}

if(empty($galleryImage))
{
$sql="UPDATE `ksmbbv_site_gallery` SET galleryModalTitle='$galleryModalTitle',galleryModalDescription='$galleryModalDescription' WHERE galleryId='$editId' ";
}

$query = $dbh->prepare($sql);
$query->bindParam(':galleryModalTitle',$galleryModalTitle,PDO::PARAM_STR);
$query->bindParam(':galleryModalDescription',$galleryModalDescription,PDO::PARAM_STR);
$query->bindParam(':galleryImage',$galleryImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Gallery Image Update Successfully.');</script>";
echo "<script>window.location='manage_gallery.php'</script>";
}

if(isset($_POST['submit']))
{
$galleryModalTitle=trim($_POST['galleryModalTitle']);
$galleryModalDescription=trim($_POST['galleryModalDescription']);
$galleryImage=$rand.$_FILES["galleryImage"]["name"]; 
$galleryImageUploadDate=date('Y-m-d');
move_uploaded_file($_FILES["galleryImage"]["tmp_name"],"images/gallery_image/".$_FILES["galleryImage"]["name"]);

$sql="INSERT INTO `ksmbbv_site_gallery`(`galleryModalTitle`, `galleryModalDescription`, `galleryImage`, `galleryImageUploadDate`)
VALUES('$galleryModalTitle', '$galleryModalDescription', '$galleryImage', '$galleryImageUploadDate')";

$query = $dbh->prepare($sql);
$query->bindParam(':galleryModalTitle',$galleryModalTitle,PDO::PARAM_STR);
$query->bindParam(':galleryModalDescription',$galleryModalDescription,PDO::PARAM_STR);
$query->bindParam(':galleryImage',$galleryImage,PDO::PARAM_STR);
$query->bindParam(':galleryImageUploadDate',$galleryImageUploadDate,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Gallery Image Upload Successfully.');</script>";
echo "<script>window.location='manage_gallery.php'</script>";

}


$sql ="SELECT galleryModalTitle,galleryImage,galleryModalDescription  FROM `ksmbbv_site_gallery` WHERE galleryId ='$editId' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
}}           
$galleryModalTitle=htmlentities($result->galleryModalTitle);
$galleryModalDescription=htmlentities($result->galleryModalDescription);
$galleryImage=htmlentities($result->galleryImage);
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Gallery Image</h4>
                                    <form method="POST" enctype="multipart/form-data" class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Title</label>
                                            <input type="text" name="galleryModalTitle" value="<?php echo $galleryModalTitle; ?>" class="form-control" id="galleryModalTitle" placeholder="Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea rows="12" cols="50" class="form-control"  name="galleryModalDescription" id="galleryModalDescription"  required><?php echo $galleryModalDescription; ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gallery Image</label>
                                            <input type="file"  name="galleryImage" class="form-control" id="galleryImage"  >
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
                  <h4 class="card-title">Gallery Image Details</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No.</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql ="SELECT galleryModalTitle,galleryImage,galleryId  FROM `ksmbbv_site_gallery` WHERE galleryStatus=1";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {       
                        $galleryModalTitle=htmlentities($result->galleryModalTitle);
                        $galleryImage=htmlentities($result->galleryImage);
                        $galleryId=htmlentities($result->galleryId);
                        ?>
                        <tr>
                          <td><?php echo $cnt; ?></td>
                          <td><?php echo $galleryModalTitle; ?></td>
                          <td><img src="images/gallery_image/<?php echo $galleryImage;?>" style="width: 60px;height:60px;"></td>
                          <td>
                          <a href="manage_gallery.php?id1=<?php echo $galleryId;?>" class="btn btn-info a-btn-slide-text btn-sm" title="Edit">
                                <span class="fa fa-edit " aria-hidden="true">Edit</span>
                                <span><strong></strong></span>            
                            </a>

                          <a href="manage_gallery.php?del=<?php echo $galleryId;?>" class="btn btn-danger a-btn-slide-text btn-sm" title="Delete" onclick="return confirm('Do you want to delete ?');">
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