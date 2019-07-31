<?php
/* Smarty version 3.1.33, created on 2019-07-31 16:58:22
  from 'C:\xampp\htdocs\shopping\views\manager_product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41582e801cb9_05563708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '715e4840d826b58454bd968349ab543be0b2d37a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\views\\manager_product.html',
      1 => 1564563501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41582e801cb9_05563708 (Smarty_Internal_Template $_smarty_tpl) {
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
                
                border-top-left-radius: 50px;
                color: white;
                }
            body {
            font-family: arial,"Microsoft JhengHei","微軟正黑體",sans-serif !important;
            color:#a6a6a6;
            background-color:#1c1c1c; 
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
                
                <a class="navbar-brand" href="PageController.php?action=index">Brand</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['is_login']->value) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                    <li class=""><a href="PageController.php?action=login"><span class="glyphicon glyphicon-user"></span> 登入 <span class="sr-only">(current)</span></a></li>
                    <li><a href="PageController.php?action=signup"><span class="glyphicon glyphicon-tower"></span> 註冊</a></li>
                    <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                    <li><a href="PageController.php?action=logout"><span class="glyphicon glyphicon-tower"></span> 登出</a></li>
                    <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['permission']->value == 5) {
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                    <li class=""><a href="ManagerPageController.php?action=member"><span class="glyphicon glyphicon-user"></span> 會員管理 <span class="sr-only">(current)</span></a></li>
                    <li><a href="managerPageController.php?action=product"><span class="glyphicon glyphicon-list-alt"></span> 產品管理 </a></li>
                    <?php ob_start();
}
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

                    
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="button" class="btn btn-default">搜尋商品</button>
                    </form>
                    <li><a href="PageController.php?action=shoppingcar"><span class="glyphicon glyphicon-shopping-cart"></span> 購物車</a></li>
                    <li class="dropdown">
                    </li>
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
                            <legend style="color:red;">商品管理</legend>
                        </fieldset>
                        <span class=pull-right><button class="btn btn-success">新增產品</button></span>
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
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
'>
        
        
        <?php echo '<script'; ?>
 type="text/javascript" src=''><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 
        src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" 
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
        crossorigin="anonymous">
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}