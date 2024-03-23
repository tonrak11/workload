    <form>
      <div class="modal fade" id="subject">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header bg-success">
              <h4 class="modal-title" style="color:#fff;"><i class="fa fa-plus-circle"></i> เพิ่มรายวิชา</h4>
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">รหัสรายวิชา</span>
                </div>
                <input type="text" class="form-control" name="subject_code" required>
                <div class="input-group-prepend">
                  <span class="input-group-text">(เช่น UD201)</span>
                </div>
              </div>
            </div>

            <div class="modal-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">ชื่อรายวิชา</span>
                </div>
                <input type="text" class="form-control" name="password" required>
              </div>
            </div>

            <div class="modal-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">เทอม</span>
                </div>
                <input type="number" class="form-control" name="term_peroid" required>
                <div class="input-group-prepend">
                  <span class="input-group-text">ปีการศึกษา</span>
                </div>
                <input type="number" class="form-control" name="year_peroid" required>
              </div>
            </div>

            <div class="modal-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">หน่วยกิจรวม</span>
                </div>
                <input type="text" class="form-control" name="unit_total" required>
                <div class="input-group-prepend">
                  <span class="input-group-text">ชั่วโมง บรรยาย</span>
                </div>
                <input type="text" class="form-control" name="unit_lecture" required>
                <div class="input-group-prepend">
                  <span class="input-group-text">ชั่วโมง ปฏิบัติ</span>
                </div>
                <input type="text" class="form-control" name="unit_workshop" required>
              </div>
            </div>


            <div class="modal-body">
              <div class="form-group mb-3">
                 <div class="form-group">
                <label for="office_id">กำหนดคิดคะแนน</label>
                <select class="form-control" id="office_id" name="office_id" required>
                  <option value="">--------------กรุณาเลือก--------------</option>
                  <option value="1">ใช่</option>
                  <option value="0">ไม่ใช่</option>
                </select>
              </div>
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