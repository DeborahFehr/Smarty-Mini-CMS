<?php
/* Smarty version 4.2.1, created on 2023-01-18 21:43:57
  from '/var/www/couch-mildano/templates/musician.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c8681daf6822_18822734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc7f92fb232ace8ed191008b8479f1a040fb5cc' => 
    array (
      0 => '/var/www/couch-mildano/templates/musician.tpl',
      1 => 1674078229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63c8681daf6822_18822734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Your Event"), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section class="text-center download-section content-section" id="download" style="background-image:url('assets/img/downloads-bg.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1><?php echo $_smarty_tpl->tpl_vars['musician']->value;?>
</h1>
                <img width="100" height="80" src="assets/img/intro-bg.jpg" style="width: 100%;height: auto;margin-bottom: 2em;">
                <p>You can download Grayscale for free on the preview page.</p>
                <button class="btn btn-primary btn-lg btn-default" type="button">Back to Event</button>
            </div>
        </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
