<?php
/**
 * Created by PhpStorm.
 * User: daivd
 * Date: 2017/5/30
 * Time: 下午8:12
 */
namespace web\controller;
use core\View;

class Index{
    protected $view;
    public function __construct()
    {
        //构造函数为每一个控制器实例化视图
        $this->view=new View();
    }

    public function show(){
        //返回一个对象 当时图打印一个对象时会自动调用to_string方法
        return $this->view->make('index')->with('version',1.0);
    }

    public function add(){
        echo 'add';
    }
}
