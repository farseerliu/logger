<?php

namespace FarseerLiu\Logger\Core;

use Illuminate\Database\Eloquent\Model;

class LogData
{
    public $author;     //作者，$model
    public $author_type;    //作者类型
    public $level;      //日志等级
    public $do;         //干的事情
    public $event;      //事件
    public $time;    //时间
    public $where;      //在哪里发生
    public $url;        //请求地址
    public $method;     //请求方法
    public $description;    //描述
    public $data;       //提交数据


    public function __construct($data)
    {

    }

    public function setAuther()
    {
        if($this->author instanceof Model){
            $this->author = $this->author->toArray();
        }
    }
}
