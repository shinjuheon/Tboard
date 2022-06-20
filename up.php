<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email=$_SESSION["ss_email"];
$query = "select * from t1_members where email='$email' limit 1";
$result = mysql_query ($query);
$rows = mysql_fetch_array($result);

//print_r2($rows);
if($_POST['_exp']){
	$_exp=$_POST['_exp'];
	//gainEXP($_exp);
	gainEXP(1);
};

	 //print_r2($_POST);
	 //print_r2($member);
	 //$sumpoint=(int)$member[mb_point]-(int)$_POST[point];
	 //$sumpoint2=(int)$_POST[point];
         
}

$email=$_SESSION["ss_email"];
$query = "select * from t1_members where email='$email' limit 1";
$result = mysql_query ($query);
$rows = mysql_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>별풍선TV</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./css/adminlte.css">  
    <link rel="stylesheet" href="./plugins/summernote/summernote-bs4.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="./plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="./plugins/codemirror/theme/monokai.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="./plugins/bs-stepper/css/bs-stepper.css">

</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
		<p><code>회원 레벨 Lv.<?=$rows['level']?></code></p>  
		<form name="clicker_form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="post">
		<input type="hidden" name="level" value="1">
		<input type="hidden" name="exp" value="1">
		<input type="hidden" name="maxExp" value="1">
		<input type="hidden" name="remain" value="1">
		<input type="hidden" name="remain" value="1">
		<input type="hidden" name="_exp" value="" id="_exp">
		<input type="hidden" name="_email" value="<?=$rows['email']?>">
		<?php
		$_expPost="1";
		?>
		<a class="btn btn-app" id="btn_clicker" onclick="btn_clicker(<?=$_expPost?>);">
		  <i class="fas fa-save"></i> 클리커
		</a>
		<a class="btn btn-app">
		  <i class="fas fa-play"></i> Auto
		</a>
		</form>

		<div class="progress progress-xs">		
		  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
			   aria-valuenow="<?=$rows['exp']?>" aria-valuemin="0" aria-valuemax="<?=$rows['maxExp']?>" style="width: <?=$rows['exp']?>%">
			<span class="sr-only"><?=$rows['exp']?>% Complete</span>
		  </div>
		</div>


<script type="text/javascript">

function btn_clicker(exp){
 var f = document.clicker_form;
 document.getElementById("_exp").value=exp;
 
//이부분에서 alert_kisa 검사와 alert_ncsc가 빈값인지 조사하고 값을 넘김다 
 f.submit();
 return false; 
}
</script>