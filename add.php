<?php
include_once "AddReceipe.php";
$obj= new AddReceipe();
  if(isset($_POST['add']))
{ echo $obj;
$obj->insert($_POST['receipetitle'],$_POST['receipename'],$_POST['receipeingridents'],$_POST['receipeprocedure'],$_POST['receipegivenby']);
} 
 if(isset($_POST['see']))
{ 
$obj->searchreceipes();

}
?>



