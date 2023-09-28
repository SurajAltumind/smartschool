<?php 
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');

$editId=$_GET['id1'];
if(isset($_REQUEST['del']))
{
$delid=intval($_GET['del']);
$sql = "UPDATE `ksmbbv_site_news` SET newsStatus=0 WHERE  newsId ='$delid' ";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();
echo "<script>window.location='manage_news.php'</script>";
}


if(isset($_POST['update']))
{
$newsDate=trim($_POST['newsDate']);    
$newsTitle=trim($_POST['newsTitle']);
$newsSubtitle=trim($_POST['newsSubtitle']);
$newsModalHeading=trim($_POST['newsModalHeading']);
$newsModalDescription=trim($_POST['newsModalDescription']);
$newsImage=$_FILES["newsImage"]["name"]; 

move_uploaded_file($_FILES["newsImage"]["tmp_name"],"images/news_image/".$_FILES["newsImage"]["name"]);
    
if(!empty($newsImage))
{
$sql="UPDATE `ksmbbv_site_news` SET newsDate='$newsDate',newsTitle='$newsTitle',newsSubtitle='$newsSubtitle',newsModalHeading='$newsModalHeading',newsModalDescription='$newsModalDescription',newsImage='$newsImage' WHERE newsId='$editId' ";
}

if(empty($newsImage))
{
$sql="UPDATE `ksmbbv_site_news` SET newsDate='$newsDate',newsTitle='$newsTitle',newsSubtitle='$newsSubtitle',newsModalHeading='$newsModalHeading',newsModalDescription='$newsModalDescription' WHERE newsId='$editId' ";
}

$query = $dbh->prepare($sql);
$query->bindParam(':newsDate',$newsDate,PDO::PARAM_STR);
$query->bindParam(':newsTitle',$newsTitle,PDO::PARAM_STR);
$query->bindParam(':newsSubtitle',$newsSubtitle,PDO::PARAM_STR);
$query->bindParam(':newsModalHeading',$newsModalHeading,PDO::PARAM_STR);
$query->bindParam(':newsModalDescription',$newsModalDescription,PDO::PARAM_STR);
$query->bindParam(':newsImage',$newsImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Update Successfully.');</script>";
echo "<script>window.location='manage_news.php'</script>";

}

if(isset($_POST['submit']))
{
$newsDate=trim($_POST['newsDate']);    
$newsTitle=trim($_POST['newsTitle']);
$newsSubtitle=trim($_POST['newsSubtitle']);
$newsModalHeading=trim($_POST['newsModalHeading']);
$newsModalDescription=trim($_POST['newsModalDescription']);

$newsImage=$rand.$_FILES["newsImage"]["name"]; 
$newsCreateDate=date('Y-m-d');
move_uploaded_file($_FILES["newsImage"]["tmp_name"],"images/news_image/".$_FILES["newsImage"]["name"]);

$sql="INSERT INTO `ksmbbv_site_news`(`newsDate`, `newsTitle`, `newsSubtitle`, `newsModalHeading`, `newsModalDescription`, `newsImage`, `newsCreateDate`)
VALUES('$newsDate', '$newsTitle', '$newsSubtitle', '$newsModalHeading', '$newsModalDescription', '$newsImage', '$newsCreateDate')";

$query = $dbh->prepare($sql);
$query->bindParam(':newsDate',$newsDate,PDO::PARAM_STR);
$query->bindParam(':newsTitle',$newsTitle,PDO::PARAM_STR);
$query->bindParam(':newsSubtitle',$newsSubtitle,PDO::PARAM_STR);
$query->bindParam(':newsModalHeading',$newsModalHeading,PDO::PARAM_STR);
$query->bindParam(':newsModalDescription',$newsModalDescription,PDO::PARAM_STR);
$query->bindParam(':newsImage',$newsImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('News Posted Successfully.');</script>";
echo "<script>window.location='manage_news.php'</script>";

}


$sql ="SELECT newsDate,newsTitle,newsSubtitle,newsModalHeading,newsModalDescription,newsImage  FROM `ksmbbv_site_news` WHERE newsId ='$editId' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
}}           
$newsDate=htmlentities($result->newsDate);
$newsTitle=htmlentities($result->newsTitle);
$newsSubtitle=htmlentities($result->newsSubtitle);
$newsModalHeading=htmlentities($result->newsModalHeading);
$newsModalDescription=htmlentities($result->newsModalDescription);
$newsImage=htmlentities($result->newsImage);
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New News</h4>
                                    <form method="POST" enctype="multipart/form-data" class="forms-sample">
                                       <div class="form-group">
                                            <label for="exampleInputUsername1">News Date</label>
                                            <input type="date" name="newsDate" value="<?php echo $newsDate; ?>" class="form-control" id="newsDate"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">News Title</label>
                                            <input type="text" name="newsTitle" value="<?php echo $newsTitle; ?>" class="form-control" id="newsTitle" placeholder="News Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">News Subtitle</label>
                                            <input type="text" name="newsSubtitle" value="<?php echo $newsSubtitle; ?>" class="form-control" id="newsSubtitle" placeholder="News Subtitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">News Description Heading</label>
                                            <input type="text" name="newsModalHeading" value="<?php echo $newsModalHeading; ?>" class="form-control" id="newsModalHeading" placeholder="Description Heading" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">News Description</label>
                                            <textarea rows="12" cols="50" class="form-control"  name="newsModalDescription" id="newsModalDescription"  required><?php echo $newsModalDescription; ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">News Image</label>
                                            <input type="file"  name="newsImage" class="form-control" id="newsImage"  >
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
                  <h4 class="card-title">News Details</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No.</th>
                          <th>News Title</th>
                          <th>News Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql ="SELECT newsTitle,newsId,newsImage FROM `ksmbbv_site_news` WHERE newsStatus=1";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {       
                        $newsTitle=htmlentities($result->newsTitle);
                        $newsId=htmlentities($result->newsId);
                        $newsImage=htmlentities($result->newsImage);
                        ?>
                        <tr>
                          <td><?php echo $cnt; ?></td>
                          <td><?php echo $newsTitle; ?></td>
                          <td><img src="images/news_image/<?php echo $newsImage;?>" style="width: 60px;height:60px;"></td>
                          <td>
                          <a href="manage_news.php?id1=<?php echo $newsId;?>" class="btn btn-info a-btn-slide-text btn-sm" title="Edit">
                                <span class="fa fa-edit " aria-hidden="true">Edit</span>
                                <span><strong></strong></span>            
                            </a>

                          <a href="manage_news.php?del=<?php echo $newsId;?>" class="btn btn-danger a-btn-slide-text btn-sm" title="Delete" onclick="return confirm('Do you want to delete ?');">
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