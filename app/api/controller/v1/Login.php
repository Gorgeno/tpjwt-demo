<?php

declare(strict_types=1);

namespace app\api\controller\v1;

use xiaodi\JWTAuth\Facade\Jwt;
use xiaodi\JWTAuth\Exception\HasLoggedException;
use xiaodi\JWTAuth\Exception\TokenAlreadyEexpired;

class Login extends Base
{
    public function index()
    {
        return json((string)Jwt::token(['uid' => 1]));
    }
}
