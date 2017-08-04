<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("rainmen",$conn)or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
$id=$_GET["id"];
$sort=$_POST["sort"];
$name=$_POST["name"];
$pos=$_POST["pos"];
$hidden=$_POST["is_hidden"];
$sql = "update rm_cat set cat_sort= '$sort',cat_name= '$name',cat_state = '$hidden',cat_position = '$pos' where cat_id='$id' ";
$result = mysql_query($sql);
mysql_close($conn);
if($result) {
    echo "修改成功";
}
?>
<p><a href="www/cat_manage.html">[返回留言列表]</a></p>