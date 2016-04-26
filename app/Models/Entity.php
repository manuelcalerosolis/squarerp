<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entity extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'entities';

    /**
     * @var array
     */
    protected $fillable = ['company', 'first_name', 'last_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

}
