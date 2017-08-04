<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
mysql_select_db("rainmen",$conn)or die("数据库访问错误".mysql_error());
mysql_query("set names utf8");
$id=$_GET["id"];
$sql = "select * from rm_cat where cat_id = '$id' ";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
echo $row['cat_position'];
if($row){
    do{
        ?>
    <form name="form1" method="post" action="cat_changeok.php?id=<?php echo $id?>">
        <p>排序<input type="text" name="sort" size="20" value="<?php echo $row[0]?>"/></p>
        <p>栏目名称<input type="text" name="name" size="20" value="<?php echo $row[1]?>"/></p>

        <p>显示/隐藏<input type="radio" name="is_hidden" value="显示"  <?php echo $row['cat_state']='显示'?'checked':''?>/> 显示
            <input type="radio" name="is_hidden" value="隐藏" <?php echo $row['cat_state']='显示'?'checked':''?>/> 隐藏

        <p>栏目位置 <input type="radio" name="pos" value="顶部" <?php echo $row['cat_position']='顶部'?'checked':''?>/> 顶部
            <input type="radio" name="pos" value="底部" <?php echo $row['cat_position']='底部'?'checked':''?>/> 底部

        <p><input type="submit" value="提交"  /><input type="reset" value="重设" /></p>


        <?php

    } while($row = mysql_fetch_row($result));}
?>