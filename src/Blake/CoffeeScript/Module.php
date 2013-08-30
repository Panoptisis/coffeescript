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
	/**
	 * Loads the module configuration.
	 *
	 * @return array
	 */
	public function getConfig()
	{
		return include __DIR__ . '/../../config/module.config.php';
	}
}
