<?php
    error_reporting( E_ALL );
?>

<?php
/**
 * Created by PhpStorm.
 * User: xchen2
 * Date: 7/21/16
 * Time: 2:06 PM
 */

include dirname(__FILE__).'/config/config.php';
require_once dirname(__FILE__).'/../vendor/autoload.php';


function sendToDatabase(){
    
    
    /*$rConn = mysql_connect('localhost:/tmp/mysql.sock', 'root', '');
     if((false === is_resource($rConn)))
     {
     echo mysql_error();
     exit;
     }
     $sql = mysql_query("use ahatest",$rConn);
     if ($sql) {
     echo 'use database works';
     }
     $rResult = mysql_query("INSERT INTO users_info (name, email, subject, message) VALUES ('xinyue', '23', 'w45','34543')", $rConn);
     if ($rResult) {
     echo 'Thank you for your contacting.';
     }else{
     echo "Error:" . mysql_error($rConn);
     }
     */
    $dbconnect=mysql_connect('129.106.31.121', 'biocaddie', 'biocaddie');
    if ((false === is_resource($dbconnect))) {
        echo "Database connection failed: " . mysql_error();
    }
    
    if(isset($_POST['submit'])) {
        $name = $_POST["NAME"];
        $email = $_POST["EMAIL"];
        $subject = $_POST['SUBJECT'];
        $message = $_POST["MESSAGE"];
        
        //$sql1 ="show databases";
        $sql2 = mysql_query("use biocaddie", $dbconnect);
        $sql3 = mysql_query("INSERT INTO ahatest (name, email, subject, message) VALUES ('$name', '$email', '$subject','$message')", $dbconnect);
        
        if (!$sql3) {
            echo "Error: " . mysqli_connect_error($dbconnect);
        }
    }
}



function sendEmails(){
    echo "alert('start')";
    
    $subject = $_POST['SUBJECT'];
    
    echo " subject";
    
    require_once dirname(__FILE__) . '/../vendor/swiftmailer/swiftmailer/lib/swift_required.php';
    
    echo " require_once";
    
    $from = $_POST["EMAIL"];
    echo " from";
    
    $to = array("Xinyue.Hu@uth.tmc.edu", "AHAHeartdata@gmail.com");
    echo " to";

    $body = 'AHA contact request<br>
        ----------------------------------------<br>
        NAME: '.$_POST["NAME"].'<br>
        MESSAGE: '.$_POST["MESSAGE"].'<br>
        EMAIL: '.$_POST["EMAIL"];

    echo " body";
        
    
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
        ->setUsername('AHAHeartdata@gmail.com')
        ->setPassword('AHAheartdata@1');
    
    echo " transport";
//         ->setUsername('biocaddie.mail@gmail.com')
//         ->setPassword('biocaddie4050@');

    $mailer = Swift_Mailer::newInstance($transport);
    echo " mailer:new";
    
    $message = Swift_Message::newInstance('AHA Contact us email:' . $subject)
        ->setFrom(array($from => 'HeartData'))
        ->setTo($to)
        ->setBody($body)
        ->setContentType("text/html");
    
    echo " message";
    
    $mailer->send($message,$failures);
    echo $failures;
    print_r($failures);
    
    echo " mailer-send";
}

/*function postToGitHub(){
    $client = new \Github\Client();
    $client->authenticate('biocaddie.mail@gmail.com', 'biocaddie4050@', Github\Client::AUTH_HTTP_PASSWORD);
    $client->api('issue')->create('biocaddie', 'prototype_issues', array('title' => $_POST['SUBJECT'], 'body' => $_POST["MESSAGE"]));
}*/


function postToGitHub(){
 $client = new \Github\Client();
 $client->authenticate('AHAHeartdata@gmail.com', 'AHAheartdata@1', Github\Client::AUTH_HTTP_PASSWORD);
 $client->api('issue')->create('UTHealth-CCB', 'Prototype_issues', array('title' => $_POST['SUBJECT'], 'body' => $_POST["MESSAGE"]));
 }
//xinyue's comment to avoid send email to biocaddie github


?>