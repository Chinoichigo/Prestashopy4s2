<?php
/* Smarty version 3.1.48, created on 2024-02-01 01:05:57
  from 'C:\xampp\htdocs\chino\themes\classic-rocket\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba8c05d73930_44123094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9816b68b50bdaaa35b30fc1e7198fd9a626f2519' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic-rocket\\templates\\_partials\\footer.tpl',
      1 => 1706723276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba8c05d73930_44123094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199538157065ba8c05d6e868_09924402', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117857576365ba8c05d6f7a7_54871670', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121062504965ba8c05d70514_20482168', 'hook_footer_after');
?>

    </div>
    <p class="text-center mb-0 pb-3">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6258329365ba8c05d712d7_55143236', 'copyright_link');
?>

    </p>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_199538157065ba8c05d6e868_09924402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_199538157065ba8c05d6e868_09924402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_117857576365ba8c05d6f7a7_54871670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_117857576365ba8c05d6f7a7_54871670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_121062504965ba8c05d70514_20482168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_121062504965ba8c05d70514_20482168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_6258329365ba8c05d712d7_55143236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_6258329365ba8c05d712d7_55143236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a class="_blank" href="https://prestarocket.com/" target="_blank" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Theme by %prestashop%','sprintf'=>array('%prestashop%'=>'Prestarocket™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </a>
      <?php
}
}
/* {/block 'copyright_link'} */
}
