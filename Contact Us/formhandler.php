<?php

ob_start();

$name = '';
$email = '';
$comments = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['name'],
$_POST['email'],
$_POST['comments'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];


$to = 'Alejandro.Alvarado1@Seattlecolleges.edu';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '
Name : '.$name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@mystudentswa.com'  
);

if(!empty($name && $email && $comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.html');

}


}



}