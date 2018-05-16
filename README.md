# VisaNet
A PHP package to perform online payments through [VisaNet Guatemala](http://visanet.com.gt/)

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use VisaNet\PaymentGateway as VisaNet;

$authorization = VisaNet::authorize([
    'pan' => '1234 4567 9012 3456',
    'cvv2' => '1234',
    'expdate' => '0518'

])->debit(100.00);

if ($authorization) 
    VisaNet::generate(new Voucher($authorization));