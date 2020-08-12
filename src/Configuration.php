<?php


namespace MedaPay;


class Configuration
{
    public static $medaPayApiKey;
    public static $medaPayEnvironment;
    public static $merchantInfo;


    public static function configure($medaPayApiKey, $medaPayEnvironment, $merchantInfo)
    {
        Configuration::$medaPayApiKey = $medaPayApiKey;
        Configuration::$medaPayEnvironment = $medaPayEnvironment;
        Configuration::$merchantInfo = $merchantInfo;
    }

}