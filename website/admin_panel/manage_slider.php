<?php 
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');

$editId=$_GET['id1'];
if(isset($_REQUEST['del']))
{
$delid=intval($_GET['del']);
$sql = "UPDATE `ksmbbv_site_slider` SET sliderStatus=0 WHERE  sliderId ='$delid' ";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();

echo "<script>window.location='manage_slider.php'</script>";
}

if(isset($_POST['update']))
{
$sliderText=trim($_POST['sliderText']);
$sliderModelTextDescrption=trim($_POST['sliderModelTextDescrption']);
$sliderImage=$rand.$_FILES["sliderImage"]["name"]; 
move_uploaded_file($_FILES["sliderImage"]["tmp_name"],"../images/slider_image/".$_FILES["sliderImage"]["name"]);

if(!empty($sliderImage))
{
$sql="UPDATE `ksmbbv_site_slider` SET sliderText='$sliderText',sliderModelTextDescrption='$sliderModelTextDescrption',sliderImage='$sliderImage' WHERE sliderId='$editId' ";
}

if(empty($sliderImage))
{
$sql="UPDATE `ksmbbv_site_slider` SET sliderText='$sliderText',sliderModelTextDescrption='$sliderModelTextDescrption' WHERE sliderId='$editId' ";
}

$query = $dbh->prepare($sql);
$query->bindParam(':sliderText',$sliderText,PDO::PARAM_STR);
$query->bindParam(':sliderModelTextDescrption',$sliderModelTextDescrption,PDO::PARAM_STR);
$query->bindParam(':sliderImage',$sliderImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Slider Image Update Successfully.');</script>";
echo "<script>window.location='manage_slider.php'</script>";
}

if(isset($_POST['submit']))
{
$sliderText=trim($_POST['sliderText']);
$sliderModelTextDescrption=trim($_POST['sliderModelTextDescrption']);
$sliderImage=$_FILES["sliderImage"]["name"]; 
move_uploaded_file($_FILES["sliderImage"]["tmp_name"],"../images/slider_image/".$_FILES["sliderImage"]["name"]);

$sql="INSERT INTO `ksmbbv_site_slider`(`sliderText`, `sliderModelTextDescrption`, `sliderImage`)
VALUES('$sliderText', '$sliderModelTextDescrption', '$sliderImage')";

$query = $dbh->prepare($sql);
$query->bindParam(':sliderText',$sliderText,PDO::PARAM_STR);
$query->bindParam(':sliderModelTextDescrption',$sliderModelTextDescrption,PDO::PARAM_STR);
$query->bindParam(':sliderImage',$sliderImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Slider Image Upload Successfully.');</script>";
echo "<script>window.location='manage_slider.php'</script>";

}


$sql ="SELECT sliderText,sliderModelTextDescrption,sliderImage  FROM `ksmbbv_site_slider` WHERE sliderId ='$editId' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
}}           
$sliderText=htmlentities($result->sliderText);
$sliderModelTextDescrption=htmlentities($result->sliderModelTextDescrption);
$sliderImage=htmlentities($result->sliderImage);
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Slider</h4>
                                    <form method="POST" enctype="multipart/form-data" class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Slider Title</label>
                                            <input type="text" name="sliderText" value="<?php echo $sliderText; ?>" class="form-control" id="sliderText" placeholder="Slider Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea rows="12" cols="50" class="form-control"  name="sliderModelTextDescrption" id="sliderModelTextDescrption"  required><?php echo $sliderModelTextDescrption; ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Slider Image</label>
                                            <input type="file"  name="sliderImage" class="form-control" id="sliderImage"  >
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
                  <h4 class="card-title">Slider Details</h4>
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
                        $sql ="SELECT sliderId ,sliderText,sliderImage  FROM `ksmbbv_site_slider` WHERE sliderStatus=1";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {       
                        $sliderId=htmlentities($result->sliderId);
                        $sliderText=htmlentities($result->sliderText);
                        $sliderImage=htmlentities($result->sliderImage);
                        ?>
                        <tr>
                          <td><?php echo $cnt; ?></td>
                          <td><?php echo $sliderText; ?></td>
                          <td><img src="../images/slider_image/<?php echo $sliderImage;?>" style="width: 60px;height:60px;"></td>
                          <td>
                          <a href="manage_slider.php?id1=<?php echo $sliderId;?>" class="btn btn-info a-btn-slide-text btn-sm" title="Edit">
                                <span class="fa fa-edit " aria-hidden="true">Edit</span>
                                <span><strong></strong></span>            
                            </a>

                          <a href="manage_slider.php?del=<?php echo $sliderId;?>" class="btn btn-danger a-btn-slide-text btn-sm" title="Delete" onclick="return confirm('Do you want to delete ?');">
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