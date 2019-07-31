<?php
/* Smarty version 3.1.33, created on 2019-07-31 16:22:16
  from 'C:\xampp\htdocs\shopping\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d414fb8776457_09599532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5606f6176a2754057bba4ced841219b008b2559c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\views\\index.html',
      1 => 1564561335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d414fb8776457_09599532 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <title>Document</title>
    <style>
        .row > div > img {
            width:220px;
            height:326px;
        }
        .item_title {
            font-size:26px;
        }
        .row > div > .col-md-12 > .price {
            font-size:20px;
        }
        body {
            font-family: arial,"Microsoft JhengHei","微軟正黑體",sans-serif !important;
            color:#a6a6a6;
            background-color:#1c1c1c; 
        }
        #title {
            background-color:#660000;
            border-top-left-radius: 40px;
            border-top-right-radius: 40px
        }
    </style>
</head>

<body>
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
    <div class="container-fluid">
        <div class='row'>
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <img src="../img/bg1.jpg" style="width:100%;height:500px;">
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style='text-align:center; '>
        <div class='row'>
            <div class="col-md-12" id='title'>
                <h2><?php ob_start();
if ($_smarty_tpl->tpl_vars['permission']->value) {
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;
ob_start();
echo $_smarty_tpl->tpl_vars['permission']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;
ob_start();
}
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
商品目錄</h2>
                <p>The .table-bordered class adds borders to a table:</p>
            </div>
            <div class=col-md-3 style='background-color: #262626'>
                <div class=col-md-12 ><b class='item_title'>玩具總動員</b></div>
                <img src="../img/img1.jpg" alt="">
                <div class=col-md-12 ><b class='item_price'>價格:NT500</b></div>
                <div class=col-md-12 ><b class='item_created_date'>上架日期:2019-07-01</b></div>
                <div class=col-md-12 ><b class='item_saled'>已售出:500套</b></div>
                <div class=col-md-12 >
                    <span class='btn btn-warning'><span class="glyphicon glyphicon-eye-open"></span> 商品資訊</span>
                    <span class='btn btn-info'><span class="glyphicon glyphicon-shopping-cart"></span> 加入購物車</span>
                </div>
            </div>
            <div class=col-md-3 style='background-color: #262626'>
                <div class=col-md-12 ><b class='item_title'>玩具總動員</b></div>
                <img src="../img/img1.jpg" alt="">
                <div class=col-md-12 ><b class='item_price'>價格:NT500</b></div>
                <div class=col-md-12 ><b class='item_created_date'>上架日期:2019-07-01</b></div>
                <div class=col-md-12 ><b class='item_saled'>已售出:500套</b></div>
                <div class=col-md-12 >
                    <span class='btn btn-warning'><span class="glyphicon glyphicon-eye-open"></span> 商品資訊</span>
                    <span class='btn btn-info'><span class="glyphicon glyphicon-shopping-cart"></span> 加入購物車</span>
                </div>
            </div>
            <div class=col-md-3 style='background-color: #262626'>
                <div class=col-md-12 ><b class='item_title'>玩具總動員</b></div>
                <img src="../img/img1.jpg" alt="">
                <div class=col-md-12 ><b class='item_price'>價格:NT500</b></div>
                <div class=col-md-12 ><b class='item_created_date'>上架日期:2019-07-01</b></div>
                <div class=col-md-12 ><b class='item_saled'>已售出:500套</b></div>
                <div class=col-md-12 >
                    <span class='btn btn-warning'><span class="glyphicon glyphicon-eye-open"></span> 商品資訊</span>
                    <span class='btn btn-info'><span class="glyphicon glyphicon-shopping-cart"></span> 加入購物車</span>
                </div>
            </div>
            <div class=col-md-3 style='background-color: #262626'>
                <div class=col-md-12 ><b class='item_title'>玩具總動員</b></div>
                <img src="../img/img1.jpg" alt="">
                <div class=col-md-12 ><b class='item_price'>價格:NT500</b></div>
                <div class=col-md-12 ><b class='item_created_date'>上架日期:2019-07-01</b></div>
                <div class=col-md-12 ><b class='item_saled'>已售出:500套</b></div>
                <div class=col-md-12 >
                    <span class='btn btn-warning'><span class="glyphicon glyphicon-eye-open"></span> 商品資訊</span>
                    <span class='btn btn-info'><span class="glyphicon glyphicon-shopping-cart"></span> 加入購物車</span>
                </div>
            </div>
            
            
        </div>
        <div></div>
    </div>

    <?php echo '<script'; ?>
 
        src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" 
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
        crossorigin="anonymous">
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
