<?php
$dsn="mysql:host=localhost;dbname=rainmen";
    $pdo = new PDO($dsn,'root',''); //初始化一个PDO对象，就是创建了数据库连接对象$pdo
    $name=$_POST["goods_name"];
    $num=$_POST["goods_num"];
    $count=$_POST["goods_count"];
    $pri=$_POST["goods_pri"];
    $xiji=$_POST["xiji"];
    $attr=$_POST["attr"];
    $class=$_POST["class"];
    $title=$_POST["title"];
    $keys=$_POST["keys"];
    $des=$_POST["des"];

if(!is_dir("./upfile")){ 							//判断服务器中是否存在指定文件夹
    mkdir("./upfile");								//如果不存在，则创建文件夹
}
if(!empty($_FILES["goods_img"]["name"])) {
    $images = $_FILES["goods_img"]["name"];
    for ($i = 0; $i < count($images); $i++) {                    //根据元素个数执行for循环
        $path = "upfile/".$_FILES["goods_img"]["name"][$i];    //定义上传文件存储位置
        move_uploaded_file($_FILES["goods_img"]["tmp_name"][$i], $path);//执行文件上传操作
    }
}
echo "<img src=$path>";

$query="insert into rm_goods(goods_name,goods_price,goods_class,goods_attr,goods_click,goods_time,images)
                     values('$name','$pri','$class','$attr','1399',NOW(),'$path')";	//定义SQL语句
    $pdo->query('set names utf8');
    $result=$pdo->prepare($query);	//准备查询语句
    $result->execute();//执行查询语句，并返回结果集
    if($result){
        echo "添加成功。";
    }
?>
<p><a href="www/goods_list.html">[返回产品列表]</a></p>
