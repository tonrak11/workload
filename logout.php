<?php
session_start();
session_destroy();
header("Location: index.php");	
?>
<!-- <?
	session_start();
	session_register('ses_user');
	session_register('ses_fullname');
	session_register('ses_group');
	session_register('permission');

	$_SESSION['ses_user']="";
	$_SESSION['ses_fullname']="";
	$_SESSION['ses_group']=0;
	$_SESSION['permission']= '{"group":"guest","adminmenu":0,"teachermenu":0,"importST":0}';

	header("Location: index.php");
?> -->