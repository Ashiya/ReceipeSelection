<?php
include_once "AddReceipe.php";
$obj1= new AddReceipe();
//$obj1->specificreceipe($id=$_GET['id']);
if(isset($_POST['delete']))
$obj1->deletereceipe($id=$_GET['id']);
$obj1->likereceipe($id=$_GET['id']);

?>

