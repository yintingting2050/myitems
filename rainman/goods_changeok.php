<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("rainmen",$conn)or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
$id=$_GET["id"];
$sort=$_POST["sort"];
$classname=$_POST["name"];
$state=$_POST["type"];
$sql = "update goods_sort set sort= '$sort',classname= '$classname',state = '$state' where id='$id' ";
$result = mysql_query($sql);
mysql_close($conn);
if($result) {
    echo "修改成功";
}
?>
<p><a href="www/goods_sort.html">[返回留言列表]</a></p>