<?php
/**
 * Created by PhpStorm.
 * User: xiaowenzi
 * Date: 2018/4/3
 * Time: 11:23
 */
/**
 * 使用工厂来产生一组相关的类
 */
/**
 * 加入待办事宜和联系人
 */

//预约、待办事宜和联系人的编码
abstract class ApptEncoder
{
    abstract function encode();
}

abstract class ThdEncoder
{
    abstract function encode();
}

abstract class ContactEncoder
{
    abstract function encode();
}

//不同编码的实现
class BloggsApptEncoder extends ApptEncoder
{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Appointment data encode in BloggsCal format\n";
    }
}

class BloggsThdEncoder extends ThdEncoder
{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Thd data encode in BloggsCal format\n";
    }
}

class BloggsContactEncoder extends ContactEncoder
{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Contact data encode in BloggsCal format\n";
    }
}

class MegaApptEncoder extends ApptEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Appointment data encode in MegaCal format\n";
    }
}

class MegaThdEncoder extends ThdEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Thd data encode in MegaCal format\n";
    }
}

class MegaContactEncoder extends ContactEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Contact data encode in MegaCal format\n";
    }
}

//得到编码对象
abstract class CommsManager{
    abstract function getHeaderText();
    abstract function getThdEncoder();
    abstract function getContactEncoder();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager{
    function getHeaderText()
    {
        // TODO: Implement getHeaderText() method.
        return "BloggsCal header\n";
    }

    function getApptEncoder()
    {
        // TODO: Implement getApptEncoder() method.
        return new BloggsApptEncoder();
    }

    function getThdEncoder()
    {
        return new BloggsThdEncoder();
    }

    function getContactEncoder()
    {
        return new BloggsContactEncoder();
    }

    function getFooterText()
    {
        // TODO: Implement getFooterText() method.
        return "BloggsCal footer\n";
    }
}

class MegaCommsManager extends CommsManager{
    function getHeaderText()
    {
        // TODO: Implement getHeaderText() method.
        return "MegaCal header \n";
    }

    function getApptEncoder()
    {
        // TODO: Implement getApptEncoder() method.
        return new MegaApptEncoder();
    }

    function getThdEncoder()
    {
        return new MegaThdEncoder();
    }

    function getContactEncoder()
    {
        return new MegaContactEncoder();
    }

    function getFooterText()
    {
        // TODO: Implement getFooterText() method.
        return "MegaCal footer\n";
    }
}