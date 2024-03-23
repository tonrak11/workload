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
        <div class="col-lg-10 col-md-12 col-sm-12">
          <h5 style="color:green;"><b>ตรวจสอบการส่งข้อมูลภาระงานของอาจารย์</b></h5>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12">
          <a href="add/frmaddmember.php" title="" data-toggle="modal" data-target="#member"><p style="color:green;"><u>| <i class="fa fa-plus-circle"></i> เพิ่มรายชื่อ |</u></p></a>
        </div>
      </div>
      
      <div class="row icon-boxes" style="margin-top: 20px;">
        <div class="col-sm-12 col-md-12 col-lg-12 align-items-stretch mb-5 mb-lg-0">
          <table id="example" class="table" role="grid" aria-describedby="example1_info" style="width:100%">
            <thead>
              <tr>
                <th width="3%"></th>
                <th width="67%">ชื่อ-สกุล</th>
                <th width="30%"><center>จัดการ</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              //คิวรี่ข้อมูลมาแสดงในตาราง
              require_once '../includes/connect.php';
              // $stmt = $conn->prepare("SELECT* FROM member WHERE pid LIKE '%160%' or groupid=1 ORDER BY id asc");
              $stmt = $conn->prepare("SELECT * FROM member WHERE pid LIKE '%160%' ORDER BY id asc");
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $row) {
              $i++
              ?>
              <tr style="font-size:14px">
                <td align="right"><?= $i;?></td>

                <td><a href="display2.php?id=<?= $row['id'];?>" data-toggle="tooltip" title="กรอกข้อมูลภาระงาน"><?= $row['pid'];?>: <?= $row['prename'];?><?= $row['firstnameTH'];?> <?= $row['lastnameTH'];?></a></td> 

                <td><center>
                  <div class="container">
                    <p>ยังไม่ส่ง |
                      
                      <a href="edit/frmeditmember.php?id=<?= $row['id'];?>">แก้ไข |</a>


                      <a href="delete/delmember.php?id=<?= $row['id'];?>" onclick="return confirm('คุณต้องการลบคุณ<?= $row['firstnameTH'];?> ออกจากระบบหรือไม่??!!');" data-toggle="tooltip" title="ลบข้อมูล!"> ลบ</a>
                      
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
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function (row) {
                    var data = row.data();
                    return 'Details for ' + data[0] + ' ' + data[1];
                }
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
                tableClass: 'table'
            })
        }
    }
});
    </script>

<?php include 'add/frmaddmember.php'; ?>
