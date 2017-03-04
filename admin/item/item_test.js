/**
 * Created by yanliwei on 2017/2/28.
 */
var addOrUpdate;
function open(iid){
    addOrUpdate = "update";
    $.post('admin/item/load.php', {iid:iid}, function(data){
        $('#iname').val(data.iname);
        $('#iprice').val(data.iprice);
        $('#iid').val(data.iid);
        var img = $('<img id="image_tmp"/>');
        img.attr('src',"upload/" + data.iimage)
            .css({'width':50,'height':50});
        $('#imgdiv').html('').append(img);
        $('.model').slideDown();
    },'json');
}
function search(){
    $('.tbl').html('');
    var thead = ["<tr>",
        "<td>序号</td>",
        "<td>商品名称</td>",
        "<td>商品价格</td>",
        "<td>商品图片</td>",
        "<td>操作</td>",
        "</tr>"];
    $('.tbl').eq(0).append(thead.join(""));
    $.get('admin/item/listitem.php',{},function(data){
        $.each(data, function(idx,obj){
            var tr = [
                "<tr>",
                "<td>" + (idx+1)+ "</td>",
                "<td>" + obj.iname+ "</td>",
                "<td>" + obj.iprice+ "</td>",
                "<td><img width='30' height='30' " +
                "src='upload/" + obj.iimage+ "'/></td>",
                "<td><a href=\"javascript:open('" + obj.iid + "')\">编辑</a></td>",
                "</tr>"
            ];
            $('.tbl').eq(0).append(tr.join(""));
        });

    },'json');
}
$(function(){
    search();
    $('.model').hide();
    /*新建按钮*/
    $('#addbtn').click(function(){
        addOrUpdate = "add";
        $('#fm').get(0).reset();
        $('#imgdiv').html('');
        $('.model').show();
    });
    /*模态窗口中的内容*/
    $('#closebtn').click(function(){
        $('.model').hide();
    });
    /*添加按钮*/
    $('#submitbtn').click(function(){
        var fd = new FormData($('#fm')[0]);
        fd.append("iimage", $('#iimage').get(0).files[0]);
        var url = 'admin/item/additem.php';
        if(addOrUpdate == "update"){
            url = 'admin/item/update.php';
        }
        $.ajax({
            url:url,
            type:"POST",
            dataType:'text',
            processData:false,
            contentType:false,
            data: fd,
            success:function(data){
                alert(data);
                search();
                $('#fm').get(0).reset();
                $('#imgdiv').html('');
                $('.model').hide();
            }
        })
    });
});