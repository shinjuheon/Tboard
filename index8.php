<?
include_once("./common.php");
//PHP Version 5.5.17p1
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);

// str_replace  preg_replace strip_tags html_entity_decode  trim  array(), in_array(), unset(), implode(), explde(),sort()
$_ItemName="<h1>  나는 행복   합니다.    <br></h1>";
$_ItemName2="  나는 행복   합니다.    ";
echo preg_replace("/\s\s+/"," ",$_ItemName); // 연속 공백 모두 제거
print_r("<br>-------<br>");

echo str_replace("나는","너는",$_ItemName); // 연속 공백 모두 제거

print_r("<br>-------<br>");

echo strip_tags($_ItemName); // 연속 공백 모두 제거
echo strip_tags("<p>Lorem <strong>Ipsum</strong></p>"); // 연속 공백 모두 제거
echo "<p>Lorem <strong>Ipsum</strong></p>"; // 연속 공백 모두 제거

echo trim($_ItemName2);
echo html_entity_decode("A 'quote' is <b>bold</b>");

echo $t_arr= array("가","나");

print_r2($t_arr);
print_r("<br>-------<br>");

$name_array = array("Edwar", "James", "Alex", "John");
$name = "Edward";
if(in_array($name, $name_array))
{
    echo "배열 있냐? Name : ".$name;
}
else
{
    echo "없냐? Name : ".$name;
}
$name = "Edward";

unset($name);

if(isset($name))
{
  echo "Name is exists.";
}
else
{
  echo "Name is not exists.";
}
print_r("<br>-------<br>");
echo $jbary = array( 'one', 'two', 'three' );
echo $jbstr = implode( '|', $jbary );

print_r("<br>-------<br>");
echo $jbstring = '1|4|2|3';
print_r("<br>-------<br>");
echo $jbexplode = explode( '|', $jbstring );
//echo $jbexplode = sort($jbstring);
print_r("<br>-------<br>");
print_r2($jbexplode);  // 변수를
$jbexplode = sort($jbexplode);
print_r2($jbexplode);  // 변수를 

$arr = array();
$arr["sort1"] = 4;
$arr["sort2"] = 6;
$arr["sort3"] = 1;

sort($arr);
print_r2($arr);
?>


