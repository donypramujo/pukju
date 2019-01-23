<?php namespace Dojo\Pukju\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\DB;

class BuilderTableCreateDojoPukjuViewsBuses extends Migration
{

    public function up()
    {
        DB::statement("
            CREATE VIEW dojo_pukju_views_buses AS
            (
                SELECT b.bus_type_id as id, bt.name as name, count(1) as bus_count
                FROM dojo_pukju_buses b
                LEFT JOIN dojo_pukju_bus_types bt ON b.bus_type_id = bt.id
                WHERE b.deleted_at IS NULL
                GROUP BY b.bus_type_id
            )
        ");
    }

    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS dojo_pukju_views_buses');
    }

}