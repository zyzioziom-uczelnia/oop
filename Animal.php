<?php
class Animal implements AnimalInterface {
  public $species;
  public $sex;
  public $sound;
  public $color;

  public function __construct() {
    $this->species = "cow";
    $this->sex = "female";
    $this->sound = "muuu";
    $this->color = "black with dots";
  }

  public function thisAnimal() {
    return "Hello, this is me - your ". $this->species .". I am ". $this->color ." and I do ". $this->sound ."!\n";
  }
}


?>
