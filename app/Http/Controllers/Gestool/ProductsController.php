<?php

namespace App\Http\Controllers\Gestool;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    public function index()
    {
        phpinfo();
        return \GestoolProducts::all();
    }
}
