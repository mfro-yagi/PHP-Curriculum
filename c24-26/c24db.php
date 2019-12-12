<html>
<body>

<?php

try {
    // DBへ接続
    $dbh = new PDO("mysql:host=192.168.33.10; dbname=forge; charset=utf8", 'forge', 'G!G1YaT063oo');

    // SQL作成
    $sql = 'use forge;
show table status where name=\'posts\';
show tables;
select * from posts;

#olympics table
CREATE TABLE `olympics` (
                            `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            `city` VARCHAR(100) NOT NULL,
                            `season` VARCHAR(200) NOT NULL,
                            `year` int(4) NOT NULL,
                            `created` datetime DEFAULT NULL,
                            `modified` datetime DEFAULT NULL
);
INSERT INTO olympics (city, season, year, created, modified)
VALUES (\'London\',\'summer\', 2012, now(), now()),(\'Sochi\',\'winter\', 2014, now(), now()),
       (\'Rio\',\'summer\', 2016, now(), now()),(\'Pyeongchang\',\'winter\', 2018, now(), now()),
       (\'Tokyo\',\'summer\', 2020, now(), now());

SELECT * FROM olympics;
show table status where name=\'olympics\';

DELETE FROM olympics WHERE id <= 6;

#サブクエリ
SELECT E.city
FROM
    (
        SELECT *
        FROM olympics
        WHERE year >= 2016
    )
        AS E
WHERE season=\'summer\';


#複雑なupdate
#goods table　
CREATE TABLE `goods` (
                            `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            `id_goods` VARCHAR(20) NOT NULL,
                            `name` VARCHAR(100) NOT NULL,
                            `price` int(10) NOT NULL,
                            `created` datetime DEFAULT NULL,
                            `modified` datetime DEFAULT NULL
);
INSERT INTO goods (id_goods, name, price, created, modified)
VALUES (\'S01\',\'おにぎり\', 150, now(), now()),(\'S02\',\'お茶\', 100, now(), now()),
       (\'S03\',\'弁当\', 400, now(), now());

SELECT * FROM goods;
show table status where name=\'goods\';

UPDATE goods SET price = 200;
SELECT * FROM goods;

UPDATE goods SET price = 380 WHERE id_goods = \'S03\';
SELECT * FROM goods;

UPDATE goods SET price = 160, name = \'鮭おにぎり\' WHERE id_goods = \'S01\';
SELECT * FROM goods;

#エラーも発生しないが、変更もされない
UPDATE goods SET price = 700 WHERE id_goods = \'S99\';
SELECT * FROM goods;

UPDATE goods SET price = price * 1.1 where id_goods = \'S02\';
SELECT * FROM goods;


#deliveries table　
CREATE TABLE `deliveries` (
                         `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `id_deliveries` VARCHAR(20) NOT NULL,
                         `id_customers` VARCHAR(20) NOT NULL,
                         `created` datetime DEFAULT NULL,
                         `modified` datetime DEFAULT NULL
);
INSERT INTO deliveries (id_deliveries,id_customers, created, modified)
VALUES (\'D01\',\'C01\', now(), now()),(\'D02\',\'C02\', now(), now()),
       (\'D03\',\'C03\', now(), now());

SELECT * FROM deliveries;


#delivery_details table　
CREATE TABLE `delivery_details` (
                              `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                              `id_deliveries` VARCHAR(20) NOT NULL,
                              `item_number` int(3) NOT NULL,
                              `id_goods` VARCHAR(20) NOT NULL,
                              `id_customers` VARCHAR(20) NOT NULL,
                              `delivery_number` int(4) NOT NULL,
                              `created` datetime DEFAULT NULL,
                              `modified` datetime DEFAULT NULL
);
INSERT INTO delivery_details (id_deliveries, item_number, id_goods, id_customers, delivery_number, created, modified)
VALUES (\'D01\', 1, \'S01\',\'C01\', 10, now(), now()),(\'D02\', 1, \'S01\',\'C02\', 30, now(), now()),
       (\'D02\', 2, \'S02\',\'C02\', 20, now(), now()),(\'D03\', 1, \'S02\',\'C03\', 40, now(), now()),
       (\'D03\', 2, \'S03\',\'C03\', 60, now(), now());

SELECT * FROM delivery_details;

UPDATE delivery_details SET delivery_number =                                           # CASE
    IF(delivery_number > 30, delivery_number + 5, delivery_number + 3)                  #     WHEN delivery_number > 30 THEN delivery_number + 5 ELSE delivery_number + 3
WHERE id_goods = \'S02\';                                                                 # END
SELECT * FROM delivery_details;

show columns from delivery_details;
#NOT NULLを外す
ALTER TABLE delivery_details MODIFY COLUMN delivery_number text COMMENT \'納品数ゼロ\';

UPDATE delivery_details SET delivery_number = NULL WHERE id_goods = \'S03\';
SELECT * FROM delivery_details;


#元に戻す
DELETE FROM goods;
INSERT INTO goods (id_goods, name, price, created, modified)
VALUES (\'S01\',\'おにぎり\', 150, now(), now()),(\'S02\',\'お茶\', 100, now(), now()),
       (\'S03\',\'弁当\', 400, now(), now());
SELECT * FROM goods;

DELETE FROM delivery_details;
INSERT INTO delivery_details (id_deliveries, item_number, id_goods, id_customers, delivery_number, created, modified)
VALUES (\'D01\', 1, \'S01\',\'C01\', 10, now(), now()),(\'D02\', 1, \'S01\',\'C02\', 30, now(), now()),
       (\'D02\', 2, \'S02\',\'C02\', 20, now(), now()),(\'D03\', 1, \'S02\',\'C03\', 40, now(), now()),
       (\'D03\', 2, \'S03\',\'C03\', 60, now(), now());
SELECT * FROM delivery_details;


UPDATE goods SET price = price * 1.1 WHERE id_goods IN (    # UPDATE goods
    SELECT id_goods                                         #   SET price = price * 1.1
    FROM delivery_details                                   # WHERE EXISTS (
    WHERE delivery_number < 30                              #         SELECT 1
    );                                                      #           FROM delivery_details
UPDATE goods SET modified = now();                          #          WHERE delivery_details.delivery_number < 30
SELECT * FROM goods;                                        #            AND delivery_details.id_goods = goods.id_goods
# 右でも可                                                   #     );


UPDATE delivery_details SET id_customers =(
    SELECT id_customers
    FROM deliveries
    WHERE deliveries.id_deliveries = delivery_details.id_deliveries
    )
WHERE EXISTS (
    SELECT 1
    FROM deliveries
    WHERE  deliveries.id_deliveries = delivery_details.id_deliveries
          );
UPDATE delivery_details SET modified = now();
SELECT * FROM delivery_details;


#グループ化
#report table
create table report (
                        name varchar(10), color varchar(10), sales int,
                        created datetime DEFAULT NULL, modified datetime DEFAULT NULL);
insert into report
values (\'Pen\', \'Black\', 4500, now(), now()), (\'Cup\', \'White\', 3800, now(), now()), (\'Pen\', \'Red\', 5100, now(), now()),
       (\'Pen\', \'Black\', 4600, now(), now()),  (\'Cup\', \'Black\', 3900, now(), now()),
       (\'Cup\', \'White\', 4000, now(), now()), (\'Pen\', \'Red\', 5200, now(), now());
select * from report;

update report set modified = now();
select name, sum(sales) from report group by name;

update report set modified = now();
select name, color, sum(sales) from report group by name, color;

update report set modified = now();
select name, sum(sales) from report group by name with rollup;
#↑↓集計データ付き
update report set modified = now();
select name, color, sum(sales) from report group by name, color with rollup;




#結合
create table shop (
    shop_name varchar(20), item_id int(3), quantity int(5),
    created datetime DEFAULT NULL, modified datetime DEFAULT NULL);
insert into shop
values (\'新宿\', 1, 1000, now(), now()), (\'新宿\', 2, 200, now(), now()), (\'新宿\', 4, 100, now(), now()),
       (\'池袋\', 3, 1000, now(), now()),  (\'池袋\', 4, 500, now(), now());
select * from shop;

create table item (
                    item_id int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY, item_name varchar(50), price int(8),
                    category varchar(20), created datetime DEFAULT NULL, modified datetime DEFAULT NULL);
insert into item (item_name, price, category, created, modified)
values (\'CD\', 1500, \'music\', now(), now()), (\'HDD\', 8000, \'PC\', now(), now()), (\'USB\', 2000, \'PC\', now(), now()),
       (\'iPod\', 15000, \'music\', now(), now()),  (\'DVD\', 4000, \'music\', now(), now());
select * from item;

#内部結合
UPDATE shop SET modified = now();
SELECT
    shop.shop_name,
    shop.item_id,
    item.item_name,
    item.price,
    shop.quantity,
    shop.created,
    shop.modified
FROM
    shop INNER JOIN item
        ON
            shop.item_id = item.item_id;

#外部結合RIGHT
UPDATE shop SET modified = now();
SELECT
    shop.shop_name,
    shop.item_id,
    item.item_name,
    item.price,
    shop.quantity,
    shop.created,
    shop.modified
FROM
    shop RIGHT OUTER JOIN item
                          ON
                                  shop.item_id = item.item_id;

#外部結合LEFT
UPDATE shop SET modified = now();
SELECT
    shop.shop_name,
    shop.item_id,
    item.item_name,
    item.price,
    shop.quantity,
    shop.created,
    shop.modified
FROM
    shop LEFT OUTER JOIN item
                          ON
                                  shop.item_id = item.item_id;


create table category (
                      category varchar(20), data varchar(20), created datetime DEFAULT NULL, modified datetime DEFAULT NULL);
insert into category (category, data, created, modified)
values (\'music\',\'ongaku\', now(), now()), (\'PC\',\'pasokon\', now(), now());
select * from category;

UPDATE category SET modified = now();
SELECT
    S.shop_name,
    S.item_id,
    I.item_name,
    I.price,
    S.quantity,
    I.category,
    C.data,
    S.created,
    S.modified
FROM
    shop AS S
        JOIN item AS I
             ON S.item_id = I.item_id
        JOIN category AS C
             ON I.category = C.category
WHERE
        shop_name=\'新宿\';
create table shop_b (
                      shop_name varchar(20), item_id int(3), quantity int(5),
                      created datetime DEFAULT NULL, modified datetime DEFAULT NULL);
insert into shop_b
values (\'天王寺\', 1, 400, now(), now()), (\'天王寺\', 3, 700, now(), now()), (\'天王寺\', 4, 400, now(), now()),
       (\'梅田\', 3, 1000, now(), now()),  (\'梅田\', 5, 300, now(), now());
select * from shop_b;


select item_id from shop where shop_name = \'新宿\'
UNION
select item_id from shop_b where shop_name = \'天王寺\'';

    // SQL実行
    $res = $dbh->query($sql);


//    // テーブルからデータを取得するクエリ文
//    $table_get_query = "SELECT * FROM ";
//
//    // テーブルからデータを取得
//    $result = $dbh->query($table_get_query);



} catch(PDOException $e) {

    echo $e->getMessage();
    die();
}

?>


</body>
</html>