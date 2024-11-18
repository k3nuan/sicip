<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigBackupSchedule
 *
 * @property $id
 * @property $day
 * @property $hour
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigBackupSchedule extends Model
{
    
    static $rules = [
		'day' => 'required',
		'hour' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['day','hour'];



}
