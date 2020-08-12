<?php


namespace MedaPay;


class Builder
{
    private $phoneNumber;
    private $amount;
    private $lang;
    private $paymentAction;
    private $paymentLabel;
    private $callbackURL;
    private $callbackData;
    private $callbackMethod;
    private $metadata;
    private $metaData;
    private $vendorAccount;
    private $additionalInfo;
    private $paymentOptions;


    function amount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    function from($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    function lang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    function paymentAction($paymentAction)
    {
        $this->paymentAction = $paymentAction;
        return $this;
    }

    function withPaymentLabel($paymentLabel)
    {
        $this->paymentLabel = $paymentLabel;
        return $this;
    }

    function callback(
        $callbackURL,
        $callbackData,
        $callbackMethod = "POST"
    )
    {
        $this->callbackURL = $callbackURL;
        $this->callbackData = $callbackData;
        $this->callbackMethod = $callbackMethod;
        return $this;
    }

    function metadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    function vendorAccount($vendorAccount)
    {
        $this->vendorAccount = $vendorAccount;
        return $this;
    }

    function additionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    function paymentOptions($paymentOptions)
    {
        $this->paymentOptions = $paymentOptions;
        return $this;
    }


    function build()
    {
        $pay = new Pay();
        $pay->setPhoneNumber($this->phoneNumber);
        $pay->setAmount($this->amount);
        $pay->setLang($this->lang);
        $pay->setPaymentAction($this->paymentAction);
        $pay->setPaymentLabel($this->paymentLabel);
        $pay->setCallbackURL($this->callbackURL);
        $pay->setCallbackData($this->callbackData);
        $pay->setCallbackMethod($this->callbackMethod);
        $pay->setMetadata($this->metadata);
        $pay->setVendorAccount($this->vendorAccount);
        $pay->setAdditionalInfo($this->additionalInfo);
        $pay->setPaymentOptions($this->paymentOptions);

        return $pay;
    }


}