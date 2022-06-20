<?
include_once("_common.php");
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);
$g5[title] = "크롤링";

//크롤링 불러오기
include_once("./simple_html_dom.php");
$colspan = 4;

$url="http://vhost.kr/g5/test/c1.html";
//$cont="https://www.coupang.com/vp/products/6475329401?itemId=14150798495&vendorItemId=81397323029&sourceType=srp_product_ads&clickEventId=681aff51-6463-43a4-a1cf-55294cfda298&korePlacement=15&koreSubPlacement=1&q=%EB%85%B8%ED%8A%B8%EB%B6%83&itemsCount=36&searchId=26f2e063b9eb40f898080686b766c171&rank=0&isAddedCart=";


// php.ini allow_url_fopen = On allow_url_include = On 안되어있으면 curl으로 불러와야함

/*$str = file_get_contents_curl($url);
$enc = mb_detect_encoding($str, array('EUC-KR', 'UTF-8', 'shift_jis', 'CN-GB'));
if ($enc != 'UTF-8') {    
	$str = iconv($enc, 'UTF-8', $str);
}*/



$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$contents = curl_exec($curl);  curl_close($curl);

$dom = new simple_html_dom;  // 선언해주고
$dom -> load($contents);


echo "<xmp>".$dom."</xmp>";

$dom_div = $dom -> find('h2.prod-buy-header__title',0);
$dom_div2 = $dom -> find('div.prod-major-price',0);

//echo "<xmp>".$dom_div2."</xmp>";


if($dom_div2){
	$dom_div2_2=$dom_div2 ->find('span',0);
	//foreach($html->find('span') as $element){    
		//echo $element->innertext . '<br>';
	//}
}


//echo "<xmp>".$dom_div2_2."</xmp>";

$dom_div3 = $dom -> find('span.value',0);



if($dom_div){
	echo "상품명:".trim(strip_tags($dom_div));
}

if($dom_div2){
	echo "<br>가격:".trim(strip_tags($dom_div2_2));
}

if($dom_div3){
	echo "<br>옵션:".trim(strip_tags($dom_div3));
}



/*
<div>
<span>111</span>
</div>
*/
//$dom_div2 -> plaintext ==> 111
//$dom_div2 -> innerext ==> <span>11</span>
//$dom_div2 -> outerext => <dov>....<div>

//$dom_div2 -> getAttribute('content');
//$a = strip_tags($dom_div2);





?>
<!--https://hiseon.me/php/php-html-parser/ -->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>크롤링</title>
</head>
<body>

</body>
</html>
