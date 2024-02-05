<?php
/* Smarty version 3.1.48, created on 2024-02-01 00:39:27
  from 'C:\xampp\htdocs\chino\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba85cf064764_82587476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf94cc5480811d38bfeb5c8a47a1a06cf144c9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic\\templates\\page.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba85cf064764_82587476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207620565565ba85cf0602b5_88291858', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_82854567465ba85cf060be7_41586789 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_35964263565ba85cf0606d8_27006377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82854567465ba85cf060be7_41586789', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_159513468765ba85cf062bf3_02572979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_208891644165ba85cf063165_20172435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_27346186365ba85cf062811_64299400 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159513468765ba85cf062bf3_02572979', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208891644165ba85cf063165_20172435', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_84851894765ba85cf063d63_37927316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_138381619165ba85cf0639e0_15008753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84851894765ba85cf063d63_37927316', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_207620565565ba85cf0602b5_88291858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_207620565565ba85cf0602b5_88291858',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_35964263565ba85cf0606d8_27006377',
  ),
  'page_title' => 
  array (
    0 => 'Block_82854567465ba85cf060be7_41586789',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_27346186365ba85cf062811_64299400',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_159513468765ba85cf062bf3_02572979',
  ),
  'page_content' => 
  array (
    0 => 'Block_208891644165ba85cf063165_20172435',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_138381619165ba85cf0639e0_15008753',
  ),
  'page_footer' => 
  array (
    0 => 'Block_84851894765ba85cf063d63_37927316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35964263565ba85cf0606d8_27006377', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27346186365ba85cf062811_64299400', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138381619165ba85cf0639e0_15008753', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
