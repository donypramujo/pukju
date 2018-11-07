<?php namespace Dojo\Pukju\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class BusTypes extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'access_bus_types' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pukju', 'master', 'bus_types');
    }
}
