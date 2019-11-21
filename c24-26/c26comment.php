<html>
<body>
<pre>
<?php
class Sample2
{
    /** @var string */
    public $name = "";
    /** @var int */
    public $price = 0;
    //コンストラクタ。商品名と商品価格を設定する

    /**
     * Sample2 constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

}

/**
 * @param $name
 * @param $price
 * @return Sample2
 */
function goodsInformation($name, $price){
    return new Sample2($name, $price);
}

var_dump(goodsInformation("弁当", 450));

?>
</pre>

</body>
</html>