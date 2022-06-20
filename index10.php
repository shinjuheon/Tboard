<?
include_once("./common.php");
//PHP Version 5.5.17p1
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);


		$idol = array(
			  "twice" => "sana"
			, "redvelvet" => "wendy"
			, "lovelyz" => "kei"
			, "momoland" => "dasiy"
		);		

		// is_array는 배열인 경우 1을 리턴한다.
		if(is_array($idol) == 1) {
			echo "$idol은 배열입니다.";
		} else {
			echo "$idol은 배열이 아닙니다.";
		}

		//str_ireplace
print_r("<br>-------<br>");
$bodytag = str_ireplace("test", "iyou", "<body text=%BODY%>test");
print_r("<br>-------<br>");
echo $bodytag; // <body text=black>
print_r("<br>-------<br>");
echo str_ireplace("456","변환단어","123456789");
print_r("<br>-------<br>");
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
print_r("<br>-------<br>");

$value = "가나다라마바사";
//echo str_replace("사", "가", $value); 


//ceil() 함수는 소수점 자리의 숫자를 무조건 올리는 함수이다.

echo ceil(99.2); // 100

print_r("<br>-------<br>");
echo ceil(0.11111); // 1;
print_r("<br>-------<br>");
echo ceil(5.9);  //6;
print_r("<br>-------<br>");
echo ceil(-3.22); // -3;
print_r("<br>-------<br>");

floor(); //함수는 뜻 그대로 바닥으로 만든다.소수점 아래를 무조건 무시
echo floor(3.6); // 3;
print_r("<br>-------<br>");
echo floor(5.1); // 5;
print_r("<br>-------<br>");
echo floor(-1.6)."<br>"; // -2;   // 마이너스는 반올림하는 이상한 함수 ㅎㅎㅎ
//출처: https://homesi.tistory.com/entry/ceil-floor-round-반올림-처리하는-함수들 [세상의 이치로 바라본다:티스토리]

echo round(); //함수가 우리가 보통 알고 있는 반올림함수다.
echo round(3.4)."<br>"; // 3;
echo round(5.6)."<br>"; // 6;
echo round(9.5)."<br>"; //10;
echo round(-2.5)."<br>"; // -3;
echo round(-3.6)."<br>"; // -4;
echo round(-5.4)."<br>"; // -5;
//출처: https://homesi.tistory.com/entry/ceil-floor-round-반올림-처리하는-함수들 [세상의 이치로 바라본다:티스토리]
//[php] urlencode() 와 rawurlencode()
//출처: https://solbel.tistory.com/1154 [개발자의 끄적끄적:티스토리]

$test_url = "테스트 중입니다.";
echo "urlencode sample  :::: " . urlencode($test_url);
echo $decode = urlencode($test_url);
echo "</br>";
echo "rawurlencode sample  :::: " . rawurlencode($test_url);
echo $decode2 = rawurlencode($test_url);
//출처: https://solbel.tistory.com/1154 [개발자의 끄적끄적:티스토리]
//gzinflate 함수  *찾아보세요
$array_cont = json_decode($json_cont, true);
print_r("<br>-------<br>");
echo rawurldecode($decode);   // 비슷한데 다름
print_r("<br>-------<br>");
echo html_entity_decode($decode2); // 비슷한데 다름
print_r("<br>-------<br>");
$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

echo $b; // I'll "walk" the <b>dog</b> now
print_r("<br>-------<br>");
$description="<script>function test(){}asdb <style>가나 <div id='drop' class='bank'>test2</script>";

$description = preg_replace(' /<style[^>]*>((\n|\r|.)*?)<\/style>/im', '', $description);
$description = preg_replace('/<script[^>]*>((\n|\r|.)*?)<\/script>/im', '', $description);
$description = preg_replace("/ style=\"(.*?)\"/","",$description);
$description = preg_replace("/ class=\"(.*?)\"/","",$description);
$description = preg_replace("/ id=\"(.*?)\"/","",$description);
echo "desc".$description;
echo "<xmp>".$description."</xmp>";
?>


