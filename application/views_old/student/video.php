<!DOCTYPE html>
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
</head>
<body>
	<?php
		$count=0;
		$video='';
		foreach($res as $r => $rv) 
		{
			$video=$rv['lacture_video'];
			$count++;
		}
		echo $count;
		$video_timing=array();		
		$opt_a=array();
		$opt_b=array();
		$opt_c=array();
		$opt_d=array();
		$correct=array();
		$question_id=array();

		for($i=0;$i<$count;$i++)
		{
			// $question_id[$i]=$rv['question_id'];
			$question[$i]=$res[$i]['question'];
			$opt_a[$i]=$res[$i]['opt_a'];
			$opt_b[$i]=$res[$i]['opt_b'];
			$opt_c[$i]=$res[$i]['opt_c'];
			$opt_d[$i]=$res[$i]['opt_d'];
			$video_timing[$i]=$res[$i]['video_timing'];			
			$correct[$i]=$res[$i]['correct'];
		}
		// echo $res[1]['question'];
		
        


	?>
    <div id="container">
		<div class="row videoArea">
			<video id="video1" controls autoplay="true">
			<source src="<?=base_url()?>students/video/lacture_video_download/<?=$video?>" type="video/mp4">	
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

	$(document).ready(function(){
	$.featherlight.defaults.afterClose = playPauseVideo;
	video1 = $('#video1');
	$(video1).on('timeupdate', function(){
		var currentTime = Math.round(this.currentTime);
		var choicePart = new Array();
		var count=<?=$count?>;

		<?php
		{
			for($i=0;$i<$count;$i++)
			{
			?>
				choicePart.push("<?=$video_timing[$i]?>");
			<?php
			}
		}
		?>
		
		if(currentTime == 0)
		{
			 startTime = new Date();
		}
         

		<?php
		{
			for($i=0;$i<$count;$i++)
			{
			?>
				if(currentTime == choicePart[<?=$i?>] && question<?=$i+1?>Asked == false)
				{
					question<?=$i+1?>Asked = true;
					video1[0].pause();
					$.featherlight($('.popUpQuestion<?=$i+1?>'))
					$('.q<?=$i+1?>').click(function(){
					$.featherlight.current().close();
					let answer<?=$i+1?> = $("input[type='radio'][name='Question<?=$i+1?>']:checked").val();

					if(answer<?=$i+1?> == "<?=$correct[$i+1];?>")
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


$('#video1').bind('ended',function(){

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




function secondsToHms(d) {
	d = Number(d);
	var h = Math.floor(d / 3600);
	var m = Math.floor(d % 3600 / 60);
	var s = Math.floor(d % 3600 % 60);
	return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s); 
}

function playPauseVideo(popUp){
	if(video1[0].paused){
		video1[0].play();
	} else{
		video1[0].pause();
		$.featherlight($(popUp));
	}
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

</script>
