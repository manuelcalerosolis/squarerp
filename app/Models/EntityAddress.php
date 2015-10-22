<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

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
