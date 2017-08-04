<?php
$dsn="mysql:host=localhost;dbname=rainmen";
$pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
$is_open=$_POST["is_open"];
$file=$_POST["file"];
$is_num=$_POST["is_num"];
$select=$_POST["regselect"];
$time=$_POST["time"];
$query="insert into mem_reg(is_open,file,is_num,regselect,time)values('$is_open','$file','$is_num','$select','$time')";	//定义SQL语句
$pdo->query('set names utf8');
$result=$pdo->prepare($query);	//准备查询语句
$result->execute();		//执行查询语句，并返回结果集
if($result){
    echo "添加成功。";
}

?>
<p><a href="www/mem_chk.html">[返回会员审核列表]</a></p>

