<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>
<style type="text/css">
h5{
font-size: 16px;
}
h6{
font-size: 14px;
}
</style>
<body>
  <?php include 'include/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center" style="margin-top: -50px;">
        <div class="col-xl-7 col-lg-9 text-center">
          <h2 style="color:green;"><u><b>โปรแกรมประเมินภาระงานอาจารย์</b></u></h2>
        </div>
      </div>
      <div class="row justify-content-left" style="margin-top: 60px;">
        <div class="col-xl-7 col-lg-9 text-left">
          <h5 style="color:green;"><b>เลือกประเภทภาระงานที่ต้องการเพิ่มข้อมูล (1/2)</b></h5>
        </div>
      </div>
      <div class="row">
        
        <div class="col-md-9">
          <div class="row icon-boxes" style="margin-top: 20px;">
            <div class="icon-box bg-transparent">
              <table class="table table-hover">
                <thead>
                  <tr class="table-info">
                    <th colspan="2" style="font-size: 14px;">งานตำรา/ ผลงานวิจัย/ งานสร้างสรรค์/ อื่น ๆ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once '../includes/connect.php';
                  $stmt = $conn->prepare("SELECT * FROM jobtype WHERE jobgroupid='3'");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  foreach($result as $row) {
                  $i++
                  ?>
                  <tr>
                    <td width="80%" style="font-size: 14px;"><?php echo $row['title']; ?></td>
                    <td width="18%" style="font-size: 14px;"><a class="btn btn-outline-success btn-sm" href="addother.php?id=<?= $row['id'];?>" data-toggle="tooltip" title="กรอกข้อมูลภาระงาน">กรอกภาระงาน</a></td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <table class="table table-hover">
                <thead>
                  <tr class="table-info">
                    <th colspan="2" style="font-size: 14px;">งานอื่น ๆ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once '../includes/connect.php';
                  $stmt = $conn->prepare("SELECT * FROM jobtype WHERE jobgroupid='4'");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  foreach($result as $row) {
                  $i++
                  ?>
                  <tr>
                    <td width="98%" style="font-size: 14px;"><?php echo $row['title']; ?></td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <table class="table table-hover">
                <thead>
                  <tr class="table-info">
                    <th colspan="2" style="font-size: 14px;">งานผู้บริหารและกรรมการ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  //คิวรี่ข้อมูลมาแสดงในตาราง
                  require_once '../includes/connect.php';
                  $stmt = $conn->prepare("SELECT * FROM jobtype WHERE jobgroupid='5'");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  foreach($result as $row) {
                  $i++
                  ?>
                  <tr>
                    <td width="98%" style="font-size: 14px;"><?php echo $row['title']; ?></td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <p style="font-size: 12px;">เมื่อเลือกประเภทภาระงานแล้ว กรุณาคลิ๊กที่ปุ่ม [Next>>] เพื่อกรอกข้อมูลภาระงานในขั้นตอนต่อไป</p>
              <a class="btn btn-info btn-sm" href="#" title="">Next <i class='fa fa-long-arrow-right'></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row icon-boxes " style="margin-top: 20px;">
            <div class="col-md-12">
              <div class="icon-box">
                <h5><u>เมนู:</u></h5>
                <h6><li> ดูและแก้ไขข้อมูล</li></h6>
                <h6><a href="index.php" title="" style="color:#4e5052;"><li> ย้อนกลับ</li></a></h6><hr>
              </div>
            </div>
          </div>
          <div class="row icon-boxes" style="margin-top: 20px;">
            <div class="col-md-12">
              <div class="icon-box">
                <h5><u>หมายเหตุ:</u></h5>
                <h6><li> ผลงานทุกอย่างต้องสำเร็จสมบูรณ์เรียบร้อยแล้ว/เผยแพร่แล้ว อย่างน้อย 1 เรื่องต่อปี</li></h6><br>
                <h6><li> กรุณากรอกข้อมูลเฉพาะในช่วงปีงบประมาณ 2566 เริ่มวันที่ 1 กรกฎาคม 2565 ถึงวันที่ 30 มิถุนายน 2566 เท่านั้น</li></h6><br>
                <h6><li> ผลงานวิจัย/ งานสร้างสรรค์/ งานตำรา/ อื่น ๆ ที่จัดส่งมายังคณะฯ ชื่อเรื่อง/ รายละเอียดเนื้อหา ต้องไม่ซ้ำ ถึงแม้จะตีพิมพ์คนละแห่ง</li></h6><br>
                <h6><li> *** รายงานวิจัยใน 3 ประเภทนี้ รวมทุกประเภท คิดภาระงานให้สูงสุดไม่เกิน 2 เรื่อง</li></h6><hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section><!-- End Hero -->
    <!-- ======= Footer ======= -->
    <?php include 'include/footer.php'; ?>
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
<script type="text/javascript">
document.querySelector("html").classList.add('js');
var fileInput  = document.querySelector( ".input-file" ),
button     = document.querySelector( ".input-file-trigger" ),
the_return = document.querySelector(".file-return");
button.addEventListener( "keydown", function( event ) {
if ( event.keyCode == 13 || event.keyCode == 32 ) {
fileInput.focus();
}
});
button.addEventListener( "click", function( event ) {
fileInput.focus();
return false;
});
fileInput.addEventListener( "change", function( event ) {
the_return.innerHTML = this.value;
});
</script>