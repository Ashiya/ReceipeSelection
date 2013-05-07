<?php
class AddReceipe
{ 
function insert($title,$name,$ingridents,$procedure,$givenby)
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$x=0;
$sql="insert into receipe(receipetitle,receipename,receipeingridents,receipeprocedure,receipegivenby,likereceipe) values('$title','$name','$ingridents','$procedure','$givenby','$x')";
mysql_query($sql,$con);
}
function  searchreceipes()
{ echo "hii";
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select * from receipe";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result)==0)
{
echo "there is receipe";
}
else
{
echo "<table border><tr><th>Receipe Title</th><th>Receipe Name</th>
</tr>";
while($row = mysql_fetch_array($result))
{ 
echo "<tr>";
echo "<td>" . $row['receipetitle'] . "</td>";
echo "<td>" . $row['receipename'] . "</td>";
echo "<td><a href='showdetails.php?id=$row[id]'>Details</a></td>";
//echo "<td><a  href='showdetails.php?id=$row[id]' name='delete'>Delete</a></td>";
echo "<td><a href='showdetails.php?id=$row[id]'>like</a></td>";
echo "</tr>";
}
echo "</table>";
}
}

function specificreceipe($id)
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select * from receipe where id='$id'";
$result=mysql_query($sql,$con);

echo "<table border='1'><tr><th>Receipe Title</th><th>Receipe Name</th><th>Receipe Ingridents</th><th>Receipe Procedure</th><th>Receipe Given By</th>
</tr>";
$row = mysql_fetch_array($result);
echo "<tr>";
echo "<td>" . $row['receipetitle'] . "</td>";
echo "<td>" . $row['receipename'] . "</td>";
echo "<td>" . $row['receipeingridents'] . "</td>";
echo "<td>" . $row['receipeprocedure'] . "</td>";
echo "<td>" . $row['receipegivenby'] . "</td>";
echo "<td><a href='http://www.facebook.com/sharer.php?u=http://localhost:8080/ashiya/receipe/showdetails.php?id=$row[id]'>share </a></td>";
echo "</tr>";
echo "</table>";
}
/*function deletereceipe($id)
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="delete  from receipe where id='$id'";
mysql_query($sql,$con);

}*/
function likereceipe($id)
{

$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select likereceipe from receipe where id='$id'";

$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
echo " you and ".$row['likereceipe']." people like this receipe";
$x=$row['likereceipe'];
$x=$x+1;
$sql1="update receipe set likereceipe='$x' where id='$id'";
mysql_query($sql1,$con);

}
}
?>

 
