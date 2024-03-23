<div class="modal fade" id="member">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header bg-success">
        <h4 class="modal-title" style="color:#fff;"><i class="fa fa-plus-circle"></i> เพิ่มรายชื่อ</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>
      <form action="add/addmember.php" method="POST" enctype="multipart/form-data">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">รหัสพนักงาน</span>
            </div>
            <input type="text" class="form-control" name="pid" placeholder="0000000" required>
            <div class="input-group-prepend">
              <span class="input-group-text">(รหัสพนักงานเป็นตัวเลข เช่น 1601001)</span>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Password</span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="ตั้งรหัสผ่าน" required>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group mb-3">
            <div class="form-group">
              <label for="prename">คำนำหน้า</label>
              <select class="form-control" id="prename" name="prename" required>
                <option value="">--------------กรุณาเลือกคำนำหน้า--------------</option>
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
            <input type="text" class="form-control" name="firstnameTH" required>
            <div class="input-group-prepend">
              <span class="input-group-text">นามสกุล</span>
            </div>
            <input type="text" class="form-control" name="lastnameTH" required>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group mb-3">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <label for="office_id">สังกัด</label>
                  <select class="form-control" id="office_id" name="office_id" required>
                    <option selected disable value="">----กรุณาเลือกสังกัด----</option>
                    <?php
                    require_once '../includes/connect.php';
                    $select_type = $conn->prepare("SELECT * FROM member_office");
                    $select_type->execute();
                    ?>
                    <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row_type['auto_id'] ?>"><?php echo $row_type['title'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <label for="groupid">ประเภทบุคลากร</label>
                  <select class="form-control" id="groupid" name="groupid" required>
                    <option selected disable value="">----กรุณาเลือกประเภทบุคลากร----</option>
                    <?php
                    require_once '../includes/connect.php';
                    $select_type = $conn->prepare("SELECT * FROM `group`");
                    $select_type->execute();
                    ?>
                    <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row_type['id'] ?>"><?php echo $row_type['groupname'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <label for="role">สิทธิ์การใช้งาน</label>
                  <select class="form-control" id="role" name="role" required>
                    <option selected disable value="">----เลือกสิทธิ์การใช้งาน----</option>
                    <option value="admin">admin</option>
                    <option value="moderator">moderator</option>
                    <option value="user">user</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <input type="text" hidden name="id" >
        <!--         <div class="align-center">
          <button type="submit" class="btn btn-outline-primary">บันทึก</button>
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        </div><br>  -->
        <!-- Modal footer -->
        <div class="modal-footer">
          <center><button type="submit" class="btn btn-outline-primary">บันทึก</button>
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button></center>
        </div>
      </form>
    </div>
  </div>
</div>