<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/common.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改产品</title>
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
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('您确定要删除？');
		} );
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
          <TD width="88%" height="24">产品管理 &gt; 修改产品</TD>
          <TD width="12%" height="24" align="right"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></DIV>

<form action="<?php echo U('updatepro');?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
  
<DIV id="settingBox1">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">产品名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" value="<?php echo ($product["name"]); ?>" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>产品分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $product["pid"]): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" class="FormSmall" value="<?php echo ($product["sort"]); ?>" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>
  
  <tr>
    <td>首页推荐：</td>
    <td height="35">
      <select name="featured" style="height:28px;">
          <option value="1" <?php if(($product["featured"]) == "1"): ?>selected="selected"<?php endif; ?>>是</option>
          <option value="0" <?php if(($product["featured"]) == "0"): ?>selected="selected"<?php endif; ?>>否</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>自定义属性：</td>
    <td height="35">
    属性1：<input name="property1" type="text" class="FormSmall" value="<?php echo ($product["property1"]); ?>" style="width:150px;font-size:12px;">&nbsp;
    属性2：<input name="property2" type="text" class="FormSmall" value="<?php echo ($product["property2"]); ?>" style="width:150px;font-size:12px;">&nbsp;
    属性3：<input name="property3" type="text" class="FormSmall" value="<?php echo ($product["property3"]); ?>" style="width:150px;font-size:12px;">&nbsp;
    属性4：<input name="property4" type="text" class="FormSmall" value="<?php echo ($product["property4"]); ?>" style="width:150px;font-size:12px;">
    </td>
  </tr>
  
  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($product["url"]); ?>" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td width="10%">SEO标题：</td>
    <td width="90%" height="35"><input name="title" type="text" value="<?php echo ($product["title"]); ?>" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" class="FormSmall" value="<?php echo ($product["keywords"]); ?>" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($product["description"]); ?></textarea>
    </td>
  </tr>
  
  <tr>
    <td>缩略图：</td>
    <td height="35">
    <?php if(empty($product["thumb"])): ?><input type='file' name='thumb'>
    <input type="hidden" name="tnum" value="1">
    <?php else: ?>
      <p style="padding:4px 0;"><img src="__ROOT__/Uploads/<?php echo ($product["thumb"]); ?>" width="60" height="60"/>
      <a href="<?php echo U('delphoto',array('name'=>$product['thumb'],'id'=>$product['id'],'field'=>'thumb'));?>" class='del'>删除该图片</a>
      </p><?php endif; ?> 
    </td>
  </tr>
  
  <tr>
    <td>追加主图数量：</td>
    <td height="35">
	<script language="JavaScript" type="text/javascript">
    function setUrlNum(){
    str='';
    
        if(!document.myform.Num.value){
            document.myform.Num.value=1;
        }
        for(i=1;i<=document.myform.Num.value;i++){
            str+= '<p style="margin:6px 2px; font-size:12px;">追加主图'+i+'：<input name="photo[]" type="file" id="photo'+i+'"></p>';
        }
            document.getElementById('UpID').innerHTML=str;
    }
    </script>
    <input name="Num" class="FormSmall" style="width: 50px;"/>
    <input onClick="setUrlNum();" type="button" value="设定" class="bginput" style="width:45px; height:28px;"/> <a title='输入数字，点击[设定]按钮，可设置图片数量'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a>
    </td>
  </tr>
  
  <tr>
    <td>产品主图：</td>
    <td height="35">
      <?php if(!empty($photo)): if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p style="padding:1px;"><img src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" width="60" height="60"/>
            <a href="<?php echo U('delphoto',array('name'=>$photo[$key],'id'=>$product['id'],'field'=>'photo'));?>" class='del'>删除该图片</a>
          </p><?php endforeach; endif; else: echo "" ;endif; ?>
        <div id="UpID"></div>
        <div style="padding:10px 0px 10px 0px;"><a href="<?php echo U('delmain',array('id'=>$product['id']));?>" class='del'>[ 删除全部主图 ]</a></div>
      <?php else: ?>
          <div id="UpID"></div><?php endif; ?>  
     
    </td>
  </tr>
  
  <tr>
    <td>产品内容：</td>
    <td>
    <textarea name="contents" style="width:680px; height:320px; margin:8px 0;visibility:hidden;"><?php echo ($product["contents"]); ?></textarea>
    </td>
  </tr>
</table>
</DIV>
</DIV>

<DIV class="close" id="settingBox2">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="10%" style="color:blue;">产品名称 (英文)：</td>
    <td width="90%" height="35"><input name="ename" type="text" value="<?php echo ($product["ename"]); ?>" class="FormSmall" style="width: 320px;"> 
  <span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">自定义属性 (英文)：</td>
    <td height="35">
    属性1：<input name="eproperty1" type="text" class="FormSmall" value="<?php echo ($product["eproperty1"]); ?>" style="width:150px;font-size:12px;">&nbsp;
    属性2：<input name="eproperty2" type="text" class="FormSmall" value="<?php echo ($product["eproperty2"]); ?>" style="width:150px;font-size:12px;">&nbsp;
    属性3：<input name="eproperty3" type="text" class="FormSmall" value="<?php echo ($product["eproperty3"]); ?>" style="width:150px;font-size:12px;">&nbsp;
    属性4：<input name="eproperty4" type="text" class="FormSmall" value="<?php echo ($product["eproperty4"]); ?>" style="width:150px;font-size:12px;">
    </td>
  </tr>

  <tr>
    <td style="color:blue;">SEO标题 (英文)：</td>
    <td height="35"><input name="etitle" type="text" value="<?php echo ($product["etitle"]); ?>" class="FormSmall" style="width: 320px;"> 
    </td>
  </tr>
  
  <tr>
    <td style="color:blue;">SEO关键字 (英文)：</td>
    <td height="35"><input name="ekeywords" type="text" value="<?php echo ($product["ekeywords"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td style="color:blue;">SEO描述 (英文)：</td>
    <td height="110"><textarea name="edescription" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($product["edescription"]); ?></textarea>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">产品内容 (英文)：</td>
    <td>
    <textarea name="econtents" style="width:680px; height:320px; margin:8px 0;visibility:hidden;"><?php echo ($product["econtents"]); ?></textarea>
    </td>
  </tr>
  </table>
</DIV>
</DIV>

<div style="float:left; margin:-10px 0px 20px 135px;">
    <input type="hidden" name="id" value="<?php echo ($product["id"]); ?>">
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