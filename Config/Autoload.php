<?php namespace Config;

 class Autoload
{
	public static function Start()
	{
        spl_autoload_register(function($instancia)
        {

              $route=ROOT.str_replace("\\","/",$instance).".php";
              include_once($route);
        });
     }
 }
 ?>
