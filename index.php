<?php
  
  $squadre = [
    'nord'=>[
      'squadra_casa'=>'Milano',
      'squadra_ospiti'=>'Pavia',
      'punti_casa'=>79,
      'punti_ospiti'=>81
    ],
    'centro'=>[
      'squadra_casa'=>'Firenze',
      'squadra_ospiti'=>'Bologna',
      'punti_casa'=>93,
      'punti_ospiti'=>91
    ],
    'sud'=>[
      'squadra_casa'=>'Napoli',
      'squadra_ospiti'=>'Caserta',
      'punti_casa'=>73,
      'punti_ospiti'=>88
    ],
    'ovest'=>[
      'squadra_casa'=>'Genova',
      'squadra_ospiti'=>'Torino',
      'punti_casa'=>61,
      'punti_ospiti'=>74
    ],
    'est'=>[
      'squadra_casa'=>'Venezia',
      'squadra_ospiti'=>'Udine',
      'punti_casa'=>91,
      'punti_ospiti'=>74
    ],
];

$gironi = array_keys($squadre);
echo var_dump($gironi);

  for($i =0; $i < count($gironi);$i++){
       
      $squadra = $squadre[$gironi[$i]];

      echo "<li>"." casa". "<span style='color:green'>".$squadra['squadra_casa']."</span>"."-"." ospiti". 
      
            "<span style='color:blue'>".$squadra['squadra_ospiti']."</span>"."|".$squadra['punti_casa']."-".$squadra["punti_ospiti"]."</li>";
  }
?>