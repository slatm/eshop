<?php
/**
 * Created by PhpStorm.
 * User: yanliwei
 * Date: 2017/3/1
 * Time: 16:35
 */
$con = mysql_connect("localhost","root","");//资源对象
mysql_query("set names utf8");
mysql_select_db("eshop");
$sql = "select * from t_item where iid=".$_REQUEST['iid'];
$result = mysql_query($sql,$con);
$array = array("msg"=>"对不起没数据。");
if($row = mysql_fetch_array($result)){
//    $array['iname'] = $row['iname'];
//    $array['iprice'] = $row['iprice'];
//    $array['iimage'] = $row['iimage'];
    echo json_encode($row);
}else{
    echo json_encode($array);
}

?>