<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddServer
 *
 * @property $id
 * @property $name
 * @property $enviroment
 * @property $status
 * @property $notes
 * @property $serial
 * @property $brand_details
 * @property $cpu_details
 * @property $capacity_details
 * @property $type
 * @property $raid
 * @property $is_multipath
 * @property $is_bond
 * @property $is_virtualizer
 * @property $virtualizer_details
 * @property $location_details
 * @property $os_details
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AddServer extends Model
{
    
    # 'serial'          => 'required|unique:add_servers,serial',
    static $rules = [
        'serial'          => 'required',
		'name'            => 'required',
		'brand_details'   => 'required',
		'os_details'      => 'required',
    ];

    # 'serial.unique' => 'Ya existe',
    static $messages = [
        'serial.required'        => 'Campo obligatorio',
        'name.required'          => 'Campo obligatorio',
        'brand_details.required' => 'Campo obligatorio',
        'os_details.required'    => 'Campo obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','enviroment','status','notes','serial','brand_details','cpu_details','capacity_details','type','raid','is_multipath','is_bond','is_virtual','virtualizer_details','location_details','os_details', 'user_id'];



}
