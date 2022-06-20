<?
include_once("./common.php");
//PHP Version 5.5.17p1
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);


//phpinfo();
$g5[title] = "크롤링";

//크롤링 불러오기
include_once("./simple_html_dom.php");

$url="http://vhost.kr/g5/test/b1.html";


$search_dom[][1]="111";
$search_dom[][2]="222";
$search_dom[][3]="333";
$search_dom[][4]="444";

$_TotalPage=9999;
if($page){
	$NowPage=$page;
}else{
	$NowPage=1;
	}

$arr_idx = 0;
if(is_array($search_dom)) foreach($search_dom as $search_data){

	
	$return_arr[$arr_idx]['idx']="고유넘버";
	$return_arr[$arr_idx]['title']="제목";
	$return_arr[$arr_idx]['img']="<img src='http://vhost.kr'>";
	$return_arr[$arr_idx]['price']=6000;
	$return_arr[$arr_idx]['stock']=999;
	$return_arr[$arr_idx]['currency']="KRW";

	$result_arr[]=$search_data;
	

	$arr_idx++;
}

print_r2($result_arr);
print_r2($return_arr);


   $hostname=$_SERVER["HTTP_HOST"]; //도메인명(호스트)명을 구합니다.
   $uri= $_SERVER['REQUEST_URI']; //uri를 구합니다.
   $query_string=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
   $phpself=$_SERVER["PHP_SELF"]; //현재 실행되고 있는 페이지의 url을 구합니다.
   $basename=basename($_SERVER["PHP_SELF"]); //현재 실행되고 있는 페이지명만 구합니다.

   echo$hostname."<br>";     // vhost.kr
   echo$uri."<br>";              // g5/test/index6.php?q=123
   echo$query_string."<br>"; // q=123
   echo$phpself."<br>";        // /g5/test/index6.php
   echo$basename."<br>";    //  index6.php
	
?>


