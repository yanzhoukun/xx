<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/common.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>添加产品</title>
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
<SCRIPT language=javaScript>
function CheckJob()
{
	var number = document.getElementById('sort').value;
	var reg = /^\d+$/;
	if (!number.match(reg)){
		alert ("排序号必须为数字!");
		document.myform.sort.focus();
		return false;
	}
 }
</SCRIPT>
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
          <TD width="88%" height="24">产品管理 &gt; 添加产品</TD>
          <TD width="12%" height="24" align="right"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></DIV>

<form action="<?php echo U('savepro');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
  
<DIV id="settingBox1">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="10%">产品名称：</td>
    <td width="90%" height="35"><input name="name" type="text" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>产品分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" id="sort" value="0" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必须为数字</span><a title='只可填数字，数字越小排序越靠前。'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td>首页推荐：</td>
    <td height="35">
      <select name="featured" style="height:28px;">
          <option value="1">是</option>
          <option value="0">否</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>自定义属性：</td>
    <td height="35">
    属性1：<input name="property1" type="text" class="FormSmall" style="width:150px;font-size:12px;">&nbsp;
    属性2：<input name="property2" type="text" class="FormSmall" style="width:150px;font-size:12px;">&nbsp;
    属性3：<input name="property3" type="text" class="FormSmall" style="width:150px;font-size:12px;">&nbsp;
    属性4：<input name="property4" type="text" class="FormSmall" style="width:150px;font-size:12px;">
    </td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td width="10%">SEO标题：</td>
    <td width="90%" height="35"><input name="title" type="text" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"></textarea>
    </td>
  </tr>
  
  <tr>
    <td>缩略图：</td>
    <td height="35"><input type='file' name='thumb'></td>
  </tr>
  
  <tr>
    <td>主图数量设置：</td>
    <td height="35">
	<script language="JavaScript" type="text/javascript">
    function setUrlNum(){
    str='';
    
        if(!document.myform.Num.value){
            document.myform.Num.value=1;
        }
        for(i=2;i<=document.myform.Num.value;i++){
            str+= '<p style="margin:6px 2px; font-size:12px;">主图'+i+'：<input name="photo[]" type="file" id="photo'+i+'"></p>';
        }
            document.getElementById('UpID').innerHTML=str;
    }
    </script>
    <input value="1" name="Num" class="FormSmall" style="width: 50px;"/>
    <input onClick="setUrlNum();" type="button" value="设定" class="bginput" style="width:45px; height:28px;"/>
    </td>
  </tr>
  
  <tr>
    <td>产品主图：</td>
    <td height="35">
    <p style="margin:6px 2px; font-size:12px;">主图1：<input type='file'  name='photo[]'></p>
    <div id="UpID"></div>
    </td>
  </tr>
  
  <tr>
    <td>产品内容：</td>
    <td>
    <textarea name="contents" style="width:680px; height:320px; margin:8px 0;visibility:hidden;"></textarea>
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
    <td width="90%" height="35"><input name="ename" type="text" class="FormSmall" style="width: 320px;"> 
  <span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">自定义属性 (英文)：</td>
    <td height="35">
    属性1：<input name="eproperty1" type="text" class="FormSmall" style="width:150px;font-size:12px;">&nbsp;
    属性2：<input name="eproperty2" type="text" class="FormSmall" style="width:150px;font-size:12px;">&nbsp;
    属性3：<input name="eproperty3" type="text" class="FormSmall" style="width:150px;font-size:12px;">&nbsp;
    属性4：<input name="eproperty4" type="text" class="FormSmall" style="width:150px;font-size:12px;">
    </td>
  </tr>

  <tr>
    <td style="color:blue;">SEO标题 (英文)：</td>
    <td height="35"><input name="etitle" type="text" class="FormSmall" style="width: 320px;"> 
    </td>
  </tr>
  
  <tr>
    <td style="color:blue;">SEO关键字 (英文)：</td>
    <td height="35"><input name="ekeywords" type="text" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td style="color:blue;">SEO描述 (英文)：</td>
    <td height="110"><textarea name="edescription" class="FormSmall" style="width: 450px; height: 80px;"></textarea>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">产品内容 (英文)：</td>
    <td>
    <textarea name="econtents" style="width:680px; height:320px; margin:8px 0;visibility:hidden;"></textarea>
    </td>
  </tr>
  </table>
</DIV>
</DIV>

<div style="float:left; margin:-10px 0px 20px 135px;">
    <input type="submit" value="提交" class="bginput">&nbsp;&nbsp;
    <input name="reset" type="reset"  class="bginput" value="重置" />
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