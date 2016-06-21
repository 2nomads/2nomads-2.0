<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Projects/2nomadstest/wiki/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1461784105,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
