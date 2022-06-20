<?php
include_once('./common.php');

session_start();

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$pw = isset($_POST['pw']) ? trim($_POST['pw']) : '';


if($w =="u"){

}else{

}

//이메일 등록 여부
$sql = "select * from t1_members where email='$email'";
$result = mysqli_query($sql);

$num_match = mysqli_num_rows($result);

if(!$num_match){
	echo "<script>
	window.alert('등록되지 않는 이메일 입니다.');
	history.go(-1)
	</script>";
}


//패스워드 일치 여부

$sql = "select * from t1_members where email='$email' and pw='$pw'";
$result = mysqli_query($sql);

$num_mathch = mysqli_num_rows($result);


if(!$num_match){
	echo "<script>
	window.alert('등록되지 않는 회원 입니다.');
	history.go(-1)
	</script>";
}

// 회원아이디 세션 생성
set_session('ss_email', $email);
// FLASH XSS 공격에 대응하기 위하여 회원의 고유키를 생성해 놓는다. 관리자에서 검사함 - 110106
set_session('ss_key', md5(date("Y-m-d H:i:s") . get_real_client_ip() . $_SERVER['HTTP_USER_AGENT']));

//echo get_session("ss_email");
//get_session("ss_key");  //bb367410bd5ae26dcb7fa1ab6f1a55f1
goto_url("./");