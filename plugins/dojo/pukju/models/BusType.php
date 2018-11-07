<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class BusType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_bus_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
