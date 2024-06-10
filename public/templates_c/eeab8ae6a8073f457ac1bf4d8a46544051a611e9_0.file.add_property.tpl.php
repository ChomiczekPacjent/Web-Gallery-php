<?php
/* Smarty version 4.3.2, created on 2024-06-10 14:18:51
  from 'C:\xampp\htdocs\atom\app\views\add_property.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6666ef2b336f60_61342016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeab8ae6a8073f457ac1bf4d8a46544051a611e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atom\\app\\views\\add_property.tpl',
      1 => 1717944179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666ef2b336f60_61342016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11443185536666ef2b32ce91_29072978', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_11443185536666ef2b32ce91_29072978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11443185536666ef2b32ce91_29072978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <body class="u-body">
    
        <!-- Dodawanie -->
        <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
          <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Upload your art</h1>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
              <div class="u-repeater u-repeater-1" style="min-height: 450px">
                
                <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add_property" enctype="multipart/form-data" id="add_property_form">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="address">Type of art: </label>
                        <input type="text" name="address" id="address" placeholder="Painting, music..." style="color: black;"/>
                        
                        <label for="price">Value: </label>
                        <input type="text" name="price" id="price" placeholder="Pln" style="color: black;"/>     

                        <label for="description">Description: </label>
                        <textarea id="description" name="description" form="add_property_form" class="pure-input-1-2"  rows="10" cols="50" style="color: black; height: auto; width: auto; resize: none;"></textarea>
                        
                        <label for="images">Files: </label>
                        <input type="file" name="images[]" id="images" multiple style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Upload</button>
                    
                    </fieldset>
                </form>  
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
              </div>
            </div>
          </div>
        </section>
                
        
<?php
}
}
/* {/block 'content'} */
}
