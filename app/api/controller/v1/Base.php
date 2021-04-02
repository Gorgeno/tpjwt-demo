<?php

declare(strict_types=1);

namespace app\api\controller\v1;

use think\facade\Request;
use think\Response;

abstract class Base
{
    /**
     * @param $data
     * @param string $msg
     * @param int $code
     * @param string $type
     * @return Response
     * 返回json参数
     */
    protected function create($data = '', string $msg = '', int $code = 200, string $type = 'json'): Response
    {
        //标准api结构生成
        $result = [
            //状态码
            'code'  => $code,
            //消息
            'msg'   => $msg,
            //数据
            'data'  => $data,
        ];

        //返回api接口
        return Response::create($result, $type);
    }
    /**
     * 404
     *
     * @param string $function_name
     * @param array $arguments
     * @return void
     */
    public function __call(string $function_name, array $arguments)
    {
        return $this->create([], '404 not found', 404);
    }
}
