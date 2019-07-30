<?php
/* Smarty version 3.1.33, created on 2019-07-30 10:09:15
  from 'C:\xampp\htdocs\shopping\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3ffb2bc99411_38702235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5357c5c0575fa1759eb5742d137a1e2baa296255' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shopping\\views\\login.html',
      1 => 1564474153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3ffb2bc99411_38702235 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src='../scripts/functions.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src='../scripts/login.js'><?php echo '</script'; ?>
>
        <title>Document</title>
        <style>
            .myform {
                margin-top:20%;
                border:solid 1px;
                width:50%;
                margin-left:25%;
                text-align:center;
                border-radius: 20px;
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
        </style>
    </head>
    <body>
        <!-- 導覽列 -->
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='../cont/index.php'>購物</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
            </div>
        </div>
        </nav>
        <!-- 導覽列結束 -->

        
        <div class='container'>
            
            <form id='login_form' class="form-horizontal myform">
            <fieldset>
            <!-- Form Name -->
            <legend >登入</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Account">帳號</label>  
                <div class="col-md-4">
                    <input id="account" name="account" type="text" placeholder="請輸入帳號" class="form-control input-md" required>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">密碼</label>  
                <div class="col-md-4">
                    <input id="password" name="password" type="password" placeholder="請輸入密碼" class="form-control input-md" required>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="signin"></label>
                <div class="col-md-4">
                    <button id='login_button' type='button' id="signin" name="signin" class="btn btn-info">登入</button>
                    <a href="../controller/PageController.php?action=signup" class='btn btn-success'>註冊</a>
                </div>
            </div>
            </fieldset>
            </form>
        </div>
        <input type="hidden" id='message' value='<?php ob_start();
echo $_smarty_tpl->tpl_vars['message']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
'>


        
    </body>
</html><?php }
}
