<?php
/* Smarty version 4.3.2, created on 2024-06-10 18:50:24
  from 'C:\xampp\htdocs\faberpaw\app\views\properties.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66672ed02aa257_06585895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6e046dcb7e68d986295adea0911560762fbec95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faberpaw\\app\\views\\properties.tpl',
      1 => 1718008152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:property_list_partial.tpl' => 1,
  ),
),false)) {
function content_66672ed02aa257_06585895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214232535366672ed029da33_04142505', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_214232535366672ed029da33_04142505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_214232535366672ed029da33_04142505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80" style="padding-bottom: 100px;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 style="font-weight: normal; text-align: center;">Undercover any type of art!</h2>
            <?php if ((isset($_smarty_tpl->tpl_vars['logged_user']->value)) && \core\RoleUtils::inRole("user")) {?>
    <div style="text-align: center;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
property_insert" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="display: inline-block; margin: 0 auto;">Upload it</a>
    </div>
<?php }?>
            <form id="property-search-form" class="pure-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
find_properties" onsubmit="ajaxPostForm('property-search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
find_properties', 'property-listings'); return false;">

                <fieldset style="margin: 0 auto; display: block; text-align: center;">
                    <input type="text" id="address" name="address"  style="color: black; margin-top: 5px; width: 300px;" />
                    <input type="hidden" id="page" name="page" value="1" />
                    <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Search</button>
                </fieldset>
            </form>
                
            <div id="property-listings" class="u-expanded-width u-list u-list-1">
                <?php $_smarty_tpl->_subTemplateRender("file:property_list_partial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

                <div style="margin-top: 50px; position: relative;">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>
                        <a class="pure-button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'property_list','page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl ) );?>
" title="Previous page" style="font-size: 200%; color: black; position: absolute; left: -50px;"><<i class="fas fa-angle-left"></i></a>
                    <?php }?>
                    <p style="font-size: 200%; position: absolute; right: 50%; margin-top: 0;">> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 <</p>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['max_page']->value) {?>
                        <a class="pure-button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'property_list','page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl ) );?>
" title="Next page" style="font-size: 200%; color: black; position: absolute; right: -50px;">><i class="fas fa-angle-right"></i></a>
                    <?php }?>
                </div>
        </div>
    </section>
</body>
<?php
}
}
/* {/block 'content'} */
}
