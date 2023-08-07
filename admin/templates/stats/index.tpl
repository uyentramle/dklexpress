<div class="content-box-header">
  <h3>Thống kê [Tổng quát]</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->

<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab --> 
    
    <script src="../templates/scripts/highcharts/js/highcharts.js"></script> 
    <script src="../templates/scripts/highcharts/js/modules/exporting.js"></script> 
    {literal} 
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
                text: '{/literal} {$thoi_gian} {literal}'
            },
            xAxis: [{
                categories: [{/literal} {$chuoi_ngay} {literal}]
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
                data: [{/literal} {$chuoi_ltc} {literal}],
                tooltip: {
                    valueSuffix: ' lượt'
                }
    
            }, {
                name: 'Số lượng ký gửi',
                color: '#89A54E',
                type: 'spline',
                data: [{/literal} {$chuoi_ddh} {literal}],
                tooltip: {
                    valueSuffix: ' ký gửi'
                }
            }]
        });
    });

		</script> 
    {/literal}
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
  </div>
  <!-- End #tab1 --> 
  
</div>
<!-- End .content-box-content -->