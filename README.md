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
    LogException::persist( $exception, LogException\LevelMapper::LEVEL_ERROR_APPLICATION );
}
```
It is simple as pie :)

#### Log Levels

The package has a much simple mapper to organize exceptions in levels/categories.
```php
const LEVEL_NOTICE            = 1;

    const LEVEL_WARNING           = 2;

    const LEVEL_ERROR_APPLICATION = 3;

    const LEVEL_ERROR_DATABASE    = 4;

    const LEVEL_ERROR_SERVER      = 5;

    const LEVEL_ERROR_CONSOLE     = 6;

    const LEVEL_ERROR_JOB         = 7;

    public static $mapper = [
        1 => [ 'label' => 'Notificação' ],
        2 => [ 'label' => 'Aviso' ],
        3 => [ 'label' => 'Erro: Sistema' ],
        4 => [ 'label' => 'Erro: Persistência' ],
        5 => [ 'label' => 'Erro: Servidor' ],
        6 => [ 'label' => 'Erro: Console' ],
        7 => [ 'label' => 'Erro: Execução de Job' ],
    ];
```

You can create and customize your own levels and dictionaries to better identify your application Exceptions.
