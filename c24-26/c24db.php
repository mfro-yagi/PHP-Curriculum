<html>
<body>

<?php

try {
    // DBへ接続
    $dbh = new PDO("mysql:host=192.168.33.1; dbname=tomo; charset=utf8", 'tomo@%', 'G!G1YaT063oo');

    // SQL作成
    $sql = 'CREATE TABLE user (
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(20),
		family_name VARCHAR(20),
		age INT(11),
		registry_datetime DATETIME
	) engine=innodb default charset=utf8;

	INSERT  INTO user (id, first_name, family_name, registry_datetime)  VALUES (0,"Jiro", "Nakata", now());
     UPDATE user SET first_name="Jiro" WHERE id=5;
    
  /*idが20以下の条件に絞ったサブクエリを生成し、first_nameを抽出*/
    SELECT E.first_name
            FROM(
      SELECT *
      FROM user 
         WHERE id <= 20
       ) 
       AS E
 WHERE family_name="Nakata";
             ';

    // SQL実行
    $res = $dbh->query($sql);

    // テーブルからデータを取得するクエリ文
    $table_get_query = "SELECT * FROM user";

    // テーブルからデータを取得
    $result = $dbh->query($table_get_query);



} catch(PDOException $e) {

    echo $e->getMessage();
    die();
}

?>


</body>
</html>