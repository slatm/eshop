<?php
/**
 * Created by PhpStorm.
 * User: yanliwei
 * Date: 2017/3/2
 * Time: 16:00
 */
$con = mysql_connect("localhost","root","");//资源对象
mysql_query("set names utf8");
mysql_select_db("eshop");
$iid = $_REQUEST['iid'];
$iname = $_REQUEST['iname'];
$iprice = $_REQUEST['iprice'];


if(empty($_FILES['iimage']['name'])){
    /*******************此处是保存图片处理***********************/
    $sql  = "update t_item set iname='$iname', iprice=$iprice where iid=".$iid;
    /*******************此处是保存图片处理***********************/
}else{
    $f = $_FILES['iimage']['name'];
    $filename = time().substr($f,strpos($f,'.'),strlen($f));
    move_uploaded_file($_FILES["iimage"]["tmp_name"],
        "E:/xampp/htdocs/eshop/upload/"
        .$filename);
    unlink("E:/xampp/htdocs/eshop/upload/".$_REQUEST['delete_img']);
    $sql  = "update t_item set iname='$iname', iprice=$iprice ,iimage='$filename' where iid=".$iid;
}


mysql_query($sql,$con);
echo "更新商品信息成功";
mysql_close($con);
?>

