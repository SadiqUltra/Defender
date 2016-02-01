<?php
session_start();
if( ! isset($_SESSION['login_file_access'])){
	$have_access = FALSE;
}elseif ($_SESSION['login_file_access'] == '34t23948tu239847ty2o3489wo498t') {
	$have_access = TRUE;
}else{
	$have_access = FALSE;
}

//echo "checking access";
//var_dump($_SESSION);
?>