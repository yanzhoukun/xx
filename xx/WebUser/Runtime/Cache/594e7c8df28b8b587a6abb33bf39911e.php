<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>TAGS标签管理</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该标签？');
		} );
	});
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
        <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">快捷操作：【<a href="<?php echo U('Tags/add');?>">添加TAGS标签</a>】
          &nbsp;&nbsp;&nbsp;
          <select  onchange="location.href=this.value;">
            <option value="<?php echo U('Tags/index');?>" selected>－按栏目索引－</option>
            <option value="<?php echo U('Tags/index',array('type'=>'Product'));?>" <?php if(($_GET['type']) == "Product"): ?>selected="selected"<?php endif; ?>>产品栏目</option>
            <option value="<?php echo U('Tags/index',array('type'=>'New'));?>" <?php if(($_GET['type']) == "New"): ?>selected="selected"<?php endif; ?>>新闻栏目</option>
            <option value="<?php echo U('Tags/index',array('type'=>'Photo'));?>" <?php if(($_GET['type']) == "Photo"): ?>selected="selected"<?php endif; ?>>图片栏目</option>
            <option value="<?php echo U('Tags/index',array('type'=>'Download'));?>" <?php if(($_GET['type']) == "Download"): ?>selected="selected"<?php endif; ?>>下载栏目</option>
          </select >
        </td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<form name="theForm" method="post" action="<?php echo U('uporder');?>">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">排序</li>
      <li class="li_40">标签名称</li>
      <li class="li_20">所属类目</li>
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px;">
          <li class="li_10">
            <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>
          <li class="li_40"><?php echo ($vo["name"]); ?> (<?php echo ($vo["ename"]); ?>)</li>
          <li class="li_20">
            <?php switch($vo["type"]): case "Product": ?>[ 产品 ]<?php break;?>
              <?php case "New": ?>[ 新闻 ]<?php break;?>
              <?php case "Photo": ?>[ 图片 ]<?php break;?>
              <?php case "Download": ?>[ 下载 ]<?php break;?>
              <?php default: endswitch;?>
          </li>
          <li class="li_20">
            <a href="<?php echo U('mod',array('id'=>$vo['id']));?>" >修改</a> | 
            <a href="<?php echo U('del',array('id'=>$vo['id']));?>" class='del'>删除</a>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            <input type="submit" value="更新排序" class="bginput">
            </td>
            <td width="92%" align="center">
            <div class="page"><?php echo ($show); ?></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>