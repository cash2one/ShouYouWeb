<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="<?php echo U('Min/index?g=js');?>"></script>

</head>
<body onload="test();">
    <ul>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>账号：<?php echo ($vo["user_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</body>
</html>