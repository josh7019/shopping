<?php
/* Smarty version 3.1.33, created on 2019-07-30 09:19:00
  from 'C:\xampp\htdocs\shopping\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3fef649b11e9_63895404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5606f6176a2754057bba4ced841219b008b2559c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\views\\index.html',
      1 => 1564382490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3fef649b11e9_63895404 (Smarty_Internal_Template $_smarty_tpl) {
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
        }
        #title {
            border:solid;
            background-color:#ffcc66
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                
                <a class="navbar-brand" href="#">Brand</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class=""><a href="#">登入 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">註冊</a></li>
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="button" class="btn btn-default">搜尋商品</button>
                    </form>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> 購物車</a></li>
                    <li class="dropdown">
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
    </nav>

    <div class="container" style='border:solid;text-align:center; '>
        
        
        <div class='row'>
            <div class="col-md-12" id='title' style="">
                <h2>商品目錄</h2>
                <p>The .table-bordered class adds borders to a table:</p>
            </div>
            <div class=col-md-3 style='border:solid;'>
                <div class=col-md-12 style='border:solid;'><b class='item_title'>玩具總動員</b></div>
                <img src="../img/img1.jpg" alt="">
                <div class=col-md-12 style='border:solid;'><b class='item_price'>價格:NT500</b></div>
                <div class=col-md-12 style='border:solid;'><b class='item_created_date'>上架日期:2019-07-01</b></div>
                <div class=col-md-12 style='border:solid;'><b class='item_saled'>已售出:500套</b></div>
                <div class=col-md-12 style='border:solid;'>
                    <span class='btn btn-warning'><span class="glyphicon glyphicon-eye-open"></span> 商品資訊</span>
                    <span class='btn btn-info'><span class="glyphicon glyphicon-shopping-cart"></span> 加入購物車</span>
                </div>
            </div>
            <div class=col-md-3 style='border:solid'>
                <img src="" alt="">
            </div>
            <div class=col-md-3 style='border:solid'>3</div>
            <div class=col-md-3 style='border:solid'>3</div>
            
        </div>
        <div></div>
    </div>
</body>
</html><?php }
}
