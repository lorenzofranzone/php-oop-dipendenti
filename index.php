<?php
   require_once 'classes/Dipendente.php';
   require_once 'classes/Dirigente.php';

   $lorenzo = new Dipendete('001', 'Lorenzo', 'Franzone', 'Via Roma, 118', 'FRNLNZ89L13I138U', '123456789112345678921234567', 'Full stack developer');
      var_dump($lorenzo);

   $antonio = new Dirigente('002', 'Antonio', 'Bianchi', 'Via Milano, 10', 'BNCANT70L13I138U', '123456789112345678921234567', 'Project manager', 'bonus1', 2);
   var_dump($antonio);
