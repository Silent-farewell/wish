<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<table class='table'>
		<tr>
			<th>ID</th>
			<th>发布者</th>
			<th>内容</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>

		<?php if(is_array($wish)): foreach($wish as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["username"]); ?></td>
				<td><?php echo (replace_phiz($v["content"])); ?></td>
				<td><?php echo (date('y-m-d H:i', $v["time"])); ?></td>
				<td>
					<a href="<?php echo U('Admin/MsgManage/delete', array('id' => $v['id']));?>">删除</a> <!--在模板上面不要用点语法-->
				</td>
			</tr><?php endforeach; endif; ?>

		<tr>
			<td colspan='5' align='center'>
				<?php echo ($page); ?>
			</td>
		</tr>
	</table>
</body>
</html>