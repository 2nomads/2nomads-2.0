<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://nomad/nomad.yaml',
    'modified' => 1466722847,
    'data' => [
        'enabled' => true,
        'color' => 'blue',
        'dropdown' => [
            'enabled' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/nomad',
                            1 => 'user/themes/boxify'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
