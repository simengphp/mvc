<?php
	//url访问模式  index.php?controller=控制器&method=方法名
	require_once('function.php');
	require_once('config.php');
	$view = ORG('Smarty/', 'Smarty', $viewconfig);
	$controller = $_GET['controller'];
	$method = $_GET['method'];
	C($controller, $method);
