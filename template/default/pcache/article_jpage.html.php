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
<script type="text/javascript">var CMS_ABS='<?=$cms_abs?>',IXDIR = '<?=$tplurl?>css/', charset = 'gbk',allowfloatwin = '1',floatwidth='400',floatheight='400'</script>
<script type="text/javascript" src="<?=$cms_abs?>include/js/langs.js"></script>
<script type="text/javascript" src="<?=$cms_abs?>include/js/common.js"></script>
<script type="text/javascript" src="<?=$cms_abs?>include/js/floatwin.js"></script>
<script type="text/javascript">
function chabg(d){
    d.style.background = "url('<?=$tplurl?>images/xqbg.gif')";
    d.onmouseout = function(){d.style.background = "";}
}
</script>
<div id="append_parent"></div>


</div>
<div class="blank10"></div>

<div id="main">

<div class="area690" style="position:relative;">
	<div class="bookBox border" style="position:relative;">
		<div class="bookBox_l">
			<div class="img book-prop-gz" id="printMarkImg">
				<span id="printMarkBox"></span>
				<div id="printMarkBox_Title"></div>
				<a href="<?=$arcurl?>" target="_blank"><img src="<?=$thumb?>" alt="<?=$subject?>"></a>
			</div>
			<div class="voteBtnList">
				<ul>
					<li class="s" title="�ʻ�" id="cms_praises" onClick="ajax_praise('<?=$aid?>');"><?=$praises?></li>
					<li class="p" title="��Ʊ��" id="cms_debases" onClick="ajax_debase('<?=$aid?>');"><?=$debases?></li>
					<!-- 
					<li class="t" title="���" id="postVipVote" onClick="_.book.vipVote(this.id);">11289</li>
					<li class="g" title="����" id="postPrintMark" onClick="_.book.printMark('printMarkBox','postPrintMark');">637</li>
					 -->
				</ul>
				<a href="#pinglun" style="font-size: 18px;position: absolute;bottom: 5px;left:25px;">������Ʒ</a>
			</div>
		</div>
		
		<div class="bookBox_r">
		<h1 class="c10" style="text-align:left;font-size: 24px;margin-bottom: 5px;"><a target="_blank" href="<?=$arcurl?>" title=""><?=$subject?>&nbsp;&nbsp;<?=$subtitle?></a></h1>
			<span> ���ߣ�<?=$author?></span>
			<div class="bookCon">
				<script type="text/javascript">
					$(function(){
						var b_tab = $('.b_tab > ul > li');
						var b_content = $('.b_content > .c6');
						b_tab.click(function(){
							var ind = $(this).index();
							$(this).addClass('btn_a').removeClass('btn_b').siblings().addClass('btn_b').removeClass('btn_a');
							b_content.eq(ind).show().siblings().hide();
						});
					});
				</script>
				<div class="b_tab">
					<ul>
						<li class="btn_a" id="tab91_btn0">���ݽ���</li>
						<li class="btn_b" id="tab91_btn1">��Ʒ��Ϣ</li>
					</ul>
					<span class="time">���£� <?php echo _utag_parse(array("ename" => "updatedate_all","tclass" => "date","disabled" => "0","tname" => "$updatedate","date" => "Y-m-d","time" => "H:i",));?>
</span>
				</div>
				<div class="b_content" style="height:170px;">
						<div class="c6" id="tab91_div0">
							<p><?=$content?></p>
							</div>
						<div class="c6" id="tab91_div1" style="display:none;">
							<ul>
								<li>���<?=$catalog?></li>
								<li>&nbsp;</li>
								<li>���ղش�����<?=$favorites?></li>
								<li>���ܱ��Ķ�����<?=$wclicks?></li>
								<li>�յ��ʻ�����<?=$praises?></li>
								<li>���±��Ķ�����<?=$mclicks?></li>
							</ul>
						</div>
					</div>
				</div>
			<div class="bookZt">
				<div class="bookZt_god">
					<div id="userRecommend" style="padding:0 0 0 5px; width:365px; height:25px; line-height:25px; overflow:hidden;">��վ֣�����ѣ������´����鹹��������ͬ�������ɺϣ�����ģ�¡�</div>
				</div>
				<p>
					<b>�ܵ��:</b><em id="ccms_clicks">0</em><br>
					<b>������:</b><em><?php echo xiaoshuo_zongzishu($aid);?></em><br>
					<b>��ǩ:</b> <?=$keywords?>&nbsp;&nbsp;

			</div>
		</div>
		<div class="clear"></div>
		<div class="book_btn_new">
			<ul>
				<li><a href="<?=$arcurl1?>" target="_blank">����Ķ�</a></li>
				<!-- baidu_tc end -->
				<li><a href="javascript:;" onClick="javascript:ajax_favorite('<?=$aid?>');">�������</a></li>
				<li><a href="/adminm.php?action=favorites" target="_blank">������ǩ</a></li>
			</ul>
		</div>
	</div>
	
	<div class="blank10"></div>
	
	<div class="borPad">
		<div class="tit01"><h2>�����½��Ķ�</h2></div>
		<div class="comment">
<?php
$sql = "SELECT arch1.*,arch2.`subject`
	FROM xs_archives_1 as arch1,
	(select a5.* from xs_archives as a5, (select a1.aid from xs_albums as a1 LEFT JOIN xs_archives_1 as a2 ON a2.aid=a1.aid WHERE a1.pid='".$aid."') as a4 WHERE a5.aid=a4.aid  ORDER BY a5.createdate DESC LIMIT 1) as arch2
	where arch1.aid = arch2.aid";
$wz = $db->fetch_one($sql);
if (!empty($wz)) {
	$wz_title = $wz['subject'];
	$wz_aid = $wz['aid'];
	include(M_ROOT.'./dynamic/htmltxt/'.$wz['content'].'.php');
	$content = mb_substr(strip_tags($caccnt), 0, 200, 'gb2312');
} else {
	$newContent = $content;
}
?>
			<div class="account">
			<?php
				if (isset($wz_title)) {
					echo '<h2 style="text-align:left;"><a href="/archive.php?aid='.$wz_aid.'">'.$wz_title.'</a></h2>';
				}
			?>
			<?=$content?>......
			</div>
			<ul class="zxzj_list">
				<?php $_news_zhang_list=_ctag_parse(array("ename" => "news_zhang_list","tclass" => "alarchives","disabled" => "0","orderby" => "createdate_desc","closed" => "-1","abover" => "-1",));foreach($_news_zhang_list as $v){_aenter($v);?>
	<li><a href="<?=$v['arcurl']?>"><span><?=$v['subject']?></span></a><span class="time"><?php echo _utag_parse(array("ename" => "createdate_nyr","tclass" => "date","disabled" => "0","tname" => "$v[createdate]","date" => "Y-m-d",));?>
</span></li><?php _aquit();} unset($_news_zhang_list,$v);?>

			</ul>
		</div>
	</div>
	
	<div class="blank10"></div>
	
	<div class="borPad">
		<div id="lm3">
			<dl>
				<dt style="text-align:center;"><img src="<?=$tplurl?>images/plen.png"  align="absmiddle" /> <?=$subject?> С˵��������<font id="cms_comments" style="color:#F00; font-weight:bold;">0</font> �� <a href="<?=$cms_abs?>comments.php?aid=<?=$aid?>">�鿴��������&gt;&gt;</a></dt>
				<dd><ul class="comcon"><?php $js_file=$cms_abs.'js.php?tname=pinglunlist';foreach($_midarr as $k => $v){ $js_file.= '&data['.$k.']='.rawurlencode($v);} ?><script type="text/javascript" src="<?=$js_file?>"></script><?php unset($js_file);?></ul></dd>
			</dl>
		</div>
	</div>

	<div class="blank10"></div>
	<a name="pinglun"></a>
	<div class="borPad">
		<div class="tit01"><h2>��������</h2></div>
		<div class="comment">
			<form name="formcomment" method="post" action="<?=$cms_abs?>comment.php?aid=<?=$aid?>">
<input name="forward" type="hidden" value="<?=$cms_abs?>comments.php?aid=<?=$aid?>" />
<textarea name="communew[content]" id="communew[content]" tabindex="3" rows="6" cols="130" title="��������"></textarea>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="60"></td><td width="50">��֤�룺</td><td width="50"><input type="text" name="regcode" size="7" maxlength="4" id="regcode" tabindex="2" value="" class="input"></td><td><img src="<?=$cms_abs?>regcode.php" alt="���������֤��" style="vertical-align:middle;cursor:pointer;" onClick="this.src='<?=$cms_abs?>regcode.php'" /></td><td align="center"><button type="submit" name="newcommu" value="true" class="cbtn">��������</button></td><td width="40%"> </td></tr></table>
</form>
		</div>
	</div>
</div>

<div class="area250">
		<div class="zzgg borPad">
			<div class="tit01">
				<h2>���߹���</h2>
			</div>
			<div class="con">
				<p><?php echo zuozhe_gonggao($aid);?></p>
			</div>
		</div>
		<div class="blank10"></div>
		<div class="tkzpj borPad">
			<div class="tit01">
				<h2>������������Ʒ</h2>
			</div>
			<div class="con">
				<ul>
				<?php
					$otherArr = xiaoshuo_author_list($author);
					foreach ($otherArr as $o) {
				?>
				<li><span style="width:70px;">[<a href="/list.php?caid=<?php echo $o['caid'];?>" target="_blank"><?php echo $o['title'];?></a>]</span>
							<a target="_blank" href="/archive.php?aid=<?php echo $o['aid'];?>"><?php echo $o['subject'];?></a>
						</li>
				<?php
					}
				?>
				</ul>
			</div>
		</div>
		<div class="blank10"></div>
		<div class="topList borPad">
			<div class="tit02">
				<h2><a href="/book/voteRank.action?bookId=317856&amp;type=fans" target="_blank">�����˿������</a></h2>
			</div>
			<div class="con">
				<ul class="top15 fsimg">
					<?php
						$userList = shoucang_user_list($aid);
						foreach ($userList as $u) {
					?>
					<li class="li0"><a target="_blank" href="/mspace/index.php?mid=<?php echo $u['mid'];?>"><?php echo $u['nicename'];?></a></li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
		<div class="blank10"></div>
		<div class="topList borPad">
			<div class="tit02">
				<h2>ǿ��</h2>				
			</div>
			<div class="con">
				<ul class="top15">
					<?php $_zuopin_qiangtuiliebiao=_ctag_parse(array("ename" => "zuopin_qiangtuiliebiao","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","caids" => "1,2,4,5,6,7,17,14,3,15,16,18,19,20","chsource" => "2","chids" => "4","orderby" => "praises_desc","closed" => "-1","abover" => "-1",));foreach($_zuopin_qiangtuiliebiao as $v){_aenter($v);?>
<li class="li<?=$v['sn_row']?>"><a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject20","tclass" => "odeal","disabled" => "0","tname" => "$v[subject]","trim" => "26",));?>
</a></li><?php _aquit();} unset($_zuopin_qiangtuiliebiao,$v);?>

				</ul>
			</div>
		</div>
		<div class="blank10"></div>
		<div class="topList borPad">
			<div class="tit02">
				<h2>�ȵ���Ʒ</h2>				
			</div>
			<div class="con">
				<ul class="top15">
					<?php $_zuopin_redianzuopin=_ctag_parse(array("ename" => "zuopin_redianzuopin","tclass" => "archives","disabled" => "0","caidson" => "1","casource" => "2","caids" => "1,2,4,5,6,7,17,14,3,15,16,18,19,20","chsource" => "2","chids" => "4","orderby" => "favorites_desc","closed" => "-1","abover" => "-1",));foreach($_zuopin_redianzuopin as $v){_aenter($v);?>
	<li class="li<?=$v['sn_row']?>"><a href="<?=$v['arcurl']?>" target="_blank" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject20","tclass" => "odeal","disabled" => "0","tname" => "$v[subject]","trim" => "26",));?>
</a></li><?php _aquit();} unset($_zuopin_redianzuopin,$v);?>

				</ul>
			</div>
		</div>
		<div class="blank10"></div>
		<div class="borPad correlative">
			<div class="tit01">
				<h2>ϲ��������˻�ϲ��</h2>
			</div>
			<div class="con" id="netizenAttention">
				<ul stat_flag="st_book_gz:��ע��">
	      				<?php $_zuopin_xiangguangxiaoshuo=_ctag_parse(array("ename" => "zuopin_xiangguangxiaoshuo","tclass" => "archives","disabled" => "0","limits" => "6","caidson" => "1","casource" => "2","caids" => "3,15,16,18,19,20","chsource" => "2","chids" => "4","orderby" => "scores_desc","orderby1" => "mpraises_desc","closed" => "-1","abover" => "-1",));foreach($_zuopin_xiangguangxiaoshuo as $v){_aenter($v);?>
	    <li>
    <div><a title="<?=$v['subject']?>" href="<?=$v['arcurl']?>" target="_blank"><img src="<?=$v['thumb']?>" alt="<?=$v['subject']?>" /></a></div>
<span><a title="<?=$v['subject']?>" href="<?=$v['arcurl']?>" target="_blank"><?=$v['subject']?></a></span>
</li><?php _aquit();} unset($_zuopin_xiangguangxiaoshuo,$v);?>

	      		</ul>
	      		<div style="clear: both;"></div>
			</div>
		</div>
</div>

<!--<div id="left" class="left">
<div class="divbox m_b8">
<div class="txtbox k1">
<h1><?=$subject?>&nbsp;&nbsp;<?=$subtitle?></h1>
<h2>����: <?php echo _utag_parse(array("ename" => "createdate_all","tclass" => "date","tname" => "$createdate","date" => "Y-m-d","time" => "H:i",));?>
 | ����: <?=$author?> | �鿴: <font id="cms_clicks">0</font>��  |  <a href="<?=$cms_abs?>/adminm.php?action=favorites" class="cRed">�����</a></h2>
<div class="account"><?=$content?></div>
<div class="shuping">
<a class="read" href="<?=$arcurl1?>">����Ķ�</a>
<a href="javascript:ajax_praise('<?=$aid?>');">�Ҷ�(<font id="cms_praises">0</font>)</a>
<a href="javascript:ajax_debase('<?=$aid?>');">�Ҳ�(<font id="cms_debases">0</font>)</a>
<a href="javascript:ajax_favorite('<?=$aid?>');">�ղ�(<font id="cms_favorites">0</font>)</a>
<a href="<?=$cms_abs?>report.php?aid=<?=$aid?>" onClick="return floatwin('open_report',this,800,300)">�ٱ�<font>&nbsp;</font></a>
</div>

<div class="xiqingbox">
    <div class="xinqing">
        <ul onClick="ajaxUscore('<?=$aid?>','1','cms_score_1')" onMouseOver="chabg(this)" class="c1">
            <li class="t">ŭ</li>
            <li class="b"><font id="cms_score_1">0</font></li>
        </ul>
        <ul onClick="ajaxUscore('<?=$aid?>','2','cms_score_2')" onMouseOver="chabg(this)" class="c2">
            <li class="t">��</li>
            <li class="b"><font id="cms_score_2">0</font></li>
        </ul>
        <ul onClick="ajaxUscore('<?=$aid?>','3','cms_score_3')" onMouseOver="chabg(this)" class="c3">
            <li class="t">��</li>
            <li class="b"><font id="cms_score_3">0</font></li>
        </ul>
        <ul onClick="ajaxUscore('<?=$aid?>','4','cms_score_4')" onMouseOver="chabg(this)" class="c4">
            <li class="t">Ц</li>
            <li class="b"><font id="cms_score_4">0</font></li>
        </ul>
        <ul onClick="ajaxUscore('<?=$aid?>','5','cms_score_5')" onMouseOver="chabg(this)" class="c5">
            <li class="t">�ڴ�<?=$avgscore?></li>
            <li class="b"><font id="cms_score_5">0</font></li>
        </ul>
    </div>
</div>
<div class="aboutthis">
    <h1>�������</h1>
    <ul>
        <li><strong>�ܵ����</strong><font id="ccms_clicks">0</font></li><li><strong>���ղأ�</strong><font id="ccms_favorites">0</font></li><li><strong>���ƽ飺</strong><font id="ccms_praises">0</font></li>
        <li><strong>���µ����</strong><font id="ccms_mclicks">0</font></li><li><strong>�����ղأ�</strong><font id="ccms_mfavorites">0</font></li><li><strong>�����ƽ飺</strong><font id="ccms_mpraises">0</font></li>
        <li><strong>���ܵ����</strong><font id="ccms_wclicks">0</font></li><li><strong>�����ղأ�</strong><font id="ccms_wfavorites">0</font></li><li><strong>�����ƽ飺</strong><font id="ccms_wpraises">0</font></li>
    </ul>
</div>
<div class="pagenav"><span><?php $v=_ctag_parse(array("ename" => "next_caid","tclass" => "context","next" => "1","chid" => "1","caid" => "1",));if(!empty($v)){_aenter($v);?>
<a href="<?=$v['arcurl']?>" class="btn">��һƪ��<?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a><?php _aquit();} unset($v);?>
</span><?php $v=_ctag_parse(array("ename" => "pre_caid","tclass" => "context","chid" => "1","caid" => "1",));if(!empty($v)){_aenter($v);?>
<a href="<?=$v['arcurl']?>" class="btn">��һƪ��<?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a><?php _aquit();} unset($v);?>
</div>
</div>
</div>



<div id="divboxd">
<div id="lm4"><dl>
<dt><img src="<?=$tplurl?>images/ico_gx.gif"  align="absmiddle" /><b>�����½�</b></dt>
<dd>
<div class="pagelist"><dl><?php $_news_zhang_list=_ctag_parse(array("ename" => "news_zhang_list","tclass" => "alarchives","disabled" => "0","orderby" => "createdate_desc","closed" => "-1","abover" => "-1",));foreach($_news_zhang_list as $v){_aenter($v);?>
	<li><a href="<?=$v['arcurl']?>"><span><?=$v['subject']?></span></a><span class="time"><?php echo _utag_parse(array("ename" => "createdate_nyr","tclass" => "date","disabled" => "0","tname" => "$v[createdate]","date" => "Y-m-d",));?>
</span></li><?php _aquit();} unset($_news_zhang_list,$v);?>
</dl></div>
</dd>
</dl></div>
</div>
<div id="lm3">
<dl>
<dt style="text-align:center;"><img src="<?=$tplurl?>images/plen.png"  align="absmiddle" /> <?=$subject?> С˵��������<font id="cms_comments" style="color:#F00; font-weight:bold;">0</font> �� <a href="<?=$cms_abs?>comments.php?aid=<?=$aid?>">�鿴��������&gt;&gt;</a></dt>
<dd><ul class="comcon"><?php $js_file=$cms_abs.'js.php?tname=pinglunlist';foreach($_midarr as $k => $v){ $js_file.= '&data['.$k.']='.rawurlencode($v);} ?><script type="text/javascript" src="<?=$js_file?>"></script><?php unset($js_file);?></ul></dd></dl></div>
<div id="lm3"><dl>
<dt><img src="<?=$cms_abs?>template/default/images/bx2.gif"  align="absmiddle" /><b>��������</b><span><a href="<?=$cms_abs?>comments.php?aid=<?=$aid?>">����&gt;&gt;</a></span></dt>
<dd class="comform">
<form name="formcomment" method="post" action="<?=$cms_abs?>comment.php?aid=<?=$aid?>">
<input name="forward" type="hidden" value="<?=$cms_abs?>comments.php?aid=<?=$aid?>" />
<textarea name="communew[content]" id="communew[content]" tabindex="3" rows="6" cols="130" title="��������"></textarea>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="60"></td><td width="50">��֤�룺</td><td width="50"><input type="text" name="regcode" size="7" maxlength="4" id="regcode" tabindex="2" value="" class="input"></td><td><img src="<?=$cms_abs?>regcode.php" alt="���������֤��" style="vertical-align:middle;cursor:pointer;" onClick="this.src='<?=$cms_abs?>regcode.php'" /></td><td align="center"><button type="submit" name="newcommu" value="true" class="cbtn">��������</button></td><td width="40%"> </td></tr></table>
</form></dd>
</dl></div>
</div>-->

<!--<div id="right" class="right">
<div class="picBox m_b8"><?php $u=_utag_parse(array("ename" => "thumb_240_316","tclass" => "image","disabled" => "0","tname" => "$thumb","maxwidth" => "240","maxheight" => "316","emptyurl" => "template/default/images/mr_face.gif",));if(!empty($u)){?><img src="<?=$u['url']?>" width="<?=$u['width']?>" height="<?=$u['height']?>" /><?php } unset($u);?></div>
<div class="search m_b8" id="searchbox"><table cellpadding="0">
<tr>
<form id="searchform" action="<?=$cmsurl?>search.php?sid=<?=$sid?>" method="post" target="_blank">
<td valign="middle"><img src="<?=$tplurl?>images/ico_search.gif" /></td>
<td valign="middle"><b>���� </b></td>
<td id="seach_y"><input name="searchword" value="�Ƽ�����С˵" type="text" onclick="this.value=''" style="width:120px" maxlength="18"/></td>
<td><input type="hidden" name="child" value="0"><input src="<?=$tplurl?>images/b_s.gif"  type="image" name="searchsubmit" width="52" height="21" id="Image12" /> </td>
</form>
</tr>
</table>
<br /></div>
<?php $_lian_ad_250_t=_ctag_parse(array("ename" => "lian_ad_250_t","tclass" => "farchives","disabled" => "0","limits" => "1","casource" => "19","orderby" => "vieworder_asc","validperiod" => "1",));foreach($_lian_ad_250_t as $v){_aenter($v);?>
<div class="adsimg"><a href="<?=$v['advurl']?>" title="<?=$v['subject']?>" target="_blank"><?php $u=_utag_parse(array("ename" => "adimg_250_250","tclass" => "image","tname" => "$v[advimg]","maxwidth" => "250","maxheight" => "250",));if(!empty($u)){?><img width="<?=$u['width']?>" height="<?=$u['height']?>" src="<?=$u['url']?>" border="0" /><?php } unset($u);?></a></div><?php _aquit();} unset($_lian_ad_250_t,$v);?>

<div style="float:none;"></div>
<div id="lm2"><dl>
<dt><img src="<?=$tplurl?>images/tuijian2ico.gif"  align="absmiddle" />�Ƽ�ר��</dt>
<dd><?php $_index_readmin=_ctag_parse(array("ename" => "index_readmin","tclass" => "archives","disabled" => "0","limits" => "2","caidson" => "1","casource" => "1","caids" => "1,2,4,5,6,7,17,14,3,15,16,18,19,20","ccids1" => "30","chsource" => "2","chids" => "4","orderby" => "favorites_desc","closed" => "-1","abover" => "-1",));foreach($_index_readmin as $v){_aenter($v);?>
	    <div id="txtpic">
<div class="retxtpic_r"><b><a <? if(($v['ccid3'])) { ?>style="color:red;"<? } ?> href="<?=$v['arcurl']?>" title="<?=$v['subject']?>"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a></b><br>���ߣ�<?=$v['author']?><br>����ʱ�䣺<?php echo _utag_parse(array("ename" => "createdate_nj","tclass" => "date","tname" => "$v[createdate]","date" => "m-d",));?>
<br /><a href="<?=$v['arcurl']?>"  target="_blank">[ȫ���Ķ�]</a>
</div>
<div class="retxtpic_l pic_on"><a href="<?=$v['arcurl']?>" target="_blank"><?php $u=_utag_parse(array("ename" => "thumb_66_87","tclass" => "image","tname" => "$v[thumb]","maxwidth" => "66","maxheight" => "87","thumb" => "1","emptyurl" => "template/default/images/mr_face.gif",));if(!empty($u)){?><img src="<?=$u['url_s']?>"  width="<?=$u['width']?>" height="<?=$u['height']?>" title="<?=$u['subject']?>"><?php } unset($u);?></a></div>
</div><?php _aquit();} unset($_index_readmin,$v);?>
</dd></dl></div>


<div id="lm2"><dl><dt>VIP����</dt><dd><ul><?php $_hotindex_mtitle=_ctag_parse(array("ename" => "hotindex_mtitle","tclass" => "archives","disabled" => "0","nsid" => "-1","caidson" => "1","casource" => "1","caids" => "1","cosource3" => "1","ccids3" => "6","orderby" => "clicks_desc","closed" => "-1","abover" => "-1",));foreach($_hotindex_mtitle as $v){_aenter($v);?>
<li><strong><?=$v['sn_row']?>.</strong><a href="<?=$v['arcurl']?>" target="_blank"><?php echo _utag_parse(array("ename" => "subject30","tclass" => "odeal","tname" => "$v[subject]","trim" => "30",));?>
</a></li><?php _aquit();} unset($_hotindex_mtitle,$v);?>
</ul></dd></dl></div>


</div>-->

</div>

<div id="links"><b>�������ӣ�</b><?php $_txtflinklist=_ctag_parse(array("ename" => "txtflinklist","tclass" => "farchives","limits" => "10","cols" => "1","casource" => "1","orderby" => "vieworder_asc",));foreach($_txtflinklist as $v){_aenter($v);?>
<a href="<?=$v['linkurl']?>" title="<?=$v['subject']?>" target=_blank><?=$v['subject']?></a><?php _aquit();} unset($_txtflinklist,$v);?>
<br /><?php $_picflinklist=_ctag_parse(array("ename" => "picflinklist","tclass" => "farchives","limits" => "10","cols" => "1","casource" => "2","orderby" => "vieworder_asc",));foreach($_picflinklist as $v){_aenter($v);?>
<a href="<?=$v['linkurl']?>" title="<?=$v['linktxt']?>"><?php $u=_utag_parse(array("tclass" => "image","tname" => "$v[piclink]","maxwidth" => "88","maxheight" => "31","emptyurl" => "images/common/logo.gif",));if(!empty($u)){?><img src="<?=$u['url']?>"  width="<?=$u['width']?>" height="<?=$u['height']?>" title="<?=$u['subject']?>"><?php } unset($u);?></a><?php _aquit();} unset($_picflinklist,$v);?>
</div>
<script type="text/javascript">
function set_stat(s){
    var k, o;
    s = s['<?=$aid?>'];
    if(!s)return;
    for(k in s){
        o = $id('cms_' + k);
        if(o)o.innerHTML = s[k];
        o = $id('ccms_' + k);
        if(o)o.innerHTML = s[k];
    }
}
function set_score(s){
    var k, o;
    s = s['<?=$aid?>'];
    if(!s)return;
    for(k in s){
        o = $id('cms_' + k);
        if(o)o.innerHTML = s[k];
    }
}

ajax_get_stat('<?=$aid?>', set_stat);
ajax_get_stat.aids = [];
ajax_get_stat.data = {};
ajax_get_score('<?=$aid?>', set_score);

</script>
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
<?=$cms_counter?>
<script type="text/javascript" src="<?=$cms_abs?>ajax.php?action=mark&aid=<?=$aid?>">