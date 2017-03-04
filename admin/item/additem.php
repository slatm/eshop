<?php
/**
 * Created by PhpStorm.
 * User: yanliwei
 * Date: 2017/2/28
 * Time: 16:03
 */

$con = mysql_connect("localhost","root","");//资源对象
mysql_query("set names utf8");
mysql_select_db("eshop");


$f = $_FILES['iimage']['name'];
$filename = time().substr($f,strpos($f,'.'),strlen($f));
move_uploaded_file($_FILES["iimage"]["tmp_name"],
    "E:/xampp/htdocs/eshop/upload/"
    .$filename);


$sql = "insert into t_item(iname,iprice,iimage) value('"
    .$_REQUEST['iname']."',".$_REQUEST['iprice'].",
    '".$filename."')";
$result = mysql_query($sql);
mysql_close($con);
echo "添加成功";
?>