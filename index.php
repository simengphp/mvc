<?php
	//url��ʽ  index.php?controller=��������&method=������
	require_once('function.php');
	require_once('config.php');
	$view = ORG('Smarty/', 'Smarty', $viewconfig);
	$controller = $_GET['controller'];
	$method = $_GET['method'];
	C($controller, $method);
?>