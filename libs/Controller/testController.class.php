<?php
/**
 * 负责调度
 * Created by 思梦php
 * User: 思梦php
 * Date: 2018/3/1
 * Time: 15:05
 */

class testController{
        //调度方法
		function show(){
			//$testModel = new testModel();
			$testModel = M('test');
			$data = $testModel->get();
			$testView = V('test');
			$testView -> display($data);
//			$view ->assign('str', 'test');
//			$view ->display('test.tpl');
		}
	}