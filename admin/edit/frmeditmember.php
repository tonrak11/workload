<?php
if(isset($_GET['id'])){
require_once '../../includes/connect.php';
$stmt = $conn->prepare("SELECT * FROM member WHERE id=?");
$stmt->execute([$_GET['id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
if($stmt->rowCount() < 1){
header('Location: ../member.php');
exit();
}
}//isset
?>
<?php include '../include/state.php'; ?>
<?php include '../include/head.php'; ?>
</head>
<body>
<?php include 'include/header.php'; ?>
<!-- ======= Hero Section ======= -->
<section class="d-flex align-items-center">
  <div class="container">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-left" style="margin-top: 60px;">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-left">
        <h5 style="color:green;" align="center"><b> โปรแกรมประเมินภาระงาน</b></h5>
      </div>
    </div>
    
    <div class="row icon-boxes">
      <div class="col-sm-12 col-md-12 col-lg-12 align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title"><b><i class="fa fa-gear fa-spin" style="font-size:24px"></i> แก้ไขรายชื่อ</b></h5>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <form action="editmember.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="modal-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">รหัสพนักงาน</span>
                  </div>
                  <input type="text" class="form-control" name="pid" readonly value="<?= $row['pid'];?>">
                </div>
              </div>
              <div class="modal-body">
                <div class="form-group mb-3">
                  <div class="form-group">
                    <label for="prename">คำนำหน้า</label>
                    <select class="form-control" id="prename" name="prename">
                      <option value="<?= $row['prename'];?>"><?= $row['prename'];?></option>
                      <option value="อาจารย์">นาย</option>
                      <option value="อาจารย์">นาง</option>
                      <option value="อาจารย์">นางสาว</option>
                      <option value="อาจารย์">อาจารย์</option>
                      <option value="อาจารย์ ดร.">อาจารย์ ดร.</option>
                      <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
                      <option value="ผู้ช่วยศาสตราจารย์ ดร.">ผู้ช่วยศาสตราจารย์ ดร.</option>
                      <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
                      <option value="รองศาสตราจารย์ ดร.">รองศาสตราจารย์ ดร.</option>
                      <option value="ศาสตราจารย์">ศาสตราจารย์</option>
                      <option value="ศาสตราจารย์ ดร.">ศาสตราจารย์ ดร.</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">ชื่อ</span>
                  </div>
                  <input type="text" class="form-control" name="firstnameTH" value="<?= $row['firstnameTH'];?>">
                  <div class="input-group-prepend">
                    <span class="input-group-text">นามสกุล</span>
                  </div>
                  <input type="text" class="form-control" name="lastnameTH" value="<?= $row['lastnameTH'];?>">
                </div>
              </div>
              <div class="modal-body">
                <div class="form-group mb-3">
                  <div class="form-group">
                    <label for="office_id">สังกัด</label>
                    <select class="form-control" id="office_id" name="office_id">
                      <option value="<?= $row['office_id'];?>">--------------กรุณาเลือกสังกัด--------------</option>
                      <?php
                      require_once '../../includes/connect.php';
                      $select_type = $conn->prepare("SELECT * FROM member_office");
                      $select_type->execute();
                      ?>
                      <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                      <option value="<?php echo $row_type['auto_id'] ?>"><?php echo $row_type['title'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="modal-body">
                <div class="form-group mb-3">
                  <div class="form-group">
                    <label for="groupid">หน่วยงาน</label>
                    <select class="form-control" id="groupid" name="groupid">
                      <option value="<?= $row['groupid'];?>">--------------กรุณาเลือกหน่วยงาน--------------</option> 
                      <?php
                      require_once '../../includes/connect.php';
                      $select_type = $conn->prepare("SELECT * FROM `group`");
                      $select_type->execute();
                      ?>
                      <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                      <option value="<?php echo $row_type['id'] ?>"><?php echo $row_type['groupname'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="modal-body">
                <div class="form-group mb-3">
                  <div class="form-group">
                    <label for="role">สิทธิ์การใช้งาน</label>
                    <select class="form-control" id="role" name="role">
                      <option value="<?= $row['role'];?>"><?= $row['role'];?></option> 
                      <option value="admin">admin</option>
                      <option value="moderator">moderator</option>
                      <option value="user">user</option>
                    </select>
                  </div>
                </div>
              </div>
              <input type="text" hidden name="id" value="<?= $row['id'];?>">
              <hr>
              <center><button type="submit" class="btn btn-primary">บันทึก</button>
              <a href="../member.php" class="btn btn-secondary">ยกเลิก</a></center>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section><!-- End Hero -->
  <br><br><br>
  <!-- ======= Footer ======= -->
  <?php include '../include/footer.php'; ?>
  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>