
<?php 
error_reporting(0);
include('header.php');
include('nav.php');
include('config.php');
?>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0&appId=557523385697137&autoLogAppEvents=1" nonce="rXyW75RY"></script>
        <div class="main-panel">
         <div class="content-wrapper">
         <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Share Gallery to Facebook</h4>
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
                          <td><img src="images/gallery_image/<?php echo $galleryImage;?>" style="width: 100px;height:100px;"></td>
                          <td>
                          <div class="fb-share-button" data-href="http://website.ksmbbv.com/admin_panel/images/gallery_image/<?php echo $galleryImage;?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://website.ksmbbv.com/admin_panel/images/gallery_image/<?php echo $galleryImage;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
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