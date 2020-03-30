## ExceptionLog Custom Laravel 7+ Package
_Simplest/Minimum Laravel Exception Log Persistence Layer Package_

#### Installation
Use `composer require adrianoalves/laravel-exceptionlog` to install the package.

Execute ``php artisan migrate`` to create the _logs_ database table

#### How to Use

Just call the following Method in your application:
```php
try{
  // ... put your watched code here
}
catch( \Exception $exception ){
    LogicException::persist( $exception, LogicException\LevelMapper::LEVEL_ERROR_APPLICATION );
}
```
It is simple as pie :)
