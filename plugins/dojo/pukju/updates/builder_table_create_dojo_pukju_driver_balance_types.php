<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuDriverBalanceTypes extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_driver_balance_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->string('description');


            $table->enum('type', ['C', 'D']);

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_driver_balance_types');
    }
}
