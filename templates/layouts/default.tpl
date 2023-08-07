<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$titleForLayout|default:$smarty.const.WEBSITE_NAME}</title>
<link href="../templates/css/style_template.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrap">
  <nav id="mainnav">
   <!-- <a href="http://www.dklexpress.com "><h1 id="textlogo">DKL <span>Express</span> </h1></a>
    <ul>
      <li><a href="http://dklexpress.com/">Trang chủ</a></li>
      <li><a href="http://dklexpress.com/?page_id=96">Giới thiệu</a></li>
      <li><a href="#">Dịch vụ</a></li>
      <li><a href="#">Liên lạc</a></li>
    </ul>-->
    <a href="http://www.dklexpress.com "><img src="../templates/images/logo-slogan.jpg" width="996px" /></a>
    
    
  </nav>
  <section id="content">
    <section id="page">
      <header class="mainheading">
        <h2 class="introhead"></h2>
      </header>
      <div align="center">
        {$contentForLayout}
        <div class="clear"></div>
      </div>
    </section>
  </section>
  <footer>
  <div id="bottom"> <b>DKL EXPRESS</b><br />
Phone: 08.38458999 # 704 – Fax: 08.39484603 - Cell-phone: 094 3223 777<br />
Yahoo chat: vinhnguyend - Email: vinhnguyend@yahoo.com <br />
Copyright &copy;2014 DKLExpress<br />
    <div class="clear"></div>
  </div>
  <div id="credits"> Powered by Grace-Network </div>
</footer>
</div>

<!-- END PAGE SOURCE -->
</body>
</html>