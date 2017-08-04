<?php
$dsn="mysql:host=localhost;dbname=rainmen";
$pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
$pdo->query('set names utf8');
$adname=$_POST["adname"];
$adpwd=$_POST["adpwd"];
$query="select*from rm_system where system_username=".$adname ."and system_pwd=".$adpwd;	//定义SQL语句
$result=$pdo->prepare($query);	//准备查询语句
$result->execute();		//执行查询语句，并返回结果集
if($result){
  echo "<script>alert('管理员登录成功。');window.location.href='www/index.html';</script>";
}

?>
<p><a href="www/mem_chk.html">[返回会员审核列表]</a></p>