<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuTravelAssignments extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_travel_assignments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


            $table->integer('booking_order_id')->unsigned()->nullable();
            $table->foreign('booking_order_id')->references('id')
                    ->on('dojo_pukju_booking_orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            
            $table->integer('driver_id')->unsigned()->nullable();
            $table->foreign('driver_id')->references('id')->on('dojo_pukju_drivers');


            $table->integer('bus_id')->unsigned()->nullable();
            $table->foreign('bus_id')->references('id')->on('dojo_pukju_buses');


        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_travel_assignments');
    }
}
