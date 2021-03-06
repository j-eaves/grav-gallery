<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/catherder/My_WebApps/grav-admin_quark_theme/user/themes/cardstack/blueprints.yaml',
    'modified' => 1548858405,
    'data' => [
        'name' => 'Cardstack',
        'version' => '1.1.3',
        'description' => 'Cardstack is a single page application theme for **Grav** CMS powered with Backbonejs and UI Kit',
        'icon' => 'list-alt',
        'author' => [
            'name' => 'Daniel James',
            'email' => 'danieljames@chiefqualakon.net',
            'url' => 'http://chiefqualakon.net'
        ],
        'homepage' => 'https://github.com/khanduras/grav-theme-cardstack',
        'demo' => 'http://demos.chiefqualakon.net/cardstack',
        'keywords' => 'theme, backbone, uikit, jquery, cardstack, cards',
        'bugs' => 'https://github.com/khanduras/grav-theme-cardstack/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default language',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'continueLinkIcon' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Continue Link Icon',
                    'validate' => NULL
                ],
                'link_section' => [
                    'type' => 'section',
                    'title' => 'Cardview Columns',
                    'underline' => true
                ],
                'cardview.columns.small' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Small',
                    'default' => 1,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'cardview.columns.medium' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Medium',
                    'default' => 2,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'cardview.columns.large' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Large',
                    'default' => 3,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'cardview.columns.xlarge' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'X Large',
                    'default' => 3,
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
