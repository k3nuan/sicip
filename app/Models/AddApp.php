<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddApps
 *
 * @property $id
 * @property $server_id
 * @property $acronym
 * @property $name
 * @property $description
 * @property $url
 * @property $ait_user
 * @property $ait_name
 * @property $func_user
 * @property $func_name
 * @property $func_telf
 * @property $created_at
 * @property $updated_at
 *
 * @property AddConnection[] $addConnections
 * @property AddDatabase[] $addDatabases
 * @property AddServer $addServer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AddApp extends Model
{
    
    static $rules = [
		'server_id'   => 'required',
		'acronym'     => 'required',
		'name'        => 'required',
    ];
    static $messages = [
        'server_id.required'    => 'Campo obligatorio',
        'acronym.required'      => 'Campo obligatorio',
        'name.required'         => 'Campo obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['server_id','acronym','name','description','url','ait_user','ait_name','func_user','func_name','func_telf'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addConnections()
    {
        return $this->hasMany('App\Models\AddConnection', 'app_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addDatabases()
    {
        return $this->hasMany('App\Models\AddDatabase', 'app_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addServer()
    {
        return $this->hasOne('App\Models\AddServer', 'id', 'server_id');
    }
    

}
