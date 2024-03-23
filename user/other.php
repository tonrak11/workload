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
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">ตำราที่มีการตรวจสอบโดยผู้ทรงคุณวุฒิ (peer review) และได้รับการเผยแพร่แล้ว</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจัย/ บทความวิชาการ/ บทความปริทัศน์ (Review Article) ที่ตีพิมพ์ในวารสาร  ที่อยู่ในฐานข้อมูลสากล และมีค่า impact factor</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจัย/ บทความวิชาการ/ บทความปริทัศน์ (Review Article) ภาษาอังกฤษที่ตีพิมพ์ในวารสารวิชาการของคณะฯ เช่น JARS และ BUILT</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">หนังสือที่มีการตรวจสอบโดยผู้ทรงคุณวุฒิ (peer review) และได้รับการเผยแพร่แล้ว</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">หนังสือแปล ที่มีการตรวจสอบโดยผู้ทรงคุณวุฒิ (peer review) และได้รับการเผยแพร่แล้ว</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">รายงานวิจัยของโครงการที่ได้รับทุนจากแหล่งทุนวิจัย ซึ่งไม่ใช่โครงการวิจัยที่ว่าจ้างโดยหน่วยงานภายนอก (commissioned research) และต้องผ่านการตรวจสอบโดยผู้ทรงคุณวุฒิ (peer review) ซึ่งจะต้องไม่ใช่คณะกรรมการตรวจรับทุน หรือคณะกรรมการตรวจการจ้าง***</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจัย/ บทความวิชาการ/ บทความปริทัศน์ (Review Article) ที่ตีพิมพ์ในวารสารระดับชาติที่อยู่ในฐานข้อมูลอ้างอิง TCI และมีการตรวจสอบผลงานวิชาการโดยผู้ทรงคุณวุฒิ (peer review)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจัย/ บทความวิชาการที่นำเสนอในการประชุมวิชาการระดับนานาชาติที่มีpeer review และมี proceeding</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">เอกสารคำสอน 14 ครั้ง (หากไม่ครบ 14 ครั้ง ให้คิดตามสัดส่วน)/ หนังสือที่ไม่มีการตรวจสอบโดยผู้ทรงคุณวุฒิ (peer review)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจัย/ บทความวิชาการที่ตีพิมพ์ในวารสารวิชาการ/วิชาชีพ ที่มีการตรวจสอบ ผลงานทางวิชาการโดยผู้ทรงคุณวุฒิ (peer review)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจัย/ บทความวิชาการที่นำเสนอในการประชุมวิชาการระดับชาติที่มี peer review และมี proceeding</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">งานสร้างสรรค์/ งานออกแบบ (พร้อมบทวิเคราะห์) ที่ผ่านศูนย์นวัตกรรมการออกแบบและวิจัย และได้รับการเผยแพร่แล้ว</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความวิจารณ์หนังสือ (Book Review) ที่ตีพิมพ์ในวารสารระดับชาติที่อยู่ในฐานข้อมูลอ้างอิง TCI</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">รายงานวิจัยเพื่อการเรียนการสอน/ รายงานวิจัยสถาบันของคณะฯ/ รายงานวิจัยของโครงการที่ว่าจ้างโดยหน่วยงานภายนอก (commissioned research) ที่ผ่านศูนย์นวัตกรรมการออกแบบและวิจัยของคณะฯ***</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">บทความทั่วไปที่ตีพิมพ์ในวารสารวิชาชีพ และนิตยสารที่เกี่ยวข้องกับวิชาชีพ</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">งานสร้างสรรค์/ งานออกแบบ (แบบก่อสร้าง) ที่ผ่านศูนย์นวัตกรรมการออกแบบและวิจัย</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 14px;">รายงานวิจัยที่ว่าจ้างโดยหน่วยงานภายนอก (commissioned research) ที่ผ่านมหาวิทยาลัย และจ่ายค่าธรรมเนียมให้กับศูนย์นวัตกรรมการออกแบบและวิจัยของคณะฯ***</td>
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
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">คุณค่าผลงานด้านทำนุบำรุงศิลปะและวัฒนธรรม (ไม่เกิน 1 วิชาต่อปี)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานบริการวิชาการและสังคม (ไม่เกิน 1 วิชาต่อปี)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">กรรมการภายนอก (ได้ปฏิบัติงานจริงตลอดทั้งปี) (ไม่เกิน 1 วิชาต่อปี)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">การสร้างชื่อเสียงทั่วไป (ไม่เกิน 1 วิชาต่อปี)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">  งานสร้างชื่อเสียงพิเศษระดับนานาชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับนานาชาติ (ระดับทั่วไป)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับนานาชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับนานาชาติ (ระดับดี/รางวัลเหรียญทองแดง)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับนานาชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับนานาชาติ (ระดับดีเด่น/รางวัลเหรียญเงิน)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับนานาชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับนานาชาติ (ระดับดีเยี่ยม/รางวัลเหรียญทอง)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับชาติ (ระดับทั่วไป)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับชาติ (ระดับดี/ รางวัลเหรียญทองแดง)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับชาติ (ระดับดีเด่น/ รางวัลเหรียญเงิน)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานสร้างชื่อเสียงพิเศษระดับชาติ เช่น ได้รับรางวัลวิชาการ/วิชาชีพ จากองค์กรระดับชาติ (ระดับดีเยี่ยม/ รางวัลเหรียญทอง)</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">ผลงานวิจัยและงานสร้างสรรค์ที่ได้รับการจดทะเบียนสิทธิบัตร ที่มีชื่อคณะฯหรือมหาวิทยาลัยมีส่วนร่วมด้วย</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">ผลงานวิจัยและงานสร้างสรรค์ที่ได้รับการจดทะเบียนอนุสิทธิบัตร ที่มีชื่อคณะฯหรือมหาวิทยาลัยมีส่วนร่วมด้วย</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">การเข้ารับการอบรมและเข้าชั้นเรียนมากกว่าร้อยละ 80 และผ่านการทดสอบในหลักสูตรที่จัดโดยคณะสถาปัตยกรรมศาสตร์และการผังเมือง มหาวิทยาลัยธรรมศาสตร์</td>
                  </tr>
                  <tr>
                    <td width="2%"><input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"></td>
                    <td width="98%" style="font-size: 12px;">งานอื่น ๆ ที่ได้รับมอบหมายจากคณะฯ (ภาระงานอื่น ๆ ที่ไม่ได้รับคะแนน)</td>
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
                  <h6>1. ดูและแก้ไขข้อมูล</h6>
                  <h6><a href="index.php" title="" style="color:#4e5052;">2. ย้อนกลับ</a></h6><hr>
                </div>
              </div>
            </div>
              <div class="row icon-boxes" style="margin-top: 20px;">
                <div class="col-md-12">
                  <div class="icon-box">
                    <h5><u>หมายเหตุ:</u></h5>
                    <h6>1. ผลงานทุกอย่างต้องสำเร็จสมบูรณ์เรียบร้อยแล้ว/เผยแพร่แล้ว อย่างน้อย 1 เรื่องต่อปี</h6><br>
                    <h6>2. กรุณากรอกข้อมูลเฉพาะในช่วงปีงบประมาณ 2566 เริ่มวันที่ 1 กรกฎาคม 2565 ถึงวันที่ 30 มิถุนายน 2566 เท่านั้น</h6><br>
                    <h6>3. ผลงานวิจัย/ งานสร้างสรรค์/ งานตำรา/ อื่น ๆ ที่จัดส่งมายังคณะฯ ชื่อเรื่อง/ รายละเอียดเนื้อหา ต้องไม่ซ้ำ ถึงแม้จะตีพิมพ์คนละแห่ง</h6><br>
                    <h6>4. *** รายงานวิจัยใน 3 ประเภทนี้ รวมทุกประเภท คิดภาระงานให้สูงสุดไม่เกิน 2 เรื่อง</h6><hr>
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