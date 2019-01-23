<?php namespace Dojo\Pukju\Models;

use Model;

/**
 * Model
 */
class BookingOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $dates = [];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_booking_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsTo = [
        'customer' => 'Dojo\Pukju\Models\Customer',
        'destination' => 'Dojo\Pukju\Models\Destination'
    ];

    public $hasMany = [
        'buses' => [
            'Dojo\Pukju\Models\BookingOrderBus'
        ],
        'charges' => [
            'Dojo\Pukju\Models\Charge'
        ]
    ];
}
