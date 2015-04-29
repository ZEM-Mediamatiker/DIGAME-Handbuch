<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'timestamp' => 1430292740,
    'checksum' => '8c5701c189c9ee0035fa55bf6a886888',
    'data' => [
        'streams' => [
            'schemes' => [
                'system' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'system'
                        ]
                    ]
                ],
                'user' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user'
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://blueprints',
                            1 => 'system/blueprints'
                        ]
                    ]
                ],
                'config' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://config',
                            1 => 'system/config'
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'themes' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes'
                        ]
                    ]
                ],
                'cache' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'cache'
                        ],
                        'images' => [
                            0 => 'images'
                        ]
                    ]
                ],
                'log' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'logs'
                        ]
                    ]
                ],
                'asset' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'assets'
                    ]
                ],
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'plugins' => [
            'cachebuster' => [
                'enabled' => true,
                'route' => '/resetcache'
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'path' => '/blog',
                'built_in_css' => true
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'digame'
                ],
                'filter_combinator' => 'and'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ]
        ],
        'site' => [
            'title' => 'Anleitung DIGAME',
            'author' => [
                'name' => 'Stefan Eckstein',
                'email' => 'stefan.eckstein@zem.ch'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'metadata' => [
                'description' => 'My Grav Site'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/another/one/here' => '/blog/sample-3',
                '/new/*' => '/blog/*'
            ],
            'description' => 'Dies ist die Beschreibung meiner Seite.'
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'param_sep' => ':',
            'home' => [
                'alias' => '/home'
            ],
            'pages' => [
                'theme' => 'zemwiki',
                'order' => [
                    'by' => 'defaults',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => false,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => 'txt|xml|html|json|rss|atom',
                'expires' => 0
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file',
                    'pages' => true
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.3.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'twig' => true,
                'shutdown' => [
                    'close_connection' => true
                ],
                'max_depth' => 10,
                'log' => [
                    'enabled' => false,
                    'timing' => false
                ]
            ],
            'images' => [
                'default_image_quality' => 85,
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false
            ],
            'security' => [
                'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
            ]
        ]
    ]
];
