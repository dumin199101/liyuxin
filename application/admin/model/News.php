<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/17
 * Time: 10:41
 */

namespace app\admin\model;



use think\Model;

class News extends Model
{
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
}