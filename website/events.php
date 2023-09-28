<!--services-->
<div class="event" id="events">
<div class="container">
<h3 class="title tittle"><font color="black">Events</font></h3>
<div class="servc-grids">

<?php
$sql ="SELECT eventTitle,eventHeading,eventIcon,eventId  FROM `ksmbbv_site_events` WHERE eventStatus =1 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{    
$eventTitle=htmlentities($result->eventTitle);
$eventHeading=htmlentities($result->eventHeading);
$eventIcon=htmlentities($result->eventIcon);
$eventId=htmlentities($result->eventId);
?>

<div class="col-md-4 col-sm-6 servc-grid servc-grid-top ">
<ul> 
<li>
<span class="<?php echo $eventIcon;?>" aria-hidden="true"></span>
</li>
<li>
<h4><a href="#" data-toggle="modal" data-target="#myModalEvent<?php echo $eventId;?>"><?php echo $eventTitle;?></a></h4>
</li>
</ul> 
<div class="clearfix"> </div>
<p><?php echo $eventHeading;?></p>
</div>

<?php }} ?>
<div class="clearfix"> </div>

</div>
</div>
</div>

<?php
$sql ="SELECT eventTitle,eventHeading,eventId,eventDescription,eventImage  FROM `ksmbbv_site_events` WHERE eventStatus =1 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{    
$eventTitle=htmlentities($result->eventTitle);
$eventHeading=htmlentities($result->eventHeading);
$eventId=htmlentities($result->eventId);
$eventDescription=htmlentities($result->eventDescription);
$eventImage=htmlentities($result->eventImage);
?>
<div class="modal fade" id="myModalEvent<?php echo $eventId; ?>" tabindex="-1" role="dialog" >
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4><?php echo $eventTitle; ?></h4>
<p><?php echo $eventHeading; ?></p>
<img src="admin_panel/images/event_image/<?php echo $eventImage;?>" alt="blog-image" />

<span><?php echo $eventDescription; ?></span>
</div>
</div>

</div>
</div>
<?php }} ?>
