<?php
// load Smarty library
require_once('Smarty.class.php');
$smarty = new Smarty;
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';
$smarty->template_dir = 'C:/xampp/htdocs/shopping_mall/smarty/templates';
$smarty->config_dir = 'C:/xampp/htdocs/shopping_mall/smarty/config';
$smarty->cache_dir = 'C:/xampp/smarty/cache';
$smarty->compile_dir = 'C:/xampp/smarty/templates_c';
