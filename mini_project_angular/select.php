<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";

$con = mysql_connect($host, $user);
if(!$con)
{
 die("Could not connect to database".mysqli_connect_error());
}
mysql_select_db($dbname, $con)or die("Could not select database $db".mysql_error());
$output = array();
$query = "SELECT * FROM angular ";
$result = mysql_query($query);
$x = mysql_num_rows($result);
if( $x> 0){
 while($row = mysql_fetch_array($result)){
  $output [] = $row;
 }
 echo json_encode($output);
}
?>