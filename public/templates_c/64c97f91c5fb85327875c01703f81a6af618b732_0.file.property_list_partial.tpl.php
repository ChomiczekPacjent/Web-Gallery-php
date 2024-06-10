<?php
/* Smarty version 4.3.2, created on 2024-06-10 16:55:22
  from 'C:\xampp\htdocs\atom\app\views\property_list_partial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666713da677786_59413057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c97f91c5fb85327875c01703f81a6af618b732' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atom\\app\\views\\property_list_partial.tpl',
      1 => 1718031321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666713da677786_59413057 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 50px; min-height: 375px;">
        <div class="u-container-layout u-similar-container u-container-layout-1">
            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['main_image']))) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['main_image'];?>
" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/default_image.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            <?php }?>
            
            <h2 class="u-text u-text-2" style="margin-top: -400px; margin-left: 600px"><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</h2>
            <p class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-left: 600px">Value: <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 PLN</p>

            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'property_details','id'=>$_smarty_tpl->tpl_vars['row']->value['idProperty']),$_smarty_tpl ) );?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">More</a>
            
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
