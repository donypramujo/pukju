<?php namespace Dojo\Pukju\Models;

use Model;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class BusType extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    use \October\Rain\Database\Traits\Revisionable;

    /**
     * @var array Monitor these attributes for changes.
     */
    protected $revisionable = ['name','deleted_at'];

    public function getRevisionableUser()
    {
        return BackendAuth::getUser();
    }


    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_bus_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|between:1,100|unique:dojo_pukju_bus_types',
    ];

     /**
     * @var array Relations
     */
    public $morphMany = [
        'revision_history' => ['System\Models\Revision', 'name' => 'revisionable']
    ];
}
