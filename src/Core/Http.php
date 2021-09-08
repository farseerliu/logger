<?php

namespace FarseerLiu\Logger;

use GuzzleHttp\Client;

class Http
{
    /**
     * 处理Http请求
     *
     * @param $method
     * @param $args
     * @return array|mixed
     */
    static public function __callStatic($method, $args)
    {
        $url = $args[0] ?? "";
        $param = $args[1] ?? [];
        $http = new Client();
        $data = [
            'headers' => $args[2] ?? []
        ];
        switch ($method) {
            case 'get':
                if (!empty($param)) {
                    $data['form_params'] = $param;
                }
                break;
            case 'post':
                $data['json'] = $param;
                break;
        }

        try {
            $response = $http->$method($url, $data);
            return json_decode((string)$response->getBody(),true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return array(
                'error_code' => $e->getCode(),
                'error' => $e->getResponse()->getBody()->getContents()
            );
        }
    }
}
