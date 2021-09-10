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
    public $url;        //请求地址
    public $method;     //请求方法
    public $description;    //描述
    public $data;       //提交数据

    protected $who;
    protected $what;
    protected $where;
    protected $when;
    protected $how;
    protected $log_data;

    public function __construct($who, $what, $where, $how)
    {
        $this->log_data = [
            'who' => [
                'author' => Null,
                'author_type' => ""
            ],
            'what' => [
                'level' => "",
                'domain' => "",
                'event' => "",
            ],
            'where' => [
                'platform' => '',    //queue，command，http_request
                'url' => ''
            ],
            'when' => time(),
            'how' => [
                'method' => '', //post,get,put,delete
                'input_data' => Null,
                'version' => ""
            ]
        ];
    }

    public function toArray($obj)
    {
        $obj = $obj ?? $this;
        $values = get_object_vars($obj);
        $arr = [];
        foreach ($values as $key => $value) {
            $value = (is_array($value)) || is_object($value) ? $this->toArray($value) : $value;
            $arr[$key] = $value;
        }
        return $arr;
    }
}
