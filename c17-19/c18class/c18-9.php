<html>
<body>

<?php
/**
 * 引数にクラスの型
 */
class Sample
{
    private $name = "";
    private $price = 0;
    //コンストラクタ。商品名と商品価格を設定する
    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
    //商品名と価格を表示するメソッド
    public function printPrice(){
        print($this->name."の価格: ￥".$this->price."<br>");
    }
    //商品名のゲッタ
    public function getName(){
        return $this->name;
    }
    //商品価格のゲッタ
    public function getPrice(){
        return $this->price;
    }
}

function test(Sample $sample){
    //商品価格の税込み価格を計算し、表示
    $priceWithTax = round($sample->getPrice() * 1.1);  // round() 小数点以下の四捨五入
    print($sample->getName()."の税込み価格: ￥".$priceWithTax."<br>");
}

$goodsA = new Sample("弁当", 450);
$goodsA->printPrice();

$goodsWithTax = new Sample("弁当", 450);
test($goodsWithTax);

?>

</body>
</html>