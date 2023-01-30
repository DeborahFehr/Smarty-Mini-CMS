<?php
/* Smarty version 4.2.1, created on 2023-01-19 18:41:45
  from '/var/www/couch-mildano/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c98ee9bb5c17_51568491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ccf20e41b94fe34951c9decf629dfc2e4e9aee8' => 
    array (
      0 => '/var/www/couch-mildano/templates/home.tpl',
      1 => 1674153702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:hero.tpl' => 1,
    'file:info.tpl' => 1,
    'file:team.tpl' => 2,
    'file:partners.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63c98ee9bb5c17_51568491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Your Event"), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section class="text-center content-section" id="team" style="padding-top: 20px;">
        <a class="anchor" id="teamscroll"></a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <h2>Team </h2>
                </div>
                <div class="col">
                    <div>
                        <div class="row">

    <?php
$__section_member_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['team']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_member_0_total = $__section_member_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_member'] = new Smarty_Variable(array());
if ($__section_member_0_total !== 0) {
for ($__section_member_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] = 0; $__section_member_0_iteration <= $__section_member_0_total; $__section_member_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']++){
?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Name'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Image'];
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Title'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Hashtag1'];
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Hashtag2'];
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Hashtag3'];
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Mail'];
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Website'];
$_prefixVariable8 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Instagram'];
$_prefixVariable9 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Linkedin'];
$_prefixVariable10 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['team']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_member']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_member']->value['index'] : null)]['Country'];
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:team.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_prefixVariable1,'image'=>$_prefixVariable2,'title'=>$_prefixVariable3,'hashtag1'=>$_prefixVariable4,'hashtag2'=>$_prefixVariable5,'hashtag3'=>$_prefixVariable6,'mail'=>$_prefixVariable7,'website'=>$_prefixVariable8,'instagram'=>$_prefixVariable9,'linkedin'=>$_prefixVariable10,'country'=>$_prefixVariable11), 0, true);
?> 
    <?php
}
}
?>

        <?php $_smarty_tpl->_subTemplateRender("file:team.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"You?",'image'=>"hiring.jpg",'title'=>"Contact us now!",'hashtag1'=>"joinus",'hashtag2'=>"smarty",'hashtag3'=>"demo",'mail'=>"#",'website'=>'','instagram'=>'','linkedin'=>'','country'=>"world"), 0, true);
?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="text-center content-section" id="sponsors" style="padding-top: 20px;padding-bottom: 0px;">
        <a class="anchor" id="sponsorenscroll"></a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <h2>Partners & Friends</h2>
                </div>
                <div class="col">
                        <div class="row partner-logos">

    <?php
$__section_friend_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['partners']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_friend_1_total = $__section_friend_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_friend'] = new Smarty_Variable(array());
if ($__section_friend_1_total !== 0) {
for ($__section_friend_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index'] = 0; $__section_friend_1_iteration <= $__section_friend_1_total; $__section_friend_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index']++){
?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['partners']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index'] : null)]['Name'];
$_prefixVariable12 = ob_get_clean();
ob_start();
echo ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'base_partner_images')).($_smarty_tpl->tpl_vars['partners']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index'] : null)]['Image']);
$_prefixVariable13 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['partners']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friend']->value['index'] : null)]['URL'];
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:partners.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_prefixVariable12,'image'=>$_prefixVariable13,'url'=>$_prefixVariable14), 0, true);
?> 
    <?php
}
}
?>

                        </div>
                </div>
            </div>
        </div>
    </section>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
