<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entity extends Model
{
    use SoftDeletes;

    protected $table = 'entities';

    protected $fillable = ['company', 'first_name', 'last_name', 'active'];

    public function addresses()
    {
        return $this->belongsToMany('App\Models\Address', 'entities_addresses' );
    }
    
}
