<?php
return array(
	//数据库配置
	'DB_TYPE' => 'mysql',		//数据库类型
	'DB_HOST' => 'localhost',	//服务器地址
	'DB_NAME' => 'db_database18', //数据库名
	'DB_USER' => 'root',		//用户名
	'DB_PWD' => '086159',		//密码
	'DB_PORT' => '3306',		//端口
	'DB_PREFIX' => 'tb_',	//数据表前缀
	'DB_CHARSET' => 'utf8',		//数据库编码
	//开启追踪模式
	'SHOW_PAGE_TRACE' => true,
	//启用模板布局
	'LAYOUT_ON' => true,
	'LAYOUT_NAME' => 'layout',
	//配置URL模式为REWRITE
	'URL_MODEL' =>2,
	//定义允许访问的模块列表
	'MODULE_ALLOW_LIST' => array('Kindergarten','Teacher','Student','Home'),
);