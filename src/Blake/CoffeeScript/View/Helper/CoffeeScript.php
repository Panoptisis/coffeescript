<?php

namespace Blake\CoffeeScript\View\Helper;

use CoffeeScript\Compiler;
use Zend\View\Helper\AbstractHelper;

/**
 * Compiles CoffeeScript into JavaScript.
 *
 * @author Blake Harley <blake@blakeharley.com>
 * @since  0.1
 */
class CoffeeScript extends AbstractHelper
{
	/**
	 * Compiles the given CoffeeScript into JavaScript.
	 *
	 * @param  string $coffeeScript The script to cross compile
	 * @param  array  $options      The options to pass to the CoffeeScript compiler (Optional)
	 * @return string               The JavaScript
	 */
	public function __invoke($coffeeScript, $options = array())
	{
		// Default options
		$options = array_merge(array(
			'bare' => true,
			'header' => false,
		), $options);

		return Compiler::compile($coffeeScript, $options);
	}
}
