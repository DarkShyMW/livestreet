<?php /* Smarty version Smarty-3.1.13, created on 2018-11-29 11:18:08
         compiled from "/var/www/ls.new/application/plugins/admin/frontend/components/p-dashboard/blocks/block.activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9180655265bffa0c0e0af33-60547342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1968bf9a4af3fb154bd2a75aa3dae1d5c6762b9f' => 
    array (
      0 => '/var/www/ls.new/application/plugins/admin/frontend/components/p-dashboard/blocks/block.activity.tpl',
      1 => 1543039194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9180655265bffa0c0e0af33-60547342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'events' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bffa0c0e1ef13_17373343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bffa0c0e1ef13_17373343')) {function content_5bffa0c0e1ef13_17373343($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include '/var/www/ls.new/framework/classes/modules/viewer/plugs/function.component_define_params.php';
if (!is_callable('smarty_function_component')) include '/var/www/ls.new/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('events','count')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'activity','events'=>$_smarty_tpl->tpl_vars['events']->value,'count'=>$_smarty_tpl->tpl_vars['count']->value,'classes'=>'p-dashboard-activity js-dashboard-activity'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'admin:block','title'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['users_stats']['activity'],'content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>