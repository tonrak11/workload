<?php include 'include/state.php'; ?>
<?php include 'include/head.php'; ?>
<body style="font-size: 14px;">
  
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
        <div class="col-lg-8 col-md-12 col-sm-12">
          <h5 style="color:green;"><b>รายชื่อาจารย์ผู้ประสานรายวิชา</b></h5>
          <p><u> *คำแนะนำ</u> : การเพิ่มข้อมูลผู้ประสานรายวิชา <a href="subject.php" title=""> ** จำเป็นต้องมีข้อมูลรายวิชาที่เปิดสอนก่อน **</a></p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <a href="" title="" data-toggle="modal" data-target="#course" style="color:green;">| <i class="fa fa-plus-circle"></i> เพิ่มผู้ประสานรายวิชา </a>
          <a href="" title="" data-toggle="modal" data-target="#subject" style="color:green;">| <i class="fa fa-minus-circle"></i> ลบรายวิชาทั้งหมด |</a>
        </div>
      </div>
      
      <div class="row icon-boxes" style="margin-top: 20px;">
        <div class="col-sm-12 col-md-12 col-lg-12 align-items-stretch mb-5 mb-lg-0">
          <table id="example" class="table" role="grid" aria-describedby="example1_info" style="width:100%">
            <thead thead class="thead-light" style="font-size: 14px;">
              <tr align="center">
                <th width="12%">เทอม</th>
                <th width="30%">รายวิชา</th>
                <th width="30%">ผู้ประสานรายวิชา</th>
                <th width="15%">จำนวนนนักศึกษา</th>
                <th width="7%"><center>จัดการ</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              //คิวรี่ข้อมูลมาแสดงในตาราง
              require_once '../includes/connect.php';
              $stmt = $conn->prepare("SELECT member.prename, member.firstnameTH, member.lastnameTH, subject.subject_nameEN, course_co.* FROM course_co LEFT JOIN subject ON course_co.subject_id = subject.subject_code
                LEFT JOIN member ON course_co.teacher_id=member.pid WHERE course_co.year_period = 2565 ORDER BY course_co.id asc");
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach($result as $row) {
              $i++
              ?>
              <tr style="font-size:14px;">
                <td><?= $i;?>) [<?= $row['term_period'];?>/<?= $row['year_period'];?>]</td>
                <td> <?= $row['subject_id'];?>: <?= $row['subject_nameEN'];?></td>
                <td> <?= $row['teacher_id'];?>: <?= $row['prename'];?><?= $row['firstnameTH'];?> <?= $row['lastnameTH'];?></td>
                <td align="center"><?= $row['st_reg'];?></td>
                <td><center>
                  <div class="container">
                    <p><a href="page/deladmin.php?u_id=<?= $row['u_id'];?>" onclick="return confirm('คุณต้องการลบคุณ<?= $row['u_name'];?> ออกจากระบบหรือไม่??!!');" data-toggle="tooltip" title="ลบข้อมูล!">| ลบ |</a></p>
                      
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

<?php include 'add/frmaddcourse-co.php'; ?>
