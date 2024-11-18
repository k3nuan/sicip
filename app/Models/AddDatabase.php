<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddDatabase
 *
 * @property $id
 * @property $server_id
 * @property $app_id
 * @property $management_details
 * @property $instance_name
 * @property $created_at
 * @property $updated_at
 *
 * @property AddApp $addApp
 * @property AddConnection[] $addConnections
 * @property AddServer $addServer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AddDatabase extends Model
{
    
    static $rules = [
		'server_id'           => 'required',
		'management_details'  => 'required',
		'instance_name'       => 'required',
    ];
    static $messages = [
        'server_id.required'            => 'Campo obligatorio',
        'management_details.required'   => 'Campo obligatorio',
        'instance_name.required'        => 'Campo obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['server_id','app_id','management_details','instance_name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addApp()
    {
        return $this->hasOne('App\Models\AddApp', 'id', 'app_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addConnections()
    {
        return $this->hasMany('App\Models\AddConnection', 'database_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addServer()
    {
        return $this->hasOne('App\Models\AddServer', 'id', 'server_id');
    }
    

}
