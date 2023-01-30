<?php
/* Smarty version 4.2.1, created on 2023-01-20 14:30:43
  from '/var/www/couch-mildano/templates/team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63caa593753f97_06820859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce1f19639cec253a022ab0d6d3bb5c68d322417' => 
    array (
      0 => '/var/www/couch-mildano/templates/team.tpl',
      1 => 1674225041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63caa593753f97_06820859 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column justify-content-between"
                                style="margin-bottom: 20px;">
                                <div>
                                    <div class="team-images">
                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == "You?") {?>
                                            <a href=<?php echo ("mailto:").($_smarty_tpl->tpl_vars['mail']->value);?>
><img src=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_team_images')).($_smarty_tpl->tpl_vars['image']->value);?>
></a>
                                        <?php } else { ?>
                                            <a href=<?php echo ("?page=").($_smarty_tpl->tpl_vars['name']->value);?>
><img src=<?php echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_team_images')).($_smarty_tpl->tpl_vars['image']->value);?>
></a>
                                        <?php }?>
                                    </div>
                                    <h5 style="margin-bottom: 10px;" >
                                    <?php if ($_smarty_tpl->tpl_vars['name']->value == "You?") {?>
                                        <a href=<?php echo ("mailto:").($_smarty_tpl->tpl_vars['mail']->value);?>
 class="team-name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                                    <?php } else { ?>
                                        <a href=<?php echo ("?page=").($_smarty_tpl->tpl_vars['name']->value);?>
 class="team-name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['country']->value == "world") {?>
                                        <i class="fa fa-flag-o fa-fw"></i>
                                    <?php } else { ?>
                                        <i class="flag <?php echo ("flag-").($_smarty_tpl->tpl_vars['country']->value);?>
"></i>
                                    <?php }?>
                                    </h5>
                                    <h6 style="margin-bottom: 10px;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h6>
                                </div>
                                <div>
                                    <p class="hashtags" style="margin-bottom: 10px;">
                                        <?php if ($_smarty_tpl->tpl_vars['hashtag1']->value !== '') {?>
                                        <span>#<?php echo $_smarty_tpl->tpl_vars['hashtag1']->value;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['hashtag2']->value !== '') {?>
                                        <span>#<?php echo $_smarty_tpl->tpl_vars['hashtag2']->value;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['hashtag3']->value !== '') {?>
                                        <span>#<?php echo $_smarty_tpl->tpl_vars['hashtag3']->value;?>
</span>
                                        <?php }?>
                                    </p>
                                </div>
                                <div class="row">
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
                            </div><?php }
}
