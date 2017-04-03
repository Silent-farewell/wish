<?php

//后台首页控制器

Class IndexAction extends CommonAction {

	//后台首页
	Public function index () {
		$this->display();
	}

	//退出登录
	Public function logout () {
		session_unset();
		session_destroy();
		$this->redirect('Admin/Login/index');
	}


}


?>