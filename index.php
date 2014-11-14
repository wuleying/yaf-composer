<?php
//内存使用
define('MEMORY_USAGED', memory_get_usage());
//脚本开始运行时间
define('START_TIME', microtime(true));

//Session
session_start();
//与客户机断开终止脚本执行
ignore_user_abort(true);

//根目录地址
define('ROOT_PATH', dirname(__FILE__));
//应用目录地址
define('APPLICATION_PATH', ROOT_PATH . '/application');

//实例化YAF应用对象
$application = new Yaf_Application(ROOT_PATH . '/conf/application.ini');
$application->bootstrap()->run();