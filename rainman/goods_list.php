<?php
$dsn="mysql:host=localhost;dbname=rainmen";
try {
    $pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
    $query="select * from rm_goods";	//定义SQL语句
    $pdo->query('set names utf8');
    $result=$pdo->prepare($query);	//准备查询语句
    $result->execute();		//执行查询语句，并返回结果集
    $res=$result->fetchAll();
    //JSON 编码
    echo json_encode($res);
} catch (PDOException $e) {
    die ("Error!: ".$e->getMessage()."<br/>");
}
?>