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
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}
//设为首页 <a onclick="SetHome(this,window.location)">设为首页</a>
function SetHome(obj,vrl){
        try {
        	obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
        } catch(e){
        	if(window.netscape) {
            	try {
                	netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            	} catch (e) {
                	alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
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
<!-- 顶部 begin -->
<div id="top" style="margin-top:0px;">
<div class="left orangea"><script language="javascript"  src="<?=$cms_abs?>login.php?mode=js&sid=<?=$sid?>"></script></div>
<div class="right">【<a href="javascript:void(0);" onclick="SetHome(this,window.location)" style="cursor:hand">设为首页</a>】【<a href="javascript:void(0);" onClick="AddFavorite(window.location,document.title)">收藏本站</a>】</div>
</div>
<!-- 首体 begin -->
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
<!-- 首体 begin -->
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
				<li ><a title="男频" href="<?php $v=_ctag_parse(array("ename" => "xs_menunode","tclass" => "cnode","listby" => "ca","casource" => "1",));if(!empty($v)){_aenter($v);?>
<?=$v['indexurl']?><?php _aquit();} unset($v);?>
">男频</a></li>
				<li ><a title="女频" href="<?php $v=_ctag_parse(array("ename" => "xs_nvpinnode","tclass" => "cnode","disabled" => "0","listby" => "ca","casource" => "14",));if(!empty($v)){_aenter($v);?>
		<?=$v['indexurl']?><?php _aquit();} unset($v);?>
">女频</a></li>
				<li><a href="<?=$cms_abs?>adminm.php" target="_blank" title="会员中心">会员中心</a></li>
				<li ><a title="作者福利" href="/archive.php?aid=174&caid=23">作者福利</a></li>
				<li ><a title="成为作者" href="/adminm.php?action=utrans" target="_blank">成为作者</a></li>
				<!-- 
				<li ><a title="新人训练营" href="#">新人训练营</a></li>
				<li ><a title="网编专区" href="#">网编专区</a></li>
				<li ><a title="总编日志" href="#">总编日志</a></li>
				<li ><a title="社区论坛" href="#">社区论坛</a></li>
				 -->
				<li ><a title="充值" target="_blank" href="/adminm.php?action=payonline">充值</a></li>
			</ul>
		</div>
	</div>
	<div class="tagdhnew_02">
		<div class="center">
			<div id="menu_1"><a href="/index.php?caid=22" title="书库">书库</a><a title="排行榜" href="<?php $v=_ctag_parse(array("ename" => "pai_index","tclass" => "cnode","disabled" => "0","listby" => "ca","casource" => "1","cosource7" => "38","urlmode" => "caid",));if(!empty($v)){_aenter($v);?>
	            <?=$v['indexurl']?><?php _aquit();} unset($v);?>
">排行榜</a><?php $v=_ctag_parse(array("ename" => "outxsnode","tclass" => "cnode","listby" => "ca","casource" => "1",));if(!empty($v)){_aenter($v);?>
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
    	 <ul stat_flag="st_t-gg:头部公告" class="ico1 listTeseXs" style="width: 230px;"> 
        	<?php $_header_notice=_ptag_parse(array("ename" => "header_notice","tclass" => "farchives","disabled" => "0","limits" => "1","casource" => "3","orderby" => "createdate_desc","validperiod" => "1","length" => "10",));foreach($_header_notice as $v){_aenter($v);?>
<li><a style="color:#F00" href="<?=$v['arcurl']?>" target="_blank"><?=$v['subject']?></a></li> <?php _aquit();} unset($_header_notice,$v);?>

      	 </ul> 
   	 	</div>
     
      <div style="float:right;">
      	<p stat_flag="st_ss-ci:搜索热词" class="ico1 search_rc" style="width:auto;">搜索热词：<?php $_search_reci_list=_ctag_parse(array("ename" => "search_reci_list","tclass" => "farchives","limits" => "3","casource" => "56","orderby" => "vieworder_asc","validperiod" => "1",));foreach($_search_reci_list as $v){_aenter($v);?>
	<b><a target="_blank" href="<?=$v['rc_link']?>" <? if($v['rc_tuchu']) { ?>style="color:#FF0000;"<? } ?>><?=$v['subject']?></a></b><?php _aquit();} unset($_search_reci_list,$v);?>
</p> 
      	<div class="search" style="float:right;"> 
        	<form name="form" id="searchform" action="<?=$cmsurl?>search.php?sid=<?=$sid?>" method="get" target="_blank">                                                     
                <span>
                <input style="width:162px;" id="queryString" name="searchword" title="搜索图书" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate">                            
                </span>                            
                <input type="submit" value="搜索" class="but">                            
            </form>
      	</div> 
      </div>
      
    </div> 
</div>
<div class="blank9"></div>
<?php
//获取书库中总共有多少书
$sql = "SELECT COUNT(aid) as count FROM xs_archives WHERE chid=4";
$result = $db->fetch_one($sql);
$shuCount = $result['count'];

$c = isset($_GET['c']) ? (int)$_GET['c'] : '';
$z = isset($_GET['z']) ? (int)$_GET['z'] : '';
$j = isset($_GET['j']) ? (int)$_GET['j'] : '';
$p = isset($_GET['p']) ? (int)$_GET['p'] : '';
$v = isset($_GET['v']) ? (int)$_GET['v'] : '';

$where = '';
if ($c !== '') {
  $where .= ' AND caid='.$c;
}
if ($j !== '') {
	$where .= ' AND abover='.$j;
}
if ($v !== '') {
	$where .= ' AND  ccid3='.$v;
}
if ($z !== '') {
	
}
$order = '';
if ($p !== '') {
	if ($p == 1) {
		$order = ' ORDER BY praises DESC';
	} else if ($p == 2) {
		$order = ' ORDER BY favorites DESC';
	}
}
if ($order == '') {
	$order = ' ORDER BY createdate DESC';
}

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$pages = ($page -1)*30;

//获取总的搜索数
$sql = "SELECT count(aid) as count FROM xs_archives WHERE chid=4 ".$where.' '.$order;
$count = $db->fetch_one($sql);
$count = $count['count'];

$sql = "SELECT * FROM xs_archives WHERE chid=4 ".$where.' '.$order.' LIMIT '.$pages.', 30';
if ($z !== '') {
	if ($z == 1) {
		$where .= ' AND zishu <= 100000 ';
	} else if ($z == 10) {
		$where .= ' AND zishu >= 100000 AND zishu <= 400000';
	} else if ($z == 40) {
		$where .= ' AND zishu >= 400000 AND zishu <= 800000';
	} else if ($z == 80) {
		$where .= ' AND zishu >= 800000 ';
	}
	if ($p == 0) {
		$order = ' ORDER BY zishu DESC';
	}
	//重新获取总搜索数
	$sql = "SELECT count(aid) as count FROM xs_archives as arc,
			(select b.pid,sum(a.bytenum) as zishu
			from xs_archives as a ,
			(SELECT xs_albums.aid,xs_albums.pid from xs_archives , xs_albums where xs_archives.chid=4 and xs_archives.aid = xs_albums.pid) as b
			WHERE a.aid = b.aid GROUP BY b.pid) as a
			WHERE arc.chid=4
			AND arc.aid=a.pid ".$where.' '.$order;
	$count = $db->fetch_one($sql);
	$count = $count['count'];
	$sql = "SELECT * FROM xs_archives as arc,
			(select b.pid,sum(a.bytenum) as zishu
			from xs_archives as a ,
			(SELECT xs_albums.aid,xs_albums.pid from xs_archives , xs_albums where xs_archives.chid=4 and xs_archives.aid = xs_albums.pid) as b
			WHERE a.aid = b.aid GROUP BY b.pid) as a
			WHERE arc.chid=4
			AND arc.aid=a.pid ".$where.' '.$order.' LIMIT '.$pages.', 30';
}
$query = $db->query($sql);
$result = $db->fetch_all($query);
?>
<div id="main">
<script type="text/javascript" src="<?=$tplurl?>js/search.js"></script>
<style type="text/css">
.s_list{}
.s_list h3{border-bottom:#f0f0f0 3px solid;font-size:13px;height:23px;line-height:23px;}
.s_list ul{}
.s_list li{height:200%;line-height:200%;}
.s_list li cite{float:right;font-style:normal;}
.s_list li .font14{font-weight:normal;}
.shuku {border: 1px solid #FABE7F;}
.shuku .title {border-bottom: 1px solid #FABE7F;background: url("<?=$tplurl?>images/bg_lm.jpg") repeat-x scroll 0 0 transparent;   color: #CC3300;   font-weight: bold;    height: 25px;    line-height: 25px;    overflow: hidden;}
.shuku .fllist-item {line-height: 30px;}
.shuku .shuku_list {	margin:5px;}
.shuku .shuku_list dt {float: left;font-weight: bold;color: #666;}
.shuku .shuku_list dd {color: #f664a2;}
.shuku .shuku_list dd a.fb {color: #f664a2;font-weight: bold;}
.shuku .fllist-item dd a {margin-left: 18px;}
.shuku_table {	//margin:5px;	width: 98%;	border-collapse: collapse;	margin-left:10px;	margin-right:10px;}
.shuku_table .table_head {	background: #f7f7f7;}
.shuku_table tr {	display: table-row;	vertical-align: inherit;	border-color: inherit;	height:32px;}
.shuku_table .bg1 {	background: #fff;}
.shuku_table .bg2 {	background: #f7f7f7;}
</style>
	<div class="shuku">
		<div class="title">&nbsp;&nbsp;经典站书库共有<?php echo $shuCount?>部作品</div>
		<div class="shuku_list">
			<div class="fllist-item">
				<dl>
	            	<dt>作品类别：</dt>
	                <dd class="allzplb">
	                	<a href="javascript:void(0);" onclick="change_caid(0)" id="allcaid0">全部</a>
	                	<a href="javascript:void(0);" onclick="change_caid(2)" id="allcaid2">武侠</a>
	                	<a href="javascript:void(0);" onclick="change_caid(4)" id="allcaid4">玄幻</a>
	                	<a href="javascript:void(0);" onclick="change_caid(5)" id="allcaid5">科幻</a>
	                	<a href="javascript:void(0);" onclick="change_caid(6)" id="allcaid6">历史</a>
	                	<a href="javascript:void(0);" onclick="change_caid(7)" id="allcaid7">悬疑</a>
	                	<a href="javascript:void(0);" onclick="change_caid(17)" id="allcaid17">都市</a>
	                	<a href="javascript:void(0);" onclick="change_caid(3)" id="allcaid3">言情</a>
	                	<a href="javascript:void(0);" onclick="change_caid(15)" id="allcaid15">穿越</a>
	                	<a href="javascript:void(0);" onclick="change_caid(16)" id="allcaid16">女强</a>
	                	<a href="javascript:void(0);" onclick="change_caid(18)" id="allcaid18">精品</a>
	                	<a href="javascript:void(0);" onclick="change_caid(19)" id="allcaid19">家斗</a>
	                	<a href="javascript:void(0);" onclick="change_caid(20)" id="allcaid20">灵异</a>
	                </dd>
	             </dl>
             </div>
             <div class="fllist-item">
             	<dl>
					<dt>作品字数：</dt>                   
                    <dd>
	                	<a href="javascript:void(0);" onclick="change_zishu('')" id="allzishu">全部</a>
	                	<a href="javascript:void(0);" onclick="change_zishu(1)"  id="allzishu1">10万以下</a>
	                	<a href="javascript:void(0);" onclick="change_zishu(10)"  id="allzishu10">10万-40万</a>
	                	<a href="javascript:void(0);" onclick="change_zishu(40)"  id="allzishu40">40-80万</a>
	                	<a href="javascript:void(0);" onclick="change_zishu(80)"  id="allzishu80">80万以上</a>
                    </dd>
                </dl>
            </div>
            <div class="fllist-item">
             	<dl>
					<dt>写作进程：</dt>                   
                    <dd>
	                	<a href="javascript:void(0);" onclick="change_jincheng('')" id="alljincheng">全部</a>
	                	<a href="javascript:void(0);" onclick="change_jincheng(0)" id="alljincheng0">连载</a>
	                	<a href="javascript:void(0);" onclick="change_jincheng(1)" id="alljincheng1">全本</a>
                    </dd>
                </dl>
            </div>
            <div class="fllist-item">
             	<dl>
					<dt>排序方式：</dt>                   
                    <dd>
	                	<a href="javascript:void(0);" onclick="change_paixu('')" id="allpaixu">默认</a>
	                	<a href="javascript:void(0);" onclick="change_paixu(0)" id="allpaixu0">总字数</a>
	                	<a href="javascript:void(0);" onclick="change_paixu(1)" id="allpaixu1">总推荐</a>
	                	<a href="javascript:void(0);" onclick="change_paixu(2)" id="allpaixu2">总收藏</a>
                    </dd>
                </dl>
            </div>
            <div class="fllist-item">
             	<dl>
					<dt>作品状态：</dt>                   
                    <dd>
	                	<a href="javascript:void(0);" onclick="change_vip('')" id="allvip">全部</a>
	                	<a href="javascript:void(0);" onclick="change_vip(0)" id="allvip0">只看免费</a>
	                	<a href="javascript:void(0);" onclick="change_vip(6)" id="allvip6">只看VIP</a>
                    </dd>
                </dl>
            </div>
		</div>
	
	</div>
	
	<div style="border: 1px solid #FABE7F;margin-top:10px;">
	<table class="shuku_table">
		<tr class="table_head">
			<th width="8%" style="text-align:center;">序号</th>
			<th width="8%" style="text-align:center;">类别</th>
			<th width="16%" style="text-align:center;">书名</th>
			<th width="24%" style="text-align:center;">最新更新章节</th>
			<th width="8%" style="text-align:center;">字数</th>
			<th width="16%" style="text-align:center;">作者</th>
			<th width="16%" style="text-align:center;">更新时间</th>
			<th width="16%" style="text-align:center;">状态</th>
		</tr>
		<?php
			if (!empty($result)) {
				foreach ($result as $key => $r) {
					if ($key % 2 == 0) {
						echo '<tr class="bg1">';
					} else {
						echo '<tr class="bg2">';
					}
//获取该小说最后更新文章信息
$sql = "select a5.* from xs_archives as a5, (select a1.aid from xs_albums as a1 LEFT JOIN xs_archives_1 as a2 ON a2.aid=a1.aid WHERE a1.pid='".$r['aid']."') as a4 WHERE a5.aid=a4.aid  ORDER BY a5.createdate DESC LIMIT 1";
$wz = $db->fetch_one($sql);
if (!empty($wz)) {
	$zj = $wz['subject'];
	$dt = date('Y-m-d H:i' ,$wz['createdate']);
	$zjid = $wz['aid'];
} else {
	$zj = '--';
	$dt = '--';
	$zjid = '';
}

//获取指定小说的总字数
$zishu = xiaoshuo_zongzishu($r['aid']);
//获取小说的制定类别
$sql = "SELECT * from xs_catalogs WHERE caid=".$r['caid'];
$lb = $db->fetch_one($sql);
if (!empty($lb)) {
	$lb = $lb['title'];
} else {
	$lb = '';
}
					echo '<td style="text-align:center;">'.(($key+1) + $pages).'</td>';
					echo '<td>['.$lb.']</td>';
					echo '<td><a target="_blank" href="/archive.php?aid='.$r['aid'].'" style="color: #1886ac;">'.$r['subject'].'</a></td>';
					if ($zjid !== '') {
						echo '<td><a target="_blank" href="/archive.php?aid='.$zjid.'">'.$zj.'</a></td>';
					} else {
						echo '<td>'.$zj.'</td>';
					}
					
					echo '<td style="text-align:center;">'.$zishu.'</td>';
					echo '<td style="text-align:center;">'.$r['author'].'</td>';
					echo '<td style="text-align:center;">'.$dt.'</td>';
					if ($r['abover'] == 1){
						echo '<td style="text-align:center;color: #008000;">完结</td>';
					} else {
						echo '<td style="text-align:center;color: #008000;">连载</td>';
					}
					echo '</tr>';
				}
			}
		?>
	</table>
	<div class="page">
<?php
$paeger = ceil($count / 30);
$url = "/index.php?caid=22";
if ($p != '')  $url .= '&p='.$p;
if ($j != '')  $url .= '&j='.$j;
if ($z != '')  $url .= '&z='.$z;
if ($c != '')  $url .= '&c='.$c;
if ($v != '')  $url .= '&v='.$v;

$per = 5;

if ($paeger > 1) {
if ($page != 1) {
	echo '<a href="'.$url.'&page=1"><span>上一页</span></a>';
}
if ($paeger > $per) {
	$begin = ($page - $per) <= 0 ? 1 : $page - $per;
	$end = ($page + $per) > $paeger ? $paeger : $page + $per;
} else {
	$begin = 1;
	$end = $paeger;
}
for ($i = $begin; $i <= $end; $i++) {
	if ($i == $page) {
		echo '<a class="on" href="'.$url.'&page='.$i.'"><span>'.$i.'</span></a>';
	} else {
		echo '<a href="'.$url.'&page='.$i.'"><span>'.$i.'</span></a>';
	}
}
if ($page != $paeger) {
	echo '<a href="'.$url.'&page='.($page+1).'"><span>下一页</span></a>';
}
}
	echo ' &nbsp;共'.$paeger.'页';
	echo ' &nbsp;&nbsp;转到第';
	echo '<input name="toPage" id="toPage" type="text">';
	echo '页<a href="javascript:;" onclick="goPageByHtml(\''.$url.'\');return false;"><span>跳转</span></a>';
?>
	</div>
	</div>
</div>
<div class="blank9"></div>
<script type="text/javascript">

function goPageByHtml(url) {
	var page = $('#toPage').val();
	page = parseInt(page);
	if (isNaN(page)) page = 1;
	if (page > <?php echo $paeger;?>) page = <?php echo $paeger;?>;
	url += '&page='+page;
	window.location.href = url;
}

var $c= "<?php echo $c;?>";
var $z= "<?php echo $z;?>";
var $j= "<?php echo $j;?>";
var $p= "<?php echo $p;?>";
var $v= "<?php echo $v;?>";
var $page = "<?php echo $page;?>";
$(document).ready(function(){
	if ($c == '') {
		$('#allcaid0').addClass('fb');
	} else {
		$('#allcaid'+$c).addClass('fb');
	}
	if ($j == '') {
		$('#alljincheng').addClass('fb');
	} else {
		$('#alljincheng'+$j).addClass('fb');
	}
	if ($p == '') {
		$('#allpaixu').addClass('fb');
	} else {
		$('#allpaixu'+$p).addClass('fb');
	}
	if ($v == '') {
		$('#allvip').addClass('fb');
	} else {
		$('#allvip'+$v).addClass('fb');
	}
	if ($z == '') {
		$('#allzishu').addClass('fb');
	} else {
		$('#allzishu'+$z).addClass('fb');
	}
});
//改变查询的类别
function change_caid(caid) {
	var url = "/index.php?caid=22";
	if ($z !== '') url += '&z='+$z;
	if ($j !== '') url += '&j='+$j;
	if ($p !== '') url += '&p='+$p;
	if ($v !== '') url += '&v='+$v;
	if (caid !== 0) url += '&c='+caid;
	//url += '&page='+$page;
	window.location.href = url;
}
//改变查询的字数
function change_zishu(zs) {
	var url = "/index.php?caid=22";
	if ($j !== '') url += '&j='+$j;
	if ($c !== '') url += '&c='+$c;
	if ($p !== '') url += '&p='+$p;
	if ($v !== '') url += '&v='+$v;
	if (zs !== '') url += '&z='+zs;
	//url += '&page='+$page;
	window.location.href = url;
}
//改变查询的进程
function change_jincheng(jc) {
	var url = "/index.php?caid=22";
	if ($z !== '') url += '&z='+$z;
	if ($c !== '') url += '&c='+$c;
	if ($p !== '') url += '&p='+$p;
	if ($v !== '') url += '&v='+$v;
	if (jc !== '') url += '&j='+jc;
	//url += '&page='+$page;
	window.location.href = url;
}
//改变排序方式
function change_paixu(px) {
	//if (px === 0) {
	//	alert('字数排序功能待开发');
	//	return false;
	//}
	var url = "/index.php?caid=22";
	if ($z !== '') url += '&z='+$z;
	if ($c !== '') url += '&c='+$c;
	if ($j !== '') url += '&j='+$j;
	if ($v !== '') url += '&v='+$v;
	if (px !== '') url += '&p='+px;
	//url += '&page='+$page;
	window.location.href = url;
}
function change_vip(vip) {
	var url = "/index.php?caid=22";
	if ($z !== '') url += '&z='+$z;
	if ($c !== '') url += '&c='+$c;
	if ($j !== '') url += '&j='+$j;
	if ($p !== '') url += '&p='+$p;
	if (vip !== '') url += '&v='+vip;
	//url += '&page='+$page;
	window.location.href = url;
}

</script>


<div id="links"><b>友情链接：</b><?php $_txtflinklist=_ctag_parse(array("ename" => "txtflinklist","tclass" => "farchives","limits" => "10","cols" => "1","casource" => "1","orderby" => "vieworder_asc",));foreach($_txtflinklist as $v){_aenter($v);?>
<a href="<?=$v['linkurl']?>" title="<?=$v['subject']?>" target=_blank><?=$v['subject']?></a><?php _aquit();} unset($_txtflinklist,$v);?>
<br /><?php $_picflinklist=_ctag_parse(array("ename" => "picflinklist","tclass" => "farchives","limits" => "10","cols" => "1","casource" => "2","orderby" => "vieworder_asc",));foreach($_picflinklist as $v){_aenter($v);?>
<a href="<?=$v['linkurl']?>" title="<?=$v['linktxt']?>"><?php $u=_utag_parse(array("tclass" => "image","tname" => "$v[piclink]","maxwidth" => "88","maxheight" => "31","emptyurl" => "images/common/logo.gif",));if(!empty($u)){?><img src="<?=$u['url']?>"  width="<?=$u['width']?>" height="<?=$u['height']?>" title="<?=$u['subject']?>"><?php } unset($u);?></a><?php _aquit();} unset($_picflinklist,$v);?>
</div>
<div id="foot">
<span>
<?php $_all_dibu=_ctag_parse(array("ename" => "all_dibu","tclass" => "farchives","limits" => "100","cols" => "1","casource" => "11","orderby" => "vieworder_asc",));foreach($_all_dibu as $v){_aenter($v);?>
<a href="<?=$v['arcurl']?>" target="_blank"><?=$v['subject']?></a>　|　<?php _aquit();} unset($_all_dibu,$v);?>

<a href="/adminm.php?action=archives&nmuid=2">作者投稿</a>
　|　
<a href="/adminm.php?action=payonline">支付中心</a>
　|　
<a href="<?=$cms_abs?>register.php" >会员注册</a>
</span>
<p id="copyright"><?=$copyright?>  Powered by <a href="<?=$hosturl?>" target="_blank"><?=$hostname?></a> v2013 &copy; 2013-2015 Inc.</a><br><?=$cms_icpno?> </p>
</div>
</body>
</html>