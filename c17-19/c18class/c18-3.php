<?php
//"c18-2interface.php"　へ継承
class Nights{

    //定数　class内でのみ定義可
    const GOODNIGHT = 'おやすみ';

    public function night(){
        echo self::GOODNIGHT;
    }

}