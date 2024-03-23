<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>
<!-- <style type="text/css">
h5{
font-size: 16px;
}
h6{
font-size: 14px;
}

.box {
    width: 20px;
    height: 20px;
    background-color: #fff;
    border: solid 2px darkcyan;
}  
.box1 {
    width: 20px;
    height: 20px;
    background-color: red;
    border: solid 2px darkcyan;    
} 
.box2 {
    width: 350px;
    height: 200px;
    background-color: #ffb3b3;
/*    border: solid 2px darkcyan;    */
}   


</style> -->
<body>
  <?php include 'include/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <!--       <div class="row justify-content-center" style="margin-top: -50px;">
        <div class="col-xl-7 col-lg-9 text-center">
          <h2 style="color:green;"><b>สรุปภาระงานของ นายธีรศักดิ์ ฤทธิรงค์ ประจำปีงบประมาณ 2566</b></h2>
        </div>
      </div> -->
      <div class="row justify-content-left" style="margin-top: 00px;">
        <div class="col-xl-7 col-sm-12 col-md-9 col-lg-9 text-left">
          
        </div>
      </div>
      <div class="row">

        <div class="col-sm-6 col-md-9 col-lg-9" style="margin-top:-50px;">
          <!-- <div class="row icon-boxes " style="margin-top: 20px;"> -->
            <!-- <div class="col-md-12"> -->
              <!-- <div class="icon-box"> -->
                <h5>สรุปภาระงานของ <?= $_SESSION['prename'];?><?= $_SESSION['firstnameTH'];?> <?= $_SESSION['lastnameTH'];?> ประจำปีงบประมาณ 2566</h5>
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3" style="margin-top: -20px;">
          <!-- <div class="row icon-boxes " style="margin-top: 20px;"> -->
            <!-- <div class="col-md-12"> -->
              <div class="box2"><br>
                <h5><u>เมนู:</u></h5>
                <h6>
                  <ul>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>แก้ไขข้อมูลภาระงานสอน</li>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>แก้ไขข้อมูลภาระงานอื่น ๆ</li>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>สั่งพิมพ์</li>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>ส่งภาระงาน</li>
                  </ul>
                  </h6>
              </div>
            <!-- </div> -->
          <!-- </div> -->
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row icon-boxes" style="margin-top: 20px;">
            <div class="icon-box bg-transparent">
              <p>ส่วนที่ 1 รายละเอียดภาระงานสอน ต้องมีภาระงานสอนขั้นต่ำ 3.5 วิชา/ปี</p>
              <table class="table table-bordered" style="font-size: 12px;">
                <thead>
                  <tr align="center">
                    <th class="bg-success text-white" width="35%" rowspan="2">ภาระงาน</th>
                    <th class="bg-success text-white" width="5%"rowspan="2">จำนวนครั้งบรรยายจริง</th>
                    <th class="bg-success text-white" width="5%"rowspan="2">จำนวนครั้งบรรยายทั้งหมด</th>
                    <th class="bg-success text-white" width="5%" rowspan="2">จำนวนครั้งปฏิบัติจริง</th>
                    <th class="bg-success text-white" width="5%" rowspan="2">จำนวนครั้งปฏิบัติทั้งหมด</th>
                    <th class="bg-info text-white" width="5%" rowspan="2">หน่วยกิตรวม</th>
                    <th class="bg-success text-white" width="5%" colspan="2">หน่วยกิต</th>
                    <th class="bg-success text-white" width="5%" colspan="2">ภาระงาน</th>
                  </tr>
                  <tr align="center">
                    <th class="bg-success text-white" width="5%">บรรยาย</th>
                    <th class="bg-success text-white" width="5%">ปฏิบัติ</th>
                    <th class="bg-success text-white" width="5%">บรรยาย</th>
                    <th class="bg-success text-white" width="5%">ปฏิบัติ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="bg-success text-white">ภาคเรียนที่ 1 ปีการศึกษา 2565</td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                  </tr>
                  <tr>
                    <td>- ยังไม่มีข้อมูล --</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr align="right">
                    <td colspan="8"><b>รวมภาระงานสอนภาค 1/2565</b></td>
                    <td><b>0.00</b></td>
                    <td><b>0.00</b></td>
                  </tr>
                  <tr>
                    <td class="bg-success text-white">ภาคเรียนที่ 2 ปีการศึกษา 2565</td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                    <td class="bg-success text-white"></td>
                  </tr>
                  <tr>
                    <td>- ยังไม่มีข้อมูล --</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr align="right">
                    <td colspan="8"><b>รวมภาระงานสอนภาค 2/2565</b></td>
                    <td><b>0.00</b></td>
                    <td><b>0.00</b></td>
                  </tr>
                  <tr align="right">
                    <td colspan="10"></td>
                  </tr>
                  <tr align="right">
                    <td colspan="8"><b>รวมภาระงานสอนภาค 1/2565 + 2/2565 (คิดเป็นหน่วยกิต) </b></td>
                    <td><b>0.00</b></td>
                    <td><b>0.00</b></td>
                  </tr>
                   <tr align="right">
                    <td class="bg-success text-white" colspan="8"><b>คิดเป็นหน่วยวิชา </b></td>
                    <td class="bg-success text-white"><b>0.00</b></td>
                    <td class="bg-success text-white"><b>0.00</b></td>
                  </tr>
                  <tr align="right">
                    <td  class="bg-success text-white" colspan="8"><b>รวมส่วนที่ 1 </b></td>
                    <td class="bg-success text-white"><b>0.00</b></td>
                    <td class="bg-success text-white"><b>0.00</b></td>
                  </tr>
                  <tr align="right">
                    <td class="bg-success text-white" colspan="10">
                      ผ่าน <div class="box"></div><br>
                      ไม่ผ่าน<div class="box1"></div>
                    </td>
                  </tr>
                  <tr align="right">
                  </tr>
                </tbody>
              </table>
              <center><a class="btn btn-info btn-lg" href="#" title="">ส่งภาระงาน <i class='fa fa-long-arrow-right'></i></a></center>
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