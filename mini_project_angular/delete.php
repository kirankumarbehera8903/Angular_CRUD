<?php 
$con = mysql_connect("localhost","root");
if(!$con)
{
 die('could not connect'.mysql_error());
}
mysql_select_db("test",$con);
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0){
 $id=$data->id;
 $query = "DELETE FROM angular WHERE id='$id'";
 if(mysql_query($query,$con))
 {
  echo 'Data Deleted';
 }
 else {
  echo "Error";
}
}
?>