<?php

class FizzBuzz
{
    protected $__array;
    protected $__counter;

    /**
     * [setArray]
     *
     * @param [array] $array
     */
    public function setArray($array)
    {
        $this->__array = $array;
    }

    /**
     * [setCounter]
     *
     * @param [int] $counter
     */
    public function setCounter($counter)
    {
        $this->__counter = $counter;
    }

    /**
     * [getArray]
     *
     * @return [array]
     */
    public function getArray()
    {
        return $this->__array;
    }

    /**
     * [getCounter]
     *
     * @return [int]
     */
    public function getCounter()
    {
        return $this->__counter;
    }

    /**
     * [browseCollection display value if key is multiple of counter]
     *
     * @param  [array] $array   [collection of integer as index and text as value]
     * @param  [array] $counter [counter for i itteration]
     *
     * @return [void]
     */
    public function browseCollection($array, $counter)
    {
        try {
            for ($i = 1; $i <= $counter; ++$i) {
                $chaine = '';
                foreach ($array as $key => $value) {
                    if (($i % $key) === 0) {
                        $chaine .= $value . ' ';
                    }
                }
                echo $chaine === '' ? $i . "<br />" : $chaine . "<br />";
            }
        } catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
        }
    }

    public function primeNumber($counter)
    {
    	try {
    		$cpt = 0;
    		$counterPrime = 0;
    		for ($i= 1; $i <= $counter; ++$i) {
    			for ($j= 1; $j <=$i; ++$j) {
    				if ($i % $j === 0 || $i === 1) {
    					++$cpt;
    				}
    			}
    			echo $cpt === 2 ? $i.' est un nombre premier. <br />' : '';
    			$cpt === 2 ? ++$counterPrime : '';
    			$cpt = 0;
    		}
    	echo 'Il y\' a '.$counterPrime.' nombres premiers entre 1 et '.$counter;
    	} catch (Exception $e) {
    		echo 'Exception reçue : ', $e->getMessage(), "\n";
    	}
    }

}

$array = array(
    3 => 'Fizz',
    5 => 'Buzz',
);

$fizzBuzz = new FizzBuzz();
//TEST function browseCollection
$fizzBuzz->setArray($array);
$fizzBuzz->setCounter(100);
//$fizzBuzz->browseCollection($fizzBuzz->getArray(), $fizzBuzz->getCounter());
//TEST function primeNumber
$fizzBuzz->setCounter(2500);
$fizzBuzz->primeNumber($fizzBuzz->getCounter());
