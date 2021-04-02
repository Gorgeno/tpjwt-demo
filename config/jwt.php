<?php

return [
    'stores' => [
        'api' => [
            'sso' => [
                'enable' => false,
            ],
            'token' => [
                'unique_id_key'    => 'uid',
                'signer_key'    => 'W4gRnJhbmNpc2NvMRkwFwYDVQQKExBDbG91ZEZohZWHQkt0YNUJS88fn0BMslQN',
                'not_before'    => 0,
                'expires_at'    => 3600,
                'refresh_ttL'   => 7200,
                'signer'       => 'Lcobucci\JWT\Signer\Hmac\Sha512',
                'type'         => 'Header',
                'relogin_code'      => 50001,
                'refresh_code'      => 50002,
                'iss'          => 'client.tant',
                'aud'          => 'server.tant',
                'automatic_renewal' => false,
            ],
            'user' => [
                'bind' => true,
                'class'  => \app\api\model\User::class,
            ]
        ],
        'admin' => [
            'sso' => [
                'enable' => false,
            ],
            'token' => [
                'unique_id_key'    => 'id',
                'signer_key'    => 'PmXadpEWXNkRiGnC6ZVVPei+RihRANCAATvTvZZ4P5FcjAXy5EwPiR4GOJAgEG',
                'not_before'    => 0,
                'expires_at'    => 3600,
                'refresh_ttL'   => 7200,
                'signer'       => 'Lcobucci\JWT\Signer\Hmac\Sha512',
                'type'         => 'Header',
                'relogin_code'      => 50001,
                'refresh_code'      => 50002,
                'iss'          => 'client.tant',
                'aud'          => 'server.tant',
                'automatic_renewal' => false,
            ],
            'user' => [
                'bind' => true,
                'class'  => \app\admin\model\Admin::class,
            ]
        ]
    ],
    'manager' => [
        // 缓存前缀
        'prefix' => 'jwt',
        // 黑名单缓存名
        'blacklist' => 'blacklist',
        // 白名单缓存名
        'whitelist' => 'whitelist'
    ]
];
