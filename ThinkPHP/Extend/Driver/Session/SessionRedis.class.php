<?php

//自定义REDIS 处理SESSION 驱动
/*
Class SessionRedis {

	//REDIS链接对象
	Private $redis;

	Public function execute () {
		session_set_save_handler(
			array(&$this, 'open'),
			array(&$this, 'close'),
			array(&$this, 'read'),
			array(&$this, 'write'),
			array(&$this, 'destroy'),
			array(&$this, 'gc')
			);
	}

	Public function open ($path, $name) {
		$this->redis = new Redis();
		return $this->redis->connect(C('REDIS_HOST'), C('REDIS_PORT'));
	}

	Public function close () {

	}

	Public function read ($id) {
		
	}

	Public function write ($id, $data) {
		
	}

	Public function destroy ($id) {
		
	}

	Public function gc ($maxLifeTime) {
		
	}

}

*/
?>