<?php


namespace MedaPay;


class Request
{

    private static $PRODUCTION_BASE_URL = "https://pay.meda.chat/sdk/";
    private static $SANDBOX_BASE_URL = "https://sdkuat.pay.meda.chat/";

    public static function start(Pay $pay)
    {
        $url = Request::generateUrl($pay);
        header("Location: " . $url);
    }


    private static function generateUrl(Pay $pay)
    {
        $json = Request::generateJson($pay);

        $encoded = str_replace("=", "", base64_encode($json));
        $shifted = substr($encoded, 5) . substr($encoded, 0, 5);

        $url = "";
        if (Configuration::$medaPayEnvironment = "SANDBOX") {
            $url = Request::$SANDBOX_BASE_URL;
        } else {
            $url = Request::$PRODUCTION_BASE_URL;
        }

        return $url . "?_a=" . $shifted;
    }


    private static function generateJson(Pay $pay)
    {
        $jsonString = json_encode($pay->jsonSerialize());
        $jsonValue = json_decode($jsonString, true);

        // Set paymentLabel empty if null
        if ($jsonValue["paymentLabel"] == null) {
            $jsonValue["paymentLabel"] = "";
        }

        // Change amount to float
        $jsonValue["amount"] = floatval($jsonValue["amount"]);

        // Explode additionalInfo
        $additionalInfo = $jsonValue["additionalInfo"];
        if ($additionalInfo != null) {
            for ($i = 0; $i < count($additionalInfo); $i++) {
                $jsonValue["additionalInfo" . ($i + 1)] = $additionalInfo[$i];
            }
        }

        unset($jsonValue["additionalInfo"]);


        // Remove null values
        foreach ($jsonValue as $key => $value) {
            if ($jsonValue[$key] == null) {
                unset($jsonValue[$key]);
            }
        }

        // Add payment type general
        $jsonValue["paymentType"] = "general";


        // Add merchantInfo
        $jsonValue["merchant"] = Configuration::$merchantInfo;

        return json_encode($jsonValue);

    }
}