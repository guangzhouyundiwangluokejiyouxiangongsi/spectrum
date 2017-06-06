<?php if (!defined('THINK_PATH')) exit();?>
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">ID</th>
							<th width="100">公司ID</th>
							<th width="90">公司名字</th>
							<th width="150">公司网址</th>
							<th width="250">公司地址</th>
							<th width="60">是否推荐</th>
							<th width="60">访问量</th>
							<th width="60">点赞量</th>
							<th width="60">审核结果</th>
							<th width="130">加入时间</th>
							<th width="100">操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($company_list)): foreach($company_list as $key=>$vv): ?><tr class="text-c">
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo ($vv["com_id"]); ?></td>
							<td><?php echo ($vv["com_storeid"]); ?></td>
							<td><?php echo ($vv["com_name"]); ?></td>
							<td>
							<?php if(is_array($vv[com_url])): foreach($vv[com_url] as $kk=>$vo): ?><a target="_blank" href="http://<?php echo ($vo); ?>"><?php echo ($vo); ?></a>
							<?php break; endforeach; endif; ?>
							</td>
							<td class="text-l"><?php echo ($vv["com_province"]); ?>,<?php echo ($vv["com_city"]); ?>,<?php echo ($vv["com_district"]); ?>,<?php echo ($vv["com_detailed"]); ?></td>
							<td><?php if($vv[com_is_rec]): ?><img src="/Public/img/yes.png" width="25%" onclick="qiehuan(this,'<?php echo ($vv["com_id"]); ?>')"><?php else: ?><img src="/Public/img/no.png" width="25%" onclick="qiehuan(this,'<?php echo ($vv["com_id"]); ?>')"><?php endif; ?></td>
							<td><input type="text" value="<?php echo ($vv["com_visit"]); ?>" class="input" onchange="save_visit(this,'<?php echo ($vv["com_id"]); ?>')"></td>
							<td><input type="text" value="<?php echo ($vv["com_praise"]); ?>" class="input" onchange="save_praise(this,'<?php echo ($vv["com_id"]); ?>')"></td>
							<td><?php echo ($vv["com_status"]); ?></td>
							<td><?php echo date('Y-m-d H:i:s',$vv[com_time]);;?></td>
							<td class="td-manage"><a target="_blank" href="<?php echo U('user/shenhe');?>?com_id=<?php echo ($vv["com_id"]); ?>">审核&nbsp;</a><a style="text-decoration:none" target="_blank" href="/CompanyInfo/details?id=<?php echo ($vv["com_id"]); ?>" title="进入该公司百科"><i class="Hui-iconfont">&#xe631;</i></a>  <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
						</tr><?php endforeach; endif; ?>
					</tbody>
				</table>
			</div>
			<td colspan="3" bgcolor="#FFFFFF"><div class="pages" style="text-align: center;">
			</div></td>