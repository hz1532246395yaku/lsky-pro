<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 下午4:00
 * Link: http://gitee.com/wispx
 */

namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}