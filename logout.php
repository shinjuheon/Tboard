<?php
include_once('./common.php');

session_start();
session_destroy();

//session_destroy — 세션에 등록 된 모든 데이터를 삭제합니다.
//session_unset — 모든 세션 변수 해제

goto_url("./");