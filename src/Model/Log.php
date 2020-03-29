<?php

namespace adrianoalves\ExceptionLLog\Model;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = [ 'id' ];

    protected $casts = [
        'extra_info' => 'json'
    ];
}
