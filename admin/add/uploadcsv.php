<div class="modal fade" id="uploadfile">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-success">
        <h4 class="modal-title"><i class="fa fa-plus-circle"></i> เพิ่มชุดข้อมูล</h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
      </div>
        <div class="container">
          <table class="table table-borderless">
            <tbody style="font-size: 13px;">
              <tr>
                <td width="15%"><b>คำอธิบาย</b></td>
                <td>การ Import ข้อมูลรายวิชา สามารถทำได้ตามขั้นตอนดังนี้</td>
              </tr>
              <tr>
                <td></td>
                <td><b>1.</b> การเตรียมข้อมูลเป็นไฟล์ CSV ต้องเปิดไฟล์ที่ต้องการ Import จากนามสกุล .xlsx เป็น นามสกุล .CSV (Comma delimited)(*.csv) ก่อนทำการอัพ</td>
                </tr>
                <tr>
                <td></td>
                <td><b>2.</b> จากนั้นคลิ๊กขวาที่ไฟล์ CSV ที่จะทำการอัพโหลดเลือก Open with และเลือกเปิดด้วยโปรแกรม Notepad</td>
                </tr>
                <tr>
                <td></td>
                <td><b>3.</b> เมื่อเปิดด้วยโปรแกรม Notepad แล้วกดบันทึกข้อมูลด้วยโปรแกรม Notepad เลือกเซฟแบบ Save as ช่อง Encoding เปลี่ยนจาก ANSI เป็น UTF-8 จากนั้นกด Save (ถ้าไม่เลือกเป็น UTF-8 ตัวหนังสือที่เป็นภาษาไทยจะเด้งเป็นภาษาต่างดาว)</td>
                </tr>
                <tr>
                <td></td>
                <td><b>4.</b> จากนั้นกดปุ่ม "เลือกไฟล์ CSV เพื่ออัพโหลด" และเลือกไฟล์ที่ต้องการ Import </td>
                </tr>
                <tr>
                <td></td>
                <td><b>5.</b> คลิ๊กปุ่ม อัพโหลด เพื่อ Import และบันทึกข้อมูล</td>
              </tr>
            </tbody>
          </table>
        </div>
      <form action="add/upload.php" method="post" enctype="multipart/form-data">
        <!-- Modal body -->
        
        <!-- Select CSV file to upload: -->
        <div class="row p-2">
          <div class="col-9">
            <label for="fileToUpload" class="btn btn-success btn-sm btn-block btn-outlined"> เลือกไฟล์ CSV เพื่ออัพโหลด <i class="fa fa-cloud-upload"></i></label>
            <input type="file" class="btn btn-outline-success" name="fileToUpload" id="fileToUpload" style="display: none" required>
          </div>
          <div class="col-3">
            <button class="btn btn-outline-primary btn-sm btn-block" type="submit" name="submit">อัพโหลด</button>
            <!-- <input class="btn btn-outline-primary" type="submit" value="อัพโหลด" name="submit"> -->
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <!-- <button type="submit" class="btn btn-outline-primary">บันทึก</button> -->
          <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">ปิด</button>
        </div>
      </form>
    </div>
  </div>
</div>