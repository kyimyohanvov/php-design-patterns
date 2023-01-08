# php-design-patterns

Decorator Pattern

## Installation

Use compsoser 

```bash
composer require kyimyohan/php-design-patterns
```

## Usage

```php
$decorator = new Decorator(new Pudding(new Jelly(new BubbleTea)));
echo $decorator->getDescription();
echo $decorator->getPrice();
```

## License

[MIT](/LINCENSE.md)
