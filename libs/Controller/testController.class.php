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
//			//$testModel = new testModel();
//			$testModel = M('test');
//			$data = $testModel->get();
//			$testView = V('test');
//			$testView -> display($data);
////			$view ->assign('str', 'test');
////			$view ->display('test.tpl');
//
//
//
//
//            echo "<br />";
//            $string = "1qwertyu";
//            echo $string{mt_rand(0,strlen($string)-1)};
//
//
//
//            echo "<br />";
//            echo strncmp("liuzhu","luzhu",2);
//
//            echo "<br />";
//            $arr = ['I','am','liuzhu'];
//            echo implode(" ",$arr);


            try {
                throw new Exception('wrong');
            } catch(Exception $ex) {
                $msg = 'Error:'.$ex->getMessage()."\n";
                $msg.= $ex->getTraceAsString()."\n";
                $msg.= '异常行号：'.$ex->getLine()."\n";
                $msg.= '所在文件：'.$ex->getFile()."\n";
                //将异常信息记录到日志中
                //PHP异常处理之   file_put_contents('error.log', $msg);
            }
		}
	}