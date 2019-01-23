<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuBookingOrderBuses extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_booking_order_buses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->integer('booking_order_id')->unsigned()->nullable();
            $table->foreign('booking_order_id')->references('id')
                    ->on('dojo_pukju_booking_orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('bus_type_id')->unsigned()->nullable();
            $table->foreign('bus_type_id')->references('id')
                    ->on('dojo_pukju_bus_types');

            $table->integer('bus_order_count');


        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_booking_order_buses');
    }
}
