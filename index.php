<?php

class ValueObject{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue){
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public static function random() : ValueObject{
      return new ValueObject(mt_rand(0,255),mt_rand(0,255),mt_rand(0,255) );
    }

    public function mix(ValueObject $obj) : ValueObject{
        $obj->red = ($this->red + $obj->red) / 2;
        $obj->green = ($this->green + $obj->green) / 2;
        $obj->blue = ($this->blue + $obj->blue) / 2;

        return $obj;
    }

    public function equals(ValueObject $obj) : bool {
        if($this->red == $obj->red && $this->green == $obj->green && $this->blue == $obj->blue){
            return true;
        }
        else{
            return false;
        }
    }

    public function getRed() : int{
        return $this->red;
    }

    private function setRed(int $red){
        if($red < 0 || $red > 255) throw new Exception('Число менше 0 або більше 255');
        $this->red = $red;


    }

    public function getGreen() : int{
        return $this->green;
    }

    private function setGreen(int $green){
        if($green < 0 || $green > 255) throw new Exception('Число менше 0 або більше 255');
        $this->green = $green;
    }

    public function getBlue() : int{
        return $this->blue;
    }

    private function setBlue(int $blue){
        if($blue < 0 || $blue > 255) throw new Exception('Число менше 0 або більше 255');
        $this->blue = $blue;
    }

}

$color = new ValueObject(200, 200, 200);
$mixedColor = $color->mix(new ValueObject(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150





?>