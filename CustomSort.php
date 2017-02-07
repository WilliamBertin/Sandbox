<?php

class CustomSort
{
    //TO DO : GETTER & SETTER
    //COMMENT THE FUNCTION
    //Extern the variable $customSort of the function ?

    public function customSort($a, $b)
    {
        $customSort = array('XS', 'S', 'M', 'L', 'XL', 'XXL');

        if (!(in_array($a, $customSort) && in_array($b, $customSort)))
        {
            return 0;
        }

        return array_search($a, $customSort) < array_search($b, $customSort) ? -1 : 1;
    }
}

//Exemple with array sorted alphabeticaly
$arrayToSort = array('L', 'M', 'S', 'XS', 'XL', 'XXL');

uksort($arrayToSort,"customSort");

//Display the list sorted with customSort
print_r($arrayToSort);
