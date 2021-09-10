<?php

namespace FarseerLiu\Logger;

use FarseerLiu\Logger\Core\Http;
use FarseerLiu\Logger\Core\Client;

class Logger
{

    public function __construct()
    {
    }

    public function show()
    {
        return Http::get("localhost:9200");
    }

    /**
     * 保存日志
     *
     * @param $level
     *      日志级别类型    info（详情），error（错误），
     * @param $data
     */
    public function save($who, $what, $where, $how)
    {
        $client = new Client($who, $what, $where, $how);
        $client->save();
    }

    protected function config()
    {

    }
}
