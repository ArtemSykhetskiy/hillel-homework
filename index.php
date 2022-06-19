<?php

interface ContactDetail
{
    public function name($name);
    public function phone($phone);
    public function surname($surname);
    public function email($email);
    public function address($address);
}

class ContactDetails implements ContactDetail {
    private $contactDetails;

    public function __construct(){
        $this->reset();
    }

    public function reset()
    {
        $this->contactDetails = new Contact();
    }

    public function phone($phone)
    {
        $this->contactDetails->parts[] = $phone;
        return $this;
    }

    public function name($name)
    {
       $this->contactDetails->parts[] = $name;
        return $this;
    }

    public function surname($surname)
    {
        $this->contactDetails->parts[] = $surname;
        return $this;
    }

    public function email($email)
    {
        $this->contactDetails->parts[] = $email;
        return $this;
    }

    public function address($address)
    {
        $this->contactDetails->parts[] = $address;
        return $this;
    }
    public function build()
    {
       echo implode(', ', $this->contactDetails->parts);
        $this->reset();

    }
}

class Contact
{
    public $parts = [];
}


$contact1 = new ContactDetails();
$newContact = $contact1->name("John")
    ->surname('Smith')
    ->phone('1324252')
    ->address('Test')
    ->build();


echo "<br><br>";

$newContact = $contact1->name("Jack")->surname("Taylor")->build();

