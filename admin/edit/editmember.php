<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['id']) && isset($_POST['pid'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
 require_once '../../includes/connect.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$id = $_POST['id'];
$pid = $_POST['pid'];
$prename = $_POST['prename'];
$firstnameTH = $_POST['firstnameTH'];
$lastnameTH = $_POST['lastnameTH'];
$office_id = $_POST['office_id'];
$groupid = $_POST['groupid'];
$role = $_POST['role'];
//sql update
$stmt = $conn->prepare("UPDATE member SET pid=:pid, prename=:prename, firstnameTH=:firstnameTH, lastnameTH=:lastnameTH, office_id=:office_id, groupid=:groupid, role=:role WHERE id=:id");
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':pid', $pid , PDO::PARAM_STR);
$stmt->bindParam(':prename', $prename , PDO::PARAM_STR);
$stmt->bindParam(':firstnameTH', $firstnameTH , PDO::PARAM_STR);
$stmt->bindParam(':lastnameTH', $lastnameTH , PDO::PARAM_STR);
$stmt->bindParam(':office_id', $office_id , PDO::PARAM_INT);
$stmt->bindParam(':groupid', $groupid , PDO::PARAM_STR);
$stmt->bindParam(':role', $role , PDO::PARAM_STR);
$stmt->execute();

// sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

 if($stmt->rowCount() > 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "แก้ไขข้อมูลเรียบร้อยแล้ว",
                  type: "success"
              }, function() {
                  window.location = "../member.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "../member.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
$conn = null; //close connect db
} //isset
?>