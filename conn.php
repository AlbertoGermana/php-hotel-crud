<?php

  $server = 'localhost:3307/';
  $user = 'root';
  $password = 'root';
  $db_name = 'hotel_transilvania';

  $conn = new mysqli($server, $user, $password, $db_name);

  // se non riesco a connettermi, restituiscimi l'errore
  if ($conn -> connect_errno){
    echo $conn -> connect_errno;
    return;

  };
 ?>
