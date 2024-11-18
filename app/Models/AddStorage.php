<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddStorage
 *
 * @property $id
 * @property $server_id
 * @property $box
 * @property $type
 * @property $created_at
 * @property $updated_at
 *
 * @property AddServer $addServer
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AddStorage extends Model
{
    
    static $rules = [
		'server_id'   => 'required',
		'box'         => 'required',
		'type'        => 'required',
    ];

    static $messages = [
        'server_id.required'    => 'Campo obligatorio',
        'box.required'          => 'Campo obligatorio',
        'type.required'         => 'Campo obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['server_id','box','type', 'size_gb', 'vol_id', 'lun_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addServer()
    {
        return $this->hasOne('App\Models\AddServer', 'id', 'server_id');
    } 
}
