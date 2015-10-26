<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntityAddress extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entities_address';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['entities_id', 'address_id'];

}
