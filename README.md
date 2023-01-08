# php-design-patterns

## Installation

Use the package manager [composer](https://getcomposer.org/) to install

```bash
composer require kyimyohan/php-design-patterns
```

## Usage

###Decorator Pattern

```php
<?php

use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Decorator;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\BubbleTea;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Jelly;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Pudding;


$decorator = new Decorator(new Pudding(new Jelly(new BubbleTea)));
echo $decorator->getDescription();
echo $decorator->getPrice();
```

## License

[MIT](/LICENSE)
