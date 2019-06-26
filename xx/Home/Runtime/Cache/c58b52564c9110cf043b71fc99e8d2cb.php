<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($article["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($article["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($article["description"]); ?>" />
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
        <span class="top_name">欢迎光临~<?php echo (C("web_name")); ?></span>
          <?php if(C("is_bilingual")!= 0): ?><div class="top_lang">语言选择：
            <a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>" title="中文版"><img src="../Public/images/Chinese.gif" alt="中文版"></a>
            ∷&nbsp;
            <a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>" title="English"><img src="../Public/images/English.gif" alt="英文版"></a>
          </div><?php endif; ?>
      </div>
    </div>
  
<?php echo W('Nav',array('lang'=>'c'));?>

</header>

 <div class="page_bg" style="background: url(__ROOT__/Uploads/<?php echo W('Flash',array('type'=>3,'id'=>4));?>) center top no-repeat;"></div>
   
    <!-- main -->
    <div class="container">    
        <div class="row">

           <!-- right -->
           <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
                <div class="list_box">
                    <h2 class="left_h"><?php echo ($articlelist["name"]); ?></h2>

                    <!-- showpic -->
                    <div class="col-sm-12 col-md-6 showpic_box">
                        <ul class="showpic_flash">
                          <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="example-image-link" href="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" data-lightbox="example-set" target="_blank"><img class="example-image" src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["name"]); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>  
                        <div id="pic-page">
                            <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a data-slide-index="<?php echo ($key); ?>" href="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>"><img src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["name"]); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>  
                               
                    <!-- product_info -->
                    <div class="col-sm-12 col-md-6 proinfo_box">
                	<h1 class="product_h1"><?php echo ($article["name"]); ?></h1>
                            <ul class="product_info">
                                <li><?php echo ($article["property1"]); ?></li>
                                <li><?php echo ($article["property2"]); ?></li>
                                <li><?php echo ($article["property3"]); ?></li>
                                <li><?php echo ($article["property4"]); ?></li>
                                <li>产品描述：<?php echo (mb_substr($article["description"],0,200,'utf-8')); ?></li>
                                <li>
                                    <form id="orderform" method="post" action="<?php echo W('Listhref',array('link'=>'/Inquiry/','lang'=>'c'));?>">
                                    <input type="hidden" name="ordername" value="<?php echo ($article["name"]); ?>" />  
                                    <a href="javascript:orderform.submit();" class="btn btn-primary page-btn"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 在线订购</a>
                                    </form>
                                </li>
                            </ul>
                    </div>

                    <div class="product_con">
                    <?php echo ($article["contents"]); ?>
                    </div>

                   <div class="point">
                        <span class="to_prev col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["prev"]); ?></span>
                        <span class="to_next col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["next"]); ?></span>
                    </div>

                </div>
                      
                <div class="list_related"> 
                    <h2 class="left_h">相关产品</h2>
                    <div class="product_list related_list">
                        <?php if(is_array($related)): $i = 0; $__LIST__ = array_slice($related,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3 col-mm-6 product_img">
                                <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'c'));?>">
                                  <img  src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="img-thumbnail" alt="<?php echo ($vo["name"]); ?>"/>
                                </a>
                                <p class="product_title"><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'c'));?>" title="<?php echo ($vo["name"]); ?>"><?php echo (mb_substr($vo["name"],0,12,'utf-8')); ?></a></p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>

            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="left_nav" id="categories">
                  <h2 class="left_h">导航栏目</h2>
                  <?php echo W('Left',array('id'=>$article['bid'],'type'=>'product','lang'=>'c'));?>
                </div>

                <form id="searchform" method="get" action="<?php echo U('Search/index',array('g'=>'c'));?>">
    <div class="input-group search_group">
        <input type="text" name="name" class="form-control input-sm" placeholder="产品搜索">
        <span class="input-group-btn">
            <span id="submit_search" onclick="searchform.submit();" title="产品搜索" class="glyphicon glyphicon-search btn-lg" aria-hidden="true"></span>
        </span>
    </div>
</form>


                <div class="left_news">
                  <h2 class="left_h">新闻中心</h2>
                  <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2,'lang'=>'c'));?>
                </div>
               <div class="index_contact">
<h2 class="left_h">联系我们</h2>
    <p style="padding-top:20px;">联系人：<?php echo (C("web_contacts")); ?></p>
    <p>手机：<?php echo (C("web_phone")); ?></p>
    <p>电话：<?php echo (C("web_tel")); ?></p>
    <p>邮箱：<?php echo (C("web_email")); ?></p>
    <p>地址： <?php echo (C("web_add")); ?></p>
</div>
            </div>

        </div>
    </div> 
    
    <nav class="navbar navbar-default navbar-fixed-bottom footer_nav">
    <div class="foot_nav btn-group dropup">
        <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>
            分享</a>  
            <div class="dropdown-menu webshare">
            <?php echo (C("web_share")); ?>
            </div>
    </div>
    <div class="foot_nav"><a href="tel:<?php echo (C("web_phone")); ?>"><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>手机</a></div>
    <div class="foot_nav" >
        <button id="foot_btn" type="button"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="width:100%; border: 0px; background: transparent;">
            <span class="glyphicon glyphicon-th-list btn-lg"></span>
            分类
        </button>
    </div>
    <div class="foot_nav"><a id="gototop" href="#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>顶部</a></div>
</nav>

<footer>
    <div class="copyright">
        <p><?php echo (C("web_copyright")); ?>&nbsp;<?php echo (C("web_icp")); ?> <a href="__ROOT__/c_sitemap.html" target="_blank">网站地图</a></p>
        <p class="copyright_p">地址：<?php echo (C("web_add")); ?> &nbsp;电话：<?php echo (C("web_tel")); ?> &nbsp;传真：<?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
    </div>
    <?php if(C("is_translate")!= 0): ?><div id="translate">
<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
</div><?php endif; ?> 
</footer>

<?php echo W('Online',array('lang'=>'c'));?>
    
  </body>
</html>