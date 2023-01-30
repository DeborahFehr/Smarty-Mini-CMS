<?php
/* Smarty version 4.2.1, created on 2023-01-30 12:51:25
  from '/var/www/couch-mildano/templates/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d7bd4dc951e8_44052930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a13fb6ef6861038ecfb5e7edff2e0311fc9256d7' => 
    array (
      0 => '/var/www/couch-mildano/templates/info.tpl',
      1 => 1675082962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d7bd4dc951e8_44052930 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="text-center content-section" id="info" style="padding-top: 20px;">
        <a class="anchor" id="infoscroll"></a>
        <div class="container">
            <div class="row" style="padding-right: 20px;padding-left: 20px;">
                <div class="col" style="margin-bottom: 20px;">
                    <h2><?php echo $_smarty_tpl->tpl_vars['info_files']->value['Title'];?>
</h2>
                        <?php
$__section_text_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['info_text']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_text_0_total = $__section_text_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_text'] = new Smarty_Variable(array());
if ($__section_text_0_total !== 0) {
for ($__section_text_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_text']->value['index'] = 0; $__section_text_0_iteration <= $__section_text_0_total; $__section_text_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_text']->value['index']++){
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['info_text']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_text']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_text']->value['index'] : null)]['Paragraph'];?>
</p>
                        <?php
}
}
?>
                    <a href=<?php echo $_smarty_tpl->tpl_vars['info_files']->value['Button_URL'];?>
 target="_blank" disabled=<?php echo $_smarty_tpl->tpl_vars['info_files']->value['Button_Disabled'];?>

                        class="btn btn-primary">
                        <?php echo $_smarty_tpl->tpl_vars['info_files']->value['Button_Text'];?>
</a>
                </div>
                <div class="col-12 mx-auto col-md-5"><img src=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_images')).($_smarty_tpl->tpl_vars['info_files']->value['Image']);?>
 style="max-width: 100%;">
                </div>
            </div>
        </div>
    </section><?php }
}
