<?php

/**
 * Created by PhpStorm.
 * User: calero
 * Date: 29/11/2015
 * Time: 23:24
 */
class GestoolProducts
{

    public static function getTableProducts(){
        GestoolConnect::getDirectoryInUse() + 'articulo';
    }

    public static function all(){

        $query =    'SELECT DISTINCT products.CODIGO, products.NOMBRE ';
        $query .=   'FROM ' . self::getTableProducts() . ' products ';
        $query .=   'ORDER BY products.NOMBRE asc';

        return GestoolConnect::runQuery($query);
    }

}