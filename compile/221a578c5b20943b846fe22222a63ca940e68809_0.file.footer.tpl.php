<?php
/* Smarty version 4.2.1, created on 2023-01-20 15:14:03
  from '/var/www/couch-mildano/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63caafbbaeba45_18102300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '221a578c5b20943b846fe22222a63ca940e68809' => 
    array (
      0 => '/var/www/couch-mildano/templates/footer.tpl',
      1 => 1674227641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63caafbbaeba45_18102300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/couch-mildano/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
    <footer style="padding-top: 50px;padding-bottom: 30px;">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <p>Copyright © <?php echo smarty_modifier_capitalize($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'));?>
.</p>
                </div>
                <div class="col-12">
                    <p>Images by 
                    <a href="https://www.pexels.com/" target="_blank">Pexels</a>
                    and <a href="https://www.canva.com/" target="_blank">Canva</a>,
                    original Template by
                    <a href="https://github.com/startbootstrap/startbootstrap-grayscale" target="_blank">Start Bootstrap</a> 
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <?php echo '<script'; ?>
 src="assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/grayscale.js"><?php echo '</script'; ?>
>

    </body>

</html><?php }
}
