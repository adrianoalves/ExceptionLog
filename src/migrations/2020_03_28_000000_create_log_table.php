<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    protected $name = 'logs';
    /**
     * Log Table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( $this->name, function (Blueprint $table) {

            $table->increments( 'id' );
            $table->unsignedTinyInteger('level')->default(1) ->comment( 'use it to organize the exception levels' );
            $table->longText('description' )->nullable()->comment( 'exception log description/message' );
            $table->string( 'file', 255 )->nullable()->comment( 'file source that originated the exception' );
            $table->unsignedSmallInteger( 'file_line' )->nullable()->comment( 'file line number where the exception was fired' );
            $table->json( 'extra_info' )->nullable()->comment( 'additional info to complement the log if necessary' );

            $table->timestamps();

            $table->index( 'level', 'i_log_level' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( $this->name );
    }
}
