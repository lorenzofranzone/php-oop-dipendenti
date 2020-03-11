<?php

   // Richiede l'esistenza di env.php
   require_once 'env.php';

   // Stabilisce la connessione al database attraverso le credenziali-variabili.
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Se c'è un errore di connessione al database stampa un messaggio di errore e non esegue altro.
   if ($conn && $conn->connect_error) {
      throw new Exception('Errore di connessione al database ' . $conn->connect_error);
   }