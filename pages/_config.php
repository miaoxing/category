<?php

return [
    '/admin' => [
        '/categories' => [
            'name' => '分类管理',
            'apis' => [
                [
                    'method' => 'GET',
                    'page' => 'admin-api/categories',
                ],
            ],

            '/new' => [
                'name' => '添加',
                'apis' => [
                    [
                        'method' => 'GET',
                        'page' => 'admin-api/categories/defaults',
                    ],
                    [
                        'method' => 'POST',
                        'page' => 'admin-api/categories',
                    ],
                ],
            ],

            '/[id]' => [
                '/edit' => [
                    'name' => '编辑',
                    'apis' => [
                        [
                            'method' => 'GET',
                            'page' => 'admin-api/categories/[id]',
                        ],
                        [
                            'method' => 'PATCH',
                            'page' => 'admin-api/categories/[id]',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
