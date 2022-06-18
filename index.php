<?php

interface ContactDetail
{
    public function name($name) : void;
    public function phone($phone) : void;
    public function surname($surname) : void;
    public function email($email) : void;
    public function address($address) : void;
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

    public function phone($phone) : void
    {
        $this->contactDetails->parts[] = $phone;
    }

    public function name($name) : void
    {
       $this->contactDetails->parts[] = $name;
    }

    public function surname($surname) : void
    {
        $this->contactDetails->parts[] = $surname;
    }

    public function email($email) : void
    {
        $this->contactDetails->parts[] = $email;
    }

    public function address($address) : void
    {
        $this->contactDetails->parts[] = $address;
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

    public function listParts(): void
    {
        echo "Contact Details: " . implode(', ', $this->parts) . "\n\n";
    }
}


$contact1 = new ContactDetails();
$newContact = $contact1->name("John");
$newContact = $contact1->surname("Smith");
$newContact = $contact1->phone("24235225");
$newContact = $contact1->address("Ukraine");
$newContact = $contact1->build();

echo "<br><br>";

$newContact = $contact1->name("Jack");
$newContact = $contact1->surname("Taylor");
$newContact = $contact1->build();

