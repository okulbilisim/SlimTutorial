
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$connectDB = mysql_connect("localhost","root","");
if(!$connectDB){
 die('Connection Error:' . mysql_error());
}
$db_select = mysql_select_db("membership");
$name    =  $_POST['name'];
$surname = $_POST['surname'];
$email  = $_POST['email'];

$sql = "insert into membership1(name , surname , email) values ('".$name."','".$surname."','".$email."')";
if (mysql_query($sql))
    echo "Added data!";

mysql_close($connectDB);
?>



