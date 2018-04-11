<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));



$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$name2 = $argv[1];
$log->info("Hello ". $name2 . $age . $email);
?>

<!doctype html>
<html>
    <head>
        <title>Example form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
		<h1>Thank You!</h1>
		<hr>
		<p>
 			<strong>Name:</strong> <?php echo $name; ?>
		</p>
		<p>
			<strong>Age:</strong> <?php echo $age; ?>
		</p>
		<p>
			<strong>Email:</strong> <?php echo $email; ?>
		</p>
		<hr>
		<a href="labb1Html.html" class="btn btn-default">Back to the form</a>

