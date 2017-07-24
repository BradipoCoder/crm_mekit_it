<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Allow-Credentials: true");
$res='';
$already_encoded=false;
if ($_REQUEST['param']=='file') {
	header("Content-Type: text/plain");
	$res= file_get_contents('custom/QuickCRM/'.basename($_REQUEST['name']),true);
}
else {
	header("Content-Type: application/javascript");
	$f='mobile'.(isset($_REQUEST['trial'])?'_trial':'').'/fielddefs/';
	if ($_REQUEST['param']=='plugin') {
		if (file_exists('custom/QuickCRM/plugins/'.$_REQUEST['name'])) {
			$res= file_get_contents('custom/QuickCRM/plugins/'.basename($_REQUEST['name']),true);
		}
	}
	elseif ($_REQUEST['param']=='custom') {
		if (file_exists('custom/QuickCRM/config_custom.js')){
			$res = file_get_contents('custom/QuickCRM/config_custom.js',true);
		}
		else $res = '';
		
		$res .= file_get_contents('custom/QuickCRM/custom.js',true);
	}
	elseif ($_REQUEST['param']=='sugar_config') {
		$res .= file_get_contents($f.'../config.js',true);
	}
	else {
		$res= file_get_contents($f.basename($_REQUEST['param']).'.js',true);
	}
}
ob_clean();
if (isset($_REQUEST['to_json'])){
	echo $_GET["jsoncallback"] . '({response: "' . ($already_encoded ? $res : base64_encode($res)) . '"});';
}
else {
	echo ($already_encoded ? base64_decode($res) : $res);
}
die;
