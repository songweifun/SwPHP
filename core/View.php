<?php
/**
 * 视图类
 * Created by PhpStorm.
 * User: daivd
 * Date: 2017/5/30
 * Time: 下午8:52
 */
namespace core;
class View{
    //模板文件
    protected $file;
    //模板变量
    protected $vars=[];//空数组

    /**
     * 分配模板的方法
     * @param $file view下的模板文件的名称
     * @return $this 实例化的对象
     */
    public function make($file){
        $this->file='view/'.$file.'.html';
        //返回这个类的对象，当视图打印这个对象时会自动调用下面的tostring方法
        return $this;
    }

    /**
     * 分配模板变量的方法
     * @param $name 变量名
     * @param $value 变量值
     * @return $this
     */
    public function with($name,$value){
        $this->vars[$name]=$value;
        return $this;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        extract($this->vars);//将数组下标作为变量名 将值作为变量值并分配到内存 必须要放到下面的include之上
        include $this->file;

        return '';
    }

}