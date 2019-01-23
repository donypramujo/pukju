<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class Charge extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_charges';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    
    public $belongsTo = [
        'booking_order' => 'Dojo\Pukju\Models\BookingOrder'
    ];
}
