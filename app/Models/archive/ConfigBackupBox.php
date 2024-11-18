<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigBackupBox
 *
 * @property $id
 * @property $name
 * @property $storage_type
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigBackupBox extends Model
{
    
    static $rules = [
		'name' => 'required',
		'storage_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','storage_type'];



}
