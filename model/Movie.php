<?php 

class Movie{

  private $title;
  private $subtitle;

  public $gen;
  public $mainActor;
  public $director;
  public $actors;

  public function __construct( string $_title, string $_subtitle, string $_gen, array $_actors){

    $this -> title = $_title;
    $this -> subtitle = $_subtitle;
    $this -> gen = $_gen;
    $this -> actors = $_actors;

  }

  /*SETTER*/

  public function setName(){

    $this->getName();

  }
  public function setSub(){

    $this->getSub();

  }

  /*GETTER*/

  public function getName(){

    echo "$this->title";

  }
  public function getSub(){

    echo "$this->subtitle";

  }
  
}

?>