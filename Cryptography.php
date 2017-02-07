<?php
class Cryptography 
{
	protected $__message;
	protected $__notch;

	/**
	 * [setMessage]
	 * @param [string] $_message 
	 */
    public function setMessage($_message)
    {
        $this->__message = $_message;

        return $this;
    }

	/**
	 * [setNotch]
	 * @param [int] $_notch
	 */
    public function setNotch($_notch)
    {
        $this->__notch = $_notch;

        return $this;
    }

	/**
	 * [getMessage]
	 * @return [string]
	 */
    public function getMessage()
    {
        return $this->__message;
    }

	/**
	 * [getNotch]
	 * @return [int]
	 */
    public function getNotch()
    {
        return $this->__notch;
    }
//TO DO : ADD BOOLEAN TO DECRYPT
	public function CaesarCryptography($message, $notch) {
		try {
			$end = strlen($message);
			for($i = 0; $i <= $end; ++$i) 
			{
				$char = substr( $message, $i, 1 );
					for ($j = 0; $j < $notch; ++$j){
						$char = ++$char;
					}
				$message[$i] = $char;
			}
		} catch (Exception $e) {
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
	    }
	    print_r($message);
	}
}

$messageToCrypt = new Cryptography();
$messageToCrypt->setMessage('ABC');
$messageToCrypt->setNotch(2);
$messageToCrypt->CaesarCryptography($messageToCrypt->getMessage(), $messageToCrypt->getNotch());