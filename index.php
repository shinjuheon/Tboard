<?
include_once("./common.php");
include_once("./head.php");
?>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<h2 class="text-center display-4">Search</h2>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<form action="#">
									<div class="input-group">
										<input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
										<div class="input-group-append">
											<button type="submit" class="btn btn-lg btn-default">
												<i class="fa fa-search"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
            </div>            
          </div>
          
        </div>
        <!-- /.row -->

		<div class="row">
          <div class="col-lg-12">
            <div class="card">
                <!-- Main content -->
				
				<section class="content">
					<form name="board" action="./board_update.php" method="post">
					<input type="hidden" name="w" value="">
					<div class="container-fluid">
						<!-- /.card-header -->
						<div class="card-body">
						  <textarea id="summernote">
							오늘 하루, 기억하고 싶은 순간이 있나요?
						  </textarea>

						  <br/>
						  <br/>

							<!--
						  <div class="type">
						  <ul>
						  	<li class="_modeBtn">
							  <a href="#" tabindex="-1" class="link_menu _changeModeBtn" title="사진/동영상 첨부" data-mode="mixed" data-kant-id="388" data-kant-ignore="true"><span class="txt_menu"><span class="ico_ks ico_camera"></span><em>사진/동영상</em></span></a>
							  <a class="btn btn-app">
								 <i class="fas fa-edit"></i> 사진/동영상
							  </a>
							  </a>
							  <input name="file_1" class="_photoFileInputOutmost bg_file_upload" type="file" accept="image/gif, image/jpeg, image/png, image/bmp, video/*,video/mp4" multiple="multiple" title="사진/동영상 첨부" data-kant-id="388">
							</li>-->
							<li>
								<a class="btn btn-app">
									<i class="fas fa-play"></i> 뮤직
								</a>
							</li>
							<li>
								<a class="btn btn-app">
									<span class="badge bg-purple">486</span>
									<i class="fas fa-users"></i> 링크
								</a>
							</li>
							<li>
								
							</li>
						</ul>
						<input type="submit" value="글쓰기">
						</div>
						</div>
					</div>
					</form>
				</section>
				

            </div>            
          </div>
          
        </div>
        <!-- /.row -->


<?
include_once("./tail.php");  
?>