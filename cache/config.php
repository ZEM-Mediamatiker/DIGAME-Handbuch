<?php
namespace Grav;

class Config extends \Grav\Common\Config {
 	public $key = '5d121e66b73d70ce5ca46b8c9cc0e4d6';
	public $files = array(
		"system" => array(
			'media' => 1410796040,
			'site' => 1410796040,
			'streams' => 1410796040,
			'system' => 1410796040
		),
		"plugins" => array(
			'plugins/error' => 1407969320,
			'plugins/pagination' => 1407934220,
			'plugins/problems' => 1407969320,
			'plugins/simplesearch' => 1408950710
		),
		"user" => array(
			'plugins/simplesearch' => 1409312428,
			'site' => 1409143044,
			'system' => 1409295202
		)
	);
	public $items = array(
		"media" => array(
			"defaults" => array(
				'type' => 'file',
				'thumb' => 'media/thumb.png',
				'mime' => 'application/octet-stream',
				"image" => array(
					"filters" => array(
						"default" => array(
							'0' => 'enableProgressive'
						)
					)
				)
			),
			"jpg" => array(
				'type' => 'image',
				'thumb' => 'media/thumb-jpg.png',
				'mime' => 'image/jpeg'
			),
			"jpeg" => array(
				'type' => 'image',
				'thumb' => 'media/thumb-jpeg.png',
				'mime' => 'image/jpeg'
			),
			"png" => array(
				'type' => 'image',
				'thumb' => 'media/thumb-png.png',
				'mime' => 'image/png'
			),
			"gif" => array(
				'type' => 'image',
				'thumb' => 'media/thumb-gif.png',
				'mime' => 'image/gif'
			),
			"mp4" => array(
				'type' => 'video',
				'thumb' => 'media/thumb-mp4.png',
				'mime' => 'video/mp4'
			),
			"mov" => array(
				'type' => 'video',
				'thumb' => 'media/thumb-mov.png',
				'mime' => 'video/quicktime'
			),
			"m4v" => array(
				'type' => 'video',
				'thumb' => 'media/thumb-m4v.png',
				'mime' => 'video/x-m4v'
			),
			"swf" => array(
				'type' => 'video',
				'thumb' => 'media/thumb-swf.png',
				'mime' => 'video/x-flv'
			),
			"txt" => array(
				'type' => 'file',
				'thumb' => 'media/thumb-txt.png',
				'mime' => 'text/plain'
			),
			"doc" => array(
				'type' => 'file',
				'thumb' => 'media/thumb-doc.png',
				'mime' => 'application/msword'
			),
			"html" => array(
				'type' => 'file',
				'thumb' => 'media/thumb-html.png',
				'mime' => 'text/html'
			),
			"pdf" => array(
				'type' => 'file',
				'thumb' => 'media/thumb-pdf.png',
				'mime' => 'application/pdf'
			),
			"zip" => array(
				'type' => 'file',
				'thumb' => 'media/thumb-zip.png',
				'mime' => 'application/zip'
			),
			"gz" => array(
				'type' => 'file',
				'thumb' => 'media/thumb-gz.png',
				'mime' => 'application/gzip'
			)
		),
		"site" => array(
			'title' => 'Anleitung DIGAME',
			"author" => array(
				'name' => 'Stefan Eckstein',
				'email' => 'stefan.eckstein@zem.ch'
			),
			"taxonomies" => array(
				'0' => 'category',
				'1' => 'tag'
			),
			"blog" => array(
				'route' => '/blog'
			),
			"metadata" => array(
				'description' => 'My Grav Site'
			),
			"summary" => array(
				'size' => 300
			),
			"routes" => array(
				'/something/else' => '/blog/sample-3',
				'/another/one/here' => '/blog/sample-3'
			),
			'description' => 'Dies ist die Beschreibung meiner Seite.'
		),
		"streams" => array(
			"schemes" => array(
				"plugin" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'user/plugins',
						'1' => 'system/plugins'
					)
				),
				"asset" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'assets'
					)
				),
				"cache" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'cache'
					)
				),
				"log" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'logs'
					)
				),
				"user" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'user'
					)
				),
				"page" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'user/pages'
					)
				),
				"account" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'user/accounts'
					)
				),
				"data" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'user/data'
					)
				),
				"themes" => array(
					'type' => 'ReadOnlyStream',
					"paths" => array(
						'0' => 'user/themes'
					)
				)
			)
		),
		"system" => array(
			"home" => array(
				'alias' => '/home'
			),
			"pages" => array(
				'theme' => 'zemwiki',
				'markdown_extra' => false,
				"order" => array(
					'by' => 'defaults',
					'dir' => 'asc'
				),
				"list" => array(
					'count' => 20
				),
				"dateformat" => array(
					'short' => 'jS M Y',
					'long' => 'F jS \\a\\t g:ia'
				),
				"process" => array(
					'markdown' => true,
					'twig' => false
				),
				"events" => array(
					'page' => false,
					'twig' => true
				)
			),
			"cache" => array(
				'enabled' => true,
				"check" => array(
					'method' => 'file',
					'pages' => true
				),
				'driver' => 'auto',
				'prefix' => 'g'
			),
			"twig" => array(
				'cache' => true,
				'debug' => true,
				'auto_reload' => true,
				'autoescape' => false
			),
			"assets" => array(
				'css_pipeline' => false,
				'css_minify' => true,
				'css_minify_windows' => false,
				'css_rewrite' => true,
				'js_pipeline' => false,
				'js_minify' => true
			),
			"debugger" => array(
				'enabled' => false,
				'mode' => 'detect',
				'strict' => false,
				'max_depth' => 10,
				"log" => array(
					'enabled' => false,
					'timing' => false
				),
				"shutdown" => array(
					'close_connection' => true
				)
			)
		),
		"plugins" => array(
			"error" => array(
				'name' => '404 Not Found',
				'description' => '404 Not found',
				'enabled' => true,
				"routes" => array(
					'404' => '/error'
				)
			),
			"pagination" => array(
				'enabled' => true,
				'path' => '/blog',
				'built_in_css' => true
			),
			"problems" => array(
				'enabled' => true,
				'built_in_css' => true
			),
			"simplesearch" => array(
				'enabled' => true,
				'built_in_css' => true,
				'route' => '/search',
				'template' => 'simplesearch_results',
				"filters" => array(
					'category' => 'digame'
				)
			)
		)
	);
}