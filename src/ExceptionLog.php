<?php
namespace adrianoalves\ExceptionLLog;

use adrianoalves\ExceptionLLog\Model\Log;

class ExceptionLog
{
    protected $guarded = ['id'];

    /**
     * Persists a new Log Exception
     * @param \Exception $e
     * @param null $level
     * @param array|null $extraInfo
     * @return Log
     */
    public static function persist( \Exception $e, $level = null, array $extraInfo = null ): Log
    {
        $data = [
            'description' => $e->getMessage(), 'file_line' => $e->getLine(), 'file' => $e->getFile()
        ];

        $data[ 'level' ] = $level ? $level : LevelMapper::LEVEL_ERROR_APPLICATION;

        if( $extraInfo )
            $data[ 'extra_info' ] = json_encode( $extraInfo );

        return Log::create( $data );
    }
}
