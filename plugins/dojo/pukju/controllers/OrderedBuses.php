<?php namespace Dojo\Pukju\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Support\Facades\DB;
use Dojo\Pukju\Models\Bus;
use Dojo\Pukju\Models\BusType;
use Illuminate\Support\Facades\Session;
use Dojo\Pukju\Models\ViewBus;

class OrderedBuses extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];

    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [];

    private $copy_query ;

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pukju', 'master', 'buses');

        // $viewBuses = ViewBus::get();
        // dd($viewBuses);
    }

    public function onViewSum(){
       $sum_rows = Session::get('sum_rows');
       $this->vars['sum_rows'] = $sum_rows;

       $viewBuses = ViewBus::get();

       $this->vars['view_buses'] = $viewBuses;
       return $this->makePartial('view_sum') ;
    }

    public function listExtendQuery($query, $definition = null)
    {
        $copy_query = clone $query;
        $sum_rows = $copy_query->select(DB::raw('SUM(bus_order_count) AS bus_order_sum, bus_type_id'))
        ->groupBy('bus_type_id')->pluck('bus_order_sum','bus_type_id') ;

        Session::put('sum_rows', $sum_rows);
    }

}
