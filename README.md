# php-design-patterns

## Installation

Use the package manager [composer](https://getcomposer.org/) to install

```bash
composer require kyimyohan/php-design-patterns
touch index.php
```

Decorator Pattern

## Usage
Write following code in index.php

```php
<?php

use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Decorator;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\BubbleTea;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Jelly;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Pudding;


require 'vendor/autoload.php';

$decorator = new Decorator(new Pudding(new Jelly(new BubbleTea)));
echo $decorator->getDescription();
echo $decorator->getPrice();
```

## License

[MIT](/LICENSE)
