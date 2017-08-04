<?php
$dsn="mysql:host=localhost;dbname=rainmen";
    $pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
    $username=$_POST["username"];
    $pass=$_POST["pass"];
    $passed=$_POST["passed"];
    $email=$_POST["email"];
    $type=$_POST["type"];
    $query="insert into mem_chk(username,type,time)values('$username','$type',NOW())";	//定义SQL语句
    $pdo->query('set names utf8');
    $result=$pdo->prepare($query);	//准备查询语句
    $result->execute();		//执行查询语句，并返回结果集
    if($result){
        echo "添加成功。";
    }

?>
<p><a href="www/mem_chk.html">[返回会员审核列表]</a></p>

