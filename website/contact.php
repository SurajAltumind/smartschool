<?php
if(isset($_POST['submit']))
{
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$subject=trim($_POST['subject']);
$message=trim($_POST['message']);
$entryDate=date('Y-m-d');

$sql="INSERT INTO `ksmbbv_site_contactus`(`name`, `email`, `subject`, `message`, `entryDate`)
VALUES('$name', '$email', '$subject', '$message', '$entryDate')";

$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':entryDate',$entryDate,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();

echo "<script>alert('Thank you for your response.');</script>";
echo "<script>window.location='index.php'</script>";

}
?>
<!--contact-->
<div class="contact" id="contact">				
<div class="container">	
<div class="contact-form">
<h3 class="title tittle">Contact us</h3>
<form method="POST">

<div class="styled-input agile-styled-input-top">
<input type="text" name="name" placeholder="Name" required="">
</div>

<div class="styled-input">
<input type="email" name="email" placeholder="Email" required=""> 
</div> 

<div class="styled-input">
<input type="text" name="subject" placeholder="Subject" required="">
</div>

<div class="styled-input">
<textarea name="message" placeholder="Message" required=""></textarea>
</div>	 

<div>
<input type="submit" name="submit" value="SEND">
</div>
</form>
</div>
</div>
</div>