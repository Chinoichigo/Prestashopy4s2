<?php
/* Smarty version 3.1.48, created on 2024-02-01 01:05:57
  from 'C:\xampp\htdocs\chino\themes\classic-rocket\templates\_partials\font.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ba8c05013a17_34111591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8a4fa1e475b1e919fdb64bdbe7bc4c12d35587c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chino\\themes\\classic-rocket\\templates\\_partials\\font.tpl',
      1 => 1706723276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ba8c05013a17_34111591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>
<link rel="preconnect" href="//ajax.googleapis.com" crossorigin>
<?php echo '<script'; ?>
 type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Noto+Sans:400,700' ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); <?php echo '</script'; ?>
>
<?php }
}
