<?php
namespace Controller;

use Model\Artist as M_Artist;
use DAO\Artist as D_Artist;

class ControllerArtist
{

  function __construct()
  {

  }

  function index()
  {
    include(ROOT.'Views/index.php');
  }

  function addArtist()
  {
    $artist = $_POST;
    print_r($artist);
  }

}



 ?>
