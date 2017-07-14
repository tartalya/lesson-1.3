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

echo '<pre>';
var_dump($res);




?>