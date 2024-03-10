<?php 
$con = mysql_connect("localhost","root");
if(!$con){
 die("could not connect".mysql_error());
}
mysql_select_db("test",$con);
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0)
{
 $first_name = $data->firstname;
 $last_name = $data->lastname;
 $btn_name = $data->btnName;
 if($btn_name == "ADD")
 {
  $query="INSERT INTO angular (first_name, last_name) VALUES('$first_name','$last_name')";
  if(mysql_query($query,$con)){
   echo "Data Inserted";
  }
  else{
   echo "Error";
  }
 }
 if($btn_name == 'Update'){
  $id = $data->id;
  $query = "UPDATE angular SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'";
  if(mysql_query($query,$con))
  {
   echo "Record Updated Successfully.";
  }
  else{
   echo "Error";
  }
  }
}
?>