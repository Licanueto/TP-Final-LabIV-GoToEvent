<?php
namespace Model;

class Artist
{
  private $name;
  private $desc;

  function __construct($name, $desc)
  {
    $this->name = $name;
    $this->desc = $desc;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getDesc()
  {
    return $this->desc;
  }

  public function setDesc($desc)
  {
    $this->desc = $desc;
  }

}


 ?>
