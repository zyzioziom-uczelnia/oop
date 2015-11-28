<?php
class Animal {
  $species;
  $sex;
  $sound;
  $color;

  public function __construct() {
    $this -> species = "cow";
    $this -> sex = "female";
    $this -> sound = "muuu";
    $this -> color = "black with dots";
  }

  public function thisAnimal() {
    return "Hello, this is me - your ". $this.species .".";
  }
}

echo 'test';

 ?>
