<?
session_start();

$_SESSION['belepve'] = "false";
$b=$_POST["hash"];

echo $b;

if (($b == 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3') //123
||( $b == 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0') //456
||( $b == '35a9e381b1a27567549b5f8a6f783c167ebf809f1c4d6a9e367240484d8ce281') //789
||( $b == 'ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad')) //abc
  
  {$_SESSION['belepve'] = "true";
  include("iranyito.php");}
  
 else
  echo( "Rossz azonosító!" ); 
 ?>