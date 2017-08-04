<?php
$dsn="mysql:host=localhost;dbname=rainmen";
$pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
$webname=$_POST["webname"];
$weburl=$_POST["weburl"];
$webnum=$_POST["webnum"];
$count=$_POST["count"];
$query="insert into sys_web(webname,weburl,webnum,count)values('$webname','$weburl','$webnum','$count')";	//定义SQL语句
$pdo->query('set names utf8');
$result=$pdo->prepare($query);	//准备查询语句
$result->execute();		//执行查询语句，并返回结果集
if($result){
    echo "添加成功。";
}

?>
<p><a href="www/admin.html">[返回会员审核列表]</a></p>

