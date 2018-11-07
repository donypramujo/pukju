<?php namespace Dojo\Pukju\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Drivers extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_drivers' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pukju', 'master');
    }
}
