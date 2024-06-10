<?php
/* Smarty version 4.3.2, created on 2024-06-10 19:16:55
  from 'C:\xampp\htdocs\faberpaw\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_666735070d6ad8_75881897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f257de624c2af762bdf78ec35ae154759896e03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faberpaw\\app\\views\\login.tpl',
      1 => 1717943056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666735070d6ad8_75881897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1122707756666735070bd610_04102483', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_1122707756666735070bd610_04102483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1122707756666735070bd610_04102483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body class="u-body">
	<section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
            <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 623px;">
              <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Login</h1>
              
                <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="login">Login: </label>
                        <input type="text" name="login" id="login" placeholder="Login" style="color: black;" <?php if ((isset($_smarty_tpl->tpl_vars['login']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"<?php }?>/>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password" style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Login</button>
                    </fieldset>
                </form>  

                <div style="text-align: center; color: white;">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_register">Sign up</a>
                </div>
                        
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>         
            </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
