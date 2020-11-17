<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$s=$obj->shop($district,$taluk,$panchayath);
$smartyObj->assign('view1',$s);		
$smartyObj->display('viewshops.tpl');
}
?>