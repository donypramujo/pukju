<?php namespace Dojo\Pukju\Models;

use Model;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class Driver extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\Revisionable;

    /**
     * @var array Monitor these attributes for changes.
     */
    protected $revisionable = ['name', 'email', 'phone_number', 'birth_of_date','deleted_at'];

    public function getRevisionableUser()
    {
        return BackendAuth::getUser();
    }

    /**
     * @var array Relations
     */
    public $morphMany = [
        'revision_history' => ['System\Models\Revision', 'name' => 'revisionable']
    ];

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pukju_drivers';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|between:1,100',
        'email' => 'required|email',
        'phone_number' => 'required|numeric',
        'birth_of_date' => 'required|date'
    ];
}
