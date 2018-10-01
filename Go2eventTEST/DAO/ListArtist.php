<?php
namespace DAO;

class ListArtista extends SingletonDAO implements IDAO
{

  private $artist;

  function __construct(argument)
  {
    $this->array array();
  }

  public function add($obj)
  {
    arraypush($artist,$obj);
  }

  public function retrieve($obj)
  {

  }

  public function update($obj)
  {

  }

  public function delete($obj)
  {

  }

  public function getArtist()
  {
    return $this->artist;
  }
}


 ?>
