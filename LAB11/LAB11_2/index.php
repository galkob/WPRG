<?php
class Product{
    private $name="",$price=0.0,$quantity=0;
    public function __construct($name,$price,$quantity){
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function __toStrign(){
    return "Product: ".$this->name."\nPrice: ".$this->price."\nQuantity: ".$this->quantity;
    }
}
class Cart{
    private $products;
    function __construct(){
        $this->products = array();
    }
    function addProduct(Product $product){
        array_push($this->products,$product);
    }
    function removeProduct(Product $product){
        $index=array_search($product,$this->products,1);
        array_splice($this->products,$index,1);
    }
    function getTotal(){
        $total=0;
        foreach ($this->products as $product){
            $total+=$product->getPrice();
        }
        return $total;
    }
    function __toString(){
        $string= "products:\n";
            foreach ($this->products as $product) {
                $string.=$product->toString;
            }
        return $string;
    }
}
?>