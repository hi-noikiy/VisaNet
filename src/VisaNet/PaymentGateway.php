<?php

namespace VisaNet;

/**
 * @property-write CreditCard|array $creditCard
 */
class PaymentGateway
{
    /**
     * @var CreditCard|array
     */
    protected $creditCard;

    /**
     * Create a new instance of the object and auto-assign
     * the $creditCard property
     * 
     * @param  CreditCard|array $creditCard
     * @return \VisaNet\PaymentGateway
     */
    public static function authorize($creditCard)
    {
        // TODO
    }
}