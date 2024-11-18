<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigApp
 *
 * @property $id
 * @property $config_env_id
 * @property $acronym
 * @property $name
 * @property $url
 * @property $description
 * @property $ait_custodian
 * @property $ait_name
 * @property $func_custodian
 * @property $func_name
 * @property $func_telf
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigApp extends Model
{
    
    static $rules = [
		'config_env_id' => 'required',
		'acronym' => 'required',
		'name' => 'required',
		'url' => 'required',
		'description' => 'required',
		'ait_custodian' => 'required',
		'ait_name' => 'required',
		'func_custodian' => 'required',
		'func_name' => 'required',
		'func_telf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['config_env_id','acronym','name','url','description','ait_custodian','ait_name','func_custodian','func_name','func_telf'];



}
