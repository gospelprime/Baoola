<?php
    header("Content-Type: application/json");
	ob_start();
	include("ba-ads.html");
	$homepage = ob_get_contents();
	ob_end_clean();
	$homepage = preg_replace('/^\s+|\n|\r|\s+$/m', '', $homepage);
    echo $_GET['callback'] . '(' . "{'html' : '".$homepage."'}" . ')';
?>