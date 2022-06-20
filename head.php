<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email=$_SESSION["ss_email"];
$query = "select * from t1_members where email='$email' limit 1";
$result = mysql_query ($query);
$rows = mysql_fetch_array($result);

print_r2($rows);
if($_POST['_exp']){
	$_exp=$_POST['_exp'];
	gainEXP((int)$_exp);
	//gainEXP(1);
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

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="./" class="navbar-brand">
        <img src="http://vhost.kr/g5/img/ST_logo.png" alt="별풍선TV" class="brand-image" style="opacity: 1">
        <span class="brand-text font-weight-light">별풍선TV</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="http://vhost.kr/t1/data/T%EB%B3%B4%EB%93%9Cv.1.5.zip" class="nav-link">T보드 다운받기</a>
          </li>
		  <?php				
				if(!isset($_SESSION["ss_email"])){   
					echo "<li class='nav-item'>		  
					<a href='./login.php' class='nav-link'>로그인</a>
				  </li><li class='nav-item'>
				<a href='./signup.php' class='nav-link'>회원가입</a>
			</li>";
				  }else{
					echo "<li class='nav-item'>		  
						<a href='./logout.php' class='nav-link'>로그아웃</a>
					  </li><li class='nav-item'>
				<a href='./signup.php?&w=u' class='nav-link'>회원정보 수정</a>
			</li>";
				  }
			?>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">랭킹</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="./bj_rank.php" class="dropdown-item">대표BJ 랭킹</a></li>
              <li><a href="./bank_rank.php" class="dropdown-item">별풍선 수익 랭킹</a></li>              
              <li><a href="./best_bj.php" class="dropdown-item">베스트BJ 신청</a></li>              
            </ul>
          </li>
		  <li class="nav-item">
            <a href="./shop.php" class="nav-link">shop</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="./img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="./img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="./img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
		<p><code>회원 레벨 Lv.<?=$rows['level']?></code></p>  
		<form name="clicker_form" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="post">
		<input type="hidden" name="level" value="<?=$rows['level']?>">
		<input type="hidden" name="exp" value="<?=$rows['exp']?>">
		<input type="hidden" name="maxExp" value="<?=$rows['maxExp']?>">
		<input type="hidden" name="remain" value="<?=$rows['remain']?>">
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
			   aria-valuenow="<?=$rows['exp']?>" aria-valuemin="0" aria-valuemax="<?=$rows['maxExp']?>" style="width: <?=$rows['remain']?>%">
			<span class="sr-only"><?=$rows['remain']?>% Complete</span>
		  </div>
		</div>

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <small>웹캠방송+웹게임 재미있게 즐겨라</small> <small>-별풍선TV-</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">

<script type="text/javascript">

function btn_clicker(exp){
 var f = document.clicker_form;
 document.getElementById("_exp").value=exp;
 
//이부분에서 alert_kisa 검사와 alert_ncsc가 빈값인지 조사하고 값을 넘김다 
 f.submit();
 return false; 
}
</script>