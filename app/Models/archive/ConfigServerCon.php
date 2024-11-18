<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigServerCon
 *
 * @property $id
 * @property $name
 * @property $user
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigServerCon extends Model
{
    
    static $rules = [
		'name' => 'required',
		'user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','user'];



}
