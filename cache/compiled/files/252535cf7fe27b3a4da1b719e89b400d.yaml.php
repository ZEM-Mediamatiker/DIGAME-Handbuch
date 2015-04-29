<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1430292736,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and'
    ]
];
