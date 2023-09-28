<?php
include('admin_panel/config.php');
$sql ="SELECT sliderText,sliderModelTextDescrption,sliderImage  FROM `ksmbbv_site_slider` WHERE sliderStatus=1 ORDER BY sliderId  DESC LIMIT 1 ";
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

<div class="w3layouts-text">
<h2><?php echo $sliderText;?></h2>
<div class="w3-button">
<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
</div>

</div>
<!-- modal -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
<h4 class="modal-title"><?php echo $sliderText;?></h4>
</div> 
<div class="modal-body">
<div class="agileits-w3layouts-info">
<img src="images/m13.jpg" alt="" />
<p><?php echo $sliderModelTextDescrption;?></p>
</div>
</div>
</div>
</div>
</div>
<!-- //modal -->
</div>
</div>  
<!-- //banner-text end -->