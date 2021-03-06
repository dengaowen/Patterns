<?php
/**
 * Created by PhpStorm.
 * User: xiaowenzi
 * Date: 2018/4/2
 * Time: 11:16
 */

/**
 * 问题
 * 假设有一个关于个人事务管理的项目，其功能之一是管理Appointment对象
 * 我们的业务团队和另一个公司建立了关系，目前需要用一个叫做BloggsCal的格式
 * 和他们交流预约相关的数据。而且业务团队提醒我们将来可能要面对更多的数据格式
 *
 * 1、在代码运行时我们才知道要生成的对象类型；（BolggsApptEncoder或MegaApptEncoder）
 * 2、我们需要能够相对轻松的加入一些新的产品类型；（如一种新业务处理方式SyncML）
 * 3、每一个产品类型都可制定特定的功能。（如getHeaderText()和getFooterText()）
 */


abstract class ApptEncoder
{
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder
{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Appointment data encode in BloggsCal format\n";
    }
}

class MegaApptEncoder extends ApptEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
        return "Appointment data encode in MegaCal format\n";
    }
}

abstract class CommsManager{
    abstract function getHeaderText();
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

    function getFooterText()
    {
        // TODO: Implement getFooterText() method.
        return "MegaCal footer\n";
    }
}