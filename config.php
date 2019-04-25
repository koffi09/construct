<?php
   
   error_reporting(E_ALL|E_NOTICE);
  $host_name="localhost";
  $bd_name="achat";
  $user="root";
  $password="";
  try{

    $bd = new PDO("mysql:host=".$host_name.";dbname=".$bd_name,$user,$password);
    $bd->exec('SET NAME utf8');
  } 
    catch(Exeption $e){
    echo'Erreur:'.$e->getMessage().'<br>';
    echo 'numero:'.$e->getCode();

     }


     ?>