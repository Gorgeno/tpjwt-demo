<?php

declare(strict_types=1);

namespace app\api\controller\v1;

use think\facade\Request;
use xiaodi\JWTAuth\Facade\Jwt;
use xiaodi\JWTAuth\Exception\HasLoggedException;
use xiaodi\JWTAuth\Exception\TokenAlreadyEexpired;

class User extends Base
{
    public function logout()
    {
        return 1;
    }
}
