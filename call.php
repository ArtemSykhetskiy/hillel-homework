<?php

class User{
    public string $name;
    public int $age;
    public string $email;

    public function __construct(string $name, int $age, string $email){
        $this->setName($name);
        $this->setAge($age);
        $this->setEmail($email);
    }

    public function __call($name, $arguments){
        echo "Методу '{$name}' не існує";
        die();
    }

    private function setName(string $name){
        $this->name = $name;
    }
    private function setAge(int $age){
        $this->age = $age;
    }

    public function getAll() : array{
        $data = ["Name" => $this->name, "Age" => $this->age, "Email" => $this->email];
        return $data;
    }


}

$user = new User('Denys', 24, 'test@gmail.com');
var_dump($user->getAll());
