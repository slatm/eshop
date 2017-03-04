<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    <link rel="stylesheet" href="../../css/normalize.css">-->
<!--    <link rel="stylesheet" href="../../css/style.css">-->
<!--    <script src="../../js/jquery-3.1.1.min.js"></script>-->
<!--    <script src="item.js"></script>-->
<!--    <link href="../../css/bootstrap.min.css" rel="stylesheet">-->
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
<!--    <script src="../../js/bootstrap.min.js"></script>-->

    <base href="http://localhost/eshop/">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="admin/item/item_test.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

<button id="addbtn" class="btn btn-primary btn-lg" data-toggle="modal"
        data-target="#myModal">新建商品</button>
    <table border="1" class="tbl">
        <tr>
            <td>序号</td>
            <td>商品名称</td>
            <td>商品价格</td>
            <td>商品图片</td>
            <td>操作</td>
        </tr>
    </table>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    新建商品表单
                </h4>
            </div>
            <div class="modal-body">
                <h2 class="well" style="text-align: center">新建商品</h2>

                <form id="fm" class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="yhm" class="control-label col-sm-3">商品名称</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="iname" id="iname" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mm" class="control-label col-sm-3">商品价格</label>
                        <div class="col-sm-4">
                            <input type="text" name="iprice" id="iprice" class="form-control"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="zp" class="control-label col-sm-3">商品照片</label>
                        <div class="col-sm-3">
                            <input type="file"  name="iimage" id="iimage" class="form-control">
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button  id="closebtn" type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" id="submitbtn" class="btn btn-primary">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div id="imgdiv"></div>


</body>

</html>