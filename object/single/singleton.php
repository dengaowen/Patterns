<?php
/**
 * Created by PhpStorm.
 * User: xiaowenzi
 * Date: 2018/4/2
 * Time: 10:46
 */

/**
 * 单例模式
 * 问题： 假设有一个用于保存应用程序信息的Preferences类。
 * 1、Preferences对象应该可以被系统中的任何对象使用。
 * 2、Preferences对象不应该被储存在会被覆写的全局变量中。
 * 3、系统中不应超过有个Preferences对象。
 */

/**
 * 实现
 * 可以从强制控制对象的实例化开始。创建一个无法从其自身外部来创建实例的类
 */

//class Preferences{
//    private $props = array();
//
//    private function __construct()
//    {
//    }
//
//    public function setProperty($key,$val)
//    {
//        $this->props[$key] = $val;
//    }
//
//    public function getProperty($key)
//    {
//        return $this->props[$key];
//    }
//}
/**
 * 该类由于构造方法私有，故完全不可用
 * 可使用静态方法和静态属性来间接实例化对象
 */

class Preferences{
    private $props = array();
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(empty(self::$instance)){
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty($key,$val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty($key)
    {
        return $this->props[$key];
    }
}
/**
 * 直接访问该类的getInstance方法
 */


