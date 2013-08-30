<?php

namespace Blake\CoffeeScript\View\Helper;

use Zend\View\Helper\HeadScript as BaseHelper;

/**
 * Extension of the head script helper that provides CoffeeScript support
 * for appended scripts.
 *
 * @author Blake Harley <blake@blakeharley.com>
 * @since  0.1
 */
class HeadScript extends BaseHelper
{
	/**
	 * Compiles CoffeeScript into JavaScript and appends it to the inline script.
	 *
	 * @param  string $coffeeScript The CoffeeScript to compile and append
	 * @param  array  $options      The options to pass to the CoffeeCompiler
	 */
	public function appendCoffeeScript($coffeeScript, $options = array())
	{
		$javaScript = $this->getView()->coffeeScript($coffeeScript, $options);

		return $this->appendScript($javaScript);
	}
}
