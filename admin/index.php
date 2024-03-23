<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>
</head>
<body>
<?php include 'include/header.php'; ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center" style="margin-top: -50px;">
      <div class="col-xl-7 col-lg-9 col-md-12 col-sm-12 text-center">
        <h2 style="color:green;"><u><b>โปรแกรมประเมินภาระงานอาจารย์</b></u></h2>
      </div>
    </div>
    <div class="row justify-content-left" style="margin-top: 60px;">
      <div class="col-xl-7 col-lg-9 col-md-12 col-sm-12 text-left">
        <h5><b> ข้อมูลการประเมินภาระงาน</b></h5>
      </div>
    </div>
    
    <div class="row icon-boxes" style="margin-top: 20px;">
      <div class="col-sm-12 col-md-6 col-lg-7 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <h4 class="title" style="font-size: 16px;"><i class='fa fa-folder-open' style="font-size:24px;"></i> ข้อมูลภาระงาน</h4>
          <a href="executive.php" title=""><p class="description"><li> จัดการข้อมูลงานผู้บริหารและกรรมการ</li></p></a>
          <a href="thesis1.php" title=""><p class="description"><li> จัดการข้อมูลผลงานทางวิชาการ</li></p></a>
          <a href="thesis.php" title=""><p class="description"><li> จัดการข้อมูลภาระงาน การควบคุมวิทยานิพนธ์</li></p></a>
          <a href="other.php" title=""><p class="description"><li> จัดการข้อมูลภาระงานอื่น ๆ</li></p></a><br>
          <a href="member.php" title=""><p class="description"><li> ตรวจสอบการส่งภาระงานของอาจารย์ (จัดการรายชื่อ)</li></p></a>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-5 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box bg-transparent">
            <h4 class="title" style="font-size: 16px;" align="center">คำแนะนำ</a></h4>
            <center><div class="icon"><i class="fa fa-info-circle" style="font-size:48px;color:red"></i></div>
            <p class="description" style="color:red;"><b>กรุณาแก้ไขข้อมูลให้เป็นปัจจุบันที่สุด</b></p></center>
          </div>
        </div>
    </div>

    <div class="row icon-boxes" style="margin-top: 20px;">
      <div class="col-sm-12 col-md-12 col-lg-7 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <h4 class="title" style="font-size: 16px;"><i class='fa fa-database' style="font-size:24px;"></i> ข้อมูลระบบ</h4>
          <a href="subject.php" title=""><p class="description"><li> จัดการข้อมูลรายวิชาที่เปิดสอนในปีงบประมาณนี้</li></p></a>
          <a href="coruse-co.php" title=""><p class="description"><li> จัดการข้อมูลผู้ประสานรายวิชา</li></p></a>
        </div>
      </div>
    </div>

    <div class="row icon-boxes" style="margin-top: 20px;">
      <div class="col-sm-12 col-md-12 col-lg-7 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <h4 class="title" style="font-size: 16px;"><i class='fa fa-print' style="font-size:24px;"></i> รายงาน</h4>
          <p class="description"><li> ข้อมูลภาระงานสอน ตามรายวิชาที่เปิดสอน</li></p>
          <p class="description"><li> ข้อมูลภาระงานสอน ตามรายวิชาที่เปิดสอน (ไม่รวม อ.พิเศษ)</li></p>
        </div>
      </div>
    </div>

    <div class="row icon-boxes" style="margin-top: 20px;">
      <div class="col-sm-12 col-md-12 col-lg-7 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <h4 class="title" style="font-size: 16px;"><i class='fa fa-users' style="font-size:24px;"></i> ข้อมูลระบบเสริม อาจารย์พิเศษ</h4>
          <a href="specialteacher.php" title=""><p class="description"><li> Import ข้อมูลการเบิกจ่ายเงินอาจารย์พิเศษ</li></p></a>
          <!-- <p class="description"><li> Import ข้อมูลการเบิกจ่ายเงินอาจารย์พิเศษ</li></p> -->
        </div>
      </div>
    </div>

    <form action="" method="post" accept-charset="utf-8">
    <div class="row icon-boxes" style="margin-top: 20px;">
      <div class="col-sm-12 col-md-12 col-lg-7 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <h4 class="title" style="font-size: 16px;"><i class='fa fa-search' style="font-size:24px;"></i> ตรวจสอบข้อมูลภาระงาน</h4>
          <p class="description">เลือกรายชื่ออาจารย์</p>
          <div class="modal-body">
            <div class="form-group mb-3">
              <div class="form-group">
                <select class="form-control" id="office_id" name="office_id" required>
                  <?php
                  require_once '../includes/connect.php';
                  $select_type = $conn->prepare("SELECT * FROM member WHERE pid LIKE '%160%'");
                  $select_type->execute();
                  ?>
                  <option value=""></option>
                  <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?> 
                  <option value="<?php echo $row_type['id'] ?>"> <?php echo $row_type['pid'] ?>: <?php echo $row_type['prename'] ?><?php echo $row_type['firstnameTH'] ?><?php echo $row_type['lastnameTH'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <button class="btn btn-outline-success" type="submit">ดูสรุปภาระงาน</button>
        </div>
      </div>
    </div>
    </form>

  </div>
  </section><!-- End Hero -->
  <br><br><br>
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