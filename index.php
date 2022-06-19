<?php

abstract class PaymentMethod
{
    abstract public function ConcretePymentMethod() : ConcreteMethod;

    public function doingSomeOperations()
    {
        // TODO Somethings
    }
}

class PayPal extends PaymentMethod
{

    public function ConcretePymentMethod(): ConcreteMethod
    {
        // TODO: Implement ConcretePymentMethod() method.

        return new PayPalMethod;
    }
}

class CreditCard extends PaymentMethod
{

    public function ConcretePymentMethod(): ConcreteMethod
    {
        // TODO: Implement ConcretePymentMethod() method.

        return new CreditCardMethod;
    }
}

interface ConcreteMethod
{
    public function operation();
}

class PayPalMethod implements ConcreteMethod
{
    public function operation()
    {
        // TODO: Implement operation() method.
    }
}

class CreditCardMethod implements ConcreteMethod
{
    public function operation()
    {
        // TODO: Implement operation() method.
    }
}

