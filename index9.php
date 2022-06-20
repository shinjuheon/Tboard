<?
include_once("./common.php");
//PHP Version 5.5.17p1
header('Content-Type: text/html; charset=UTF-8');
ini_set("allow_url_fopen",1);

    function get_curl_data($urlToHit) {
        $ch = curl_init($urlToHit);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    //echo get_curl_data('http://naver.com');   웹상을 그대로 보여줌


$data = array(
    'test' => 'test'
);
 
$url = "https://www.naver.com";
 
$ch = curl_init();                                 //curl 초기화
curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);       //POST data
curl_setopt($ch, CURLOPT_POST, true);              //true시 post 전송 
 
$response = curl_exec($ch);
curl_close($ch);
 
return "리턴".$response;

echo $response = curl_exec ($ch);
 
var_dump($response);        //결과 값 출력
print_r(curl_getinfo($ch)); //모든 정보 출력
echo curl_errno($ch);       //에러 정보 출력
echo curl_error($ch);       //에러 정보 출력



?>


