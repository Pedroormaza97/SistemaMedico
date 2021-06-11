<?php
class Conexion{
  public function conectar(){
    $link = new PDO("musql:host=localhost;dbname=pos",
    "root",
    "",);
    $link ->exec("set names utf8");
    return $slink;
  }



} ?>
