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

    public function productsLang()
    {
//        if ($idLang == null)
//        {
//            $idLang = 1;
//        }

        return $this->hasMany('App\Models\ProductLang')->where('lang_id', '=', 1);
    }

}
