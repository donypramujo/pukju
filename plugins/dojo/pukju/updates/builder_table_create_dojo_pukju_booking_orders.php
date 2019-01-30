<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuBookingOrders extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_booking_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')->references('id')->on('dojo_pukju_customers');

            $table->integer('destination_id')->unsigned()->nullable();
            $table->foreign('destination_id')->references('id')->on('dojo_pukju_destinations');

            $table->string('event_name');

            $table->date('from_date');
            $table->date('to_date');

            
            $table->text('pickup_address');
            $table->time('pickup_hour');
            $table->string('pickup_phone_number');

            $table->decimal('booking_fee',15,2);

            $table->boolean('confirmed');
            $table->boolean('completed');

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_booking_orders');
    }
}
