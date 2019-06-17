<?php
  function creo_codice_giocatore($lunghezza_caratteri, $lunghezza_numeri){
    $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lunghezza_caratteri = strlen($caratteri);
    $numeri = '0123456789';
    $lunghezza_numeri = strlen($numeri);
    $codice_giocatore = '';
    for ($i = 0; $i < $lunghezza_caratteri; $i++) {
      $codice_giocatore .= $caratteri[rand(0, $lunghezza_caratteri - 1)];
    }
    for ($j = 0; $j < $lunghezza_numeri; $j++) {
      $codice_giocatore .= $numeri[rand(0, $lunghezza_numeri - 1)];
    }
    return $codice_giocatore;
  }

  function creo_punti_fatti($min, $max){
    $punti_fatti = rand($min, $max);
    return $punti_fatti;
  }

  function creo_numero_rimbalzi($min, $max){
    $numero_rimbalzi = rand($min, $max);
    return $numero_rimbalzi;
  }

  function creo_numero_falli($min, $max){
    $numero_falli = rand($min, $max);
    return $numero_falli;
  }

  function creo_perc_2punti($min, $max){
    $perc_2punti = mt_rand($min * 10, $max * 10) / 10;
    return $perc_2punti;
  }

  function creo_perc_3punti($min, $max){
    $perc_3punti = mt_rand($min * 10, $max * 10) / 10;
    return $perc_3punti;
  }
?>
