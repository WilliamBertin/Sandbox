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

	public function CaesarCryptography($message, $notch) {
		try {
			foreach($message as $letter){
				$letter++;
				echo $letter;
			}
		}
		catch (Exception $e) {
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
	    }
	    print_r($message);
	}
}

$messageToCrypt = new Cryptography();
$messageToCrypt->setMessage('Hello Word');
$messageToCrypt->setNotch(1);
$messageToCrypt->CaesarCryptography($messageToCrypt->getMessage(), $messageToCrypt->getNotch());