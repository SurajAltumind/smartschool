<!-- team -->
<div class="team-all" id="alumni">
<div class="container">
<h3 class="tittle">Our Alumni</h3>	
<p class="para"></p>
<div class="team-grids">

<?php
$sql ="SELECT alumniPhoto,alumniName,alumniComment  FROM `ksmbbv_site_alumni` WHERE alumniStatus =1 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{    
$alumniPhoto=htmlentities($result->alumniPhoto);
$alumniName=htmlentities($result->alumniName);
$alumniComment=htmlentities($result->alumniComment);
?>
<div class="col-md-4 col-sm-4 team-gd">
<div class="team-left">
<div class="team-top">
</div>
<div class="team-bottom">
<h4><?php echo $alumniName;?></h4>
<p><?php echo $alumniComment;?></p>
</div>
<div class="t-img">
<img src="admin_panel/images/alumni_image/<?php echo $alumniPhoto;?>" alt=" " />
</div>
</div>
</div>
<?php }} ?>
<div class="clearfix"></div>
</div>
</div>
</div>
