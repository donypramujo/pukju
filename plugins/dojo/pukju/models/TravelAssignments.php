<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class TravelAssignments extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_travel_assignments';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'booking_order' => 'Dojo\Pukju\Models\BookingOrder',
        'driver' => 'Dojo\Pukju\Models\Driver',
        'bus' => 'Dojo\Pukju\Models\Bus',
    ];
}
