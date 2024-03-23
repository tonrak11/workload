<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>ระบบจัดการฐานข้อมูลวิจัย</title>
        <!-- sweet alert  -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
    <body>
        <?php
        if(isset($_POST['id']) && isset($_POST['pid']) )
        require_once '../../includes/connect.php';
        
        //ประกาศตัวแปรรับค่าจากฟอร์ม
        $id = $_POST['id'];
        $pid = $_POST['pid'];
        $password = $_POST['password'];
        $prename = $_POST['prename'];
        $firstnameTH = $_POST['firstnameTH'];
        $lastnameTH = $_POST['lastnameTH'];
        $groupid = $_POST['groupid'];
        $office_id = $_POST['office_id'];
        $role = $_POST['role'];
        $stmt = $conn->prepare("SELECT id FROM member WHERE pid = :pid");
        $stmt->execute(array(':pid' => $pid));
        //ถ้าชื่อ-นามสกุลซ้ำ ให้เด้งกลับไปหน้าฟอร์ม ปล.ข้อความใน sweetalert ปรับแต่งได้ตามความเหมาะสม
        if($stmt->rowCount() > 0){
        echo '<script>
        setTimeout(function() {
        swal({
        title: "รหัสพนักงานนี้ มีคนใช้งานแล้ว!! ",
        text: "กรุณาใช้ รหัสพนักงานอื่น",
        type: "warning"
        }, function() {
        window.location = "../member.php";
        });
        }, 1000);
        </script>';
        }else{ 
        
        //sql insert
        $stmt = $conn->prepare("INSERT INTO member (pid,password,prename,firstnameTH,lastnameTH,groupid, office_id, role)
        VALUES (:pid, :password, :prename, :firstnameTH, :lastnameTH, :groupid, :office_id, :role)");
        $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':prename', $prename, PDO::PARAM_STR);
        $stmt->bindParam(':firstnameTH', $firstnameTH, PDO::PARAM_STR);
        $stmt->bindParam(':lastnameTH', $lastnameTH, PDO::PARAM_STR);
        $stmt->bindParam(':groupid', $groupid, PDO::PARAM_STR);
        $stmt->bindParam(':office_id', $office_id, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $result = $stmt->execute();
        $conn = null; //close connect db,
        //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
        if($result){
        echo '<script>
        setTimeout(function() {
        swal({
        title: "เพิ่มข้อมูลผู้ใช้งานระบบสำเร็จ",
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
        } //else ของ if result
        } //isset
        ?>
    </body>
</html>