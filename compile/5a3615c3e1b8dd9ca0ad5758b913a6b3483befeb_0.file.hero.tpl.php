<?php
/* Smarty version 4.2.1, created on 2023-01-18 21:15:12
  from '/var/www/couch-mildano/templates/hero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c86160282598_33229370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a3615c3e1b8dd9ca0ad5758b913a6b3483befeb' => 
    array (
      0 => '/var/www/couch-mildano/templates/hero.tpl',
      1 => 1674076488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c86160282598_33229370 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="masthead"
        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.71) 98%), url(&quot;content/images/img/concert.jpg&quot;) no-repeat;background-size: auto, cover;">
        <div class="intro-body">
            <div class="container iframe-container">
                <video class="responsive-iframe" autoplay muted loop playsinline src="content/videos/hero.mp4"></video>
                <h1 class="headliner">
                    <a href=<?php echo $_smarty_tpl->tpl_vars['info_files']->value['Hero_URL'];?>

                        target="_blank" class="headerlink">
                        Party with us! &nbsp;
                        <i class="fa fa-external-link"></i>
                    </a>
                </h1>
            </div>
        </div>
    </header><?php }
}
