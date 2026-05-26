# Test for [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility)'s handling of PHP internal interfaces

Instructions:
1. Clone the repository
```sh
git clone https://github.com/the-ge/test-phpcompatibility-internalinterfaces.git
```
2. Install dependensices:
```php
composer install
```
3. Do a statical analysis:
```php
composer stan
```
4. Check compostibility with PHP 8.4
```php
composer compat
```
