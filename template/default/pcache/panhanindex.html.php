<?php _mpinfo(array("ename" => "header_banner","tclass" => "farchives","disabled" => "0","limits" => "1","casource" => "4","orderby" => "vieworder_asc","length" => "10",));?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$mcharset?>">
<meta name="keywords" content="<?=$cmskeyword?>-<?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
" />
<meta name="Description" content="<?=$cmsdescription?>-<?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
" />
<TITLE><?=$cmstitle?> - <?=$cmsname?> - <?=$hostname?>-<?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
</TITLE>
<link rel="stylesheet" type="text/css" href="<?=$tplurl?>css/common.css" />
<link rel="stylesheet" type="text/css" href="<?=$tplurl?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?=$tplurl?>css/17_header.css" />
<link rel="stylesheet" type="text/css" href="<?=$tplurl?>css/index.css" />
<script type="text/javascript">var cmsUrl = "<?=$cms_abs?>";</script>
<script src="<?=$tplurl?>js/common.js" type="text/javascript" language="javascript"></script>
<script src="<?=$tplurl?>js/ajax.js" type="text/javascript" language="javascript"></script>
<script src="<?=$tplurl?>js/commu.js" type="text/javascript" language="javascript"></script>
<script src="<?=$tplurl?>js/jquery-1.7.1.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
function AddFavorite(sURL, sTitle) {
    try {
        window.external.addFavorite(sURL, sTitle);
    } catch (e) {
        try {
            window.sidebar.addPanel(sTitle, sURL, "");
        } catch (e) {
            alert("�����ղ�ʧ�ܣ���ʹ��Ctrl+D��������");
        }
    }
}
//��Ϊ��ҳ <a onclick="SetHome(this,window.location)">��Ϊ��ҳ</a>
function SetHome(obj,vrl){
        try {
        	obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
        } catch(e){
        	if(window.netscape) {
            	try {
                	netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            	} catch (e) {
                	alert("�˲�����������ܾ���\n�����������ַ�����롰about:config�����س�\nȻ�� [signed.applets.codebase_principal_support]��ֵ����Ϊ'true',˫�����ɡ�");
            	}
            	var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
            	prefs.setCharPref('browser.startup.homepage',vrl);
            }
        }
}
</script>
<style type="text/css">
.search .but {float: left;margin: 5px 0 0 0;border: 0;width: 51px;height: 24px;line-height: 24px;font-size: 14px;color: #fff;background-position: 0 -19px;cursor: pointer;}
.headBanner {
	float : left;
}
</style>
</head>
<body>
<!-- ���� begin -->
<div id="top" style="margin-top:0px;">
<div class="left orangea"><script language="javascript"  src="<?=$cms_abs?>login.php?mode=js&sid=<?=$sid?>"></script></div>
<div class="right">��<a href="javascript:void(0);" onclick="SetHome(this,window.location)" style="cursor:hand">��Ϊ��ҳ</a>����<a href="javascript:void(0);" onClick="AddFavorite(window.location,document.title)">�ղر�վ</a>��</div>
</div>
<!-- ���� begin -->
<div id="head">
<div class="left"><a href="<?=$cms_abs?>" ><img src="<?=$cms_abs?><?=$cmslogo?>" /></a></div>
<div class="right" style="width:730px;">
<div class="r2" style="padding-right:5px;float:left;margin:5px 0;">
	<div class="headBanner">
		<?php $_header_banner=_ptag_parse(array("ename" => "header_banner","tclass" => "farchives","disabled" => "0","limits" => "1","casource" => "4","orderby" => "vieworder_asc","length" => "10",));foreach($_header_banner as $v){_aenter($v);?>
	    <a target="_blank" href="<?=$v['advurl']?>"><img src="<?=$v['advimg']?>" title="<?=$v['subject']?>" width="515px" height="66px" /></a><?php _aquit();} unset($_header_banner,$v);?>

	</div>
	<div class="repeat_bg1 headNews" style="float:right; margin-left:10px;"> 
        <ul> 
         	<?php $_header_textad3=_ptag_parse(array("ename" => "header_textad3","tclass" => "farchives","disabled" => "0","limits" => "3","casource" => "38","orderby" => "vieworder_asc","validperiod" => "1","length" => "10",));foreach($_header_textad3 as $v){_aenter($v);?>
	                    <li><a href="<?=$v['advurl']?>" <? if($v['sn_row']==1 || $v['sn_row']==3) { ?>style="color:#FF0000"<? } ?> target="_blank" title="<?=$v['alttext']?>"><?=$v['subject']?></a></li> <?php _aquit();} unset($_header_textad3,$v);?>
                                  
        </ul> 
    </div>
</div>
</div>
</div>
<!-- ���� begin -->
<script type="text/javascript">
function showmenu(id){
	for(var i=1; i<=6; i++){
		$('menu_'+i).style.display='none';
	}
	$('menu_'+id).style.display='block';
}
function request(paras){ 
	var url = location.href;  
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&");  
	var paraObj = {}  
	for (i=0; j=paraString[i]; i++){  
		paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length);  
	}  
	var returnValue = paraObj[paras.toLowerCase()];  
	if(typeof(returnValue)=="undefined"){  
		return "";  
	}else{  
		return returnValue; 
	}
}
$(function(){
	var caid = request("caid");
	var ccid7 = request("ccid7");
	var ccid3 = request("ccid3");
	var ind;
	if(caid==1 || caid==2 || caid==4 || caid==5 || caid==6 || caid==7 || caid==17){
		ind=0;
	}
	if(caid==14 || caid==3 || caid==15 || caid==16 || caid==18 || caid==19  || caid==20) {
		ind=1;
	}
	if(caid==23) ind = 3;

	if (caid == 22) ind = 0;
	if (ccid7 == 38) ind = 0;
	
	if (ind == undefined) ind = 0;
	
	$('.tagdhnew_01 ul li').eq(ind).addClass('selected').siblings().removeClass('selected');
	$('.tagdhnew_02 .center > div').eq(ind).show().siblings().hide();
	if(ind==3 || ind==5 || ind==4) $('.tagdhnew_02').css({'height':'0','overflow':'hidden'});
	if (ind==0) {
		$('.tagdhnew_02').addClass('tagdhnew_03');
		$('.tagdhnew_01').addClass('tagdhnew_04');
		$('.tagdhnew_02').removeClass('tagdhnew_02');
		$('.tagdhnew_01').removeClass('tagdhnew_01');
	}
});
</script>
<!--  -->
<div id="menu">
	<div class="tagdhnew_01">
		<div class="left">
			<ul>
				<li ><a title="��Ƶ" href="<?php $v=_ctag_parse(array("ename" => "xs_menunode","tclass" => "cnode","listby" => "ca","casource" => "1",));if(!empty($v)){_aenter($v);?>
<?=$v['indexurl']?><?php _aquit();} unset($v);?>
">��Ƶ</a></li>
				<li ><a title="ŮƵ" href="<?php $v=_ctag_parse(array("ename" => "xs_nvpinnode","tclass" => "cnode","disabled" => "0","listby" => "ca","casource" => "14",));if(!empty($v)){_aenter($v);?>
		<?=$v['indexurl']?><?php _aquit();} unset($v);?>
">ŮƵ</a></li>
				<li><a href="<?=$cms_abs?>adminm.php" target="_blank" title="��Ա����">��Ա����</a></li>
				<li ><a title="���߸���" href="/archive.php?aid=174&caid=23">���߸���</a></li>
				<li ><a title="��Ϊ����" href="/adminm.php?action=utrans" target="_blank">��Ϊ����</a></li>
				<!-- 
				<li ><a title="����ѵ��Ӫ" href="#">����ѵ��Ӫ</a></li>
				<li ><a title="����ר��" href="#">����ר��</a></li>
				<li ><a title="�ܱ���־" href="#">�ܱ���־</a></li>
				<li ><a title="������̳" href="#">������̳</a></li>
				 -->
				<li ><a title="��ֵ" target="_blank" href="/adminm.php?action=payonline">��ֵ</a></li>
			</ul>
		</div>
	</div>
	<div class="tagdhnew_02">
		<div class="center">
			<div id="menu_1"><a href="/index.php?caid=22" title="���">���</a><a title="���а�" href="<?php $v=_ctag_parse(array("ename" => "pai_index","tclass" => "cnode","disabled" => "0","listby" => "ca","casource" => "1","cosource7" => "38","urlmode" => "caid",));if(!empty($v)){_aenter($v);?>
	            <?=$v['indexurl']?><?php _aquit();} unset($v);?>
">���а�</a><?php $v=_ctag_parse(array("ename" => "outxsnode","tclass" => "cnode","listby" => "ca","casource" => "1",));if(!empty($v)){_aenter($v);?>
<?php $_xs_sen_list=_ctag_parse(array("ename" => "xs_sen_list","tclass" => "catalogs","disabled" => "0","limits" => "100","listby" => "ca","casource" => "2","urlmode" => "caid",));foreach($_xs_sen_list as $v){_aenter($v);?>
<a href="<?=$v['indexurl']?>"><?=$v['title']?></a><?php _aquit();} unset($_xs_sen_list,$v);?>
<?php _aquit();} unset($v);?>
</div>
			<div id="menu_6"><?php $v=_ctag_parse(array("ename" => "outnpxsnode","tclass" => "cnode","disabled" => "0","listby" => "ca","casource" => "14",));if(!empty($v)){_aenter($v);?>
<?php $_xs_sen_list=_ctag_parse(array("ename" => "xs_sen_list","tclass" => "catalogs","disabled" => "0","limits" => "100","listby" => "ca","casource" => "2","urlmode" => "caid",));foreach($_xs_sen_list as $v){_aenter($v);?>
<a href="<?=$v['indexurl']?>"><?=$v['title']?></a><?php _aquit();} unset($_xs_sen_list,$v);?>
<?php _aquit();} unset($v);?>
</div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

<div class="repeat_bg searchBox"> 
    <div class="searchBox_inner"> 
    	<div style="float:left;">
    	 <ul stat_flag="st_t-gg:ͷ������" class="ico1 listTeseXs" style="width: 230px;"> 
        	<?php $_header_notice=_ptag_parse(array("ename" => "header_notice","tclass" => "farchives","disabled" => "0","limits" => "1","casource" => "3","orderby" => "createdate_desc","validperiod" => "1","length" => "10",));foreach($_header_notice as $v){_aenter($v);?>
<li><a style="color:#F00" href="<?=$v['arcurl']?>" target="_blank"><?=$v['subject']?></a></li> <?php _aquit();} unset($_header_notice,$v);?>

      	 </ul> 
   	 	</div>
     
      <div style="float:right;">
      	<p stat_flag="st_ss-ci:�����ȴ�" class="ico1 search_rc" style="width:auto;">�����ȴʣ�<?php $_search_reci_list=_ctag_parse(array("ename" => "search_reci_list","tclass" => "farchives","limits" => "3","casource" => "56","orderby" => "vieworder_asc","validperiod" => "1",));foreach($_search_reci_list as $v){_aenter($v);?>
	<b><a target="_blank" href="<?=$v['rc_link']?>" <? if($v['rc_tuchu']) { ?>style="color:#FF0000;"<? } ?>><?=$v['subject']?></a></b><?php _aquit();} unset($_search_reci_list,$v);?>
</p> 
      	<div class="search" style="float:right;"> 
        	<form name="form" id="searchform" action="<?=$cmsurl?>search.php?sid=<?=$sid?>" method="get" target="_blank">                                                     
                <span>
                <input style="width:162px;" id="queryString" name="searchword" title="����ͼ��" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate">                            
                </span>                            
                <input type="submit" value="����" class="but">                            
            </form>
      	</div> 
      </div>
      
    </div> 
</div>
<div class="h3">
<span class="reda">��ǰλ��&gt;&gt;</span>  <a href="<?=$cms_abs?>">��ҳ</a>&nbsp;>&nbsp;<?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
���а�</div>
</div>
</div>
<style type="text/css">
#lm2{width:306px;float:left;height:265px;margin-right:3px;margin-left:3px;}
#menu #menu_1{display:none;}
#menu #menu_3{display:block;}
</style>
<script type="text/javascript">
function changecla(id){
    var arcid1 = id.slice(-2,-1);
    var arcid2 = id.slice(-2);
    for(var i=1; i<=3; i++){
        $("font_" + arcid1 + i).className = "";
        $("dd_" + arcid1 + i).style.display = "none";
    }
    $("font_" + arcid2).className = "act";
    $("dd_" + arcid2).style.display = "";
    
}
</script>
<style type="text/css">
.boyRank .rankRightList {border-color: #CECECE;}
.rankRightList {width: 247px; border: 1px solid #CECECE;margin-left: 10px;margin-bottom:5px;float: left;position: relative;display: inline;overflow: hidden;}
.boyRank .rankRightList h3 {background: #f0f0f0;}
.rankRightList h3 {height: 29px;line-height: 29px;padding-left: 20px;font-size: 14px;color: #333;font-weight: bold;background: url("<?=$tplurl?>images/bg_lm.jpg") repeat-x scroll 0 0 transparent;color: #CC3300;font-weight: bold;height: 25px;line-height: 25px;overflow: hidden;padding-left: 8px;}
.rankRightNr1 ul {height: 270px;padding: 5px;}
.rankRightNr1 li {height: 26px;color: #333;line-height: 26px;font-size: 12px;border-bottom: 1px dotted #ccc;position: relative;}
.rankRightNr1 .bookid {display: inline-block;font-size: 13px;color: #333;width: 22px;text-align: right;}
.rankRightNr1 .amout {height: 13px;color: #666;position: absolute;right: 6px;top: 2px;width: 48px;text-align: right;}
.rankRightNr1 .bookname {height: 13px;left: 22px;color: #1A53FF;word-wrap: break-word;}
.rankRightNr1 a:link {color: #1952FF;}
.rankRightNr1 a:visited {color: #551A8B;}
.rankRightNr1 a {color: #1952FF;text-decoration: none;}
.rankRightList a:HOVER { color: #ff0000;}
</style>
<div id="main">

		<div style="width:150px;float:left;border: 1px solid #ccc;padding:5px;">
	
	
		<h3>С˵���а�</h3>
		<ul>
			<li><a href="/index.php?caid=24&action=dianji">�����&gt;&gt;</a></li>
			<li><a href="/index.php?caid=24&action=shoucang">�ղذ�&gt;&gt;</a></li>
			<li><a href="/index.php?caid=24&action=pingjia">���۰�&gt;&gt;</a></li>
			<li><a href="/index.php?caid=24&action=tuijian">�Ƽ���&gt;&gt;</a></li>
			<li><a href="/index.php?caid=24&action=dingyue">���İ�&gt;&gt;</a></li>
			<li><a href="/index.php?caid=24&action=dashang">���Ͱ�&gt;&gt;</a></li>
			<li><a href="/index.php?caid=24&action=zuixin">����С˵&gt;&gt;</a></li>
			
		</ul>
	 
		
		
		<h3><a href="/index.php?caid=1&ccid7=38">��ƵС˵���а�</a></h3>
		<ul>
			<li><a href="/index.php?caid=2&ccid7=38">���С�����&gt;&gt;</a></li>
			<li><a href="/index.php?caid=4&ccid7=38">���á����&gt;&gt;</a></li>
			<li><a href="/index.php?caid=5&ccid7=38">����������&gt;&gt;</a></li>
			<li><a href="/index.php?caid=6&ccid7=38">��ʷ������&gt;&gt;</a></li>
			<li><a href="/index.php?caid=7&ccid7=38">���Ρ�����&gt;&gt;</a></li>
			<li><a href="/index.php?caid=17&ccid7=38">�ƻá�����&gt;&gt;</a></li>
		</ul>
		
		<h3><a href="/index.php?caid=14&ccid7=38">ŮƵС˵���а�</a></h3>
		<ul>
			<li><a href="/index.php?caid=3&ccid7=38">���С�����&gt;&gt;</a></li>
			<li><a href="/index.php?caid=15&ccid7=38">��Խ������&gt;&gt;</a></li>
			<li><a href="/index.php?caid=16&ccid7=38">�ഺ��У԰&gt;&gt;</a></li>
			<li><a href="/index.php?caid=18&ccid7=38">��װ������&gt;&gt;</a></li>
			<li><a href="/index.php?caid=19&ccid7=38">���á�Ůǿ&gt;&gt;</a></li>
			<li><a href="/index.php?caid=20&ccid7=38">ͬ�ˡ�����&gt;&gt;</a></li>
		</ul>
		
		<!-- 
		<h3>�������а�</h3>
		<ul>
			<li><a href="">���߲Ƹ���&gt;&gt;</a></li>
			<li><a href="#">���߸��°�&gt;&gt;</a></li>
			<li><a href="#">���߷�˿��&gt;&gt;</a></li>
		</ul>
		
		<h3>�������а�</h3>
		<ul>
			<li><a href="#">vip���Ѱ�&gt;&gt;</a></li>
			<li><a href="#">���ߴ��Ͱ�&gt;&gt;</a></li>
			<li><a href="#">�����Ƽ���&gt;&gt;</a></li>
			<li><a href="#">�������۰�&gt;&gt;</a></li>
		</ul>	
		 -->
		
	</div>

	<div style="width:780px;float:right;">
		<div class="rankRightList">
		    <h3><?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
�����</h3>
		    <div class="rankRightNr1">
		    	<ul>
		    		<?php $_paihang_dianjibang=_ctag_parse(array("ename" => "paihang_dianjibang","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","chsource" => "2","chids" => "4","orderby" => "clicks_desc","closed" => "-1","abover" => "-1",));foreach($_paihang_dianjibang as $v){_aenter($v);?>
	    <li>
    <span class="bookid"><?=$v['sn_row']?>.</span>
    <span class="bookname">��<a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a>��</span>
    <span class="amout" title="�����"><?=$v['clicks']?></span>
</li><?php _aquit();} unset($_paihang_dianjibang,$v);?>

				</ul>
		    </div>
	    </div>
	    
	    <div class="rankRightList">
		    <h3><?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
�Ƽ���</h3>
		    <div class="rankRightNr1">
		    	<ul>
		    		<?php $_paihang_tuijianbang=_ctag_parse(array("ename" => "paihang_tuijianbang","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","chsource" => "2","chids" => "4","orderby" => "praises_desc","closed" => "-1","abover" => "-1",));foreach($_paihang_tuijianbang as $v){_aenter($v);?>
	        <li>
    <span class="bookid"><?=$v['sn_row']?>.</span>
    <span class="bookname">��<a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a>��</span>
    <span class="amout" title="�Ƽ���"><?=$v['praises']?></span>
</li><?php _aquit();} unset($_paihang_tuijianbang,$v);?>

				</ul>
		    </div>
	    </div>
	    
	    <div class="rankRightList">
		    <h3><?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
�ղذ�</h3>
		    <div class="rankRightNr1">
		    	<ul>
		    		 <?php $_paihang_shoucangbang=_ctag_parse(array("ename" => "paihang_shoucangbang","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","chsource" => "2","chids" => "4","orderby" => "favorites_desc","closed" => "-1","abover" => "-1",));foreach($_paihang_shoucangbang as $v){_aenter($v);?>
	            <li>
    <span class="bookid"><?=$v['sn_row']?>.</span>
    <span class="bookname">��<a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a>��</span>
    <span class="amout" title="�ղ���"><?=$v['favorites']?></span>
</li><?php _aquit();} unset($_paihang_shoucangbang,$v);?>

				</ul>
		    </div>
	    </div>
	    
	    <div class="rankRightList">
		    <h3><?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
���۰�</h3>
		    <div class="rankRightNr1">
		    	<ul>
		    		<?php $_paihang_pinlunbang=_ctag_parse(array("ename" => "paihang_pinlunbang","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","chsource" => "2","chids" => "4","orderby" => "comments_desc","closed" => "-1","abover" => "-1",));foreach($_paihang_pinlunbang as $v){_aenter($v);?>
	                <li>
    <span class="bookid"><?=$v['sn_row']?>.</span>
    <span class="bookname">��<a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a>��</span>
    <span class="amout" title="������"><?=$v['comments']?></span>
</li><?php _aquit();} unset($_paihang_pinlunbang,$v);?>

				</ul>
		    </div>
	    </div>
	    
	    <div class="rankRightList">
		    <h3><?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
���Ͱ�</h3>
		    <div class="rankRightNr1">
		    	<ul>
		    		<?php $_paihang_dashangbang=_ctag_parse(array("ename" => "paihang_dashangbang","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","chsource" => "2","chids" => "4","orderby" => "orders_desc","closed" => "-1","abover" => "-1",));foreach($_paihang_dashangbang as $v){_aenter($v);?>
	                    <li>
    <span class="bookid"><?=$v['sn_row']?>.</span>
    <span class="bookname">��<a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a>��</span>
    <span class="amout"><?=$v['orders']?></span>
</li><?php _aquit();} unset($_paihang_dashangbang,$v);?>

				</ul>
		    </div>
	    </div>
	    
	    <div class="rankRightList">
		    <h3><?php $v=_ctag_parse(array("ename" => "list_tit","tclass" => "cnmod",));if(!empty($v)){_aenter($v);?>
<?=$v['title']?><?php _aquit();} unset($v);?>
�����</h3>
		    <div class="rankRightNr1">
		    	<ul>
		    		<?php $_paihang_xinshubang=_ctag_parse(array("ename" => "paihang_xinshubang","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","chsource" => "2","chids" => "4","orderby" => "createdate_desc","closed" => "-1","abover" => "-1",));foreach($_paihang_xinshubang as $v){_aenter($v);?>
	                        <li>
    <span class="bookid"><?=$v['sn_row']?>.</span>
    <span class="bookname">��<a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a>��</span>
    <span class="amout" title="�����"></span>
</li><?php _aquit();} unset($_paihang_xinshubang,$v);?>

				</ul>
		    </div>
	    </div>
    
    
    
	</div>
<script type="text/javascript">
for(var i=1; i<=100; i++){
    if($("font_" + i + 1)){
        $("font_" + i + 1).className = "act";
        $("dd_" + i + 1).style.display = "";
    }
    else{break;}
}
</script>
</div>
<div class="blank3"></div>
<div id="foot">
<span>
<?php $_all_dibu=_ctag_parse(array("ename" => "all_dibu","tclass" => "farchives","limits" => "100","cols" => "1","casource" => "11","orderby" => "vieworder_asc",));foreach($_all_dibu as $v){_aenter($v);?>
<a href="<?=$v['arcurl']?>" target="_blank"><?=$v['subject']?></a>��|��<?php _aquit();} unset($_all_dibu,$v);?>

<a href="/adminm.php?action=archives&nmuid=2">����Ͷ��</a>
��|��
<a href="/adminm.php?action=payonline">֧������</a>
��|��
<a href="<?=$cms_abs?>register.php" >��Աע��</a>
</span>
<p id="copyright"><?=$copyright?>  Powered by <a href="<?=$hosturl?>" target="_blank"><?=$hostname?></a> v2013 &copy; 2013-2015 Inc.</a><br><?=$cms_icpno?> </p>
</div>
</body>
</html>