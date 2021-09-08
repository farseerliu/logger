<?php

namespace FarseerLiu\Logger;

class Client
{
    protected $log_data;
    /**
     * 设置发送内容
     *
     * @param LogData $log_data
     */
    public function __construct($data)
    {
        $this->log_data = new LogData($data);
    }

    /**
     * 发送消息
     */
    public function send()
    {
        $send_type = config('send_type');
        $this->$send_type();
    }

    /**
     * 同步发送
     */
    public function syncSend()
    {
        $data = $this->log_data;
    }

    /**
     * 异步发送
     */
    public function asyncSend()
    {
        $data = $this->log_data;
    }
}
