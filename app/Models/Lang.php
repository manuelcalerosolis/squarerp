<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lang extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'langs';

    /**
     * @var array
     */
    protected $fillable = ['name', 'active', 'iso_code', 'language_code'];
}
