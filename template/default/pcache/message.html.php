<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$mcharset?>">
<title><?=$cmstitle?> - <?=$cmsname?> - <?=$hostname?></title>
</head>
<script language="javascript">
function Confirms(){
if(window.confirm('�����Ҫ�˳���?')){
window.close();
}else{
;}
}</script>
<style type="text/css">
body{font:12px verdana;text-align:center; margin:0; padding:0;}
a{font-size:12px;}
.wrap{width:400px;border:#ca1f0b 1px solid;background:#FFF; margin:0 auto;margin-top:10%;}
.wrap h1{ text-align:center; color:#FFFFFF; width:100%;  height:24px;line-height:24px; font-size:12px; font-weight:normal; background:#ca1f0b;}
.wrap h2{height:120px;color:#000;font-size:14px;}
.wrap h3{ height:18px;}
</style>
<body>
<div class="wrap">
	<h1>ϵͳ��ʾ</h1>
    <h2><?=$message?></h2>
    <h3><input type="button" value="�رձ�����" onClick="Confirms()"></h3>
</div>
</body>
</html>