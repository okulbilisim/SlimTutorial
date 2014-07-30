
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$baglan = mysql_connect("localhost","root","");
if(!$baglan){
 die('Bağlantı Hatası:' . mysql_error());
}
$db_select = mysql_select_db("uyeler");
$isim    =  $_POST['isim'];
$soyisim = $_POST['soyisim'];
$email  = $_POST['email'];

$sql = "insert into uyeler1(isim , soyisim , email) values ('".$isim."','".$soyisim."','".$email."')";
if (mysql_query($sql))
    echo "veriler eklendi";

mysql_close($baglan);
?>



