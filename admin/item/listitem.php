<?php
/**
 * Created by PhpStorm.
 * User: yanliwei
 * Date: 2017/3/1
 * Time: 15:48
 */
$con = mysql_connect("localhost","root","");//资源对象
mysql_query("set names utf8");
mysql_select_db("eshop");
$sql = "select * from t_item where 0=0 and isdel=0 ";

if(!empty($_REQUEST['iname'])){
    $sql .= " and iname like '%".$_REQUEST['iname']."%'";
}

if(!empty($_REQUEST['ipricefrom'])){
    $sql .= " and iprice >= ".$_REQUEST['ipricefrom'];
}
if(!empty($_REQUEST['ipriceto'])){
    $sql .= " and iprice <= ".$_REQUEST['ipriceto'];
}


$result = mysql_query($sql,$con);
$array = array();
while($row = mysql_fetch_array($result)){
    array_push($array,$row);
}
mysql_close($con);
echo json_encode($array);
?>

