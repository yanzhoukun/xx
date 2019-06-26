<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (C("seo_etitle")); ?></title>
    <meta name="keywords" content="<?php echo (C("seo_ekeywords")); ?>" />
    <meta name="description" content="<?php echo (C("seo_edescription")); ?>" />
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

<?php echo W('Flash',array('type'=>1,'lang'=>'e'));?>
<script type="text/javascript">
    $('.bxslider').bxSlider({
      adaptiveHeight: true,
      infiniteLoop: true,
      hideControlOnEnd: true,
      auto:true
    });
</script>

    <div class="product_bg">
        <div class="container">    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="product_index">
                        <div class="product_head" data-move-y="-40px">
                        <h2>FEATURED</h2>
                        <span></span>
                        <p>THE BEST PRODUCTS</p>
                        </div>
                            <div class="product_list">
                            <?php echo W('List',array('table'=>'Product','bid'=>1,'id'=>1,'lang'=>'e'));?>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="aboutus" style="background-image: url(__ROOT__/Uploads/<?php echo W('Flash',array('type'=>3,'id'=>8));?>); background-size: cover;background-attachment: fixed;background-color: #1A1A1A;">
        <h2>ABOUT US</h2>
        <p><?php echo W('About',array('id'=>25,'len'=>1000,'lang'=>'e'));?></p>
        <a href="<?php echo W('Listhref',array('id'=>25,'lang'=>'e'));?>" class="btn btn-info view-all" role="button">VIEW ALL</a>
    </div>

    <div class="advantage">
        <div class="advantage_head" data-move-y="-30px">
            <h2>OUR ADVANTAGE</h2>
        </div>
        <div class="container advantage_list">    
            <div class="row">
                <?php echo W('Flash',array('type'=>2,'lang'=>'e'));?>
            </div>
        </div>
    </div>

    <div class="news_bg">
        <div class="container">    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="news_head" data-move-y="-50px">
                            <h2>NEWS</h2>
                            <span></span>
                            <p>LATEST NEWS</p>
                        </div>
                        <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2,'lang'=>'e','moban'=>'e_index_new'));?>
                </div>
            </div>
        </div>
    </div>

    <?php echo W('Link',array('lang'=>'e'));?>
    <?php echo W('Tags',array('lang'=>'e'));?>

    <script src="../Public/js/jquery.smoove.min.js"></script>
    <script>$('.product_head,.product_img,.advantage_head,.advantage_col,.news_head,.news_index').smoove({offset:'10%'});</script>
     
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