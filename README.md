# ZF2 CoffeeScript Module

## About

This module provides inline support for CoffeeScript in ZF2 views using alxlit's
[PHP CoffeeScript Compiler](https://github.com/alxlit/coffeescript-php).

## Installation

Installing this modul is quite simple using Composer. First, add this to your
composer.json:

```json
"require": {
    ...
    "blake/coffeescript": "0.*"
}
```

Set this requirement up with the usual `composer.phar install` command. And finally,
you need to add this to your ZF2 `application.config.php`:

```php
// ...
'modules' => array(
	// ...
	'Blake\CoffeeScript',
	// ...
),
// ...
```

## Usage

With this installed, you can call `appendCoffeeScript()` off of the `HeadScript` or `InlineScript`
view helpers.

```php
$this->inlineScript()->appendCoffeeScript(<<<COFFEESCRIPT
	console.log 'Hello, syntax.'
COFFEESCRIPT
);
```

Additionally, there is a dedicated `CoffeeScript` invokable view helper that will simply
compile CoffeeScript.

```php
echo $this->coffeeScript(<<<COFFEESCRIPT
	console.log 'Another lame example.'
COFFEESCRIPT
);
```

### Compiler Options

Both of the helpers illustrated above take a second, optional, argument that is a array of options
to pass on to the CoffeeScript compiler. You can see a list of these options on the official
[PHP CoffeeScript documentation](https://github.com/alxlit/coffeescript-php#usage).

By default, the options passed to the compiler are:

```php
$options = array(
	'bare' => true,
	'header' => false,
);
```

These can be overriden by passing your own options.
