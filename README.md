Slender Module Loader
===
[![Latest Stable Version](https://poser.pugx.org/slender/configurator/v/stable.svg)](https://packagist.org/packages/slender/configurator) [![Total Downloads](https://poser.pugx.org/slender/configurator/downloads.svg)](https://packagist.org/packages/slender/configurator) [![License](https://poser.pugx.org/slender/configurator/license.svg)](https://packagist.org/packages/slender/configurator)

[![Build Status](https://travis-ci.org/alanpich/Slender-Configurator.svg?branch=develop)](https://travis-ci.org/alanpich/Slender-Configurator) [![Coverage Status](https://coveralls.io/repos/alanpich/Slender-Configurator/badge.png?branch=develop)](https://coveralls.io/r/alanpich/Slender-Configurator?branch=develop) 

---

Simple Module loading for decoupled application components


---

## Installation

Install via composer:

```
composer require slender/module-loader
```

## Usage

```php
<?php
    
use \Slender\ModuleLoader\ModuleLoader;

$dic = new MyDIContainer();
$moduleManager = new ModuleLoader();

$moduleManager->loadModule('\Acme\Example\MyModule', $dic);



```
