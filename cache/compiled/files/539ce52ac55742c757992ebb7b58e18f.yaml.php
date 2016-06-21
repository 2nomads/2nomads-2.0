<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Projects/2nomads/user/themes/2nomads/blueprints.yaml',
    'modified' => 1465785744,
    'data' => [
        'name' => '2nomads',
        'version' => 0.10000000000000001,
        'testing' => true,
        'description' => '**2nomads\'** theme built for **Grav**',
        'icon' => 'empire',
        'author' => [
            'name' => 'Team 2nomads',
            'email' => 'info@2nomads.org',
            'url' => 'http://2nomads.org'
        ],
        'homepage' => 'https://2nomads.org',
        'demo' => 'http://2nomads.org',
        'keywords' => '2nomads, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://2nomads.org',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
