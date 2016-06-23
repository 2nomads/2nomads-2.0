<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Projects/2nomads/user/config/plugins/email.yaml',
    'modified' => 1466645095,
    'data' => [
        'enabled' => true,
        'from' => 'info@2nomads.org',
        'to' => 'info@2nomads.org',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
