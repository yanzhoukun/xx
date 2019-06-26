<?php if (!defined('THINK_PATH')) exit(); if($new): ?><ul class="news_index" data-move-y="200px">
    <?php if(is_array($new)): $i = 0; $__LIST__ = array_slice($new,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	  <span>
	    <strong><?php echo (date('d',$vo["time"])); ?></strong>
	    <i><?php echo (date('Y-m',$vo["time"])); ?></i>
	  </span>
	  <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new','lang'=>'e'));?>" title="<?php echo ($vo["etitle"]); ?>"><?php echo (mb_substr($vo["etitle"],0,72,'utf-8')); ?></a><br>
	  <em><?php echo (mb_substr($vo["edescription"],0,120,'utf-8')); ?></em>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul><?php endif; ?>