<?php
   class RoutesBuilder{

   	  public function create($path="",$parameters=""){
          $uri = $_SERVER['REQUEST_URI'];

          echo $uri;
   	  }
   }

   $route = new RoutesBuilder();
   $route->create();
?>