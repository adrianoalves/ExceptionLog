<?php
namespace adrianoalves\ExceptionLLog;

/**
 * Class LevelMapper
 * @package adrianoalves\ExceptionLLog
 */
class LevelMapper
{
    const LEVEL_NOTICE            = 1;

    const LEVEL_WARNING           = 2;

    const LEVEL_ERROR_APPLICATION = 3;

    const LEVEL_ERROR_DATABASE    = 4;

    const LEVEL_ERROR_SERVER      = 5;

    public static $mapper = [
        1 => [ 'label' => 'Notificação' ],
        2 => [ 'label' => 'Aviso' ],
        3 => [ 'label' => 'Erro: Sistema' ],
        4 => [ 'label' => 'Erro: Persistência' ],
        5 => [ 'label' => 'Erro: Servidor' ]
    ];
}
