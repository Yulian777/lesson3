<?php
class MyUser{

    private static $salt = '$@1t';

    private $id, $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public static function findById($id) {
        return new self();
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getNameLenght() {
        return strlen($this->getName());
    }
}

$user = MyUser::findById(3);

//echo MyUser::$salt;

$user = new MyUser();
$user->

$user->setName('Dima'); //$user->name = "Vasya";
echo $user->getName();

var_dump($user);

