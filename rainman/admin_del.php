<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("rainmen",$conn)or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
$id=$_GET["id"];
$sql = "delete from rm_system where system_id = '$id' ";
$result = mysql_query($sql);
if($result){
    echo "删除成功";
}
mysql_close($conn);

?>
<p><a href="www/admin.html">[返回系统列表]</a></p>