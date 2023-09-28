<?php 
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');

$editId=$_GET['id1'];
if(isset($_REQUEST['del']))
{
$delid=intval($_GET['del']);
$sql = "UPDATE `ksmbbv_site_events` SET eventStatus=0 WHERE  eventId='$delid' ";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();

echo "<script>window.location='manage_event.php'</script>";
}

if(isset($_POST['update']))
{
$eventTitle=trim($_POST['eventTitle']);
$eventHeading=trim($_POST['eventHeading']);
$eventIcon=trim($_POST['eventIcon']);
$eventDescription=trim($_POST['eventDescription']);
$eventImage=$rand.$_FILES["eventImage"]["name"]; 
move_uploaded_file($_FILES["eventImage"]["tmp_name"],"images/event_image/".$_FILES["eventImage"]["name"]);

if(!empty($eventImage))
{
$sql="UPDATE `ksmbbv_site_events` SET eventTitle='$eventTitle',eventHeading='$eventHeading',eventDescription='$eventDescription',eventIcon='$eventIcon',eventImage='$eventImage' WHERE eventId='$editId' ";
}

if(empty($eventImage))
{
    $sql="UPDATE `ksmbbv_site_events` SET eventTitle='$eventTitle',eventHeading='$eventHeading',eventDescription='$eventDescription',eventIcon='$eventIcon' WHERE eventId='$editId' ";
}

$query = $dbh->prepare($sql);
$query->bindParam(':eventTitle',$eventTitle,PDO::PARAM_STR);
$query->bindParam(':eventHeading',$eventHeading,PDO::PARAM_STR);
$query->bindParam(':eventDescription',$eventDescription	,PDO::PARAM_STR);
$query->bindParam(':eventIcon',$eventIcon,PDO::PARAM_STR);
$query->bindParam(':eventImage',$eventImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Event Update Successfully.');</script>";
echo "<script>window.location='manage_event.php'</script>";
}

if(isset($_POST['submit']))
{
$eventTitle=trim($_POST['eventTitle']);
$eventHeading=trim($_POST['eventHeading']);
$eventIcon=trim($_POST['eventIcon']);
$eventDescription=trim($_POST['eventDescription']);
$eventImage=$rand.$_FILES["eventImage"]["name"]; 
$eventPostedDate=date('Y-m-d');

move_uploaded_file($_FILES["eventImage"]["tmp_name"],"images/event_image/".$_FILES["eventImage"]["name"]);

$sql="INSERT INTO `ksmbbv_site_events`(`eventTitle`, `eventHeading`, `eventDescription`, `eventIcon`, `eventImage`, `eventPostedDate`)
VALUES('$eventTitle', '$eventHeading', '$eventDescription', '$eventIcon', '$eventImage', '$eventPostedDate')";

$query = $dbh->prepare($sql);
$query->bindParam(':eventTitle',$eventTitle,PDO::PARAM_STR);
$query->bindParam(':eventHeading',$eventHeading,PDO::PARAM_STR);
$query->bindParam(':eventDescription',$eventDescription,PDO::PARAM_STR);
$query->bindParam(':eventIcon',$eventIcon,PDO::PARAM_STR);
$query->bindParam(':eventImage',$eventImage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
echo "<script>alert('Event Posted Successfully.');</script>";
echo "<script>window.location='manage_event.php'</script>";

}


$sql ="SELECT eventTitle,eventHeading,eventDescription,eventIcon,eventImage  FROM `ksmbbv_site_events` WHERE eventId='$editId' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
}}           
$eventTitle=htmlentities($result->eventTitle);
$eventHeading=htmlentities($result->eventHeading);
$eventDescription=htmlentities($result->eventDescription);
$eventIcon=htmlentities($result->eventIcon);
$eventImage=htmlentities($result->eventImage);
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Event</h4>
                                    <form method="POST" enctype="multipart/form-data" class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Event Title</label>
                                            <input type="text" name="eventTitle" value="<?php echo $eventTitle; ?>" class="form-control" id="eventTitle" placeholder="Event Title" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Event Heading</label>
                                            <input type="text" name="eventHeading" value="<?php echo $eventHeading; ?>" class="form-control" id="eventHeading" placeholder="Event Heading" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Event Icon</label>
                                            <input type="text" name="eventIcon" value="<?php echo $eventIcon; ?>" class="form-control" id="eventIcon" placeholder="Event Icon" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea rows="12" cols="50" class="form-control"  name="eventDescription" id="eventDescription"  required><?php echo $eventDescription; ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Event Image</label>
                                            <input type="file"  name="eventImage" class="form-control" id="eventImage"  >
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
                  <h4 class="card-title">Event Details</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No.</th>
                          <th>Event Title</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql ="SELECT eventTitle,eventImage,eventId  FROM `ksmbbv_site_events` WHERE eventStatus=1";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {       
                        $eventTitle=htmlentities($result->eventTitle);
                        $eventImage=htmlentities($result->eventImage);
                        $eventId=htmlentities($result->eventId);
                        ?>
                        <tr>
                          <td><?php echo $cnt; ?></td>
                          <td><?php echo $eventTitle; ?></td>
                          <td><img src="images/event_image/<?php echo $eventImage;?>" style="width: 60px;height:60px;"></td>
                          <td>
                          <a href="manage_event.php?id1=<?php echo $eventId;?>" class="btn btn-info a-btn-slide-text btn-sm" title="Edit">
                                <span class="fa fa-edit " aria-hidden="true">Edit</span>
                                <span><strong></strong></span>            
                            </a>

                          <a href="manage_event.php?del=<?php echo $eventId;?>" class="btn btn-danger a-btn-slide-text btn-sm" title="Delete" onclick="return confirm('Do you want to delete ?');">
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