<?php
/* Smarty version 4.2.1, created on 2023-01-20 15:37:31
  from '/var/www/couch-mildano/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63cab53b3e6151_32328950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5432d0678ec0151b035f068487998e822ebeced5' => 
    array (
      0 => '/var/www/couch-mildano/templates/nav.tpl',
      1 => 1674229048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cab53b3e6151_32328950 (Smarty_Internal_Template $_smarty_tpl) {
?>    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="/">Your Event</a><button
                data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value == "sub") {?>
                        <li class="nav-item nav-link"><a class="nav-link" href="/#teamscroll">Back</a></li>
                    <?php } else { ?>
                        <li class="nav-item nav-link"><a class="nav-link" href="#infoscroll">Info</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#teamscroll">Team</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#sponsorenscroll">Partners</a></li>                                   
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav><?php }
}
