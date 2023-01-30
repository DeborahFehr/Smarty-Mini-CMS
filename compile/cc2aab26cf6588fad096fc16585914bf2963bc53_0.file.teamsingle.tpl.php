<?php
/* Smarty version 4.2.1, created on 2023-01-30 12:52:49
  from '/var/www/couch-mildano/templates/teamsingle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d7bda15c99b4_07814207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2aab26cf6588fad096fc16585914bf2963bc53' => 
    array (
      0 => '/var/www/couch-mildano/templates/teamsingle.tpl',
      1 => 1675083140,
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
function content_63d7bda15c99b4_07814207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/couch-mildano/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Your Event"), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section class="text-center download-section" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.71) 98%), url(&quot;/content/images/img/concert.jpg&quot;) no-repeat;background-size: auto, cover;background-position:center;">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 
                </h1>
                <img width="100" height="80" src=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_team_images')).($_smarty_tpl->tpl_vars['image']->value);?>
 style="width: 100%;height: auto;margin-bottom: 2em;">
                <div class="row mb-3">
                                    <div class="col mx-auto" style="max-width: 300px;">
                                        <div class="row g-0 noborder">
                                            <?php if ($_smarty_tpl->tpl_vars['linkedin']->value !== '') {?>
                                                <div class="col">
                                                    <a href=<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>

                                                        target="_blank" class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-linkedin fa-fw"></i>
                                                    </a>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['instagram']->value !== '') {?>
                                                <div class="col">
                                                    <a href=<?php echo $_smarty_tpl->tpl_vars['instagram']->value;?>

                                                        target="_blank" class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-instagram fa-fw"></i>
                                                    </a>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['website']->value !== '') {?>
                                                <div class="col">
                                                    <a href=<?php echo $_smarty_tpl->tpl_vars['website']->value;?>

                                                        target="_blank" class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-globe fa-fw"></i>
                                                    </a>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['mail']->value !== '') {?>
                                                <div class="col">
                                                    <a href=<?php echo ("mailto:").($_smarty_tpl->tpl_vars['mail']->value);?>

                                                        class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </a>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>

                </p>
                <p> I'm from <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['country']->value);?>

                <?php if ($_smarty_tpl->tpl_vars['country']->value == "world") {?>
                    <i class="fa fa-flag-o fa-fw"></i>
                <?php } else { ?>
                    <i class="flag <?php echo ("flag-").($_smarty_tpl->tpl_vars['country']->value);?>
"></i>
                <?php }?>
                </p>
                <a href=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_path')).("#teamscroll");?>
><button class="btn btn-primary btn-lg btn-default" type="button">Back to Event</button></a>
            </div>
        </div>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
