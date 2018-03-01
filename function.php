<?php
/**创建几个函数  C M V
 * Created 思梦php
 * User: 思梦php
 * Date: 2018/3/1
 * Time: 15:11
 */

/**定义C函数，负责调度
 * @author crazy
 * @time 2018-03-01
 * @param $controller 控制器名称
 * @param $method 方法
 */
function C($controller,$method){
    /**require这个引入方法，如果文件不存在会报致命错误，但是include不会*/
    require_once('/libs/Controller/'.$controller.'Controller.class.php');
    $str = $controller.'Controller';
    $obj = new $str();
    $obj->$method();
}


/**定义M函数，负责调度
 * @author crazy
 * @time 2018-03-01
 * @param $name Model方法名
 */
function M($name){
    require_once('/libs/Model/'.$name."Model.class.php");
    $str = $name."Model";
    return new $str();
}


/**定义V函数，负责调度
 * @author crazy
 * @time 2018-03-01
 * @param $name 视图方法名
 */
function V($name){
    require_once('/libs/View/'.$name."View.class.php");
    $str = $name."View";
    return new $str();
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

