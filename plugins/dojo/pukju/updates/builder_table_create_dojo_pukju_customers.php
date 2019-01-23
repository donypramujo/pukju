<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoPukjuCustomers extends Migration
{
    public function up()
    {
        Schema::create('dojo_pukju_customers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->string('phone_number', 15);
            $table->date('birth_of_date');
            $table->text('address');
            $table->string('email', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_pukju_customers');
    }
}
