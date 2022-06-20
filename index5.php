<?
include_once("_common.php");
//PHP Version 5.5.17p1
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);
//phpinfo();
$g5[title] = "크롤링";

//크롤링 불러오기
include_once("./simple_html_dom.php");

$url="http://vhost.kr/g5/test/b1.html";

echo $aa = 11*10;
print_r("-------<br>");
echo $aaa= "22*10";
echo $bb = "string";
print_r("-------<br>");
//(변수 상수 for foreach stripos)


print_r("-------<br>");
print_r($b);
print_r("-------<br>");
for($i=0; $i<=5; $i++){
	//echo $i+$i;
	echo $b[$i];
}

print_r("<br>-------<br>");

$sum=0;
for($k=1; $k<=100; $k++){
	$sum+=$k;
}

echo "1~100까지 합".$sum."정답은 5050입니다.";  
print_r("<br>-------<br>");

$array = array("Rose","Lili","Jasmine","Hibiscus","Tulip","Sun Flower","Daffodil","Daisy");
foreach($array as $FlowerName){
    echo("The flower name is $FlowerName. \n");
}
print_r("<br>-------<br>");
$b[]="짜장면";
$b[]="짬뽕";
$b[]="탕수육";
$b[]="1234 ";
$b[]="라면";
$b[]="돈까스";

foreach($b as $value){
	echo ("나는 음식을 $value 시켰다.");
}

$j=1;
foreach($b as $value){
	
	echo "<br>우동 언제주냐?".stripos($value," ");	
}

print_r("<br>-------<br>");
echo "우리나라 교육의 가장문제점은 완전기초만 가르쳐주고 응용하는법을 안갈쳐주거나 창의적인 개발을 안알려줘요";
print_r("<br>-------<br>");
echo "짧은시간에 찍어내는 기술만 알려줘요 왜냐? 한명당 300만원~500만원 수당이 떨어지거든요 국가돈으로";
print_r("<br>-------<br>");


?>


