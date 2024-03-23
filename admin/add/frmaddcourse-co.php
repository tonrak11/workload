    <form>
      <div class="modal fade" id="course">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header bg-success">
              <h4 class="modal-title" style="color:#fff;"><i class="fa fa-plus-circle"></i> เพิ่มผู้ประสานรายวิชา</h4>
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            
            <!-- Modal body -->

            <div class="modal-body">
              <div class="form-group mb-3">
                 <div class="form-group">
                <label for="office_id">รายวิชา</label>
                <select class="form-control" id="office_id" name="office_id" required>
                  <option selected disable value="">--------------กรุณาเลือกรายวิชา--------------</option>
                  <?php
                    require_once '../includes/connect.php';
                    $select_type = $conn->prepare("SELECT * FROM subject");
                    $select_type->execute();
                    ?>
                    <?php while($row_type1=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row_type1['subject_code'] ?>">[<?php echo $row_type1['term_period'] ?>/<?php echo $row_type1['year_period'] ?>] <?php echo $row_type1['subject_code'] ?>: <?php echo $row_type1['subject_nameEN'] ?></option>
                    <?php } ?>
                </select>
              </div>
              </div>
            </div>

            <div class="modal-body">
              <div class="form-group mb-3">
                 <div class="form-group">
                <label for="office_id">เลือกผู้ประสานรายวิชา</label>
                <select class="form-control" id="teacher_id" name="teacher_id" required>
                  <option selected disable value="">--------------กรุณาเลือกผู้ประสานรายวิชา--------------</option>
                  <?php
                    require_once '../includes/connect.php';
                    $select_type = $conn->prepare("SELECT * FROM member WHERE pid LIKE '%160%' ");
                    $select_type->execute();
                    ?>
                    <?php while($row_type=$select_type->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row_type['pid'] ?>"><?php echo $row_type['pid'] ?>: <?php echo $row_type['prename'] ?><?php echo $row_type['firstnameTH'] ?> <?php echo $row_type['lastnameTH'] ?></option>
                    <?php } ?>
                </select>
              </div>
              </div>
            </div>

            <div class="modal-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">จำนวนนักศึกษา</span>
                </div>
                <input type="number" class="form-control" name="st_reg" placeholder="ใส่จำนวนนักศึกษา" required>
              </div>
            </div>   
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary">บันทึก</button>
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
    </form>