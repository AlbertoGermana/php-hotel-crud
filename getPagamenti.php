<?php
  header('Content-Type: application/json');

  include 'conn.php'; //connessione al db

  //query che interroga il db
  $sql = "
        SELECT status, price
        FROM pagamenti
  ";
  //salvo nella variabile il risultato della query
  $results = $conn -> query($sql);

  //Controllo se ho dei risultati:
  //se il risultato è minore di una riga
  if ($results -> num_rows < 1){
    echo 'no results';
    return;
  }

  //creo array vuoto
  $res = [];

  //salvo ogni singola riga come un elemento dell'array
  while ($row = $results -> fetch_assoc()){ //fetch_assoc identifica il singolo record

    $res[] = $row;
  };
  // chiudo connessione db
  $conn -> close();

  //trasformo array in json
  echo json_encode($res);

 ?>
