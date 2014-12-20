<?php /* Smarty version Smarty-3.1.19, created on 2014-12-17 20:42:16
         compiled from ".\templates\layout.html" */ ?>
<?php /*%%SmartyHeaderCode:74045491c4a28d27c1-74011300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfaa386e33e7b9f1027650f75be6b182ed0c7d9f' => 
    array (
      0 => '.\\templates\\layout.html',
      1 => 1418845333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74045491c4a28d27c1-74011300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5491c4a29209c3_83768475',
  'variables' => 
  array (
    'title' => 0,
    'result' => 0,
    'con' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5491c4a29209c3_83768475')) {function content_5491c4a29209c3_83768475($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    
   <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   
   
<?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['con']->key;
?>

<?php echo $_smarty_tpl->tpl_vars['con']->value['PNR'];?>
 - <?php echo $_smarty_tpl->tpl_vars['con']->value['VORNAME'];?>
- <?php echo $_smarty_tpl->tpl_vars['con']->value['NAME'];?>
- <?php echo $_smarty_tpl->tpl_vars['con']->value['LOHNSTUFE'];?>
<br>
<?php } ?>
</body>
</html><?php }} ?>
