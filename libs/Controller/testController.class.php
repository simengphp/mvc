<?php
	class testController{
		function show(){//�������������ǵ���ģ��,��������ͼ.��ģ�Ͳ������ݴ��ݸ���ͼ.���������ͼȥ��ʾ
			global $view;
			//$testModel = new testModel();
			$testModel = M('test');
			$data = $testModel->get();
			$testView = V('test');
			$testView -> display($data);
//			$view ->assign('str', 'test');
//			$view ->display('test.tpl');
		}
	}