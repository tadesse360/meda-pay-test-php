<?php
namespace MedaPay;
class Pay
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

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function getPaymentAction()
    {
        return $this->paymentAction;
    }

    /**
     * @param mixed $paymentAction
     */
    public function setPaymentAction($paymentAction)
    {
        $this->paymentAction = $paymentAction;
    }

    /**
     * @return mixed
     */
    public function getPaymentLabel()
    {
        return $this->paymentLabel;
    }

    /**
     * @param mixed $paymentLabel
     */
    public function setPaymentLabel($paymentLabel)
    {
        $this->paymentLabel = $paymentLabel;
    }

    /**
     * @return mixed
     */
    public function getCallbackURL()
    {
        return $this->callbackURL;
    }

    /**
     * @param mixed $callbackURL
     */
    public function setCallbackURL($callbackURL)
    {
        $this->callbackURL = $callbackURL;
    }

    /**
     * @return mixed
     */
    public function getCallbackData()
    {
        return $this->callbackData;
    }

    /**
     * @param mixed $callbackData
     */
    public function setCallbackData($callbackData)
    {
        $this->callbackData = $callbackData;
    }

    /**
     * @return mixed
     */
    public function getCallbackMethod()
    {
        return $this->callbackMethod;
    }

    /**
     * @param mixed $callbackMethod
     */
    public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getVendorAccount()
    {
        return $this->vendorAccount;
    }

    /**
     * @param mixed $vendorAccount
     */
    public function setVendorAccount($vendorAccount)
    {
        $this->vendorAccount = $vendorAccount;
    }

    /**
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param mixed $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return mixed
     */
    public function getPaymentOptions()
    {
        return $this->paymentOptions;
    }

    /**
     * @param mixed $paymentOptions
     */
    public function setPaymentOptions($paymentOptions)
    {
        $this->paymentOptions = $paymentOptions;
    }


    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }


}