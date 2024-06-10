<?php
/* Smarty version 4.3.2, created on 2024-06-10 14:13:24
  from 'C:\xampp\htdocs\atom\app\views\property_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6666ede4abb170_45088207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366fc44d4d23ef42773f7671394099145bbf3040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atom\\app\\views\\property_details.tpl',
      1 => 1718016571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666ede4abb170_45088207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2264795556666ede4aaa5a2_13132667', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_2264795556666ede4aaa5a2_13132667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2264795556666ede4aaa5a2_13132667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
        <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px; text-align: center;">
            <div class="u-container-style u-list-item u-repeater-item" style="margin-top: 200px; margin-bottom: 75px; text-align: left;">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h6 class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-top: 0; font-size: 2rem;"><?php echo $_smarty_tpl->tpl_vars['property']->value->description;?>
</h6>
                        
                        </div>
                    </div>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
            
                <div class="u-repeater u-repeater-1" style="min-height: 450px">
                    <?php if ($_smarty_tpl->tpl_vars['property']->value->images) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['property']->value->images, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                        <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 75px; text-align: center;">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="" class="u-image-default u-preserve-proportions" style="margin-bottom: 25px; max-width: 100%; height: auto; max-height: 1080px;">
                            </div>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    
                    <div class="u-container-style u-list-item u-repeater-item" style="margin-top: 200px; margin-bottom: 75px; text-align: left;">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h2 class="u-text u-text-2"></h2>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3">Value:</span> <?php echo $_smarty_tpl->tpl_vars['property']->value->price;?>
 PLN</h5>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3">added:</span> <?php echo $_smarty_tpl->tpl_vars['property']->value->datePosted;?>
</h5>
                            
                            
                            <?php if (\core\RoleUtils::inRole("moderator") || ((isset($_smarty_tpl->tpl_vars['logged_user']->value)) && $_smarty_tpl->tpl_vars['property']->value->ownerId == $_smarty_tpl->tpl_vars['logged_user']->value->idUser)) {?>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'property_edit','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl ) );?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1 btn btn-primary" style="margin: 5px;">Edit</a>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'delete_property','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl ) );?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1 btn btn-danger" style="margin: 5px;" onclick="return confirm('Delete?');">Delete</a>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['logged_user']->value))) {?>
                                <?php if ($_smarty_tpl->tpl_vars['is_favorite']->value) {?>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'remove_from_favorites','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl ) );?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 5px;">Delete from favourites</a>
                                <?php } else { ?>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'add_to_favorites','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl ) );?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 5px;">Add to favourites</a>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
}
}
/* {/block 'content'} */
}
