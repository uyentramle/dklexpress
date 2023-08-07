<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>{$titleForLayout|default:$smarty.const.WEBSITE_NAME}</title>
<!-- CSS Reset -->
<link rel="stylesheet" type="text/css" href="../templates/css/reset.css" media="screen" />
<!-- Fluid 960 Grid System - CSS framework -->
<link rel="stylesheet" type="text/css" href="../templates/css/grid.css" media="screen" />
<!-- IE Hacks for the Fluid 960 Grid System -->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="../templates/css/ie6.css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="../templates/css/ie.css" media="screen" /><![endif]-->
<!-- Main stylesheet -->
<link rel="stylesheet" type="text/css" href="../templates/css/styles.css" media="screen" />
<!-- WYSIWYG editor stylesheet -->
<link rel="stylesheet" type="text/css" href="../templates/css/jquery.wysiwyg.css" media="screen" />
<!-- Table sorter stylesheet -->
<link rel="stylesheet" type="text/css" href="../templates/css/tablesorter.css" media="screen" />
<!-- Thickbox stylesheet -->
<link rel="stylesheet" type="text/css" href="../templates/css/thickbox.css" media="screen" />
<!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
<link rel="stylesheet" type="text/css" href="../templates/css/theme-blue.css" media="screen" />
<!--<link rel="stylesheet" type="text/css" href="../templates/css/css/theme-red.css" media="screen" />-->
<!--<link rel="stylesheet" type="text/css" href="../templates/css/css/theme-yellow.css" media="screen" />-->
<!--<link rel="stylesheet" type="text/css" href="../templates/css/css/theme-green.css" media="screen" />-->
<!--<link rel="stylesheet" type="text/css" href="../templates/css/css/theme-graphite.css" media="screen" />-->
{*JQuery UI*}
<link rel="stylesheet" href="../templates/scripts/jquery/themes/cupertino/jquery-ui.css" type="text/css" media="screen" />
<script type="text/javascript" src="../templates/scripts/jquery/jquery-1.9.1.js" ></script>

{*JQuery UI*}
<script type="text/javascript" src="../templates/scripts/jquery/ui/jquery-ui.custom.js"></script>
<!-- JQuery engine script-->
<script type="text/javascript" src="../templates/jsjquery-1.3.2.min.js" ></script>
<!-- JQuery WYSIWYG plugin script -->
<script type="text/javascript" src="../templates/jsjquery.wysiwyg.js" ></script>
<!-- JQuery tablesorter plugin script-->
<script type="text/javascript" src="../templates/jsjquery.tablesorter.min.js" ></script>
<!-- JQuery pager plugin script for tablesorter tables -->
<script type="text/javascript" src="../templates/jsjquery.tablesorter.pager.js" ></script>
<!-- JQuery password strength plugin script -->
<script type="text/javascript" src="../templates/jsjquery.pstrength-min.1.2.js"></script>
<!-- JQuery thickbox plugin script -->
<script type="text/javascript" src="../templates/jsthickbox.js"></script>
<!-- Initiate WYIWYG text area -->
<script type="text/javascript" src="../templates/textarea.js"></script>
</head>
<body>
<!-- Header -->
<div id="header"> 
  <!-- Header. Status part -->
  <div id="header-status">
    <div class="container_12">
      <div class="grid_8"> &nbsp; </div>
      <div class="grid_4"> <a href="../login/logout.php" id="logout"> Đăng xuất </a> </div>
    </div>
    <div style="clear:both;"></div>
  </div>
  <!-- End #header-status --> 
  
  <!-- Header. Main part -->
  <div id="header-main">
    <div class="container_12">
      <div class="grid_12">
        <div id="logo">
          <ul id="nav">         	
            <li><a href="../home/">Home</a></li>          	
            <li><a href="../data/list.php">Danh sách ký gửi</a></li>
            <li><a href="../data/add.php">Thêm mới ký gửi</a></li>
            
          </ul>
        </div>
        <!-- End. #Logo --> 
      </div>
      <!-- End. .grid_12-->
      <div style="clear: both;"></div>
    </div>
    <!-- End. .container_12 --> 
  </div>
  <!-- End #header-main -->
  <div style="clear: both;"></div>
</div>
<!-- End #header -->

<div class="container_12"> {$contentForLayout}
  <div style="clear:both;"></div>
</div>
<!-- End .container_12 --> 

<!-- Footer -->
<div id="footer">
  <div class="container_12">
    <div class="grid_12">
    <p><a href="../home/">Home</a></p>
      <!-- You can change the copyright line for your own -->
      <p>Copyright &copy; 2014. Design by  <a href="http://www.grace-network.com" target="_blank">Grace-Network</a></p>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>
<!-- End #footer -->
</body>
</html>