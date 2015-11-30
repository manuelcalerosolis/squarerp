<?php

/**
 * Created by PhpStorm.
 * User: calero
 * Date: 29/11/2015
 * Time: 20:22
 */
class GestoolConnect
{
    protected static $connectionString = 'DataDirectory=C:/wdges32/GstApolo.Add;ServerTypes=7';
    protected static $user = 'ADSSYS';
    protected static $password = '';

    private static $directoryInUse = '';

    public static function getDirectoryInUse()
    {
        return self::$directoryInUse;
    }

    public static function setDirectoryInUse($directoryInUse)
    {
        self::$directoryInUse = $directoryInUse;
    }

    protected static $errorCode;

    public function getErrorCode()
    {
        return self::$errorCode;
    }

    protected static $errorString;

    public function setErrorCode($errorCode)
    {
        self::$errorCode = $errorCode;
    }

    public function getErrorString()
    {
        return self::$errorString;
    }
    public function setErrorString($errorString)
    {
        self::$errorString = $errorString;
    }

    public static $connectionId;

    public static function connectDB()
    {
        self::$connectionId = ads_connect(self::$connectionString, self::$user, self::$password);
        return self::$connectionId;
    }

    public static function disConnectDB()
    {
        if (self::$connectionId)
            ads_close(self::$connectionId);
    }

    public static function runQuery($query)
    {
        $statement = null;
        if (self::$connectionId == false) {
            self::setErrorCode(ads_error());
            self::setErrorString(ads_errormsg());
        }
        else
        {
            $statement = ads_prepare(self::$connectionId, $query);
            ads_execute($statement);
        }
        return $statement;
    }

    public function runCommand($query)
    {
        if(self::connectDB())
        {
            self::runQuery($query);
            self::disConnectDB();
        }
    }

}
/*
Comment this lines if your ads driver it´s installed
*/
function ads_execute($statement){
    return $statement;
}

function ads_error(){
    return 'ads_error';
}

function ads_errormsg(){
    return 'ads_errormsg';
}

function ads_prepare($connectionId, $query ){
    return (null);
}

function ads_connect($connectionString, $user, $password){
    return 1;
}

function ads_close($connectionId){
    return 0;
}