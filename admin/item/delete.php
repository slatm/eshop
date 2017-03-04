<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2017/3/3
 * Time: 15:39
 */
$con = mysql_connect("localhost","root","");//资源对象
mysql_query("set names utf8");
mysql_select_db("eshop");

$sql  = "update t_item set isdel=1 where iid=".$_REQUEST['iid'];
mysql_query($sql,$con);
if(mysql_affected_rows()>=1){
    echo "删除成功";
}else{
    echo "删除失败";
}

mysql_close($con);

?>