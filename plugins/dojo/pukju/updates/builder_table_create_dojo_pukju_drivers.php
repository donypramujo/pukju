<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuDrivers extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_drivers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name', 100);
            $table->string('phone_number', 15);
            $table->string('email', 100);
            $table->date('birth_of_date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_drivers');
    }
}
