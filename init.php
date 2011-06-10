<?php defined('SYSPATH') or die('No direct script access.');

Route::set( 'sass', 'sass(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'phamlp',
		'action'     => 'sass',
		'file'       => NULL,
	));

