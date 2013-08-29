# ZF2 CoffeeScript Module

## About

This module provides inline support for CoffeeScript in ZF2 views using alxlit's
[PHP CoffeeScript Compiler](https://github.com/alxlit/coffeescript-php).

## Installation

Installing this modul is quite simple using Composer. First, add this to your
composer.json:

    "require": {
        ...
        "blake/coffeescript": "0.*"
    }

Set this requirement up with the usual `composer.phar install` command. And finally,
you need to add this to your ZF2 `application.config.php`:

    // ...
    'modules' => array(
    	// ...
    	'Blake\CoffeeScript',
    	// ...
    ),
    // ...

## Usage

With this installed, you can call `appendCoffeeScript()` off of the `HeadScript` or `InlineScript` view helpers.

Additionally, there is a dedicated `CoffeeScript` invokable view helper that will simply compile CoffeeScript.
