<?php
if(isset($_GET['id'])){
require_once '../includes/connect.php';
$stmt = $conn->prepare("SELECT * FROM jobtype WHERE id=?");
$stmt->execute([$_GET['id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
if($stmt->rowCount() < 1){
header('Location: executive.php');
exit();
}
}//isset
?>
<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>
<style type="text/css">
  body{
    font-size: 12px;
  }
h5{
font-size: 16px;
}
h6{
font-size: 14px;
}
tr{
  font-size: 12px;

}
td{
  padding-bottom: 5px;

}
</style>
<body>
  <?php include 'include/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-left" style="margin-top: 60px;">
        <div class="col-xl-7 col-lg-9 text-left">
          <h4 style="color:green;"><b>เพิ่มข้อมูลภาระงาน  (2/2)</b></h4><br><br>
          <p style="font-size: 14px;">
            เกณฑ์การประเมิน <br>
            - ภาระงานเทียบเคียงเท่ากับ 0 วิชา
          </p>
          <p style="font-size: 14px;">
            <u> รายละเอียดภาระงาน</u>
          </p>
        </div>
      </div>
      
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="row icon-boxes" style="margin-top: 20px;">
          <div class="icon-box bg-transparent">
            <p style="font-size: 14px;"><b>ประเภทงาน </b>
              <input name="title" type="text" id="title" value="<?php echo $row['title']; ?>" size="120" style="border: none; border-bottom: dotted 1.5px;color: green;"> </p>
              <input type="hidden" name="jobtypeid" id="jobtypeid" value="12"/>
              <p style="font-size: 14px;"><b>เลือกชื่ออาจารย์ </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="useridnow" id="useridnow" required>
                  <option selected disable value="">--------------กรุณาลือกชื่ออาจารย์--------------</option>
                  <?php
                  require_once '../includes/connect.php';
                  $select_type = $conn->prepare("SELECT * FROM member WHERE pid LIKE '%160%' ");
                  $select_type->execute();
                  ?>
                  <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $row_type['pid'] ?>"><?php echo $row_type['pid'] ?>: <?php echo $row_type['prename'] ?><?php echo $row_type['firstnameTH'] ?> <?php echo $row_type['lastnameTH'] ?></option>
                  <?php } ?>
                </select>
              </p>
              <table>
                <tr>
            <td style="padding-left:40px;text-align:right;">
        1) <input name="subject[]" type="text" id="subject1" size="75" style="border:0px; border-bottom:1px dotted #333333; color:#CC0000; "/>
          &nbsp;<input name="percent[]" type="hidden" id="percent1" value="100" size="3" style="border:0px; border-bottom:1px dotted #333333; "/><input type="hidden" name="bookname[]" id="bookname1" />

          วันที่ <?php include 'function/dateother1.php'; ?> 
            </td>
        </tr>
          
        <tr>
            <td style="padding-left:40px;text-align:right;">
        2) <input name="subject[]" type="text" id="subject2" size="75" style="border:0px; border-bottom:1px dotted #333333; color:#CC0000; "/>
          &nbsp;<input name="percent[]" type="hidden" id="percent2" value="100" size="3" style="border:0px; border-bottom:1px dotted #333333; "/><input type="hidden" name="bookname[]" id="bookname2" />

           วันที่ <?php include 'function/dateother2.php'; ?>   
            </td>
        </tr>
          
        <tr>
            <td style="padding-left:40px;text-align:right;">
        3) <input name="subject[]" type="text" id="subject3" size="75" style="border:0px; border-bottom:1px dotted #333333; color:#CC0000; "/>
          &nbsp;<input name="percent[]" type="hidden" id="percent3" value="100" size="3" style="border:0px; border-bottom:1px dotted #333333; "/><input type="hidden" name="bookname[]" id="bookname3" />

          วันที่ <?php include 'function/dateother3.php'; ?>  
            </td>
        </tr>
          
        <tr>
            <td style="padding-left:40px;text-align:right;">
        4) <input name="subject[]" type="text" id="subject4" size="75" style="border:0px; border-bottom:1px dotted #333333; color:#CC0000; "/>
          &nbsp;<input name="percent[]" type="hidden" id="percent4" value="100" size="3" style="border:0px; border-bottom:1px dotted #333333; "/><input type="hidden" name="bookname[]" id="bookname4" />

          วันที่ <?php include 'function/dateother4.php'; ?>  
            </td>
        </tr>
          
        <tr>
            <td style="padding-left:40px;text-align:right;">
        5) <input name="subject[]" type="text" id="subject5" size="75" style="border:0px; border-bottom:1px dotted #333333; color:#CC0000; "/>
          &nbsp;<input name="percent[]" type="hidden" id="percent5" value="100" size="3" style="border:0px; border-bottom:1px dotted #333333; "/><input type="hidden" name="bookname[]" id="bookname5" />

          วันที่ <?php include 'function/dateother5.php'; ?>  
            </td>
        </tr>
        </table>
        <hr>
        <center><button class="btn btn-primary btn-sm" type="submit">บันทึกข้อมูล </button>
        <a class="btn btn-info btn-sm" href="other.php" title="">ยกเลิก </a></center>
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
