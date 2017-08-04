<?php
$dsn="mysql:host=localhost;dbname=rainmen";
try {
    $pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
    $name=$_POST["cat_name"];
    $type=$_POST["cat_type"];
    $lanmu=$_POST["lanmu"];
    $hidden=$_POST["is_hidden"];
    $pos=$_POST["pos"];
    $title=$_POST["title"];
    $keysword=$_POST["keys"];
    $des=$_POST["des"];
    $query="insert into rm_cat(cat_name,cat_type,cat_state,cat_position)values('$name','$type','$hidden','$pos')";	//定义SQL语句
    $pdo->query('set names utf8');
    $result=$pdo->prepare($query);	//准备查询语句
    $result->execute();		//执行查询语句，并返回结果集
   if($result){
       echo "添加成功。";
   }
} catch (PDOException $e) {
    die ("Error!: ".$e->getMessage()."<br/>");
}
?>
<p><a href="www/cat_manage.html">[返回栏目列表]</a></p>

