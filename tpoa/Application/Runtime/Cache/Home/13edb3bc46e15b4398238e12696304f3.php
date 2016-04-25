<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/tpoa/Public/Images/css1/css.css" rel="stylesheet" type="text/css">
<style>
td, th {
	text-align: center;
}
</style>
</head>
<body>
<form method='post' action=''>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th class="bg_tr" align="left" height="25">序号</th>
        <th class="bg_tr" align="left" height="25">题目</th>
        <th class="bg_tr" align="left" height="25">文件路径</th>
        <th class="bg_tr" align="left" height="25">内容</th>
        <th class="bg_tr" align="left" height="25">加入时间</th>
        <th class="bg_tr" align="left" height="25">下载</th>
        <th class="bg_tr" align="left" height="25"> 
        <input type='submit' name='deleteSubmit' onclick="return confirm('?')" value='删除' />
        </th>
      </tr>
      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td class="td_bg" width="5%" height="23" align="center"><?php echo ($vo["id"]); ?></td>
          <td class="td_bg"><?php echo ($vo["title"]); ?></td>
          <td class="td_bg"><?php echo ($vo["filepath"]); ?></td>
          <td class="td_bg"><?php echo ($vo["content"]); ?></td>
          <td class="td_bg"><?php echo ($vo["addtime"]); ?></td>
          <td class="td_bg"><a href="/tpoa/index.php/Home/Info/download/id/<?php echo ($vo["id"]); ?>">下载</a></td>
          <td class="td_bg"><input type='checkbox' value="" name='id[]' /></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr>
        <td colspan="10"><?php echo ($page); ?></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>