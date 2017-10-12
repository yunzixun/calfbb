<?php

session_start();

/**
 * lnmpbao - A PHP Framework For Web Artisans
 *
 * @package  clafbaby
 * @author   牛宝宝技术团队  <baobao@clafbaby.com>
 */

header("Content-type:text/html;charset=utf-8");
$_G = $_GPC = array();
//合并get  与post请求
$_GPC=array_merge($_GET,$_POST);


//载入composer

require __DIR__ . '/../vendor/autoload.php';

/* ========================================================================
 * 常量配置
 * ======================================================================== */
define('DEBUG', true);//调试模式
define('NIUBAOBAO', realpath(__DIR__.'/../'));    // 根目录
//系统路径
define('CORE', NIUBAOBAO . '/framework/');



define('TIME', $_SERVER['REQUEST_TIME']);
define('NIUBAOBAO_VERSION','0.1.0');



//加载类库

include_once CORE .'functions/string.php';
include_once CORE .'functions/database.php';
include_once CORE .'functions/code.php';
//加载核心文件
include_once CORE . 'niubaobao.php';

//注册自动加载
spl_autoload_register('\niubaobao::load');

//加载主配置文件
\Framework\library\conf::G('config');
\Framework\library\conf::G('database');

//如果是多模块,可以通过动态设置module的形式,动态调用不同模块
//if (@isset($_GPC['m'])) {
//    $MODULE_NAME = $_G['config']['ADDONS'].'/'.$_GPC['m'];
//    $MODULE=$_GPC['m'];
//
//} else {
//    $MODULE_NAME = $_G['config']['MASTER'];
//    $MODULE=$_G['config']['MASTER'];
//
//}



//设置默认时区
date_default_timezone_set(\Framework\library\conf::get('TIMEZONE','system'));

//错误提示
if(DEBUG && PHP_SAPI != 'cli') {
    //打开PHP的错误显示
    ini_set('display_errors',true);
    //载入友好的错误显示类  mac 下开发显示有问题，故不采用此模块
//    $whoops = new \Whoops\Run;
//    $errorPage = new \Whoops\Handler\PrettyPageHandler;
//    $errorPage->setPageTitle("出大事啦!!!");
//    $whoops->pushHandler($errorPage);
//    $whoops->register();
} else {
    ini_set('display_errors',false);
}



//开始跑框架
$niubaobao=new \niubaobao;
$niubaobao->run();



