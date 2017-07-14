<?php

$continents_with_animals = array(
    'afrika' => array('Mammuthus columbi', 'Addax nasomaculatus', 'Amadina'),
    'amerika' => array('Coccyzus Vieillot', 'Alaskacephale', 'Ciconia maguari', 'Mustela nigripes'),
    'europa' => array('Capra ibex', 'Alexiidae'),
    'asia' => array('Meles leucurus', 'Osmerus mordax'),
    'australia' => array('Pristiophorus nudipinnis', 'Tachyglossus aculeatus')
);


foreach ($continents_with_animals as $key => $value) {

    if (is_array($value)) {

        foreach ($continents_with_animals[$key] as $val) {

            //echo $val;

            if (strpos($val, ' ')) {

                //echo 'found space';


                $res[] = explode(' ', $val);
            }
        }
    }
}


//echo '<pre> before shuffle<br>';
//var_dump($res);
//echo '<br><br>';


for ($i = 0; $i < count($res); $i++) {

    //echo $res[$i][1];
    $firstnames[] = $res[$i][0];
    $lastnames[] = $res[$i][1];
}





//echo '<pre> after shuffle<br>';

shuffle($firstnames);
shuffle($lastnames);

//var_dump($firstnames);
//var_dump($lastnames);

if (count($firstnames) == count($lastnames)) {

    for ($i = 0; $i < count($firstnames); $i++) {

        $fantasy_array[$i][0] = $firstnames[$i];
        $fantasy_array[$i][1] = $lastnames[$i];
    }
}

//echo '<pre>';
//var_dump($fantasy_array);

echo '<h1>Фантастические твари</h1>';
foreach ($fantasy_array as $value) {
    
    echo $value[0] . ' ' .$value[1] . '<br>';
}


echo '<h2>И где они обитают</h2>';


?>