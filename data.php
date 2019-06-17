<?php
  $giocatori = [];

  for ($i = 0; count($giocatori) < 10; $i++) {
    $codice = creo_codice_giocatore(3, 3);

    if(!array_key_exists($codice, $giocatori)) {
      $giocatori[$codice] = [
        'codice_giocatore' => $codice,
        'punti_fatti' => creo_punti_fatti(0, 100),
        'numero_rimbalzi' => creo_numero_rimbalzi(0, 100),
        'numero_falli' => creo_numero_falli(0, 100),
        'percentuale_tiri_da_2_punti' => creo_perc_2punti(0, 100),
        'percentuale_tiri_da_3_punti' => creo_perc_3punti(0, 100)
      ];
    }
  }

  function CardGiocatori($giocatori){
    foreach ($giocatori as $key => $value) {
      echo '<div class="card">';
        echo '<h3>Codice giocatore: <span>' . $value['codice_giocatore'] . '</span></h3>';
        echo '<h4>Punti fatti: <span>' . $value['punti_fatti'] . '</span></h4>';
        echo '<h4>Numero rimbalzi: <span>' . $value['numero_rimbalzi'] . '</span></h4>';
        echo '<h4>Numero falli: <span>' . $value['numero_falli'] . '</span></h4>';
        echo '<h4>% successo per tiri da 2 punti: <span>' . $value['percentuale_tiri_da_2_punti'] . '</span></h4>';
        echo '<h4>% successo per tiri da 3 punti: <span>' . $value['percentuale_tiri_da_3_punti'] . '</span></h4>';
      echo '</div>';
    }
  }
?>
