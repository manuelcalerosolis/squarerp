<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company', 'first_name', 'last_name', 'address1', 'address2', 'postal_code', 'city', 'other', 'phone', 'phone_mobile', 'active'];

    public function entities()
    {
        return $this->belongsToMany('App\Models\Entity', 'entities_addresses' );
    }


}
