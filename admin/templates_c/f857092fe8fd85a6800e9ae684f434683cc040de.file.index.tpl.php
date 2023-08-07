<?php /* Smarty version Smarty-3.1.14, created on 2014-04-24 09:51:29
         compiled from "..\templates\stats\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2826153587c31aa0645-57632495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f857092fe8fd85a6800e9ae684f434683cc040de' => 
    array (
      0 => '..\\templates\\stats\\index.tpl',
      1 => 1397799290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2826153587c31aa0645-57632495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thoi_gian' => 0,
    'chuoi_ngay' => 0,
    'chuoi_ltc' => 0,
    'chuoi_ddh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53587c31b85800_13772381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53587c31b85800_13772381')) {function content_53587c31b85800_13772381($_smarty_tpl) {?><div class="content-box-header">
  <h3>Thống kê [Tổng quát]</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->

<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab --> 
    
    <script src="../templates/scripts/highcharts/js/highcharts.js"></script> 
    <script src="../templates/scripts/highcharts/js/modules/exporting.js"></script> 
     
    <script type="text/javascript">
	
$(function () {
        $('#container').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Biểu đồ thống kê Lượt Tra Cứu Kiện Hàng và Số Lượng Ký Gửi trong 7 ngày'
            },
            subtitle: {
                text: ' <?php echo $_smarty_tpl->tpl_vars['thoi_gian']->value;?>
 '
            },
            xAxis: [{
                categories: [ <?php echo $_smarty_tpl->tpl_vars['chuoi_ngay']->value;?>
 ]
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value} ký gửi',
                    style: {
                        color: '#89A54E'
                    }
                },
                title: {
                    text: 'Số lượng ký gửi',
                    style: {
                        color: '#89A54E'
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Lượt tra cứu',
                    style: {
                        color: '#4572A7'
                    }
                },
                labels: {
                    format: '{value} lượt',
                    style: {
                        color: '#4572A7'
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: '#FFFFFF'
            },
            series: [{
                name: 'Lượt tra cứu',
                color: '#4572A7',
                type: 'column',
                yAxis: 1,
                data: [ <?php echo $_smarty_tpl->tpl_vars['chuoi_ltc']->value;?>
 ],
                tooltip: {
                    valueSuffix: ' lượt'
                }
    
            }, {
                name: 'Số lượng ký gửi',
                color: '#89A54E',
                type: 'spline',
                data: [ <?php echo $_smarty_tpl->tpl_vars['chuoi_ddh']->value;?>
 ],
                tooltip: {
                    valueSuffix: ' ký gửi'
                }
            }]
        });
    });

		</script> 
    
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
  </div>
  <!-- End #tab1 --> 
  
</div>
<!-- End .content-box-content --><?php }} ?>