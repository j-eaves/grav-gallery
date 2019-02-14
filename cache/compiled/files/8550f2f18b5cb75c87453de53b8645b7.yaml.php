<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://bootstrap-blog/bootstrap-blog.yaml',
    'modified' => 1549335523,
    'data' => [
        'enabled' => true,
        'cdn_enabled' => false,
        'back_to_top_button' => true,
        'favicon' => NULL,
        'navbar' => [
            'image' => NULL,
            'icon' => NULL,
            'style' => 'light',
            'override_page_style' => true,
            'dropdown' => true,
            'sticky' => false
        ],
        'sidebar' => [
            'enabled' => true,
            'align' => 'left',
            'twitter' => [
                'enabled' => true,
                'user' => 'twitter',
                'height' => 600,
                'theme' => 'light'
            ],
            'about' => [
                'enabled' => true,
                'title' => 'About me',
                'content' => 'Some text about you...',
                'page' => NULL
            ]
        ],
        'item' => [
            'show_prev_next' => true,
            'related_pages' => true,
            'category' => 'category',
            'tag' => 'tag'
        ],
        'comments' => [
            'enabled' => false,
            'disqus_shortname' => NULL
        ],
        'footer' => [
            'style' => 'light',
            'text' => 'Bootstrap Blog is <i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by <a href="http://ayozehd.com">Ayoze Hernández Díaz</a>',
            'legal' => NULL
        ]
    ]
];
