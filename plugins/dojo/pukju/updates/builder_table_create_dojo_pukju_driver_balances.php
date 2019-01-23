<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoDriverBalances extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_driver_balances', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();

            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
            $table->integer('driver_id')->unsigned()->nullable();
            $table->foreign('driver_id')->references('id')->on('dojo_pukju_drivers');

            
            $table->decimal('amount',15,2);

            $table->text('description');


            $table->integer('driver_balance_type_id')->unsigned()->nullable();
            $table->foreign('driver_balance_type_id')->references('id')->on('dojo_pukju_drivers');

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_driver_balances');
    }
}
