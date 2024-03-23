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
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h5 style="color:green;"><b>ข้อมูลการเบิกจ่ายเงินของอาจารย์พิเศษ</b></h5>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12">
          <a href="" title="" data-toggle="modal" data-target="#uploadfilebudget" style="color:green;">| <i class="fa fa-cloud-upload"></i> Import ค่าสอน</a>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <a href="" title="" data-toggle="modal" data-target="#uploadfilespecial" style="color:green;">| <i class="fa fa-cloud-upload"></i> Import ข้อมูลอาจารย์พิเศษ|</a>
        </div>
      </div>
      
      <div class="row icon-boxes" style="margin-top: 20px;">
        <div class="col-sm-12 col-md-12 col-lg-12 align-items-stretch mb-5 mb-lg-0">
          <table id="example" class="table" role="grid" aria-describedby="example1_info" style="width:100%">
            <thead thead class="thead-light" style="font-size: 12px;">
              <tr align="center" style="font-size: 12px;">
                <th width="3%">เทอม</th>
                <th width="5%">ปี</th>
                <th width="20%" class="text-center">คำอธิบาย</th>
                <th width="5%">เดือนข้อมูล</th>
                <th width="7%">ปีข้อมูล</th>
                <th width="8%">Import โดย</th>
                <th width="8%">เวลา Import</th>
                <th width="5%"><center>จัดการ</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              //คิวรี่ข้อมูลมาแสดงในตาราง
              require_once '../includes/connect.php';
              $stmt = $conn->prepare("SELECT * FROM tdata_Import WHERE im_year_data >= 2565");
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $row) {
              $i++
              ?>
              <tr style="font-size:12px;">
                <td><?= $i;?>) <?= $row['im_term'];?></td>
                <td><?= $row['im_year'];?></td>
                <td align="center"><?= $row['im_title'];?></td>
                <td align="center"><?= $row['im_month_data'];?></td>
                <td align="center"><?= $row['im_year_data'];?></td>
                <td align="center"><?= $row['im_by'];?></td>
                <td align="center"><?= $row['im_updatetime'];?></td>
                <td><center>
                  <div class="container">
                    <p>|<a href="page/deladmin.php?u_id=<?= $row['u_id'];?>" onclick="return confirm('คุณต้องการลบคุณ<?= $row['u_name'];?> ออกจากระบบหรือไม่??!!');" data-toggle="tooltip" title="ลบข้อมูล!">ลบ |</a></p>
                      
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
<?php include 'add/uploadfilebudget.php'; ?>
<?php include 'add/uploadfilespecial.php'; ?>


