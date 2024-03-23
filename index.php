<?php session_start();?>
<?php
include "includes/connect.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<title>ระบบการจัดการข้อมูลคณะสถาปัตยกรรมศาสตร์และการผังเมือง</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="user/assets/img/logo/favicon.ico" rel="icon">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">ประจำปีงบประมาณ ๒๕๖๗</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-7">
						<div class="login-wrap">
							<form method="POST" action="index.php" class="signin-form d-md-flex">
								<div class="half p-4 py-md-5">
									<div class="w-100">
										<img src="images/logo-tu1.png" width="100%" alt="">
									</div>
									<div class="form-group mt-3">
										<label class="label" for="name">Username</label>
										<input type="text" class="form-control" placeholder="กรอกรหัสพนักงาน" id="username" name="username">
									</div>
									<div class="form-group">
										<label class="label" for="password">Password</label>
										<input id="password" type="password" class="form-control" placeholder="กรอกรหัสผ่าน" name="password">
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
								</div>
								<div class="half p-4 py-md-5 bg-danger">
									<div class="form-group">
										<button class="form-control btn btn-success rounded submit px-3" type="submit" id="submit1">Login </button>
										
									</div>
									<div class="form-group">
										<a href="http://localhost/workload/portal-index.php" title=""><input type="button" class="form-control btn btn-success rounded submit px-3" name="button1" id="button1" value="กลับเมนูหลัก"/></a>
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">
											<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="w-50 text-md-right">
											<a href="http://localhost/workload67/help/wl_aptu.pdf" target="_blank">ช่วยเหลือ <i class="fa fa-question-circle"></i></a>
										</div>
									</div>
									<hr color="white">
									<p class="w-100 text-center" style="color:white;">&mdash; คำแนะนำ &mdash;</p>
									<div class="w-100">
										<div class="d-inline-flex p-1 text-green" style="border-radius:25px;">
											<div class="p-2 bg-light">ใช้รหัสพนักงาน เช่น 160XXXX สำหรับการ login เข้าสู่ระบ</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
<?php
//print_r($_POST); //ตรวจสอบมี input อะไรบ้าง และส่งอะไรมาบ้าง
//ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['username']) && isset($_POST['password']) ){
// sweet alert
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
//ไฟล์เชื่อมต่อฐานข้อมูล
require_once 'includes/connect.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$pid = $_POST['username'];
$password = $_POST['password']; //เก็บรหัสผ่านในรูปแบบ sha1
//check username  & password
$stmt = $conn->prepare("SELECT * FROM member WHERE pid = :pid AND password = :password");
$stmt->bindParam(':pid', $pid);
$stmt->bindParam(':password', $password);
$stmt->execute();
//กรอก username & password ถูกต้อง
if($stmt->rowCount() == 1){
//fetch เพื่อเรียกคอลัมภ์ที่ต้องการไปสร้างตัวแปร session
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//สร้างตัวแปร session
$_SESSION['id'] = $row['id'];
$_SESSION['pid'] = $row['pid'];
$_SESSION['prename'] = $row['prename'];
$_SESSION['firstnameTH'] = $row['firstnameTH'];
$_SESSION['lastnameTH'] = $row['lastnameTH'];
$_SESSION['role'] = $row['role'];
} //else
} //isset

if(@$_SESSION['role']=='admin'){
echo '<script>
setTimeout(function() {
swal({
title: "ล๊อคอินสำเร็จ",
text: "กรุณารอ 3 วินาทีเพื่อเข้าสู่ระบบ",
type: "success",
timer: 3000,
showConfirmButton: false
}, function(){
window.location.href = "admin/index.php";
});
});
</script>';
}elseif(@$_SESSION['role']=='user'){
echo '<script>
setTimeout(function() {
swal({
title: "ล๊อคอินสำเร็จ",
text: "กรุณารอ 3 วินาทีเพื่อเข้าสู่ระบบ",
type: "success",
timer: 3000,
showConfirmButton: false
}, function(){
window.location.href = "user/index.php";
});
});
</script>';
}else{ //ถ้า username or password ไม่ถูกต้อง
echo '<script>
setTimeout(function() {
swal({
title: "เกิดข้อผิดพลาด",
text: "Username หรือ Password ไม่ถูกต้อง ลองใหม่อีกครั้ง",
type: "warning"
}, function() {
window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
});
}, 100);
</script>';
}
$conn = null; //close connect db
?>