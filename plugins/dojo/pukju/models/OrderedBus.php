<?php namespace Dojo\Pukju\Models;

use Model;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class OrderedBus extends Model
{


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_views_ordered_buses';

    public $belongsTo = [
        'booking_order' => 'Dojo\Pukju\Models\BookingOrder',
        'bus_type' => 'Dojo\Pukju\Models\BusType',
    ];

}
