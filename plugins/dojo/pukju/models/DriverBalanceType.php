<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class DriverBalanceType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_driver_balance_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
