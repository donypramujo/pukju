<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class BookingOrderBus extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $dates = [];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_booking_order_buses';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsTo = [
        'booking_order' => 'Dojo\Pukju\Models\BookingOrder',
        'bus_type' => 'Dojo\Pukju\Models\ViewBus'
    ];
}
