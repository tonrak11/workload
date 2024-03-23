<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />

<title>คณะสถาปัตยกรรมศาสตร์และการผังเมือง มหาวิทยาลัยธรรมศาสตร์</title>

<style type="text/css">
<!--
BODY {

	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

	/*FONT-SIZE: 12px;*/
	FONT-FAMILY: Tahoma, Arial, Verdana, Helvetica, sans-serif, "Lucida Grande";
	/*font-family: 'thai_sans_literegular', Tahoma, sans-serif;*/
	font-weight: normal;
	font-style: normal;
	/*font-size: 10px;*/
	/*letter-spacing: 0.5px;*/
}

body,td,th {
	color: #333333;
}

-->
</style>

<link href="theme/default/tpl/style.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/jquery.ui.datepicker-th.js"></script>

</head>

<body>
<?

############< Initial Page ##############
#page.php?g=budgetout&a=editform&id=
include "includes/header.inc.php";
include "includes/function.php";
include "includes/global_session.php";
############ Initial Page >##############

$uid			= $_GET['uid'];

if(auto_register_member($uid)){

	echo "<br>Completed!!!";
	
}else{
	
	echo "Sorry, It's not complete!!!";
}

?>

</body>
</html>
<script>
/*		popdatepicker(); */
</script>