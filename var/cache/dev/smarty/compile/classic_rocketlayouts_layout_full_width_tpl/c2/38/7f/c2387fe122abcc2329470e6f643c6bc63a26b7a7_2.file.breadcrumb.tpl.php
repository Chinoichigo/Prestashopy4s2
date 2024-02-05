<?php
/* Smarty version 3.1.48, created on 2024-02-01 01:05:57
  from 'C:\xampp\htdocs\chino\themes\classic-rocket\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba8c05cdd392_67442018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2387fe122abcc2329470e6f643c6bc63a26b7a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic-rocket\\templates\\_partials\\breadcrumb.tpl',
      1 => 1706723276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba8c05cdd392_67442018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][1]))) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="visible--desktop">
  <ol class="breadcrumb">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363548765ba8c05cda1a0_69798030', 'breadcrumb_item');
?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ol>
</nav>
<?php }
}
/* {block 'breadcrumb_item'} */
class Block_363548765ba8c05cda1a0_69798030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb_item' => 
  array (
    0 => 'Block_363548765ba8c05cda1a0_69798030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
                <li class="breadcrumb-item active">
                    <?php } else { ?>
                <li class="breadcrumb-item">
                <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
            </a>
        <?php }?>
            </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
}
