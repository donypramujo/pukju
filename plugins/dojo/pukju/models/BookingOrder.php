<?php namespace Dojo\Pukju\Models;

use Model;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class BookingOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\Revisionable;

    protected $dates = [];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_booking_orders';


      /**
     * @var array Monitor these attributes for changes.
     */
    protected $revisionable = ['pickup_hour', 'pickup_phone_number', 'pickup_address','buses'];

    public function getRevisionableUser()
    {
        return BackendAuth::getUser();
    }

    /**
     * @var array Validation rules
     */
    public $rules = [
        // basic info
        'event_name' => 'required|between:1,100',
        'from_date' => 'required|before_or_equal:to_date|after:today',
        'to_date' => 'required|after_or_equal:from_date',
        'customer' => 'required',
        'destination' => 'required',

        //pickup info
        'pickup_hour' => 'required',
        'pickup_phone_number' => 'required|numeric',
        'pickup_address' => 'required'
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

       /**
     * @var array Relations
     */
    public $morphMany = [
        'revision_history' => ['System\Models\Revision', 'name' => 'revisionable']
    ];


    public function filterFields($fields, $context = null)
    {

        if ($context == 'update') {
            $fields->event_name->disabled = true;
            $fields->from_date->disabled = true;
            $fields->to_date->disabled = true;
            $fields->customer->disabled = true;
            $fields->destination->disabled = true;
        }
    }
}
