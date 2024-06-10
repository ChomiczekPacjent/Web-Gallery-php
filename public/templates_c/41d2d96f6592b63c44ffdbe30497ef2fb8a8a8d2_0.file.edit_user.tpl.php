<?php
/* Smarty version 4.3.2, created on 2024-06-10 18:45:00
  from 'C:\xampp\htdocs\atom\app\views\edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66672d8c25b9d5_89064338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d2d96f6592b63c44ffdbe30497ef2fb8a8a8d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atom\\app\\views\\edit_user.tpl',
      1 => 1717945341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66672d8c25b9d5_89064338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22235239066672d8c24e056_13637474', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_22235239066672d8c24e056_13637474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_22235239066672d8c24e056_13637474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
      <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
        <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Edit user</h1>
        <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
          <div class="u-repeater u-repeater-1" style="min-height: 450px">
            
            <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
update_user">
                <fieldset style="width: 100px; margin: auto;">
                    <label for="email">Email: </label>
                    <input type="email" name="email"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" style="color: black;"/>
                    
                    <label for="firstName">Name: </label>
                    <input type="text" name="firstName"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->firstName;?>
" style="color: black;"/>
                    
                    <label for="lastName">Surname: </label>
                    <input type="text" name="lastName"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lastName;?>
" style="color: black;"/>
                    
                    <label for="password">New password: </label>
                    <input type="password" name="password"  style="color: black;"/>
                    
                    <label for="confirm_password">Confirm password: </label>
                    <input type="password" name="confirm_password"  style="color: black;"/>
                    
                    <button type="submit" class="pure-button pure-button-primary" style="background-color: black; margin-top: 5px;">Save</button>
                </fieldset>
                    <label for="not_mandatory" style="color: #6e2aad; text-align: center;">No need to change the password. </label>
            </form>  
            
            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
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
