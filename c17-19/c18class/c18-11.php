<html>
<body>

<?php
//引数にクラスの型
class Goods{

    /** @var string */
    public $name = "";
    /** @var int */
    public $price = 0;

    //コンストラクタ。商品名と商品価格を設定する
    public function __construct(string $name, int $price){

        $this->name = $name;
        $this->price = $price;
    }

    public function setTax(): float {
        $priceWithTax = round($this->getPrice() * 1.10);  // round() 小数点以下の四捨五入
        return $priceWithTax;
    }

    public function printPrice(){
        print($this->getName()."の税込み価格: ￥".$this->setTax()."<br>");
    }

    //商品名のゲッタ
    public function getName(): string {
        return $this->name;
    }

    //商品価格のゲッタ
    public function getPrice(): int{
        return $this->price;
    }
}

class Food extends Goods {

    /**
     * @var string
     */
    private $category = "";
    /**
     * @var string
     */
    private $made_in = "";

    public function __construct(string $name, int $price, string $category, string $made_in){

        parent::__construct($name, $price);
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->made_in = $made_in;

    }

    public function setTax(): float {
        $priceWithTax = round($this->getPrice() * 1.08);  // round() 小数点以下の四捨五入
        return $priceWithTax;
    }

}

class Electrics extends Goods {

    /**
     * @var int
     */
    private $manufactured_year = 0;

    public function __construct(string $name, int $price, string $category, string $manufactured_year){

        parent::__construct($name, $price);
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->manufactured_year = $manufactured_year;

    }

}

class Entertainment extends Goods {

    /** @var string */
    private $ticket = '';

    public function __construct(string $name, int $price, string $ticket){

        parent::__construct($name, $price);
        $this->name = $name;
        $this->price = $price;
        $this->ticket = $ticket;
    }

}

class Food_in_2005 extends Food {

    public function setTax(): float{
        $priceWithTax = round($this->getPrice() * 1.05);  // round() 小数点以下の四捨五入
        return $priceWithTax;
    }
}


$FoodA = new Food("オレンジ", 250, "fruits", "アメリカ");
$FoodA->printPrice();

$Macbook = new Electrics("Macbook", 240000, "PC", 2016);
$Macbook->printPrice();

$Museum = new Entertainment("博物館", 600, "学割");
$Museum->printPrice();

$FoodB = new Food_in_2005("トマト", 200, "vegetables", "熊本");
$FoodB->printPrice();

?>

</body>
</html>