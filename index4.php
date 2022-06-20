<?
include_once("_common.php");
//PHP Version 5.5.17p1

header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);
//phpinfo();
$g5[title] = "크롤링";

//크롤링 불러오기
include_once("./simple_html_dom_utility.php");

$url="http://vhost.kr/g5/test/b1.html";


$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$contents = curl_exec($curl);  curl_close($curl);

$dom = new simple_html_dom;
$dom -> load($contents);


$request[$error][$msg][0] = "404 - 페이지 에러";
$request[$error][$msg][1] = "500 - 연결 에러";
$request[$error][$msg][2] = "- - 페이지 에러";


	$ItemName_dom = $dom -> find('span[id=price]',0);
	if($ItemName_dom) $_ItemName = trim($ItemName -> plaintext);
	//상품명
	$_ItemName = preg_replace("/\s\s+/"," ",$_ItemName); // 연속 공백 모두 제거
	$_ItemName = strip_tags($_ItemName);
	$_ItemName = html_entity_decode($_ItemName);
	$_ItemName = trim($_ItemName);
	
	
	$price_dom = $dom -> find('span[id=price]',0);
	if($price_dom) $price = trim($price_dom -> plaintext);
	$price = str_replace(array("円"," ",","),"",$price);
	

	$images = array();
	foreach($dom->find('div#goods_list_area li') as $images_dom){ //이미지 태그의 주소를 찾아 배열에 저장

		echo "<xmp>".$images_dom."</xmp>";

		$images_data=$images_dom->find("img");
		$images[] = $images_data;
	}

	print_r2($request);
	print_r2($images);


?>


