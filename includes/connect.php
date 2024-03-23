<?php
$servername = "localhost";
$username = "root";
$password = ""; //
try {
$conn = new PDO("mysql:host=$servername;dbname=workload;charset=utf8", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
// if ($_SESSION != NULL) {
// $stmt = $conn->prepare("SELECT * FROM tb_user WHERE username = '".$_SESSION['username']."'");
// $stmt->execute();
// $result = $stmt->mysqli_fetch_array();
// }
$yearSet1 = "2567";
$yearSet = "2566";

$montStartBudget = "7";   // ก.ค.
$dayStartBudget = "1";

$montEndBudget = "6";    // มิ.ย.
$dayEndBudget = "30";  

$monthNameTH = array("1"=>" มกราคม ","2"=>" กุมภาพันธ์ ","3"=>" มีนาคม ","4"=>" เมษายน ","5"=>" พฤษภาคม ","6"=>" มิถุนายน ","7"=>" กรกฎาคม ","8"=>" สิงหาคม ","9"=>" กันยายน ","10"=>" ตุลาคม ","11"=>" พฤศจิกายน ","12"=>" ธันวาคม ");
$termStartTH = $dayStartBudget.$monthNameTH[$montStartBudget].($yearSet-1);
$termEndTH = $dayEndBudget.$monthNameTH[$montEndBudget].$yearSet;


$homepage_contact = "* หากพบปัญหาด้านข้อมูลหรือปัญหาของโปรแกรม <br>กรุณาติดต่อฝ่ายพัฒนาทรัพยากรมนุษย์ <b>โทร. 3011</b>";
$homepage_updated_wording = "ปรับปรุงโปรแกรมครั้งล่าสุด เมื่อวันที่ 19 เมษายน 2566, นายประภาส บุญสุข ผู้พัฒนาโปรแกรม";
//$link = mysql_connect($host,$host_user,$host_pass);
//mysql_select_db($databasename, $link);

//include 'function.php';

 
//$TEMPLATE_PATH = "./";
//$CLASS_TEMPLATE = "./class.FastTemplate.php";


?>