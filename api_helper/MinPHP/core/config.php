<?php
defined('API') or exit('http://gwalker.cn');
$host = $_SERVER['HTTP_HOST'];
if($host=="umbrella.zk.com")
{
	$user = "root";
	$pwd = "7777777";
}else
	{
		$user = "umbrella";
		$pwd = "umbrella";
	}
return array(
    //数据库连接配置
    'db'=>array(
        'host' => '127.0.0.1',   //数据库地址
        'dbname' => 'api_shared_umbrella',   //数据库名
        'user' => $user,    //帐号
        'passwd' => $pwd,    //密码
        'linktype' => 'mysqli',    //数据库连接类型 支持mysqli与pdo两种类型
    ),
    //session配置
    'session'=>array(
        'prefix' => 'api_',
    ),
    //cookie配置
    'cookie' => array(
        'navbar' => 'API_NAVBAR_STATUS',
    ),
    //版本信息
    'version'=>array(
        'no' => 'v1.1',  //版本号
        'time' => '2015-08-19 00:40',   //版本时间
    )

);
