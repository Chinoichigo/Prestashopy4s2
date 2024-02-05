<?php
/* Smarty version 3.1.48, created on 2024-02-01 00:39:26
  from 'C:\xampp\htdocs\chino\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba85cef1d061_43472682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5037962ac1d8685379676b36e301bd03ae0b7ff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic\\templates\\index.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba85cef1d061_43472682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42704264965ba85cef18dc8_61747147', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_138233352365ba85cef193d6_46096165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_95178594565ba85cef19f20_15009038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_134926463565ba85cef19b70_26387219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95178594565ba85cef19f20_15009038', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_42704264965ba85cef18dc8_61747147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_42704264965ba85cef18dc8_61747147',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_138233352365ba85cef193d6_46096165',
  ),
  'page_content' => 
  array (
    0 => 'Block_134926463565ba85cef19b70_26387219',
  ),
  'hook_home' => 
  array (
    0 => 'Block_95178594565ba85cef19f20_15009038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138233352365ba85cef193d6_46096165', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134926463565ba85cef19b70_26387219', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
