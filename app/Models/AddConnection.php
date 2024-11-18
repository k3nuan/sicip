<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddConnection
 *
 * @property $id
 * @property $server_id
 * @property $ip_address
 * @property $type
 * @property $user
 * @property $password
 * @property $app_id
 * @property $database_id
 * @property $created_at
 * @property $updated_at
 *
 * @property AddApp $addApp
 * @property AddDatabase $addDatabase
 * @property AddServer $addServer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AddConnection extends Model
{
    
    static $rules = [
		'server_id'   => 'required',
		'ip_address'  => 'required',
		'type'        => 'required',
        'user'        => 'required',
		'password'    => 'required',
    ];
    static $messages = [
        'server_id.required'        => 'Campo obligatorio',
        'ip_address.required'       => 'Campo obligatorio',
        'type.required'             => 'Campo obligatorio',
        'user.required'             => 'Campo obligatorio',
        'password.required'         => 'Campo obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['server_id','ip_address','type','user','password','app_id','database_id', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addApp()
    {
        return $this->hasOne('App\Models\AddApp', 'id', 'app_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addDatabase()
    {
        return $this->hasOne('App\Models\AddDatabase', 'id', 'database_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addServer()
    {
        return $this->hasOne('App\Models\AddServer', 'id', 'server_id');
    }
    
    public function server()
    {
        return $this->belongsTo('App\Models\AddServer', 'server_id');
    }
}
