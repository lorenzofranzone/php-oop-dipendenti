<?php
   require_once 'Dipendente.php';
   
   // FX class Dirigente
   class Dirigente extends Dipendente {
      public $bonus;
      public $operai;

      function __construct($matricola, $nome, $cognome, $indirizzo, $cf, $iban, $mansioneId, $bonus, $operai) {

         parent::__construct($matricola, $nome, $cognome, $indirizzo, $cf, $iban, $mansioneId);
         
         if(empty($_bonus)){
            die('Bonus non inserito');
         }
         elseif(!is_int($_operai)){
            die('Numero operai non valido');
         }
         
         $this->bonus = $_bonus;
         $this->operai = $_operai;

         public function getSchedaDir() {
         
            $result = [
               'matriola' => $this->matricola = $_matricola;
               'nome' => $this->nome = $_nome;
               'cognome' => $this->cognome = $_cognome;
               'indirizzo' => $this->indirizzo = $_indirizzo;
               'cf' => $this->cf = $_cf;
               'iban' => $this->iban = $_iban;
               'masioneId' => $this->mansioneId = $_mansioneId;
               'bonus' => $this->bonus = $_bonus;
               'operai' => $this->operai = $_operai;
            ];
            return $result;
         
         } // FX getScheda
      
      }

   } // class Dirigente extended