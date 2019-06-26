<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>在线留言-<?php echo (C("seo_title")); ?></title>
    <meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
    <meta name="description" content="<?php echo (C("seo_description")); ?>" />
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
<SCRIPT language=javaScript>
function CheckJob()
{
  if (document.myform.title.value.length==""){
    alert ("留言标题不能为空！");
    document.myform.title.focus();
    return false;
  }
  if (document.myform.name.value.length==""){
    alert ("姓名不能为空！");
    document.myform.name.focus();
    return false;
  }
  if (document.myform.tel.value.length==""){
    alert ("电话不能为空！");
    document.myform.tel.focus();
    return false;
  }
 }
</SCRIPT>
  </head>
  <body>
  
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
                    <h2 class="left_h">在线留言</h2>
  
                    <div class="feedback">
                     <form id="myform" name="myform" class="form-horizontal" method="post" action="__ROOT__/?m=Feedback&a=check&g=c" onSubmit="return CheckJob()">

                        <div class="form-group">
                          <label for="title"class="col-sm-3 control-label">留言标题：</label>
                          <div class="col-sm-6">
                            <input type="text" name="title" class="form-control" id="title" placeholder="必填">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-3 control-label">您的姓名：</label>
                          <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" id="username" placeholder="必填">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tel" class="col-sm-3 control-label">联系电话：</label>
                          <div class="col-sm-6">
                            <input type="text" name="tel" class="form-control" id="tel" placeholder="必填">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail" class="col-sm-3 control-label">电子邮箱：</label>
                          <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" id="inputEmail">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="add" class="col-sm-3 control-label">联系地址：</label>
                          <div class="col-sm-6">
                            <input type="text" name="add" class="form-control" id="add">
                          </div>
                        </div>  
                        
                        <div class="form-group">
                          <label for="contents" class="col-sm-3 control-label">留言内容：</label>
                          <div class="col-sm-6">
                            <textarea name="contents" class="form-control" rows="3"></textarea>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="code" class="col-xs-12 col-sm-3 control-label">验证码：</label>
                          <div class="col-xs-7 col-sm-2"><input type="text" name="code" class="form-control" id="code" placeholder="验证码"></div>
                          <div class="col-xs-2 col-sm-1"><img class="codeimg" src="<?php echo U('Common/verify');?>" onclick='this.src=this.src+"?"+Math.random()'/></div>
                        </div>

                        <div class="form-group" style="margin-top:30px;">
                          <div class="col-sm-offset-3 col-sm-10">
                            <button type="submit" name="button" value="Send" class="btn btn-danger page-btn">提交留言</button>&nbsp;
                            <button type="reset" name="reset" class="btn btn-default grey-btn">重新填写</button>
                          </div>
                        </div>
                        
                      </form>
                    </div>
                           
                  </div>
            </div>

            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="left_nav" id="categories">
                  <h2 class="left_h">栏目导航</h2>
                  <?php echo W('Left',array('id'=>1,'type'=>'product','lang'=>'c'));?>
                </div>

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