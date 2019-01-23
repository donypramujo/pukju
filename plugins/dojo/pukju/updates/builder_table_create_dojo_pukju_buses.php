<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuBuses extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_buses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('police_number', 10);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('code',10);

            $table->integer('bus_type_id')->unsigned();
            $table->foreign('bus_type_id')->references('id')->on('dojo_pukju_bus_types');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_buses');
    }
}
