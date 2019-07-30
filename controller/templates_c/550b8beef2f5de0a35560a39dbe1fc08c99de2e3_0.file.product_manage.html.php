<?php
/* Smarty version 3.1.33, created on 2019-07-30 09:17:10
  from 'C:\xampp\htdocs\shopping\views\product_manage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3feef6a6e739_27090061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550b8beef2f5de0a35560a39dbe1fc08c99de2e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\views\\product_manage.html',
      1 => 1564379827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3feef6a6e739_27090061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src=''><?php echo '</script'; ?>
>
        <title>Document</title>
        <style>
            .table-striped>thead>tr{
                background-color: #ea6153;
                border: solid;
                border-top-left-radius: 50px;
                color: white;
                }
            body {
            font-family: arial,"Microsoft JhengHei","微軟正黑體",sans-serif !important;
            }
            th {
            text-align: center;
            }
            tr {
            text-align: center;
            }
            .item-color-1 {
                background-color:#f6f6f6;
            }
            .item-color-2 {
                background-color:#e9e9e9;
            }
        </style>
    </head>
    <body>
        <!-- 導覽列 -->
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='../cont/index.php'>商城</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>


        <div class='container'>
            <div id="nowTime"></div>
            <div>
                <!-- 留言新增表格 -->
                <div id='addTodoList'>
                    <form id='add_message_form' class="form-horizontal" method='POST' action='../cont/addmessage.php'>
                        <fieldset>
                        <!-- Form Name -->
                            <legend>商品管理</legend>
                            <!-- 標題-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">標題</label>  
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" placeholder="上限30個字" class="form-control input-md">
                                </div>
                            </div>
                            <!-- 內容 -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textarea">內容</label>
                                <div class="col-md-4">                     
                                    <textarea  class="form-control" id="content" name="content"></textarea>
                                </div>
                            </div>
                            <!-- 按鈕 -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for=""></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div><!-- 留言新增表格結束 -->
                
                <!-- 留言顯示區 -->
                <table class="table table-striped" id='showTodoList'>
                    <thead>
                        <tr>
                            <th>商品編號</th>
                            <th>名稱</th>
                            <th>商品狀態</th>
                            <th>商品創建時間</th>
                            <th>總銷售量</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id='messageArea'>
                        <tr class="item-color-1">
                            <td>0</td>
                            <td>josh</td>
                            <td>售賣中</td>
                            <td>2019-07-29</td>
                            <td>20</td>
                            <td>
                                <span class="pull-right">
                                    <span class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil">
                                        </span>
                                        編輯
                                    </span>
                                    <span class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove">
                                        </span>
                                        刪除
                                    </span>
                                </span>
                            </td>
                        </tr>
                        <tr class="item-color-2">
                                <td>0</td>
                                <td>josh</td>
                                <td>售賣中</td>
                                <td>2019-07-29</td>
                                <td>20</td>
                                <td>
                                    <span class="pull-right">
                                        <span class="btn btn-warning">
                                            <span class="glyphicon glyphicon-pencil">
                                            </span>
                                            編輯
                                        </span>
                                        <span class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove">
                                            </span>
                                            刪除
                                        </span>
                                    </span>
                                </td>
                            </tr>
                    </tbody>
                </table><!-- 留言顯示區結束 -->
            </div>
        </div>
        <input type="hidden" id='message' value='<?php ob_start();
echo $_smarty_tpl->tpl_vars['message']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
'>
        
        
        <?php echo '<script'; ?>
 type="text/javascript" src=''><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
