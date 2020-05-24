<?php
function banco() 
{
  $mysqli = new mysqli("localhost", "root", "", "ESTOQUE");
  return $mysqli;
}
  
banco();


















?>
