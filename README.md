# meda-pay-test-php

MedaPay Payment SDK for php

## Sample Usage

* Add the package to your project

    `composer require 360ground/meda-pay-test-php`
    
* Import MedaPay classes

    ```
    require "vendor/autoload.php";
  
    use \MedaPay\Builder;`
    use \MedaPay\Configuration;
    use \MedaPay\Request;
    ```
* Create `Pay` instance using `Builder`
    ```
    $builder = new Builder();
    $pay = $builder->from("+251911121314")
           ->amount("25")
           ->withPaymentLabel("School Fee")
           ->build();

    ```
* Start payment using `Request`

    `Request::start($pay);` 
