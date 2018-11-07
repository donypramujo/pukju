<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuBusTypes extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_bus_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_bus_types');
    }
}
