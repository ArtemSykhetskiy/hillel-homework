<?php

abstract class TaxiType{

    abstract public function createTaxi() : Type;

    public function taxiInfo(){
        $taxi = $this->createTaxi();
        $result = 'Taxi model -> ' . $taxi->taxiModel() . "<br>";
        $result.= 'Price -> ' . $taxi->taxiPrice(). "<br>";

        return $result;
    }
}

class Econom extends TaxiType{
    public function createTaxi(): Type
    {
        return new TaxiEconom();
    }
}


class Standart extends TaxiType{
    public function createTaxi(): Type
    {
        return new TaxiStandart();
    }
}


class Lux extends TaxiType{
    public function createTaxi(): Type
    {
        return new TaxiLux();
    }
}

interface Type{
    public function taxiModel();
    public function taxiPrice();
}

class TaxiEconom implements Type{
    public function taxiModel() : string{
        return 'Toyota Corolla';
    }
    public function taxiPrice() : int{
        return 10;
    }
}

class TaxiStandart implements Type{
    public function taxiModel() : string{
        return 'Toyota Camry';
    }
    public function taxiPrice() : int{
        return 15;
    }
}

class TaxiLux implements Type{
    public function taxiModel() : string{
        return 'Mersedes S class';
    }
    public function taxiPrice() : int{
        return 20;
    }
}

function clientCode(TaxiType $taxiType){
    echo $taxiType->taxiInfo();
}


clientCode(new Econom());
clientCode(new Lux());
clientCode(new Standart());

