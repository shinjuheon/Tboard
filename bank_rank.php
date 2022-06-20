<?
include_once("./common.php");
include_once("./head.php");
?>
<!-- DataTables -->
  <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.css">
  <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.css">


        <div class="card">
              <div class="card-header">
                <h3 class="card-title">별풍선 수익 순위</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>순위</th>
                    <th>BJ명</th>
                    <th>변동</th>
					<th>금액</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>1위</th>
                    <th>뜬다TV</th>
                    <th>▲ 1</th>
					<th>10억</th>
                  </tr>
				  <tr>
                    <th>2위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/se/seosils2/seosils2.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">서실♡</th>
                    <th>▲ 2</th>
					<th>8천만원</th>
                  </tr>
				  <tr>
                    <th>3위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/mi/mingtnt/mingtnt.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">산쿠밍</th>
                    <th>▼ 2</th>
					<th>8천만원</th>
                  </tr>
				  <tr>
                    <th>4위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/fl/flowerlynn/flowerlynn.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">씬나는다람취</th>
                    <th>▼ 1</th>
					<th>8천만원</th>
                  </tr>
				  <tr>
                    <th>5위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/kn/knabalv2/knabalv2.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">☆러브린☆</th>
                    <th>▼ 5</th>
					<th>7천만원</th>
                  </tr>
				  <tr>
                    <th>6위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/sj/sjsj12486/sjsj12486.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">쭈롱콩</th>
                    <th>▼ 6</th>
					<th>6천만원</th>
                  </tr>
				  <tr>
                    <th>7위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/9r/9rumee/9rumee.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">김지린</th>
                    <th>▲ 4</th>
					<th>5천만원</th>
                  </tr>
				  <tr>
                    <th>8위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/lo/lolsos/lolsos.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">청담유수</th>
                    <th>▲ 3</th>
					<th>4천만원</th>
                  </tr>
				  <tr>
                    <th>9위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/vi/vidzl12/vidzl12.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">♡서정♡</th>
                    <th>▼ 4</th>
					<th>3천만원</th>
                  </tr>
				  <tr>
                    <th>10위</th>
                    <th><img src="https://stimg.afreecatv.com/LOGO/xi/xiaoeun/xiaoeun.jpg" alt="" onerror="javascript:this.src='https://res.afreecatv.com/images/afmain/img_thumb_profile.gif'">상큼상큼젤</th>
                    <th>▲ 12</th>
					<th>2천만원</th>
                  </tr>				  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

<!-- DataTables  & Plugins -->
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./plugins/jszip/jszip.min.js"></script>
<script src="./plugins/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?
include_once("./tail.php");  
?>
