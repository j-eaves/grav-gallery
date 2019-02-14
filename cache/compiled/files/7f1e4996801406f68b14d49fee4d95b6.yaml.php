<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/catherder/My_WebApps/grav-admin_quark_theme/system/blueprints/config/scheduler.yaml',
    'modified' => 1549589656,
    'data' => [
        'title' => 'PLUGIN_ADMIN.SCHEDULER',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'status_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.SCHEDULER_STATUS',
                    'underline' => true
                ],
                'status' => [
                    'type' => 'cronstatus',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'jobs_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.SCHEDULER_JOBS',
                    'underline' => true
                ],
                'custom_jobs' => [
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => NULL,
                    'classes' => 'cron-job-list compact',
                    'key' => 'id',
                    'fields' => [
                        '.id' => [
                            'type' => 'key',
                            'label' => 'ID',
                            'placeholder' => 'process-name',
                            'validate' => [
                                'required' => true,
                                'pattern' => '[a-zа-я0-9_\\-]+',
                                'max' => 20,
                                'message' => 'ID must be lowercase with dashes/underscores only and less than 20 characters'
                            ]
                        ],
                        '.command' => [
                            'type' => 'text',
                            'label' => 'Command',
                            'placeholder' => 'cd ~;ls -lah;',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.args' => [
                            'type' => 'text',
                            'label' => 'Extra Arguments'
                        ],
                        '.at' => [
                            'type' => 'cron',
                            'label' => 'Run At',
                            'help' => 'Cron formatted "at" syntax',
                            'placeholder' => '* * * * *',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.output' => [
                            'type' => 'text',
                            'label' => 'Output File',
                            'help' => 'The path/filename of the output file (from the root of the Grav installation)',
                            'placeholder' => 'logs/ls-cron.out'
                        ],
                        '.output_mode' => [
                            'type' => 'select',
                            'label' => 'Output Type',
                            'help' => 'Either append to the same file each run, or overwrite the file with each run',
                            'default' => 'append',
                            'options' => [
                                'append' => 'Append',
                                'overwrite' => 'Overwrite'
                            ]
                        ],
                        '.email' => [
                            'type' => 'text',
                            'label' => 'Email',
                            'help' => 'Email to send output to. NOTE: requires output file to be set',
                            'placeholder' => 'notifications@yoursite.com'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
