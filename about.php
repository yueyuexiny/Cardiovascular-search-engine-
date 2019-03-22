<?php

$pageTitle = "About DataMed";

//require_once 'config/config.php';
include("config/config.php");
require_once dirname(__FILE__).'/Model/AboutService.php';
require_once dirname(__FILE__).'/vendor/autoload.php';

$errors = '';
$name = '';
$email = '';
$message = '';
$subject ='';

//echo "The result:";
//echo var_dump($_SESSION['6_letters_code']);

if(isset($_POST['submit']))
{
	$subject = $_POST['SUBJECT'];
    if (preg_match('/^[a-zA-Z0-9\s]*$/', $_POST['SUBJECT'])) {
	    $subject = $_POST['SUBJECT'];
	}else{
	    $subject = filter_var($_POST['SUBJECT'],FILTER_SANITIZE_STRING );	    
	}
	
	$name = $_POST["NAME"];
	if (preg_match('/^[a-zA-Z0-9\s]*$/',$_POST["NAME"])) {
	    $name = $_POST["NAME"];
	}else{
	    $name = filter_var($_POST["NAME"],FILTER_SANITIZE_STRING );
	}
	
	$message = $_POST["MESSAGE"];
	$email = $_POST["EMAIL"];
	if (filter_var($_POST['EMAIL'], FILTER_VALIDATE_EMAIL)) {
	    $email = $_POST['EMAIL'];
	}else{
	    $email = filter_var($_POST['SUBJECT'],FILTER_SANITIZE_STRING );
	}
	

	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		  $errors .= "\n The captcha code does not match!";
		//$errors .= "";
	}
	if(empty($errors))
	{
		//send the email
	    sendToDatabase();
	    //sendEmails();		
		//postToGitHub();

		echo '<script type="text/javascript">';
		echo 'alert("You request has been received We will contact you soon.")';
		echo '</script>';
	}
}


?>

<?php include dirname(__FILE__) . '/views/header.php'; ?>
<?php include dirname(__FILE__) . '/views/about/about.php'; ?>

<?php
/* Page Custom Scripts. */
$scripts = ["./js/page.scripts/about.js"];
?>
<?php include dirname(__FILE__) . '/views/footer.php'; ?>

