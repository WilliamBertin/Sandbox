<?php
class Price
{
	protected $__price;
	protected $__newPrice;

	//Setter
	public function setPrice($price){
		$this->__price = $price;
	}
	public function setNewPrice($newPrice){
		$this->__newPrice = $newPrice;
	}

	//Getter
	public function getPrice(){
		return $this->__price;
	}
	public function getNewPrice(){
		return $this->__newPrice;
	}

	public function getAmountDiscount($price, $newPrice){
		return ((($price - $newPrice)/$price)*100).'%';
	}
}

$price = new Price();
$price->setPrice(100);
$price->setNewPrice(35);
echo $price->getAmountDiscount($price->getPrice(), $price->getNewPrice());

