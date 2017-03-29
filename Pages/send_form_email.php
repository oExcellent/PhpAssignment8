
<?php
//set my title
$title = 'PHP HW';
//set header
$header = '';
/*
 * include start structure
 */
include('../Structure/Header.php');


if(isset($_POST['name'])){
	$name = $_POST['name'];
}

if(isset($_POST['email'])){
	$userEmail = $_POST['email'];
	$start = "From: $userEmail \r\n";
}

if(isset($_POST['Subject'])){
	$subject = $_POST['Subject'];
}

if(isset($_POST['Body'])){
	$message = $_POST['Body'];
}

$adminEmail = "waltm3@mail.broward.edu";

?>

<form action="send_form_email.php" method="POST">

<label for="name" >Your name</label>
<input type="text" value="name" id="name" name="name">

<label for="name" >Your email</label>
<input type="email" value="maxwbills@gmail.com" id="email" name="email">

<label for="Subject" >Subject</label>
<input type="text" value="Sub" id="Subject" name="Subject">

<label for="Body" >Message</label>
<input type="text" value="Bod" id="Body" name="Body">

<input type="submit" name="SendEmail" value="Send" id="SendEmail">
</form>



<?php
if (isset($_POST['SendEmail'])){
	mail($adminEmail,$subject,$message,$start);
	mail($userEmail,"Email Received, Thank you!",$message,"Your email read");
}

/*
 * include end structure
 */
include('../Structure/Footer.php');


?>