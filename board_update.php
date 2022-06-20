<?php
include_once('./common.php');

print_r2($_POST);

$t5['title'] = "로그인 검사";

$email       = isset($_POST['email']) ? trim($_POST['email']) : '';
$pw = isset($_POST['pw']) ? trim($_POST['pw']) : '';
$login_day = date("Y-m-d (H:i)"); //로그인 날짜
$regist_day = date("Y-m-d (H:i)"); //가입 날짜

if($w =="u"){

}else{

}

//board 테이블 생성
/*
echo $query  ="create table t1_board (
    num int not null auto_increment,
    id varchar(50) not null,
    pw varchar(50) not null,
    name varchar(50) not null,
    email varchar(80),
    login_day DATETIME,
    regist_day DATETIME,
    level int,
    point int,
    primary key(num)
);";

echo $result = mysql_query($query);
echo $result = mysqli_query($query);
*/



if($w ==""){
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
}


goto_url("./");