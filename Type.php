<?php
class Type {
	protected $__variable;
	protected $__type;

    /**
     * [setVariable setter]
     * @param [?] $variable
     */
	public function setVariable($variable)
	{
		$this->__variable = $variable;
	}
	
	/**
	 * [setType setter]
	 * @param [text] $type
	 */
	public function setType($type)
	{
    	$this->__type = $type;
    }

    /**
     * [getVariable getter]
     * @return [?] [variable to type test]
     */
    public function getVariable()
    {
        return $this->__variable;
    }

	/**
	* [getType getter]
	* @return [text] [type of the value expected]
	*/
    public function getType()
    {
        return $this->__type;
    }

	/**
	 * [testType throw exception if variable isn't of desired type]
	 * @param  [?] $variable    [variable to test]
	 * @param  [text] $type     [type expected for variable]
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
