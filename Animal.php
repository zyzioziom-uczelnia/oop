<?php

require_once ('AnimalInterface.php');

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

  public function getSpecies() {
    return $this->species;
  }
  public function setSpecies($species) {
    $this->species = $species;
    return $this->species;
  }
  public function getSex() {
    return $this->sex;
  }
  public function setSex($sex) {
    $this->sex = $sex;
    return $this->sex;
  }
  public function getSound() {
    return $this->sound;
  }
  public function setSound($sound) {
    $this->sound = $sound;
    return $this->sound;
  }
  public function getColor() {
    return $this->color;
  }
  public function setColor($color) {
    $this->color = $color;
    return $this->color;
  }

}


?>
