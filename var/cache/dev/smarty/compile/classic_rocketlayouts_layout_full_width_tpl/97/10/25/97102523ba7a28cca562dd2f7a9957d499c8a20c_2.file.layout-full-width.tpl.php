<?php
/* Smarty version 3.1.48, created on 2024-02-01 01:05:56
  from 'C:\xampp\htdocs\chino\themes\classic-rocket\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba8c04a34560_62803878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97102523ba7a28cca562dd2f7a9957d499c8a20c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic-rocket\\templates\\layouts\\layout-full-width.tpl',
      1 => 1706723276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba8c04a34560_62803878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120489414665ba8c04a2a778_72718644', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169408920765ba8c04a2b021_63722488', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188184453365ba8c04a2b797_08295570', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_120489414665ba8c04a2a778_72718644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_120489414665ba8c04a2a778_72718644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_169408920765ba8c04a2b021_63722488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_169408920765ba8c04a2b021_63722488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'contentWrapperClass'} */
class Block_137697755265ba8c04a2bc77_90452730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
col-12<?php
}
}
/* {/block 'contentWrapperClass'} */
/* {block 'content'} */
class Block_196308560965ba8c04a33498_35406403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_188184453365ba8c04a2b797_08295570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_188184453365ba8c04a2b797_08295570',
  ),
  'contentWrapperClass' => 
  array (
    0 => 'Block_137697755265ba8c04a2bc77_90452730',
  ),
  'content' => 
  array (
    0 => 'Block_196308560965ba8c04a33498_35406403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137697755265ba8c04a2bc77_90452730', 'contentWrapperClass', $this->tplIndex);
?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196308560965ba8c04a33498_35406403', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
