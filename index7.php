<?
include_once("./common.php");
//PHP Version 5.5.17p1
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);


$sql = "select mb_id,mb_nick from g5_member WHERE RAND() limit 5;";

$result =mysql_query($sql) or die ("접속 에러");

//while($row = sql_fetch($result))
//	echo "'$row[0]' '$row[1]' '$row[2]' <br>\n";

while($row = mysql_fetch_row($result))
	echo "'$row[0]' '$row[1]' '$row[2]' <br>\n";



print_r($row);

?>


