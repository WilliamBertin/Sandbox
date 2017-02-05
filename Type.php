<?php
class Type {
	protected $__variable;
	protected $__type;

    /**
     * [setVariable]
     * @param [no specific type] $variable
     */
	public function setVariable($variable)
	{
		$this->__variable = $variable;
	}
	
	/**
	 * [setType]
	 * @param [text] $type
	 */
	public function setType($type)
	{
    	$this->__type = $type;
    }

    /**
     * [getVariable]
     * @return [no specific type] 
     */
    public function getVariable()
    {
        return $this->__variable;
    }

	/**
	* [getType]
	* @return [text]
	*/
    public function getType()
    {
        return $this->__type;
    }

	/**
	 * [testType throw exception if variable isn't of desired type]
	 * @param  [no specific type] $variable        [variable to test]
	 * @param  [text]             $type            [type expected for variable]
	 * @return [void]           
	 */
	public function testType ($variable, $type)
	{
		try {
			switch ($type){
				case('int'):
					if (gettype($variable) !== 'integer'){
						throw new Exception('Expected variable to be an integer type. Actual : '.gettype($variable));
					
					}
					break;
				case ('string'):
					if (gettype($variable) !== 'string'){
						throw new Exception('Expected variable to be a string type.'.gettype($variable));
					}
					break;	
				default:
					break;
			}
		}
	    catch (Exception $e) {
    		echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
	}
}

$testType = new Type();
$testType->setVariable('500');
$testType->setType('int');

$testType->testType($testType->getVariable(), $testType->getType());
