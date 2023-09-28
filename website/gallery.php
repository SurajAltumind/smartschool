
<!-- Gallery -->
<div class="gallery" id="gallery">
<div class="container">
<h3 class="title tittle">Our Gallery</h3>
<div class="w3layouts-main">
<div class="gallery-grids carouselGallery-grid hidden-xs">
<!--------Retrived all images data from gallery with description -------------------->
<?php
$sql ="SELECT galleryModalTitle,galleryImage,galleryModalDescription  FROM `ksmbbv_site_gallery` WHERE galleryStatus =1 ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{    
$galleryModalTitle=htmlentities($result->galleryModalTitle);
$galleryModalDescription=htmlentities($result->galleryModalDescription);
$galleryImage=htmlentities($result->galleryImage);
?>
<div class="col-md-4 gallery-grid">
<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="0" data-username=" " data-imagetext="<?php echo $galleryModalDescription; ?>" 
data-location="<?php echo $galleryModalTitle; ?>" data-imagepath="admin_panel/images/gallery_image/<?php echo $galleryImage;?>" data-posturl="#" 
style="background-image:url(admin_panel/images/gallery_image/<?php echo $galleryImage;?>);">
<div class="carouselGallery-item">
<div class="carouselGallery-item-meta">
<span class="carouselGallery-item-meta-user">
<?php echo $galleryModalTitle; ?>
</span>
</div>
</div>
</div>
</div>
<?php }} ?>
<!------------End for each loop------------>
<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
<!-- //Gallery -->