<?php if (!defined('THINK_PATH')) exit(); if(is_array($flash)): $i = 0; $__LIST__ = array_slice($flash,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3 col-mm-6 advantage_col" data-move-y="200px">
      <a href="<?php echo ($vo["elink"]); ?>" target="_blank">
      	<img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" alt="<?php echo ($vo["etitle"]); ?>">
      </a>
      <p><a href="<?php echo ($vo["elink"]); ?>" target="_blank"><?php echo ($vo["etitle"]); ?></a></p>
</div><?php endforeach; endif; else: echo "" ;endif; ?>