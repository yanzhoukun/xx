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
    <link href="../Public/css/lightbox.css" rel="stylesheet">
    <script src="../Public/js/lightbox.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.showpic_flash').bxSlider({
              pagerCustom: '#pic-page',
               adaptiveHeight: true,
            });

        });
    </script>
  </head>
  <body id="product">
  
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

                    <!-- showpic -->
                    <div class="col-sm-12 col-md-6 showpic_box">
                        <ul class="showpic_flash">
                          <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="example-image-link" href="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" data-lightbox="example-set" target="_blank"><img class="example-image" src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["ename"]); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>  
                        <div id="pic-page">
                            <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a data-slide-index="<?php echo ($key); ?>" href="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>"><img src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["ename"]); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>  
                               
                    <!-- product_info -->
                    <div class="col-sm-12 col-md-6 proinfo_box">
                	<h1 class="product_h1"><?php echo ($article["ename"]); ?></h1>
                            <ul class="product_info">
                                <li><?php echo ($article["eproperty1"]); ?></li>
                                <li><?php echo ($article["eproperty2"]); ?></li>
                                <li><?php echo ($article["eproperty3"]); ?></li>
                                <li><?php echo ($article["eproperty4"]); ?></li>
                                <li>Product description: <?php echo (mb_substr($article["edescription"],0,200,'utf-8')); ?></li>
                                <li>
                                    <form id="orderform" method="post" action="<?php echo W('Listhref',array('link'=>'/Inquiry/','lang'=>'e'));?>">
                                    <input type="hidden" name="ordername" value="<?php echo ($article["ename"]); ?>" />  
                                    <a href="javascript:orderform.submit();" class="btn btn-primary page-btn"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> INQUIRY</a>
                                    </form>
                                </li>
                            </ul>
                    </div>

                    <div class="product_con">
                    <?php echo ($article["econtents"]); ?>
                    </div>

                   <div class="point">
                        <span class="to_prev col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["prev"]); ?></span>
                        <span class="to_next col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["next"]); ?></span>
                    </div>

                </div>
                      
                <div class="list_related"> 
                    <h2 class="left_h">RELATED PRODUCTS</h2>
                    <div class="product_list related_list">
                        <?php if(is_array($related)): $i = 0; $__LIST__ = array_slice($related,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3 col-mm-6 product_img">
                                <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>">
                                  <img  src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="img-thumbnail" alt="<?php echo ($vo["ename"]); ?>"/>
                                </a>
                                <p class="product_title"><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>" title="<?php echo ($vo["ename"]); ?>"><?php echo (mb_substr($vo["ename"],0,20,'utf-8')); ?></a></p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>

            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="left_nav" id="categories">
                  <h2 class="left_h">CATEGORIES</h2>
                  <?php echo W('Left',array('id'=>$article['bid'],'type'=>'product','lang'=>'e'));?>
                </div>

                <form id="searchform" method="get" action="<?php echo U('Search/index',array('g'=>'e'));?>">
    <div class="input-group search_group">
        <input type="text" name="name" class="form-control input-sm" placeholder="Product search">
        <span class="input-group-btn">
            <span id="submit_search" onclick="searchform.submit();" title="Product search" class="glyphicon glyphicon-search btn-lg" aria-hidden="true"></span>
        </span>
    </div>
</form>


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