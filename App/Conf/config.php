<?php
return array(
	// 开启应用分组
	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',

	//开启独立分组
	'APP_GROUP_MODE' => 1,
	//开启独立文件夹名称
	'APP_GROUP_PATH' => 'Modules',

	//数据库连接参数
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_PWD' => '367699',
	'DB_NAME' => 'think',
	'DB_PREFIX' => 'hd_',

	//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'ARRAY',

	//模板路径
	'TMPL_FILE_DEPR' => '_',

	//默认过滤函数
	'DEFAULT_FILIER' => 'htmlspecialchars',

	//自定义SESSION 数据库存储
	'SESSION_TYPE' => 'Db',
	//SESSION前缀
	//'SESSION_PREFIX' => 'sess_',
	//'SESSION_TYPE' => 'Redis',

	//REDIS服务器地址
	'REDIS_HOST' => '127.0.0.1',

	//REDIS端口
	'REDIS_PORT' => 6379,

);
?>