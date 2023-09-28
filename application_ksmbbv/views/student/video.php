
<!DOCTYPE html>

<?php
$count=0;
foreach($res as $r => $rv) 
{
	$video=$rv['lacture_youtube_url'];
	$video1=$rv['lacture_video'];
	$count++;
}



$video_timing=array();		
$opt_a=array();
$opt_b=array();
$opt_c=array();
$opt_d=array();
$correct=array();
$question_id=array();

for($i=0;$i<$count;$i++)
{

	$question[$i]=$res[$i]['question'];
	$opt_a[$i]=$res[$i]['opt_a'];
	$opt_b[$i]=$res[$i]['opt_b'];
	$opt_c[$i]=$res[$i]['opt_c'];
	$opt_d[$i]=$res[$i]['opt_d'];
	$video_timing[$i]=$res[$i]['video_timing'];			
	$correct[$i]=$res[$i]['correct'];

}



if(!empty($video))
{
	$lesson = $video;
}
else
{
	$lesson = $video1;
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<!-- jQuery -->
	<!-- <script src="../js/jquery-1.12.3.min.js"></script> -->
	
	<script src="<?=base_url()?>js/jquery-1.12.3.min.js"></script>

	<!-- Skeleton CSS & Featherlight -->
	<link rel="stylesheet" href="<?=base_url()?>css/normalize.css">
	<link rel="stylesheet" href="<?=base_url()?>/css/skeleton.css">
	<link rel="stylesheet" href="<?=base_url()?>css/featherlight.css">
	<script src="<?=base_url()?>js/featherlight.js"></script>
	

	<!-- Interaction CSS -->
	<link rel="stylesheet" href="<?=base_url()?>css/index.css">

	<!-- GreenSock -->
	<script src="<?=base_url()?>js/TweenMax.min.js"></script>
    <title>BALA BHARATHI VIDYALAYAM</title>
	<style>
		/* .videoInsert {
		position: absolute; 
		right: 0; 
		bottom: 0;
		min-width: 100%; 
		min-height: 100%;
		width: auto; 
		height: auto; 
		background-size: cover;
		overflow: hidden;} */
	</style>
</head>

	


<?php

switch($lesson) {
	case $video:
?>



<?php

		function get_youtube_id_from_url($url)
		{
			if (stristr($url,'youtu.be/'))
				{preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
			else 
				{@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.?)\/(embed\/|watch.?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
		}



		$video_id = get_youtube_id_from_url($lesson);
?>


<body>
    <div id="container">
		<div class="row videoArea">
			<iframe id="player" width="560" height="315" class="trackable-video" src="https://www.youtube.com/embed/<?=$video_id?>?autoplay=0&enablejsapi=1"></iframe>
	</div>
</body>
</html>



<script>



   (function() {

	   var time, rate, remainingTime;
  let count = <?php echo json_encode($count); ?>;
    // console.log(count);
	<?php
			{
				for($i=0;$i<$count;$i++)
				{
				?>
			// stopPlayAt.push("<?=$video_timing[$i]?>");
              var stopPlayAt<?=$i+1?> = ("<?=$video_timing[$i]?>");

			<?php
				}
			}
			?>



  <?php
		{
			for($i=0;$i<$count;$i++)
			{
			?>
				var question<?=$i+1?>Asked = false;

			<?php
			}
		}
		?>
  var  stopPlayTimer;   // Reference to settimeout call

 
  var tag = document.createElement("script");                             // This code loads the IFrame Player API code asynchronously.
  tag.src = "//www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName("script")[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  window.onYouTubeIframeAPIReady = function() {
    player = new YT.Player("player", {
      "events": {
        "onReady": onPlayerReady,
        "onStateChange": onPlayerStateChange
      }
    });
  }

  // The API will call this function when the video player is ready.
  // This automatically starts the video playback when the player is loaded.
  function onPlayerReady(event) {
    // event.target.playVideo();
  }

  // The API calls this function when the player's state changes.
  function onPlayerStateChange(event) {
    
    clearTimeout(stopPlayTimer);
    if (event.data == YT.PlayerState.PLAYING) {
      time = player.getCurrentTime();
      // Add .4 of a second to the time in case it's close to the current time
      // (The API kept returning ~9.7 when hitting play after stopping at 10s)


      if (time   < stopPlayAt1) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt1 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo1, remainingTime * 1000);
	  }
	  if (time   < stopPlayAt2) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt2 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo2, remainingTime * 1000);
      }
	  if (time  < stopPlayAt3) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt3 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo3, remainingTime * 1000);
      }
	  if (time  < stopPlayAt4) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt4 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo4, remainingTime * 1000);
      }
	  if (time  < stopPlayAt5) {
        rate = player.getPlaybackRate();
        remainingTime = (stopPlayAt5 - time) / rate;
        stopPlayTimer = setTimeout(pauseVideo5, remainingTime * 1000);
      }
    }
  }

  
  function pauseVideo1() {
    time1 = player.getCurrentTime();
	if( ( time1 > (stopPlayAt1 - 0.5) && time1 < stopPlayAt1 ) &&  question1Asked == false ){
		player.pauseVideo();
		$.featherlight($('.popUpQuestion1'))
			question1Asked = true; 
		$('.q1').click(function(){
			$.featherlight.current().close();
			player.playVideo();
		});
	}
	}
	function pauseVideo2() {
		time1 = player.getCurrentTime();
		time = Math.round(player.getCurrentTime());
	if(question2Asked == false && ( time1 > (stopPlayAt2 - 0.5) && time1 < stopPlayAt2)){
		player.pauseVideo();
			question2Asked = true; 
		$.featherlight($('.popUpQuestion2'))
		$('.q2').click(function(){
			$.featherlight.current().close();
			player.playVideo();
		});
	}
	}

	function pauseVideo3() {
		time1 = player.getCurrentTime();
		time = Math.round(player.getCurrentTime());
	if(question3Asked == false && ( time1 > (stopPlayAt3 - 0.5) && time1 < stopPlayAt3)){
		player.pauseVideo();
			question3Asked = true; 
		$.featherlight($('.popUpQuestion3'))
		$('.q3').click(function(){
			$.featherlight.current().close();
			player.playVideo();
		});
	}
	}
	function pauseVideo4() {
		time1 = player.getCurrentTime();
		time = Math.round(player.getCurrentTime());

	if(question4Asked == false && ( time1 > (stopPlayAt4 - 0.5) && time1 < stopPlayAt4)){
		player.pauseVideo();
			question4Asked = true; 
		$.featherlight($('.popUpQuestion4'))
		$('.q4').click(function(){
			$.featherlight.current().close();
			player.playVideo();
		});
	}
	}
	function pauseVideo5() {
		time1 = player.getCurrentTime();
		time = Math.round(player.getCurrentTime());

	if(question5Asked == false && ( time1 > (stopPlayAt5 - 0.5) && time1 < stopPlayAt5)){
		player.pauseVideo();
			question5Asked = true; 
		$.featherlight($('.popUpQuestion5'))
		$('.q5').click(function(){
			$.featherlight.current().close();
			player.playVideo();
		});
	}
	}
	})();

</script>


<?php
break;
?>

<?php
case $video1:

	?>



<body>
	
    <div id="container">
		<div class="row videoArea">
			<!-- <video id="video1" controls autoplay="true"> -->
			<!-- <source src="<?=base_url()?>students/video/lacture_video_download/<?=$video?>" type="video/mp4">	  -->

			<video id="video1" controls>
			<source src="<?=base_url()?>students/video/lacture_video_download/<?=$lesson?>" type="video/mp4">	 

			<!-- <source src="https://www.youtube.com/embed/4gxI8Yu6vGU" autoplay="true" type="video/*"> -->
			<!-- <source width="846" height="480" src="https://www.youtube.com/embed/eG1pjrdmIrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen type="videp/*"></source> -->
				Your browser does not support the video tag.
			</video>
		</div>

		<?php
		{
			for($i=0;$i<$count;$i++)
			{
			?>
				 <div class="lightbox popUpQuestion<?=$i+1?>"> 
					<h4>Question <?=$i+1?></h4>
					<p><?=$question[$i]?></p>
					<br>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_a"><?=$opt_a[$i]?>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_b"><?=$opt_b[$i]?>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_c"><?=$opt_c[$i]?>
					<input class="q<?=$i+1?>" type="radio" name="Question<?=$i+1?>" value="opt_d"><?=$opt_d[$i]?>	
				</div>
			<?php
			}
		}
		?>
		<div class="lightbox final">
		<h4> Thanks For Watching Video</h4>
		<form action="<?php echo site_url('students/video/form_data')?>" id="videoFrm" name="videoFrm" method="POST"> 
		<input id="st" type="text" name="StartTime" value="" hidden><br>
		<input id="et" type="text" name="EndTime" value="" hidden><br>
		<input id="ts" type="text" name="TimeSpent" value="" hidden><br>
		<input id="sc" type="text" name="score" value="" hidden><br>
		<input id="sc" type="text" name="video_id" value="<?=$vid?>" hidden><br>
		<input id="user_id" type="text" name="user_id" value="<?=$this->session->userdata['student']['student_id'];?>" hidden>
		<input type="submit" name="submit" class="submit">
		</div>

	</div>
	</form>

</body>
</html>

<script type="text/javascript">
	var video1;
	<?php
	{
		for($i=0;$i<$count;$i++)
		{
		?>
			var question<?=$i+1?>Asked = false;
		<?php
		}
	}
	?>
	var score = 0;
	var EndTime;
	var startTime;

	$(document).ready(function()
	{
		$.featherlight.defaults.afterClose = playPauseVideo;
		video1 = $('#video1');
		$(video1).on('timeupdate', function()
		{
			var currentTime = Math.round(this.currentTime);
			var choicePart = new Array();
			var count=<?=$count?>;
			if(currentTime == 0)
			{
				startTime = new Date();
			}

			<?php
			{
				for($i=0;$i<$count;$i++)
				{
				?>
					choicePart.push("<?=$video_timing[$i]?>");
					if(currentTime == choicePart[<?=$i?>] && question<?=$i+1?>Asked == false)
					{
						question<?=$i+1?>Asked = true;
						video1[0].pause();
						$.featherlight($('.popUpQuestion<?=$i+1?>'))
						$('.q<?=$i+1?>').click(function(){
						$.featherlight.current().close();
						let answer<?=$i+1?> = $("input[type='radio'][name='Question<?=$i+1?>']:checked").val();

						if(answer<?=$i+1?> == "<?=$correct[$i];?>")
						{
							score = score+30;
						}   
						})
					}
				<?php
				}
			}
			?>		
		});
	});

	$('#video1').bind('ended',function()
	{
		var EndTime = new Date();
		console.log("Your score is: " + score)
		console.log("Video Start Time: " + startTime)
		console.log("Video End Time: " + EndTime)
		date1 = startTime
		date2 =EndTime

         var res = Math.abs(date1 - date2) / 1000;
         
         // get total days between two dates
         var days = Math.floor(res / 86400);                      
         
         // get hours        
         var hours = Math.floor(res / 3600) % 24;         
         
         // get minutes
         var minutes = Math.floor(res / 60) % 60;  
     
         // get seconds
         var seconds = res % 60;
        
		TimeSpent = hours +  " hours" + ":" + minutes + " minutes" + ":" + seconds + " seconds" 
        console.log(TimeSpent)
		document.getElementById("st").value = startTime;
		document.getElementById("et").value = EndTime;
		document.getElementById("ts").value = TimeSpent;
		document.getElementById("sc").value = score;
        
		$.featherlight($('.final'))
			$('.submit').click(function(){
				
			
			$.featherlight.current().close();
        

	    
		});
			
	});


	function secondsToHms(d) 
	{
		d = Number(d);
		var h = Math.floor(d / 3600);
		var m = Math.floor(d % 3600 / 60);
		var s = Math.floor(d % 3600 % 60);
		return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s); 
	}

	function playPauseVideo(popUp)
	{
		if(video1[0].paused){
			video1[0].play();
		} else{
			video1[0].pause();
			$.featherlight($(popUp));
		}
	}

	function setCookie(name,value,days) 
	{
		var expires = "";
		if (days) {
			var date = new Date();
			date.setTime(date.getTime() + (days*24*60*60*1000));
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	}


</script>

</script>

	<?php
	break;
	?>

	<?php
	default:
	echo "unable to fetch";
	break;
}
?>

