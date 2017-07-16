<?php

$tmp = array();
$res = array();
$firstnames = array();
$lastnames = array();
$fantasy_array = array();

$continents_with_animals = array(
    'afrika' => array('Mammuthus columbi', 'Addax nasomaculatus', 'Amadina'),
    'amerika' => array('Coccyzus Vieillot', 'Alaskacephale', 'Ciconia maguari', 'Mustela nigripes'),
    'europa' => array('Capra ibex', 'Alexiidae'),
    'asia' => array('Meles leucurus', 'Osmerus mordax'),
    'australia' => array('Pristiophorus nudipinnis', 'Tachyglossus aculeatus')
);


foreach ($continents_with_animals as $key => $value) {

    if (is_array($value)) {

        // foreach ($continents_with_animals[$key] as $val) { // Действительно зачем такие сложности
        foreach ($value as $val) {
            //echo $val;

            if (strpos($val, ' ')) {

                list($firstnames[], $lastnames[]) = explode(' ', $val);
            }
        }
    }
}


shuffle($firstnames);
shuffle($lastnames);



/*
  for ($i = 0; $i < count($firstnames); $i++) {

  $fantasy_array[$i][0] = $firstnames[$i];
  $fantasy_array[$i][1] = $lastnames[$i];
  }
 */

for ($i = 0; $i < count($firstnames); $i++) {

    $fantasy_array[] = $firstnames[$i] . ' ' . $lastnames[$i];
    //$fantasy_array[$i][1] = $lastnames[$i];
}



//echo '<pre>';
//var_dump($fantasy_array);


echo '<h1>Фантастические твари</h1>';
foreach ($fantasy_array as $value) {

    echo $value . '<br>';
}


echo '<h1>И где они обитают</h1>';




foreach ($continents_with_animals as $key => $value) {


    echo '<h2>' . $key . '</h2><br>';


    $val_to_string = implode(' ', $value);


    foreach ($fantasy_array as $fantasy_value) {

        list($ber) = explode(' ', $fantasy_value);

        if (strpos($val_to_string, $ber) !== false) {

            //echo $ber;

            $tmp[] = $fantasy_value;
        }
    }

    echo implode($tmp, ', ');
    unset($tmp);


    /*
      for ($i = 0; $i < count($firstnames); $i++) {

      //echo $firstnames[$i];

      if (strpos($val_to_string, $firstnames[$i]) !== false) { // про !== для strpos надо бы хорошенько запомнить !!!
      $tmp[] = $firstnames[$i] . ' ' . $lastnames[$i];
      //echo implode($fantasy_array[$i], ', ');
      }
      }
     */


    //  echo implode($tmp, ', ');
    // unset($tmp);
}
?>