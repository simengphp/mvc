<?php
	function C($name, $method){
		require_once('/libs/controller/'.$name.'Controller.class.php');
        $controller = $name.'Controller';
        $obj = new $controller();
        $obj->$method();
	}

	function M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		//$testModel = new testModel();
        $str = $name."Model";
		$obj = new $str();
		return $obj;
	}
	
	function V($name){
		require_once('/libs/View/'.$name.'View.class.php');
		//$testView = new testView();
        $str = $name."View";
		$obj = new $str();
		return $obj;
	}
	
	function ORG($path, $name, $params=array()){
		require_once('libs/ORG/'.$path.$name.'.class.php');
		//eval('$obj = new '.$name.'();');
		$obj = new $name();
		if(!empty($params)){
		foreach($params as $key=>$value){
				//eval('$obj->'.$key.' = \''.$value.'\';');
				$obj->$key = $value;
			}
		}
		return $obj;
	}

	
	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}

