<?php
    header("Content-Type: application/json");
	ob_start();
	include("ba-ads.html");
	$homepage = ob_get_contents();
	ob_end_clean();
	$homepage = preg_replace('/^\s+|\n|\r|\s+$/m', '', $homepage);

	$homepage = str_replace("urlSeminarioMulher", $_GET['urlSeminarioMulher'], $homepage);
	$homepage = str_replace("urlSeminario", $_GET['urlSeminario'], $homepage);
	$homepage = str_replace("urlMetodo15p", $_GET['urlMetodo15p'], $homepage);
	$homepage = str_replace("urlLouvor", $_GET['urlLouvor'], $homepage);
	$homepage = (strtoupper($_GET['charset'])=="UTF-8")? $homepage : utf8_decode($homepage);

    echo $_GET['callback'] . '(' . "{'html' : '". $homepage ."'}" . ')';
?>
