<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($article["etitle"]); ?></title>
    <meta name="keywords" content="<?php echo ($article["ekeywords"]); ?>" />
    <meta name="description" content="<?php echo ($article["edescription"]); ?>" />
    <meta name="applicable-device"content="pc,mobile">
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
<link href="../Public/css/bxslider.css" rel="stylesheet">
<link href="../Public/css/style.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="../Public/js/bxslider.min.js"></script>
<script src="../Public/js/common.js"></script>
<script src="__PUBLIC__/js/bootstrap.js"></script>
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
  
 <header>
    <div class="top_menu">
      <div class="container">
        <span class="top_name">Welcome: <?php echo (C("web_ename")); ?></span>
		<?php if(C("is_bilingual")!= 0): ?><div class="top_lang">Language: 
          <a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>" title="Chinese"><img src="../Public/images/Chinese.gif" alt="Chinese"></a>
          ∷&nbsp;
          <a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>" title="English"><img src="../Public/images/English.gif" alt="English"></a>
        </div><?php endif; ?>
      </div>
    </div>
  
<?php echo W('Nav',array('lang'=>'e'));?>

</header>

 <div class="page_bg" style="background: url(__ROOT__/Uploads/<?php echo W('Flash',array('type'=>3,'id'=>4));?>) center top no-repeat;"></div>
   
    <!-- main -->
    <div class="container">    
        <div class="row">

           <!-- right -->
           <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
              <div class="list_box">
                <h2 class="left_h"><?php echo ($articlelist["ename"]); ?></h2>

                  <div class="contents">
                    <h1 class="contents_title"><?php echo ($article["etitle"]); ?></h1>
                    <?php echo ($article["econtents"]); ?>
                  </div>

                    <div class="point">
                        <span class="to_prev col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["prev"]); ?></span>
                        <span class="to_next col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["next"]); ?></span>
                    </div>
                </div>

                <div class="list_related"> 
                   <h2 class="left_h">RELATED NEWS</h2>
                    <ul class="list_news related_news">
                      <?php if(is_array($related)): $i = 0; $__LIST__ = array_slice($related,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'New','lang'=>'e'));?>" title="<?php echo ($vo["etitle"]); ?>"><?php echo (mb_substr($vo["etitle"],0,80,'utf-8')); ?></a><span class="news_time"><?php echo (date('Y-m-d',$vo["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>        
                    </ul>
                </div>
        </div>

        <!-- left -->
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="left_nav" id="categories">
              <h2 class="left_h">CATEGORIES</h2>
              <?php echo W('Left',array('id'=>$article['bid'],'type'=>'new','lang'=>'e'));?>
            </div>

            <div class="left_news">
              <h2 class="left_h">LATEST NEWS</h2>
              <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2,'lang'=>'e'));?>
            </div>
           <div class="index_contact">
<h2 class="left_h">CONTACT US</h2>
    <p style="padding-top:25px;">Contact: <?php echo (C("web_econtacts")); ?></p>
    <p>Phone: <?php echo (C("web_phone")); ?></p>
    <p>Tel: <?php echo (C("web_tel")); ?></p>
    <p>Email: <?php echo (C("web_email")); ?></p>
    <p>Add: <?php echo (C("web_eadd")); ?></p>
</div>
        </div>

      </div>
    </div> 
    
    <nav class="navbar navbar-default navbar-fixed-bottom footer_nav">
    <div class="foot_nav btn-group dropup">
        <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>
            Share</a>  
            <div class="dropdown-menu ewebshare">
            <?php echo (C("web_eshare")); ?>
            </div>
    </div>
    <div class="foot_nav"><a href="tel:<?php echo (C("web_phone")); ?>"><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>Call</a></div>
    <div class="foot_nav" >
        <button id="foot_btn" type="button"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="width:100%; border: 0px; background: transparent;">
            <span class="glyphicon glyphicon-th-list btn-lg"></span>
            Menu
        </button>
    </div>
    <div class="foot_nav"><a id="gototop" href="#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>Top</a></div>
</nav>

<footer>
    <div class="copyright">
        <p><?php echo (C("web_ecopyright")); ?>&nbsp;<?php echo (C("web_icp")); ?> <a href="__ROOT__/e_sitemap.html" target="_blank">Sitemap</a></p>
        <p class="copyright_p">Add: <?php echo (C("web_eadd")); ?> &nbsp;Tel: <?php echo (C("web_tel")); ?> &nbsp;Fax: <?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
    </div>
    <?php if(C("is_translate")!= 0): ?><div id="translate">
<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
</div><?php endif; ?> 
</footer>

<?php echo W('Online',array('lang'=>'e'));?>


    
  </body>
</html>