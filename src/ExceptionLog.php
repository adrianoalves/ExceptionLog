<?php
namespace adrianoalves\ExceptionLLog;

class ExceptionLog
{
    protected $guarded = ['id'];

    public static function persist( \Exception $e, $level = null, array $extraInfo = null )
    {
        $data = [
            'description' => $e->getMessage(), 'file_line' => $e->getLine(), 'file' => $e->getFile()
        ];

        $data[ 'level' ] = $level ? $level : LevelMapper::LEVEL_ERROR_APPLICATION;

        if( $extraInfo )
            $data[ 'extra_info' ] = json_encode( $extraInfo );

        return self::create( $data );
    }
}
