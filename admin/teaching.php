<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>

<style type="text/css">
  .uploadFile {
  width: 30%;
  background-color: white;
  border: 1px solid grey;
  color: grey;
  font-size: 16px;
  line-height: 23px;
  overflow: hidden;
  padding: 10px 10px 4px 10px;
  position: relative;
  resize: none;

  [type="file"] {
    cursor: pointer !important;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: right;
    top: 0px;
    z-index: 1;
  }
}
</style>
<script type="text/javascript">
  $("input[type=file]").change(function (e) {
  $(this).parents(".uploadFile").find(".filename").text(e.target.files[0].name);
});
</script>

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
          <h5 style="color:green;"><b>ข้อมูลการประเมินภาระงาน</b></h5>
        </div>
      </div>
      
      <div class="row icon-boxes" style="margin-top: 30px;">
        <div class="icon-box bg-transparent">
          <center>
          <p>กรอกข้อมูลรายวิชา (สำหรับอาจารย์ผู้ประสานรายวิชา) หรือ กดเลือกไฟล์ข้อมูลรายวิชา <div style="color:red;"><b>**ไฟล์ต้องเป็นนามสกุล .PDF เท่านั้น**</b></div></p><br>
          <form action="#">
            <div class="input-file-container">
              <label class="uploadFile">
                <i class="fa fa-paperclip" style="font-size:24px;"></i>
                <span class="filename"><b>Import from Course Syllabus Online</b></span>
                <input type="file" class="inputfile form-control" name="file" >
              </label>
            </div>
          </form>
          <!-- <h4 class="title">กรอกข้อมูลภาระงาน</h4> -->
          <p class="description">  -- ยังไม่มีรายวิชาที่รับผิดชอบเป็นผู้ประสานรายวิชา --</p>
          </center>
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