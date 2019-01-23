<?php namespace Dojo\Pukju\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Support\Facades\DB;
use Dojo\Pukju\Models\Bus;
use Dojo\Pukju\Models\BusType;
use Dojo\Pukju\Models\ViewsBus;

class Buses extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_buses' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pukju', 'master', 'buses');


        $buses = ViewsBus::get();



        $busTypes = BusType::get();
        foreach($busTypes as $busType){
            $this->vars['busTypes'][$busType->id] = $busType->name;
        }

        $this->vars['buses'] = $buses;
    }
}
