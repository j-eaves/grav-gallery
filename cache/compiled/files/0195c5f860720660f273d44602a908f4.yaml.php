<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/catherder/My_WebApps/grav-admin_quark_theme/user/themes/bulma-portfolio/blueprints.yaml',
    'modified' => 1549335717,
    'data' => [
        'name' => 'Bulma Portfolio',
        'version' => '0.1.7',
        'description' => 'Bulma Portfolio Theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'John Mica',
            'email' => 'john@johnmica.me'
        ],
        'homepage' => 'https://github.com/JohnMica/grav-theme-bulma-portfolio',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/JohnMica/grav-theme-bulma-portfolio/issues',
        'readme' => 'https://github.com/JohnMica/grav-theme-bulma-portfolio/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'fixed.navigation' => [
                    'type' => 'toggle',
                    'label' => 'Fixed Navigation',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'theme.upload_image' => [
                    'type' => 'file',
                    'label' => 'Upload Images',
                    'destination' => 'theme@:/assets',
                    'autofocus' => false,
                    'multiple' => true,
                    'random_name' => false,
                    'avoid_overwriting' => false,
                    'limit' => 5,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'theme.logo' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/assets',
                    'label' => 'Chose Theme Logo',
                    'preview_images' => true,
                    'accept' => [
                        0 => '.svg',
                        1 => '.png',
                        2 => '.jpg',
                        3 => '.jpeg'
                    ]
                ],
                'theme.favicon' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/images',
                    'label' => 'Theme Favicon',
                    'preview_images' => true,
                    'accept' => [
                        0 => '.jpg',
                        1 => '.png',
                        2 => '.jpeg'
                    ]
                ],
                'footer.copyright' => [
                    'type' => 'text',
                    'label' => 'Footer Copyright'
                ],
                'footer.icon' => [
                    'type' => 'list',
                    'label' => 'Footer Icons',
                    'fields' => [
                        '.name' => [
                            'type' => 'iconpicker',
                            'label' => 'pick icon'
                        ],
                        '.link' => [
                            'type' => 'text',
                            'label' => 'link'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
