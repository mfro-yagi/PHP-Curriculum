<html>
<body>

<?php
/**
 * override
 */
class Goods
{
    //商品名プロパティ
    protected $name = "";
    //商品価格プロパティ
    protected $price = 0;
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

class GoodsWithTax extends Goods{
    //商品名と価格を表示するメソッド。税込みで表示するように変更
    public function printPrice()
    {
        //商品価格の税込み価格を計算し、表示
        $priceWithTax = round($this->getPrice() * 1.1);  // round() 小数点以下の四捨五入
        print($this->getName()."の税込み価格: ￥".$priceWithTax."<br>");
    }
}

$goods = new Goods("弁当", 450);
$goods->printPrice();

$goodsWithTax = new GoodsWithTax("弁当", 450);
$goodsWithTax->printPrice();

?>

</body>
</html>