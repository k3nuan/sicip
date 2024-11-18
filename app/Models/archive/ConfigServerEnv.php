<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigServerEnv
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigServerEnv extends Model
{
    
    static $rules = [
		'name' => 'required|unique:config_server_envs,name',
    ];

    static $messages = [
        'name.required' => 'Name field is required.',
        'name.unique' => 'Name already exists.',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];



}
