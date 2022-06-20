<?
include_once("_common.php");
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);
$g5[title] = "크롤링";

//크롤링 불러오기
include_once("./simple_html_dom_utility.php");

$url="http://vhost.kr/g5/test/c1.html";


$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
$contents = curl_exec($curl);  curl_close($curl);

$dom = new simple_html_dom;
$dom -> load($contents);


//html_no_comment();
//outertext($dom );
//$dom2 -> outertext($dom );


class Hz {  // <-------------------- 에러 라인

    function __construct() {
		
        $this -> name = "홈짱닷컴 ";

	  $this -> url = "Homzzang.com";

    }

}

$site = new Hz();
echo $site->name;
echo $site->url;


$dom2 = $dom ->find('div.prod-major-price',0); 

echo "<br>outer".$dom2 ->outertext;  //태크포함
echo "<br>inner".$dom2 ->innertext;  //태크 안
echo "<br>find_ancestor_tag".$dom2 ->find_ancestor_tag;
echo "<br>prev_sibling".$dom2 ->prev_sibling;
echo "<br>dump_node".$dom2 ->dump_node;
echo "<br>text".$dom2 ->text;
echo "<br>makeup".$dom2 ->makeup;
echo "<br>match".$dom2 ->match;
echo "<br>is_utf8".$dom2 ->is_utf8;
echo "<br>get_display_size".$dom2 ->get_display_size;


$dom4 = new simple_html_dom;
$dom4 -> load_file($contents);

echo "<br>load_file".$dom4 ->load_file;


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>크롤링</title>
</head>
<body>

</body>
</html>
