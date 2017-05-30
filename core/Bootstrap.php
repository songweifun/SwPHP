<?php
/**
 * Created by PhpStorm.
 * User: daivd
 * Date: 2017/5/14
 * Time: 下午11:06
 */
namespace core;
class Bootstrap{
    public static function run(){
        self::parseUrl();
    }

    //分析url ?s=Index/show
    public static function parseUrl(){
        ///dd($_SERVER);

        if (isset($_GET['s'])){
            //分析
            $info=explode('/',$_GET['s']);
            //dd($info);
            $class='\web\controller\\'.ucfirst($info[0]);
            $action=$info[1];
        }else{
            //默认
            $class='\web\controller\Index\\';
            $action='show';
        }
        //实例化类并执行方法
        (new $class())->$action();

    }
}