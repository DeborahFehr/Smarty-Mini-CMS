<?php
/* Smarty version 4.2.1, created on 2023-01-30 12:51:25
  from '/var/www/couch-mildano/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d7bd4dc3fb99_02773914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4b11947cdbd866040aae775c473302ef4ab619' => 
    array (
      0 => '/var/www/couch-mildano/templates/header.tpl',
      1 => 1675082922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d7bd4dc3fb99_02773914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/couch-mildano/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
<html style="font-family: Roboto, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo smarty_modifier_capitalize($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'));?>
</title>
    <link rel="stylesheet" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("assets/css/mdb.min.css");?>
>
    <link rel="stylesheet" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("assets/bootstrap/css/bootstrap.min.css");?>
>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("assets/fonts/font-awesome.min.css");?>
>
    <link rel="stylesheet" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("assets/css/custom.css");?>
>
    <link rel="icon" type="image/x-icon" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("assets/favicon.ico");?>
>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77"
    style="font-family: Roboto, sans-serif;"><?php }
}
