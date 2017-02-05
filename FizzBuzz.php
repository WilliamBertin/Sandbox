<?php
class FizzBuzz
{
	protected $__array;
    protected $__compteur;

    //Setter
	public function setArray($array){
		$this->__array = $array;
	}   
	public function setCompteur($compteur){
    	$this->__compteur = $compteur;
    }

    //Getter    
    public function getArray(){
    	return $this->__array;
    }

    public function getCompteur(){
    	return $this->__compteur;
    }    

	public function browseCollection($array, $compteur){
		for ($i=1; $i<= $compteur; $i++){
			$chaine = '';
			foreach ($array as $key=>$value){
				if (($i % $key) === 0){
					$chaine .= $value.' ';
				}
			}
			echo $chaine === '' ? $i."<br />" : $chaine."<br />"; 
		}
	}
}

$array = array (
3 => 'Fizz',
5 => 'Buzz',
);

$fizzBuzz = new FizzBuzz();
$fizzBuzz->setArray($array);
$fizzBuzz->setCompteur(100);
$fizzBuzz->browseCollection($fizzBuzz->getArray(), $fizzBuzz->getCompteur());