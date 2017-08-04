<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("rainmen",$conn)or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
$id=$_GET["id"];
$sql = "select sort,classname,state from goods_sort where id = '$id' ";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row){
    do{
        ?>
    <form name="form1" method="post" action="goods_changeok.php?id=<?php echo $id?>">
        <p>排序<input type="text" name="sort" size="20" value="<?php echo $row['sort']?>"/></p>
        <p>分类名称<input type="text" name="name" size="20" value="<?php echo $row['classname']?>"/></p>
        <p>显示/隐藏<input type="radio" name="type" value="显示" <?php echo $row['state']='是'?'checked':''?>/> 显示
            <input type="radio" name="type" value="隐藏" <?php echo $row[2]='否'?'checked':''?>/> 隐藏
        <p><input type="submit" value="提交"  /><input type="reset" value="重设" /></p>
        <?php
    } while($row = mysql_fetch_row($result));}
?>