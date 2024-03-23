<?php
if(isset($_GET['id'])){
require_once '../includes/connect.php';
$stmt = $conn->prepare("SELECT * FROM jobtype WHERE id=?");
$stmt->execute([$_GET['id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
if($stmt->rowCount() < 1){
header('Location: other.php');
exit();
}
}//isset
?>
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
  <section class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
<!--         <div class="col-xl-7 col-lg-12 text-center">
          <h2 style="color:green;"><u><b>โปรแกรมประเมินภาระงานอาจารย์</b></u></h2>
        </div> -->
      </div>
      <div class="row justify-content-left" style="margin-top: 60px;">
        <div class="col-xl-7 col-lg-9 text-left">
          <h4 style="color:green;"><b>เพิ่มข้อมูลภาระงาน  (2/2)</b></h4><br><br>
          <p style="font-size: 14px;">
            เกณฑ์การประเมิน <br>
            - ภาระงานเทียบเคียงเท่ากับ 2.50 วิชา
          </p>
          <p style="font-size: 14px;">
            <u> รายละเอียดภาระงาน</u>
          </p>
        </div>
      </div>
      
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="row icon-boxes" style="margin-top: 20px;">
          <div class="icon-box bg-transparent">
            <p style="font-size: 14px;"><b>ประเภทผลงานวิชาการ </b>
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

            <p>ชื่อเรื่อง &nbsp;&nbsp;<input name="subject[]" type="text" id="subject" size="82" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>ตีพิมพ์ในหนังสือ / วารสารวิชาการ / อื่น ๆ : ชื่อหนังสือ &nbsp;&nbsp;<input name="bookname[]" type="text" id="bookname" size="50" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>วันที่ตีพิมพ์ &nbsp;&nbsp;<select id ="monthbook" name="monthbook[]"><option value='มกราคม' selected>มกราคม</option>
            <option value='กุมภาพันธ์' >กุมภาพันธ์</option>
            <option value='มีนาคม' >มีนาคม</option>
            <option value='เมษายน' >เมษายน</option>
            <option value='พฤษภาคม' >พฤษภาคม</option>
            <option value='มิถุนายน' >มิถุนายน</option>
            <option value='กรกฎาคม' >กรกฎาคม</option>
            <option value='สิงหาคม' >สิงหาคม</option>
            <option value='กันยายน' >กันยายน</option>
            <option value='ตุลาคม' >ตุลาคม</option>
            <option value='พฤศจิกายน' >พฤศจิกายน</option>
            <option value='ธันวาคม' >ธันวาคม</option> 
            </select>  
             ปี <select id="yearbook" name="yearbook[]"  >
            <option value="2566">2566</option>
            <option value="2565">2565</option>
            </select> <font color="#888888">(กรุณาระบุข้อมูลในช่วงปีงบประมาณ 2567 เริ่มวันที่ 1 กรกฎาคม 2566 - 30 มิถุนายน 2567)</font></p>
            <p>
              (หัวหน้าโครงการ / ผุ้ร่วมวิจัย / สัดส่วน
              <input name="percent[]" type="text" id="percent1" value="100" style="border:0px; border-bottom:1px dotted #333333; "/> %)
            </p><br>

            <p>ชื่อเรื่อง &nbsp;&nbsp;<input name="subject[]" type="text" id="subject" size="82" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>ตีพิมพ์ในหนังสือ / วารสารวิชาการ / อื่น ๆ : ชื่อหนังสือ &nbsp;&nbsp;<input name="bookname[]" type="text" id="bookname" size="50" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>วันที่ตีพิมพ์ &nbsp;&nbsp;<select id ="monthbook" name="monthbook[]"><option value='มกราคม' selected>มกราคม</option>
            <option value='กุมภาพันธ์' >กุมภาพันธ์</option>
            <option value='มีนาคม' >มีนาคม</option>
            <option value='เมษายน' >เมษายน</option>
            <option value='พฤษภาคม' >พฤษภาคม</option>
            <option value='มิถุนายน' >มิถุนายน</option>
            <option value='กรกฎาคม' >กรกฎาคม</option>
            <option value='สิงหาคม' >สิงหาคม</option>
            <option value='กันยายน' >กันยายน</option>
            <option value='ตุลาคม' >ตุลาคม</option>
            <option value='พฤศจิกายน' >พฤศจิกายน</option>
            <option value='ธันวาคม' >ธันวาคม</option> 
            </select>  
             ปี <select id="yearbook" name="yearbook[]"  >
            <option value="2566">2566</option>
            <option value="2565">2565</option>
            </select> <font color="#888888">(กรุณาระบุข้อมูลในช่วงปีงบประมาณ 2567 เริ่มวันที่ 1 กรกฎาคม 2566 - 30 มิถุนายน 2567)</font></p>
            <p>
              (หัวหน้าโครงการ / ผุ้ร่วมวิจัย / สัดส่วน
              <input name="percent[]" type="text" id="percent1" value="100" style="border:0px; border-bottom:1px dotted #333333; "/> %)
            </p><br>
            
            <p>ชื่อเรื่อง &nbsp;&nbsp;<input name="subject[]" type="text" id="subject" size="82" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>ตีพิมพ์ในหนังสือ / วารสารวิชาการ / อื่น ๆ : ชื่อหนังสือ &nbsp;&nbsp;<input name="bookname[]" type="text" id="bookname" size="50" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>วันที่ตีพิมพ์ &nbsp;&nbsp;<select id ="monthbook" name="monthbook[]"><option value='มกราคม' selected>มกราคม</option>
            <option value='กุมภาพันธ์' >กุมภาพันธ์</option>
            <option value='มีนาคม' >มีนาคม</option>
            <option value='เมษายน' >เมษายน</option>
            <option value='พฤษภาคม' >พฤษภาคม</option>
            <option value='มิถุนายน' >มิถุนายน</option>
            <option value='กรกฎาคม' >กรกฎาคม</option>
            <option value='สิงหาคม' >สิงหาคม</option>
            <option value='กันยายน' >กันยายน</option>
            <option value='ตุลาคม' >ตุลาคม</option>
            <option value='พฤศจิกายน' >พฤศจิกายน</option>
            <option value='ธันวาคม' >ธันวาคม</option> 
            </select>  
             ปี <select id="yearbook" name="yearbook[]"  >
            <option value="2566">2566</option>
            <option value="2565">2565</option>
            </select> <font color="#888888">(กรุณาระบุข้อมูลในช่วงปีงบประมาณ 2567 เริ่มวันที่ 1 กรกฎาคม 2566 - 30 มิถุนายน 2567)</font></p>
            <p>
              (หัวหน้าโครงการ / ผุ้ร่วมวิจัย / สัดส่วน
              <input name="percent[]" type="text" id="percent1" value="100" style="border:0px; border-bottom:1px dotted #333333; "/> %)
            </p><br>

            <p>ชื่อเรื่อง &nbsp;&nbsp;<input name="subject[]" type="text" id="subject" size="82" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>ตีพิมพ์ในหนังสือ / วารสารวิชาการ / อื่น ๆ : ชื่อหนังสือ &nbsp;&nbsp;<input name="bookname[]" type="text" id="bookname" size="50" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>วันที่ตีพิมพ์ &nbsp;&nbsp;<select id ="monthbook" name="monthbook[]"><option value='มกราคม' selected>มกราคม</option>
            <option value='กุมภาพันธ์' >กุมภาพันธ์</option>
            <option value='มีนาคม' >มีนาคม</option>
            <option value='เมษายน' >เมษายน</option>
            <option value='พฤษภาคม' >พฤษภาคม</option>
            <option value='มิถุนายน' >มิถุนายน</option>
            <option value='กรกฎาคม' >กรกฎาคม</option>
            <option value='สิงหาคม' >สิงหาคม</option>
            <option value='กันยายน' >กันยายน</option>
            <option value='ตุลาคม' >ตุลาคม</option>
            <option value='พฤศจิกายน' >พฤศจิกายน</option>
            <option value='ธันวาคม' >ธันวาคม</option> 
            </select>  
             ปี <select id="yearbook" name="yearbook[]"  >
            <option value="2566">2566</option>
            <option value="2565">2565</option>
            </select> <font color="#888888">(กรุณาระบุข้อมูลในช่วงปีงบประมาณ 2567 เริ่มวันที่ 1 กรกฎาคม 2566 - 30 มิถุนายน 2567)</font></p>
            <p>
              (หัวหน้าโครงการ / ผุ้ร่วมวิจัย / สัดส่วน
              <input name="percent[]" type="text" id="percent1" value="100" style="border:0px; border-bottom:1px dotted #333333; "/> %)
            </p><br>

            <p>ชื่อเรื่อง &nbsp;&nbsp;<input name="subject[]" type="text" id="subject" size="82" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>ตีพิมพ์ในหนังสือ / วารสารวิชาการ / อื่น ๆ : ชื่อหนังสือ &nbsp;&nbsp;<input name="bookname[]" type="text" id="bookname" size="50" style="border: none; border-bottom: dotted 1.5px;"></p>
            <p>วันที่ตีพิมพ์ &nbsp;&nbsp;<select id ="monthbook" name="monthbook[]"><option value='มกราคม' selected>มกราคม</option>
            <option value='กุมภาพันธ์' >กุมภาพันธ์</option>
            <option value='มีนาคม' >มีนาคม</option>
            <option value='เมษายน' >เมษายน</option>
            <option value='พฤษภาคม' >พฤษภาคม</option>
            <option value='มิถุนายน' >มิถุนายน</option>
            <option value='กรกฎาคม' >กรกฎาคม</option>
            <option value='สิงหาคม' >สิงหาคม</option>
            <option value='กันยายน' >กันยายน</option>
            <option value='ตุลาคม' >ตุลาคม</option>
            <option value='พฤศจิกายน' >พฤศจิกายน</option>
            <option value='ธันวาคม' >ธันวาคม</option> 
            </select>  
             ปี <select id="yearbook" name="yearbook[]"  >
            <option value="2566">2566</option>
            <option value="2565">2565</option>
            </select> <font color="#888888">(กรุณาระบุข้อมูลในช่วงปีงบประมาณ 2567 เริ่มวันที่ 1 กรกฎาคม 2566 - 30 มิถุนายน 2567)</font></p>
            <p>
              (หัวหน้าโครงการ / ผุ้ร่วมวิจัย / สัดส่วน
              <input name="percent[]" type="text" id="percent1" value="100" style="border:0px; border-bottom:1px dotted #333333; "/> %)
            </p><hr>
            <center><a class="btn btn-primary btn-sm" href="other.php" title="">บันทึกข้อมูล </a> 
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