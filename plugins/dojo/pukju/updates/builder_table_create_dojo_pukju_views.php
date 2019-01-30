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

        DB::statement("
        CREATE VIEW dojo_pukju_views_stock_buses AS
        (
            SELECT 
                bob.bus_type_id AS bus_type_id,
                bt.name AS NAME,
                SUM(bus_order_count) AS used_bus,
                b.bus_count AS bus_count,
                bus_count-SUM(bus_order_count) AS left_bus 
            FROM dojo_pukju_booking_order_buses bob
            LEFT join dojo_pukju_booking_orders bo
            ON bob.booking_order_id=bo.id
            LEFT JOIN dojo_pukju_views_buses b
            ON b.id = bob.bus_type_id
            LEFT JOIN dojo_pukju_bus_types bt
            ON bob.bus_type_id = bt.id
        )
        
    ");
    }

    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS dojo_pukju_views_buses');
        DB::statement('DROP VIEW IF EXISTS dojo_pukju_views_stock_buses');
    }

}