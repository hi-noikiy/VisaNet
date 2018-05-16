<?php

require __DIR__ . '/vendor/autoload.php';

use VisaNet\PaymentGateway as VisaNet;

$visanet = new VisaNet();

var_dump($visanet);