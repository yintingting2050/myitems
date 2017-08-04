<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("rainmen",$conn)or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
$id=$_GET["id"];
$sql = "delete from goods_sort where id = '$id' ";
$result = mysql_query($sql);
if($result){
    echo "删除成功";
}
mysql_close($conn);

?>
<p><a href="www/goods_sort.html">[返回会员列表]</a></p>