<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class DriverBalance extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_driver_balances';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
