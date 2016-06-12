<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductLang extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'products_langs';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'description_short', 'description_meta', 'keywords_meta', 'title_meta'];

    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }

}
