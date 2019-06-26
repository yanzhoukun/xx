<?php if (!defined('THINK_PATH')) exit();?>    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a href="<?php echo (C("web_url")); ?>"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" class="logo" alt="<?php echo (C("web_name")); ?>"/></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-nav-c">
            <li><a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>">网站首页</a></li>

            <?php if(is_array($appnav)): foreach($appnav as $key=>$vo): if(isset($vo['two'])): ?><li class="dropdown">
                    <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link'],'lang'=>'c'));?>"><?php echo ($vo["name"]); ?></a>
                    <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link'],'lang'=>'c'));?>" id="app_menudown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-menu-down btn-xs"></span></a>
                      <ul class="dropdown-menu nav_small" role="menu">
                      <?php if(is_array($vo["two"])): foreach($vo["two"] as $key=>$svo): ?><li><a href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link'],'lang'=>'c'));?>"><?php echo ($svo["name"]); ?></a></li><?php endforeach; endif; ?>

                      </ul>
                  </li>
              <?php else: ?>
                   <li><a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link'],'lang'=>'c'));?>"><?php echo ($vo["name"]); ?></a></li><?php endif; endforeach; endif; ?>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>