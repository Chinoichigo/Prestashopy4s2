<?php
/* Smarty version 3.1.48, created on 2024-02-01 00:39:27
  from 'C:\xampp\htdocs\chino\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba85cf3ca675_92170955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9ba9938f177410ccccdc4c159ca18d2a10f526e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba85cf3ca675_92170955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\chino\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\b9\\ba\\99\\b9ba9938f177410ccccdc4c159ca18d2a10f526e_2.file.helpers.tpl.php',
    'uid' => 'b9ba9938f177410ccccdc4c159ca18d2a10f526e',
    'call_name' => 'smarty_template_function_renderLogo_200916169365ba85cf3c4f78_00046781',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_200916169365ba85cf3c4f78_00046781 */
if (!function_exists('smarty_template_function_renderLogo_200916169365ba85cf3c4f78_00046781')) {
function smarty_template_function_renderLogo_200916169365ba85cf3c4f78_00046781(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_200916169365ba85cf3c4f78_00046781 */
}
