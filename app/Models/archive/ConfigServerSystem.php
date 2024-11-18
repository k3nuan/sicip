<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigServerSystem
 *
 * @property $id
 * @property $type
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigServerSystem extends Model
{
    
    static $rules = [
		'type' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','name'];



}
