<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>用户名称</th>
			<th>上一次登陆时间</th>
			<th>上一次登陆IP</th>
			<th>锁定状态</th>
			<th>用户所属组别</th>
			<th>操作</th>
		</tr>

		<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["username"]); ?></td>
				<td><?php echo (date('y-m-d H:i', $v["logintime"])); ?></td>
				<td><?php echo ($v["loginip"]); ?></td>
				<td>
					<?php if($v["lock"]): ?>锁定<?php endif; ?>	
				</td>
				<td>
					<?php if($v["username"] == C("RBAC_SUPERADMIN")): ?>超级管理员
					<?php else: ?>
						<ul>
							<?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
						</ul><?php endif; ?>
				</td>
				<td>
					<a href="">锁定</a>
				</td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>