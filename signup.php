<?
include_once("./common.php");
include_once("./head.php");


$w=$_GET['w'];

if($w =="u"){
	session_start();

	$email=$_SESSION["ss_email"];
     
	$sql2 = "select * from t1_members where email='$email'";
	$result2 = mysql_query ($sql2);
	$rows2 = mysql_fetch_array($result2);	
	
}else{

}
?>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">회원가입</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper linear">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger" aria-selected="false" disabled="disabled">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">이메일 등록</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step active" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" aria-selected="true">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">프로필 사진등록</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">

				  <form name="member" action="signup_form_update.php" method="post">
				  <input type="hidden" name="w" value="<?=$w?>">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?=$rows2['email']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="pw" name="pw" placeholder="Password">
                      </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information-part" class="content active dstepper-block" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="profile" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
					</form>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
		<script>
			function check_input(){
				if(!document.member.email.value){
					alert("이메일을 입력하세요.");
					return;
				}

				if(!document.member.pw.value){
					alert("패스워드를 입력하세요.");
					return;
				}
			}
		</script>
<?
include_once("./tail.php");  
?>
