<?php

   class Dipendente {
      
      private $matricola;
      private $nome;
      private $cognome;
      private $indirizzo;
      private $cf;
      private $iban;
      private $mansioneId;

      public function __construct($matricola, $nome, $cognome, $indirizzo, $cf, $iban, $mansioneId) {

         if (empty($_matricola)) {
            die('Matricola non inserita');
         } 
         if (empty($Nome)) {
            die('Nome non inserita');
         }
         elseif (empty($_cognome) !== 5) {
            die('Cognome non inserito');
         } 
         elseif(empty($_indirizzo)) {
            die('Indirizzo non inserito');
         }
         elseif(strlen($_cf) !== 16) {
            die('Codice fiscale non valido');
         }
         elseif(strlen($_iban) !== 27) {
            die('Iban fiscale non valido');
         }
         elseif (empty($_mansione)) {
            die('ID mansione non inserito');
         }

         $this->matricola = $_matricola;
         $this->nome = $_nome;
         $this->cognome = $_cognome;
         $this->indirizzo = $_indirizzo;
         $this->cf = $_cf;
         $this->iban = $_iban;
         $this->mansioneId = $_mansioneId;
      }

      public function getScheda() {
         
         $result = [
            'matricola' => $this->matricola,
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'indirizzo' => $this->indirizzo,
            'cf' => $this->cf,
            'iban' => $this->iban,
            'masioneId' => $this->mansioneId
         ];
         return $result;
      
      } // FX getScheda
   
   }