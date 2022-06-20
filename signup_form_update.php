<?php
include_once('./common.php');

$w=$_GET['w'];

$email       = isset($_POST['email']) ? trim($_POST['email']) : '';
$pw = isset($_POST['pw']) ? trim($_POST['pw']) : '';
$login_day = date("Y-m-d H:i:s"); //로그인 날짜
$regist_day = date("Y-m-d H:i:s"); //가입 날짜

if($w =="u"){

}else{

//테이블 생성 한번만 설치해주면 됩니다.
/*
echo $query  ="create table t1_members (
    num int not null auto_increment,
    id varchar(50) not null,
    pw varchar(50) not null,
    name varchar(50) not null,
    email varchar(80),
    login_day DATETIME,
    regist_day DATETIME,
    level int DEFAULT '1',
    point int DEFAULT '1',
    exp int DEFAULT '1',
    maxExp int DEFAULT '100',
    remain int DEFAULT '1',
    primary key(num)
);";
echo $result = mysql_query($query);
echo $result = mysqli_query($query);
*/

}


if($w ==""){

	$pw=get_encrypt_string($pw);

	echo $sql = "insert into t1_members 
				set id= '{$id}',
				pw= '{$pw}',
				name= '{$name}',
				email= '{$email}',
				login_day= '{$login_day}',
				regist_day= '{$regist_day}',
				level= '{$level}',
				point= '{$point}'
				
	";

	echo $result=mysql_query($sql);
}else{


}


goto_url("./");