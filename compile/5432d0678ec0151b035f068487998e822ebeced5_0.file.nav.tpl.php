<?php
/* Smarty version 4.2.1, created on 2023-01-30 12:53:44
  from '/var/www/couch-mildano/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d7bdd84151c6_85405632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5432d0678ec0151b035f068487998e822ebeced5' => 
    array (
      0 => '/var/www/couch-mildano/templates/nav.tpl',
      1 => 1675083213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d7bdd84151c6_85405632 (Smarty_Internal_Template $_smarty_tpl) {
?>    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href=<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path');?>
>Your Event</a><button
                data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value == "sub") {?>
                        <li class="nav-item nav-link"><a class="nav-link" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("#teamscroll");?>
>Back</a></li>
                    <?php } else { ?>
                        <li class="nav-item nav-link"><a class="nav-link" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("#infoscroll");?>
>Info</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("#teamscroll");?>
>Team</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("#sponsorenscroll");?>
>Partners</a></li>                                   
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav><?php }
}
