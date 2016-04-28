<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * @package App\Models
 */
class EntityRole extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entities_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['entity_id', 'role_id'];

 }
