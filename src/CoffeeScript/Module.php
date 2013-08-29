<?php

namespace Blake\CoffeeScript;

/**
 * Sets up this module.
 *
 * @author Blake Harley <blake@blakeharley.com>
 * @since  0.1
 */
class Module
{
	public function getConfig()
	{
		return include __DIR__ . '/../../config/module.config.php';
	}

	// TODO: Remove this
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					'Blake\CoffeeScript' => __DIR__,
				),
			),
		);
	}
}
