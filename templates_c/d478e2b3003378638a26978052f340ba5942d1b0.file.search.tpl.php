<?php /* Smarty version Smarty-3.1.14, created on 2014-05-16 16:09:11
         compiled from "..\templates\data\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54755355fed248d1b7-08615764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd478e2b3003378638a26978052f340ba5942d1b0' => 
    array (
      0 => '..\\templates\\data\\search.tpl',
      1 => 1400231225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54755355fed248d1b7-08615764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5355fed28da1c4_63590920',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5355fed28da1c4_63590920')) {function content_5355fed28da1c4_63590920($_smarty_tpl) {?><div class="main-contain"> <span>&nbsp;</span>
  <div class="container">
    <section id="content-s">
      <form action="../data/detail.php" method="get">
        <h1>Tra Cứu</h1>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <br>
        <div>
          <input type="text" placeholder="Nhập số hiệu/số vận đơn" required id="so_hieu" name="so_hieu"/>
        </div>
        <div>
          <input type="submit" value="Tra cứu" />
          <input type="button" value="Về trang chủ" onClick="window.open('http://www.dklexpress.com', '_self')" />
        </div>
      </form>
      
      <!-- form -->
      <div class="button"></div>
      <!-- button --> 
    </section>
    <!-- content --> </div>
  <!-- container --> <span>&nbsp;</span> </div>
<?php }} ?>