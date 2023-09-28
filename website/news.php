
<!-- News -->
<div class="about-middle" id="news">
<div class="container">
<div class="testimo">
<h3 class="tittle">Our News</h3>
</div>

<section class="slider">
<div class="flexslider">
<ul class="slides">

<?php
$sql ="SELECT newsId,newsDate,newsTitle,newsSubtitle,newsImage  FROM `ksmbbv_site_news` WHERE newsStatus =1 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{    
$newsDate=htmlentities($result->newsDate);
$newsSubtitle=htmlentities($result->newsSubtitle);
$newsTitle=htmlentities($result->newsTitle);
$newsImage=htmlentities($result->newsImage);
$newsId=htmlentities($result->newsId);
?>
<li>
<div class="banner-bottom">			  		
<div class="about-midd-main">
<div class="about-img">
<a href="#" data-toggle="modal" data-target="#myModal<?php echo $newsId;?>"><img class="agile-img" src="admin_panel/images/news_image/<?php echo $newsImage;?>" alt=" "></a>
</div>
<div class="w3-test">
<h4><span><?php echo $newsDate; ?></span></h4>
<h5><a href="#" data-toggle="modal" data-target="#myModal<?php echo $newsId;?>"><?php echo $newsTitle; ?></a></h5>
<p><?php echo $newsTitle; ?>.</p>
<a href="#" class="view" data-toggle="modal" data-target="#myModal<?php echo $newsId;?>">Read More</a>
</div>
</div>
</div>
</li>
<?php }} ?>

</ul>
</div>
<div class="clearfix"> </div>
</section>
</div>
</div>
<!-- Modal1 -->

<?php
$sql ="SELECT newsId,newsModalDescription,newsTitle,newsSubtitle,newsImage,newsModalHeading  FROM `ksmbbv_site_news` WHERE newsStatus =1 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{    
$newsSubtitle=htmlentities($result->newsSubtitle);
$newsModalDescription=htmlentities($result->newsModalDescription);
$newsImage=htmlentities($result->newsImage);
$newsModalHeading=htmlentities($result->newsModalHeading);
$newsId=htmlentities($result->newsId);
?>
<div class="modal fade" id="myModal<?php echo $newsId; ?>" tabindex="-1" role="dialog" >
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4><?php echo $newsModalHeading; ?></h4>
<p><?php echo $newsSubtitle; ?></p>
<img src="admin_panel/images/news_image/<?php echo $newsImage;?>" alt="blog-image" />

<span><?php echo $newsModalDescription; ?></span>
</div>
</div>

</div>
</div>
<?php }} ?>



<!-- //News -->