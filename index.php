<?php

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

                //echo 'found space';

                static $i = 0;
                $res[] = explode(' ', $val);
                $firstnames[] = $res[$i][0];
                $lastnames[] = $res[$i][1];
                $i++;
            }
        }
    }
}



/*
  for ($i = 0; $i < count($res); $i++) {

  //echo $res[$i][1];
  $firstnames[] = $res[$i][0];
  $lastnames[] = $res[$i][1];
  }

 */


shuffle($firstnames);
shuffle($lastnames);




for ($i = 0; $i < count($firstnames); $i++) {

    $fantasy_array[$i][0] = $firstnames[$i];
    $fantasy_array[$i][1] = $lastnames[$i];
}


//echo '<pre>';
//var_dump($fantasy_array);

echo '<h1>Фантастические твари</h1>';
foreach ($fantasy_array as $value) {

    echo $value[0] . ' ' . $value[1] . '<br>';
}


echo '<h1>И где они обитают</h1>';




foreach ($continents_with_animals as $key => $value) {


    echo '<h2>' . $key . '</h2><br>';


    $val_to_string = implode($value);



    for ($i = 0; $i < count($firstnames); $i++) {

        //echo $firstnames[$i];

        if (strpos($val_to_string, $firstnames[$i]) !== false) { // про !== для strpos надо бы хорошенько запомнить !!! 
            $tmp[] = $firstnames[$i] . ' ' . $lastnames[$i];
        }
    }



    echo implode($tmp, ', ');
    unset($tmp);
}
?>