<?php
class FizzBuzz
{
	protected $__array;
    protected $__counter;

    /**
     * [setArray]
     * @param [array] $array
     */
	public function setArray($array)
	{
		$this->__array = $array;
	}
	
	/**
	 * [setCounter]
	 * @param [int] $counter
	 */
	public function setCounter($counter)
	{
    	$this->__counter = $counter;
    }

    /**
     * [getArray]
     * @return [array]
     */
    public function getArray()
    {
    	return $this->__array;
    }

	/**
	 * [getCounter]
	 * @return [int] 
	 */
    public function getCounter()
    {
    	return $this->__counter;
    }    

    /**
     * [browseCollection display value if key is multiple of counter]
     * @param  [array] $array   [collection of integer as index and text as value]
     * @param  [array] $counter [counter for i itteration]
     * @return [void]           
     */
	public function browseCollection($array, $counter)
	{
		try {
			for ($i=1; $i<= $counter; $i++){
				$chaine = '';
				foreach ($array as $key=>$value){
					if (($i % $key) === 0){
						$chaine .= $value.' ';
					}
				}
				echo $chaine === '' ? $i."<br />" : $chaine."<br />"; 
			}
		} 
		catch (Exception $e) {
    		echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
	}
}

$array = array (
3 => 'Fizz',
5 => 'Buzz',
);

$fizzBuzz = new FizzBuzz();
$fizzBuzz->setArray($array);
$fizzBuzz->setCounter(100);
$fizzBuzz->browseCollection($fizzBuzz->getArray(), $fizzBuzz->getCounter());