<?
include_once("_common.php");
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);
$g5[title] = "크롤링";

//크롤링 불러오기
include_once(G5_LIB_PATH."/simple_html_dom.php");

$url="http://vhost.kr/g5/test/c1.html";
//$cont="https://www.coupang.com/vp/products/6475329401?itemId=14150798495&vendorItemId=81397323029&sourceType=srp_product_ads&clickEventId=681aff51-6463-43a4-a1cf-55294cfda298&korePlacement=15&koreSubPlacement=1&q=%EB%85%B8%ED%8A%B8%EB%B6%83&itemsCount=36&searchId=26f2e063b9eb40f898080686b766c171&rank=0&isAddedCart=";


// php.ini allow_url_fopen = On allow_url_include = On 안되어있으면 curl으로 불러와야함

/*$str = file_get_contents_curl($url);
$enc = mb_detect_encoding($str, array('EUC-KR', 'UTF-8', 'shift_jis', 'CN-GB'));
if ($enc != 'UTF-8') {    
	$str = iconv($enc, 'UTF-8', $str);
}*/

echo G5_LIB_PATH;

$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$contents = curl_exec($curl);  curl_close($curl);

$dom = new simple_html_dom;
$dom -> load($contents);



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


$ret = $dom->find('a');

//print_r2( (array)$ret );
//var_dump($ret);
echo "<xmp>".$ret."</xmp>";

// Find (N)th anchor, returns element object or null if not found (zero based)
$ret = $dom->find('a', 0);

// Find lastest anchor, returns element object or null if not found (zero based)
$ret = $dom->find('a', -1);

// Find all <div> with the id attribute
$ret = $dom->find('div[id]');

// Find all <div> which attribute id=foo
$ret = $dom->find('div[id=foo]');


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
