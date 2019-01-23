<?php namespace Dojo\Pukju\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DriverBalanceTypes extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_driver_balance_types' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pukju', 'transaction', 'driver-balances');
    }
}
