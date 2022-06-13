<?php

interface Format
{
    public function setFormat(String $logger);
}

interface Deliver
{
    public function setDeliver(Format $deliver);
}

class FormatRaw implements Format
{
    public function setFormat(String $string): string{
        return $string;
    }
}
class FormatWithDate implements Format
{

    public function setFormat(String $string): string{
        return date('Y-m-d H:i:s') . $string;
    }
}
class FormatWithDateAndDetails implements Format
{
    public function setFormat(String $string): string{
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

class DeliverByEmail implements Deliver
{
    public function setDeliver($format){
        echo "Вывод формата ({$format}) по имейл";
    }
}

class DeliverBySms implements Deliver
{
    public function setDeliver($format){
        echo "Вывод формата ({$format}) в смс";
    }
}

class DeliverByConsole implements Deliver
{
    public function setDeliver($format){
        echo "Вывод формата ({$format}) в консоль";
    }
}


class Logger
{
    private $format;
    private $delivery;

    public function __construct(Format $format, Deliver $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $this->deliver($this->format($string));
    }

    public function format($string)
    {
       return $this->format->setFormat($string);
    }

    public function deliver( $format)
    {
        $this->delivery->setDeliver($format);
    }

}

$logger = new Logger(new FormatWithDate(), new DeliverByConsole());
$logger->log('Fixed by SOLID!');

?>