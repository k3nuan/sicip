<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddBackup
 *
 * @property $id
 * @property $server_id
 * @property $schema
 * @property $schedule
 * @property $created_at
 * @property $updated_at
 *
 * @property AddServer $addServer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AddBackup extends Model
{
    
    static $rules = [
		'server_id'   => 'required',
		'schema'      => 'required',
		'schedule'    => 'required',
    ];
    static $messages = [
        'server_id.required'   => 'Campo obligatorio',
        'schema.required'      => 'Campo obligatorio',
        'schedule.required'    => 'Campo obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['server_id','schema','schedule'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addServer()
    {
        return $this->hasOne('App\Models\AddServer', 'id', 'server_id');
    }
    

}
