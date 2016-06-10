<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = ['ean13', 'upc', 'price', 'width', 'height', 'depth', 'weight'];

    public function productsLangs()
    {
        return $this->hasMany('App\Models\ProductLang');
    }

}
