<?
!defined('M_COM') && exit('No Permission');
load_cache('channels,acatalogs,ucotypes,currencys,commus,cfields,inmurls');
//分析页面设置
$nmuid = empty($nmuid) ? 0 : max(0,intval($nmuid));
$u_checked = $u_valid = -1;
if($nmuid && $u_url = read_cache('murl',$nmuid)){
	$u_tplname = $u_url['tplname'];
		$u_onlyview = empty($u_url['onlyview']) ? 0 : 1;
	$u_mtitle = $u_url['mtitle'];
	$u_guide = $u_url['guide'];
	foreach(array('checked',) as $var) ${'u_'.$var} = $u_url['setting'][$var];
	$vars = array('chids','caids','cuids','filters','lists','imuids',);
	foreach($vars as $var) if(!empty($u_url['setting'][$var])) ${'u_'.$var} = explode(',',$u_url['setting'][$var]);
}
empty($u_filters) && $u_filters = array('check','catalog',);
empty($u_lists) && $u_lists = array('catalog','uclass','channel','check',);
if(empty($u_tplname) || !empty($u_onlyview)){
	include_once M_ROOT."./include/cuedit.cls.php";
	$catalogs = &$acatalogs;
	
	$page = empty($page) ? 1 : max(1, intval($page));
	submitcheck('bfilter') && $page = 1;
	$caid = empty($caid) ? 0 : max(0,intval($caid));
	$checked = isset($checked) ? $checked : '-1';
	$keyword = empty($keyword) ? '' : $keyword;
	
	$wheresql = "cu.mid='$memberid'";
	$fromsql = "FROM {$tblprefix}comments cu LEFT JOIN {$tblprefix}archives a ON a.aid=cu.aid";
	if(!empty($u_cuids)) $wheresql .= " AND cu.cuid ".multi_str($u_cuids);
	//栏目范围
	$caids = array();
	if($caid){
		$caids = array($caid);
		$tempids = array();
		$tempids = son_ids($catalogs,$caid,$tempids);
		$caids = array_merge($caids,$tempids);
		if(!empty($u_caids)) $caids = array_intersect($caids,$u_caids);
	}elseif(!empty($u_caids)) $caids = $u_caids;
	if($caids) $wheresql .= " AND a.caid ".multi_str($caids);
	elseif(!empty($u_caids)) $no_list = true;
	//审核状态范围
	if($checked != -1){
		if(($u_checked != -1) && $checked != $u_checked) $no_list = true;
		else $wheresql .= " AND cu.checked='$checked'";
	}elseif($u_checked != -1) $wheresql .= " AND cu.checked='$u_checked'";
	//搜索关键词处理
	$keyword && $wheresql .= " AND a.subject LIKE '%".str_replace(array(' ','*'),'%',addcslashes($keyword,'%_'))."%'";
	
	$filterstr = '';
	foreach(array('nmuid','caid','keyword',) as $k) $$k && $filterstr .= "&$k=".rawurlencode(stripslashes($$k));
	foreach(array('checked',) as $k) $$k != -1 && $filterstr .= "&$k=".$$k;
	//处理ucotype的筛选
	foreach($ucotypes as $k => $v){
		if(!empty(${'uccid'.$k}) && $v['uclass'] == 'comment'){
			$filterstr .= "&uccid$k=".${'uccid'.$k};
			$wheresql .= " AND cu.uccid$k='".${'uccid'.$k}."'";
		}
	}
	$wheresql = "WHERE ".(empty($no_list) ? $wheresql : '1=0');
	if(!submitcheck('barcsedit')){
		if(empty($u_tplname)){
			/*
			echo mform_str($action.'archivesedit',"?action=comments&nmuid=$nmuid&page=$page");
			mtabheader_e();
			echo "<tr><td class=\"item2\">";
			echo lang('keyword')."&nbsp; <input class=\"text\" name=\"keyword\" type=\"text\" value=\"$keyword\" size=\"8\" style=\"vertical-align: middle;\">&nbsp; ";
			//审核状态
			if(in_array('check',$u_filters)){
				$checkedarr = array('-1' => lang('nolimit').lang('check'),'0' => lang('nocheck'),'1' => lang('checked'));
				echo "<select style=\"vertical-align: middle;\" name=\"checked\">".makeoption($checkedarr,$checked)."</select>&nbsp; ";
			}
			//栏目搜索
			if(in_array('catalog',$u_filters)){
				$caidsarr = array('0' => lang('catalog')) + caidsarr();
				echo "<select style=\"vertical-align: middle;\" name=\"caid\">".makeoption($caidsarr,$caid)."</select>&nbsp; ";
			}
			foreach($ucotypes as $k => $v){//报价类系的搜索
				if(in_array('uccid'.$k,$u_filters) && $v['cclass'] == 'comment'){
					$ucoclasses = read_cache('ucoclasses',$k);
					$uccidsarr = array();
					foreach($ucoclasses as $k1 => $v2) $uccidsarr[$k1] = $v1['title'];
					echo "<select style=\"vertical-align: middle;\" name=\"uccid$k\">".makeoption($uccidsarr,empty(${"uccid$k"}) ? 0 : ${"uccid$k"})."</select>&nbsp; ";
				}
			}
			echo mstrbutton('bfilter','filter0').'</td></tr>';
			mtabfooter();
			*/
		
			$pagetmp = $page;
			do{
				$query = $db->query("SELECT cu.*,a.sid,a.caid,a.chid,a.subject $fromsql $wheresql ORDER BY cu.cid DESC LIMIT ".(($pagetmp - 1) * $mrowpp).",$mrowpp");
				$pagetmp--;
			}while(!$db->num_rows($query) && $pagetmp);
			//mtabheader(empty($u_mtitle) ? lang('commentlist') : $u_mtitle,'','',30);
			//$cy_arr = array("<input class=\"checkbox\" type=\"checkbox\" name=\"chkall\" onclick=\"checkall(this.form, 'selectid', 'chkall')\">",lang('title'),);
			if(in_array('catalog',$u_lists)) $cy_arr[] = lang('catalog');
			if(in_array('channel',$u_lists)) $cy_arr[] = lang('arctype');//模型与合辑类型综合在一起
			foreach($ucotypes as $k => $v) if(in_array('uccid'.$k,$u_lists) && $v['cclass'] == 'comment') $cy_arr["ccid$k"] = $v['cname'];
			if(in_array('check',$u_lists)) $cy_arr[] = lang('check');
			if(in_array('adddate',$u_lists)) $cy_arr[] = lang('addtime');
			if(in_array('updatedate',$u_lists)) $cy_arr[] = lang('updatetime');
			$cy_arr[] = lang('edit');
			//mtrcategory($cy_arr);
			echo '<table border="0" cellpadding="0" cellspacing="1" class="tabmain">
<tbody><tr class="header"><td colspan="30"><b>书评列表</b></td></tr></tbody></table>';
			$curuser->sub_data();
			//查询用户的附属信息
			$sql = "SELECT * FROM {$tblprefix}members_1 WHERE mid='{$curuser->info['mid']}'";
			$userOther = $db->fetch_one($sql);
			$itemstr = '<div class="mycomment" id="myThemeComment">';
			while($row = $db->fetch_array($query)){
				$itemstr .= '<dl><dt><img src="'.($userOther['photo'] !== '' ? $userOther['photo'] : '/images/adminm/none.gif').'" class="head" /></dt>';
				$itemstr .= '<dd><p class="cc-tit"><em>'.date('Y-m-d H:i:s', $row['createdate']).'</em>'.$curuser->info['nicename'].'
				<strong>发表</strong>
				</p>
				<p class="cc-content">'.$row['content'].'</p>
				<p class="cc-new"><span>'.date('Y-m-d H:i:s', $row['createdate']).'
				</span>
				<i>来自<a href="/comments.php?aid='.$row['aid'].'" target="_blank">《'.$row['subject'].'》书评区</a></i>
				</p>
				</dd></dl>';

				/*
				$selectstr = "<input class=\"checkbox\" type=\"checkbox\" name=\"selectid[$row[cid]]\" value=\"$row[cid]\">";
				$subjectstr = "<a href=\"".view_arcurl($row)."\" target=\"_blank\">".mhtmlspecialchars($row['subject'])."</a>";
				$catalogstr = @$catalogs[$row['caid']]['title'];
				$channelstr = @$channels[$row['chid']]['cname'];
				foreach($ucotypes as $k => $v){
					if(in_array('uccid'.$k,$u_lists) && $v['cclass'] == 'comment'){
						$ucoclasses = read_cache('ucoclasses',$k);
						${'uccid'.$k.'str'} = @$ucoclasses[$row['uccid'.$k]]['title'];
					}
				}
				$checkstr = $row['checked'] ? 'Y' : '-';
				$adddatestr = $row['createdate'] ? date('Y-m-d',$row['createdate']) : '-';
				$updatedatestr = $row['updatedate'] ? date('Y-m-d',$row['updatedate']) : '-';
				$adminstr = '';
				if(empty($u_imuids)){
					$adminstr .= "<a href=\"?action=comment&cid=$row[cid]\" onclick=\"return floatwin('open_inarchive',this)\">".lang('edit')."</a>&nbsp; ";
				}else{
					foreach($u_imuids as $k) if(!empty($inmurls[$k])) $adminstr .= "<a href=\"".$inmurls[$k]['url']."$row[cid]\" onclick=\"return floatwin('open_inarchive',this)\">".$inmurls[$k]['cname']."</a>&nbsp; ";
				}
				$itemstr .= "<tr><td class=\"item\">$selectstr</td><td class=\"item2\">$subjectstr</td>\n";
				if(in_array('catalog',$u_lists)) $itemstr .= "<td class=\"item\">$catalogstr</td>\n";
				if(in_array('channel',$u_lists)) $itemstr .= "<td class=\"item\">$channelstr</td>\n";
				foreach($ucotypes as $k => $v) if(in_array('uccid'.$k,$u_lists) && $v['cclass'] == 'comment') $itemstr .= "<td class=\"item\">".${'uccid'.$k.'str'}."</td>\n";
				if(in_array('check',$u_lists)) $itemstr .= "<td class=\"item\">$checkstr</td>\n";
				if(in_array('adddate',$u_lists)) $itemstr .= "<td class=\"item\">$adddatestr</td>\n";
				if(in_array('updatedate',$u_lists)) $itemstr .= "<td class=\"item\">$updatedatestr</td>\n";
				$itemstr .= "<td class=\"item\">$adminstr</td>\n";
				$itemstr .= "</tr>\n";
				//*/
			}
			$itemstr .= '</div>';
			$counts = $db->result_one("SELECT count(*) $fromsql $wheresql");
			$multi = multi($counts,$mrowpp,$page,"?action=comments$filterstr");
			echo $itemstr;
			//mtabfooter();
			echo $multi;
			//echo '<br><br>'.mstrbutton('barcsedit','delete');
			m_guide(@$u_guide);
		}else include(M_ROOT.$u_tplname);
	}else{
		if(empty($selectid)) mcmessage('conoffer',M_REFERER);
		$uedit = new cls_cuedit;
		foreach($selectid as $cid){
			if($errno = $uedit->read($cid,'comment')) continue;
			$uedit->delete(1);
		}
		mcmessage('commentsetsucceed',"?action=comments$filterstr&page=$page");
	}
}else include(M_ROOT.$u_tplname);
?>