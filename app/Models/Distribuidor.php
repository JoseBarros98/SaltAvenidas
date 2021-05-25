<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Distribuidor
 * @package App\Models
 * @version September 3, 2019, 2:20 am -04
 *
 * @property \Illuminate\Database\Eloquent\Collection distribuidor
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string nombre
 * @property string compañia
 * @property integer telefono
 */
class Distribuidor extends Model
{
    public $table = 'distribuidor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'compañia',
        'telefono'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'compañia' => 'string',
        'telefono' =>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:10|max:20|alpha_spaces',
        'compañia' => 'required|min:5|max:50|alpha_spaces',
        'telefono' => 'required|min:8|max:10|alpha_num'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function distribuidor()
    {
        return $this->hasMany(\App\Models\Product::class, 'distribuidor_id');
    }
}
