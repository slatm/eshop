<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="http://localhost/eshop/">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="admin/item/item.js"></script>

</head>
<body>


<form id="searchfm">
    <fieldset>
        <legend>查询条件</legend>
        商品名：<input type="text" name="iname">
        <br>
        价格范围：<input type="text" name="ipricefrom">到<input type="text" name="ipriceto">
        <input type="button" id="searchbtn" value="搜索">
    </fieldset>
</form>

<button id="addbtn">新建商品</button>
    <table border="1" class="tbl">
        <tr>
            <td>序号</td>
            <td>商品名称</td>
            <td>商品价格</td>
            <td>商品图片</td>
            <td>操作</td>
        </tr>
    </table>
<div class="model">
    <form id="fm" enctype="multipart/form-data" method="post">
        <input type="hidden" name="iid" id="iid"/>
        商品名称： <input type="text" name="iname" id="iname"/>
        <br/>
        商品价格: <input type="text" name="iprice" id="iprice"/>
        <br/>
        商品显示图片:<input type="file" name="iimage" id="iimage"/>
        <br/>
        <div id="imgdiv"></div>
        <input type="hidden"  name="delete_img"  id="delete_img"  value="">
        <input type="button" id="submitbtn" value="确定"/>
        <input type="button" id="closebtn" value="关闭"/>
    </form>
</div>
</body>

</html>