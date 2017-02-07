<?php
class Cryptography 
{
	protected $__message;
	protected $__notch;
	protected $__decrypt;

	/**
	 * [setMessage]
	 * @param [string] $_message 
	 */
    public function setMessage($_message)
    {
        $this->__message = $_message;
    }

	/**
	 * [setNotch]
	 * @param [int] $_notch
	 */
    public function setNotch($_notch)
    {
        $this->__notch = $_notch;
    }

	/**
	 * [setDecrypt]
	 * @param [bool] $_decrypt
	 */
    public function setDecrypt($_decrypt)
    {
    	$this->__decrypt = $_decrypt;
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

    /**
     * [getDecrypt]
     * @return [bool]
     */
    public function getDecrypt()
    {
    	return $this->__decrypt;
    }

    /**
     * [CaesarCryptography Crypt a message with Caesar cryptohgraphy method]
     * @param [string]  $message [message to crypt]
     * @param [int]  $notch   [rank to crypt the message (Caesar method)]
     * @param [boolean] $decrypt [boolean, default value is false, true to decrypt, false to crypt]
     */
	public function CaesarCryptography($message, $notch, $decrypt = false) {
		try {
			$end = strlen($message);
			for($i = 0; $i <= $end; ++$i) 
			{
				$char = substr( $message, $i, 1 );
					for ($j = 0; $j < $notch; ++$j){
						$decrypt === true ? $chat = --$char : $char = ++$char;
					}
				$message[$i] = $char;
			}
	    print_r($message);
		} catch (Exception $e) {
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
	    }
	}
}

$messageToCrypt = new Cryptography();
$messageToCrypt->setMessage('ABC');
$messageToCrypt->setNotch(2);
echo "MESSAGE CRYPTÉ : ";
$messageToCrypt->CaesarCryptography($messageToCrypt->getMessage(), $messageToCrypt->getNotch());
$messageToCrypt->setDecrypt(true);
echo "<br /> MESSAGE DÉCRYPTÉ : ";
$messageToCrypt->CaesarCryptography($messageToCrypt->getMessage(), $messageToCrypt->getNotch(), $messageToCrypt->getDecrypt());