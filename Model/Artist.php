<?php
namespace Model;

class Artist
{
  private $name;
  private $desc;

  function __construct($name,$desc = '');
  {
    $this->name = $name;
    $this->desc = $desc;
  }

  public getName()
  {
    return $name;
  }

  public getDesc()
  {
    return $desc;
  }

  public setDesc($desc)
  {
    $this->desc = $desc;
  }

}


 ?>
