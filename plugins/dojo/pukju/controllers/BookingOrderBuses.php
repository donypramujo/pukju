<?php namespace Dojo\Pukju\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class BookingOrderBuses extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_booking_orders' 
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
