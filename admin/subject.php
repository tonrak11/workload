<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>
<body>
  
  <?php include 'include/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <!--     <div class="row justify-content-center" style="margin-top: -50px;">
        <div class="col-xl-7 col-lg-9 col-md-12 col-sm-12 text-center">
          <h2 style="color:green;"><u><b>โปรแกรมประเมินภาระงานอาจารย์</b></u></h2>
        </div>
      </div> -->
      <div class="row justify-content-left" style="margin-top: 60px;">
        <div class="col-lg-7 col-md-12 col-sm-12">
          <h5 style="color:green;"><b>รายวิชาที่เปิดสอน ประจำปีงบประมาณ พ.ศ. 2567</b></h5>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
          <a href="" title="" data-toggle="modal" data-target="#uploadfile" style="color:green;">| <i class="fa fa-cloud-upload"></i> Import </a>
          <a href="" title="" data-toggle="modal" data-target="#subject" style="color:green;">| <i class="fa fa-plus-circle"></i> เพิ่มรายวิชา </a>
          <a href="delete/delsubjectall.php" onclick="return confirm('คุณต้องการลบข้อมูลรายวิชาทั้งหมดออกจากระบบหรือไม่??!!');" data-toggle="tooltip" title="ลบข้อมูล!" style="color:green;">| <i class="fa fa-minus-circle"></i> ลบรายวิชาทั้งหมด |</a>
          <!-- <a href="" title="" data-toggle="modal" data-target="" style="color:green;">| <i class="fa fa-minus-circle"></i> ลบรายวิชาทั้งหมด |</a> -->
        </div>
      </div>
      
      <div class="row icon-boxes" style="margin-top: 20px;">
        <div class="col-sm-12 col-md-12 col-lg-12 align-items-stretch mb-5 mb-lg-0">
          <table id="example" class="table" role="grid" aria-describedby="example1_info" style="width:100%">
            <thead thead class="thead-light" style="font-size: 12px;">
              <tr align="center" style="font-size: 12px;">
                <th width="10%">รหัสวิชา</th>
                <th width="20%">ชื่อรายวิชา</th>
                <th width="5%">เทอม</th>
                <th width="8%">ปีการศึกษา</th>
                <th width="8%">หน่วยกิจรวม</th>
                <th width="8%">ชม. บรรยาย</th>
                <th width="7%">ชม. ปฏิบัติ</th>
                <th width="8%">กำหนดคะแนน</th>
                <th width="8%">ภาระงานบรรยาย</th>
                <th width="10%">ภาระงานปฏิบัติ</th>
                <th width="10%"><center>จัดการ</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              //คิวรี่ข้อมูลมาแสดงในตาราง
              require_once '../includes/connect.php';
              $stmt = $conn->prepare("SELECT * FROM subject WHERE year_period > 2565 ORDER BY id asc");
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $row) {
              $i++
              ?>
              <tr style="font-size:12px;">
                <td><?= $i;?>) <?= $row['subject_code'];?></td>
                <td><?= $row['subject_nameEN'];?></td>
                <td align="center"><?= $row['term_period'];?></td>
                <td align="center"><?= $row['year_period'];?></td>
                <td align="center"><?= $row['unit_total'];?></td>
                <td align="center"><?= $row['unit_lecture'];?></td>
                <td align="center"><?= $row['unit_workshop'];?></td>
                <td align="center">
                  <?php
                   if($row['setpoint']==1){
                    echo 'ใช่';
                   }else{
                    echo 'ไม่ใช่';
                   }
                  ?>     
                 </td>
                <td></td>
                <td></td>
                <td><center>
                  <div class="container">
                    <p>|<a href="edit/frmeditsubject.php?id=<?= $row['id'];?>"> แก้ไข |</a>

                      <a href="page/deladmin.php?u_id=<?= $row['u_id'];?>" onclick="return confirm('คุณต้องการลบคุณ<?= $row['u_name'];?> ออกจากระบบหรือไม่??!!');" data-toggle="tooltip" title="ลบข้อมูล!">ลบ |</a></p>
                      
                    </div>
                  </td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
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
    <script type="text/javascript">
    new DataTable('#example', {
    responsive: true
    });
    </script>

<?php include 'add/frmaddsubject.php'; ?>
<?php include 'add/uploadcsv.php'; ?>


