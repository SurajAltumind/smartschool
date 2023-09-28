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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Us Details</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No.</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql ="SELECT name,email,subject,message  FROM `ksmbbv_site_contactus`";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {      
                        $entryDate=htmlentities($result->entryDate);     
                        $name=htmlentities($result->name);
                        $email=htmlentities($result->email);
                        $subject=htmlentities($result->subject);
                        $message=htmlentities($result->message);
                        ?>
                        <tr>
                          <td><?php echo $cnt; ?></td>
                          <td><?php echo $entryDate; ?></td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $subject; ?></td>
                          <td><?php echo $message; ?></td>
                         
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <?php include('footer.php');?>