<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/common.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改下载</title>
	<script type="text/javascript">var baiduPath="__PUBLIC__/";</script>
	<link rel="stylesheet" href="<?php echo ($adminName); ?>/kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="<?php echo ($adminName); ?>/kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo ($adminName); ?>/kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="contents"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});

		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="econtents"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
<DIV class="BodyRight">
<DIV class="PageContent">
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD>
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>

          <TD width="85" align="center" class="Move" id="setting1">
            <A onClick="javascript:settingselect('1')" href="javascript:void(0);">中文信息</A>
          </TD>
          <TD width="5" align="center"><IMG src="../Public/images/tiao.gif"></TD>

          <TD width="85" align="center" class="Out" id="setting2">
            <A onClick="javascript:settingselect('2')" href="javascript:void(0);">英文信息</A>
          </TD>
          <TD align="left" class="LineRight" style="padding-left: 10px;"></TD>
        </TR>

      </TBODY>
    </TABLE>
  </TD>
</TR>
  <TR>
    <TD class="LineRightBlue">
      <TABLE width="95%" style="margin-left: 20px;" border="0" cellspacing="0" 
      cellpadding="0">
        <TBODY>
        <TR>
          <TD width="88%" height="24">下载管理 &gt; 修改下载</TD>
          <TD width="12%" height="24" align="right"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></DIV>

<form action="<?php echo U('updatedown');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">

<DIV id="settingBox1">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="10%">下载名称：</td>
    <td width="90%" height="35"><input name="name" type="text" value="<?php echo ($down["name"]); ?>" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>新闻分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $down["pid"]): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" value="<?php echo ($down["sort"]); ?>" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($down["url"]); ?>" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td width="9%">SEO标题：</td>
    <td width="91%" height="35"><input name="title" type="text" value="<?php echo ($down["title"]); ?>" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" value="<?php echo ($down["keywords"]); ?>"  class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($down["description"]); ?></textarea>
    </td>
  </tr>
  
  <tr>
    <td>上传文件：</td>
    <td height="35">
    <?php if(empty($down["filename"])): ?><input type='file' name='filename'>
    <input type="hidden" name="num" value="1">
    <?php else: ?>
      <p style="padding:4px 0;">
     <?php echo ($down["filename"]); ?>&nbsp;&nbsp;<a href="<?php echo U('delfile',array('name'=>$down['filename'],'id'=>$down['id']));?>" class='del'>删除该文件</a>
      </p><?php endif; ?> 
    </td>
  </tr>
  
  <tr>
    <td>下载详细：</td>
    <td>
    <textarea name="contents" style="width:680px; height:320px; margin:8px 0;visibility:hidden;"><?php echo ($down["contents"]); ?></textarea>
    </td>
  </tr>
</table>
</DIV>
</DIV>

<DIV class="close" id="settingBox2">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td style="color:blue;" width="10%">下载名称 (英文)：</td>
    <td width="90%" height="35"><input name="ename" value="<?php echo ($down["ename"]); ?>" type="text" class="FormSmall" style="width: 320px;"> 
  <span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">SEO标题 (英文)：</td>
    <td height="35"><input name="etitle" type="text" value="<?php echo ($down["etitle"]); ?>" class="FormSmall" style="width: 320px;"> 
  <span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td style="color:blue;">SEO关键字 (英文)：</td>
    <td height="35"><input name="ekeywords" type="text" value="<?php echo ($down["ekeywords"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td style="color:blue;">SEO描述 (英文)：</td>
    <td height="110"><textarea name="edescription" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($down["edescription"]); ?></textarea>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">详细内容 (英文)：</td>
    <td>
    <textarea name="econtents" style="width:680px; height:320px; margin:8px 0;visibility:hidden;"><?php echo ($down["econtents"]); ?></textarea>
    </td>
  </tr>
</table>
</DIV>
</DIV>

<div style="float:left; margin:-10px 0px 20px 135px;">
    <input type="hidden" name="id" value="<?php echo ($down["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">&nbsp;&nbsp;
</div>

</form>

<SCRIPT type="text/javascript">

function settingselect(id){
  document.getElementById('settingBox1').className="close";
  document.getElementById('settingBox2').className="close";
  document.getElementById('setting1').className="Out";
  document.getElementById('setting2').className="Out";
  
  document.getElementById('setting'+id).className="Move";
  document.getElementById('settingBox'+id).className="";
}

</SCRIPT>
</body>
</html>