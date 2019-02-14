<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/catherder/My_WebApps/grav-admin_quark_theme/user/config/site.yaml',
    'modified' => 1548883508,
    'data' => [
        'title' => 'Jonathan Eaves',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Jonathan',
            'email' => 'jdeaves@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'This is my metadata, but it used to be: (Grav is an easy to use, yet powerful, open source flat-file CMS)'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
