<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/catherder/My_WebApps/grav-admin_quark_theme/system/blueprints/config/backups.yaml',
    'modified' => 1549589656,
    'data' => [
        'title' => 'PLUGIN_ADMIN.BACKUPS',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'history_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.BACKUPS_HISTORY',
                    'underline' => true
                ],
                'history' => [
                    'type' => 'backupshistory'
                ],
                'config_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.BACKUPS_PURGE_CONFIG',
                    'underline' => true
                ],
                'purge.trigger' => [
                    'type' => 'select',
                    'label' => 'Backup Storage Purge Trigger',
                    'size' => 'medium',
                    'default' => 'space',
                    'options' => [
                        'space' => 'Maximum Backup Space',
                        'number' => 'Maximum Number of Backups',
                        'time' => 'maximum Rention Time'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'purge.max_backups_count' => [
                    'type' => 'number',
                    'label' => 'Maximum Number of Backups',
                    'default' => 25,
                    'size' => 'x-small',
                    'help' => '0 is unlimited',
                    'validate' => [
                        'min' => 0,
                        'type' => 'number',
                        'required' => true,
                        'message' => 'Must be a number 0 or greater'
                    ]
                ],
                'purge.max_backups_space' => [
                    'type' => 'number',
                    'label' => 'Maximum Backups Space',
                    'append' => 'in GB',
                    'size' => 'x-small',
                    'default' => 5,
                    'validate' => [
                        'min' => 1,
                        'type' => 'number',
                        'required' => true,
                        'message' => 'Space must be 1GB or greater'
                    ]
                ],
                'purge.max_backups_time' => [
                    'type' => 'number',
                    'label' => 'Maximum Rention Time',
                    'append' => 'in Days',
                    'size' => 'x-small',
                    'default' => 365,
                    'validate' => [
                        'min' => 7,
                        'type' => 'number',
                        'required' => true,
                        'message' => 'Rentenion days must be 7 or greater'
                    ]
                ],
                'profiles_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.BACKUPS_PROFILES',
                    'underline' => true
                ],
                'profiles' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => NULL,
                    'classes' => 'backups-list compact',
                    'sort' => false,
                    'fields' => [
                        '.name' => [
                            'type' => 'text',
                            'label' => 'Name',
                            'placeholder' => 'Clear Backup Name',
                            'validate' => [
                                'max' => 20,
                                'message' => 'Name must be less than 20 characters',
                                'required' => true
                            ]
                        ],
                        '.root' => [
                            'type' => 'text',
                            'label' => 'Root Folder',
                            'help' => 'Can be an absolute path or a stream',
                            'placeholder' => '/',
                            'default' => '/',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.exclude_paths' => [
                            'type' => 'textarea',
                            'label' => 'Exclude Paths',
                            'rows' => 5,
                            'placeholder' => '/backup/cache/images/logs/tmp',
                            'help' => 'Absolute paths to exclude, one per line'
                        ],
                        '.exclude_files' => [
                            'type' => 'textarea',
                            'label' => 'Exclude Files',
                            'rows' => 5,
                            'placeholder' => '.DS_Store.git.svn.hg.idea.vscodenode_modules',
                            'help' => 'Specfic Files or Folders to exclude, one per line'
                        ],
                        '.schedule' => [
                            'type' => 'toggle',
                            'label' => 'Enable Scheduled Job',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        '.schedule_at' => [
                            'type' => 'cron',
                            'label' => 'Run Scheduled Job',
                            'default' => '* 3 * * *',
                            'validate' => [
                                'required' => true
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
