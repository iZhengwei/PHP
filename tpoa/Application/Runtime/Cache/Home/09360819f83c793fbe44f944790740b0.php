<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACT内容管理系统</title>

<link rel="stylesheet" type="text/css" href="/tpoa/Public/Images/css1/left_css.css" />

</head>
<SCRIPT language=JavaScript>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<body bgcolor="16ACFF">
<table width="98%" border="0" cellpadding="0" cellspacing="0" background="/tpoa/Public/Images/tablemde.jpg">
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_top.jpg" bgcolor="#16ACFF"></td>
  </tr>
  <tr>
    <td><TABLE width="97%" 
border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/tpoa/Public/Images/left_tt.gif) no-repeat">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <TD width="20"></TD>
                <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1); height=25>学科设置</TD>
            </tr>
        </table>            </TD>
          </TR>
        <TR>
          <TD><TABLE id='submenu1' cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Subject/index');?>" target=main>学科管理</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Subject/add');?>" target=main>添加学科</A></TD>
                </TR>

              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class='leftframetable' cellSpacing='0' cellPadding='0' width="97%" align=right border='0'>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/tpoa/Public/Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(5); height=25>学生设置</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id='submenu5' cellSpacing='0' cellPadding='0' width="100%" border='0'>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Student/index');?>" target=main>学生管理</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Student/add');?>" target=main>添加学生</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Kaoqin/index');?>" target=main>考勤管理</A> </TD>
                </TR>
                <TR>
                  <TD><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Kaoqin/add');?>" target=main>添加考勤</A> </TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class='leftframetable' cellSpacing='0' cellPadding='0' width="97%" align=right 
border='0'>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/tpoa/Public/Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(4); 
    height='25'>统计管理</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id='submenu4' cellSpacing='0' cellPadding='0' width="100%" border='0'>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/tpoa/Public/Images/closed.gif"></TD>
                  <TD height='23'><A href="<?php echo U('Kaoqin/tongji');?>" 
            target=main>考勤统计</A> </TD>
                </TR>

              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><table class="leftframetable" cellspacing="0" cellpadding="0" width="97%" align="right" 
border="0">
      <tbody>
        <tr>
          <td height="25" style="background:url(/tpoa/Public/Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20"></td>
          <td height="25" class="titledaohang" style="CURSOR: hand" onClick="showsubmenu(2);"><span class="STYLE1">常用功能</span></td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td><table id="submenu2" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tbody>
                <tr>
                  <td width="2%"><img src="/tpoa/Public/Images/closed.gif" /></td>
                  <td height="23"><a 
            href="<?php echo U('Info/index');?>" 
            target="main">信息管理</a></td>
                </tr>
                <tr>
                  <td><img src="/tpoa/Public/Images/closed.gif" /></td>
                  <td height="23"><a 
            href="<?php echo U('Info/add');?>" 
            target="main">添加信息</a></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="8">
	
<TABLE class='leftframetable' cellSpacing='1' cellPadding='1' width="97%" align=right 
border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/tpoa/Public/Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class='STYLE1' height='25'>系统信息</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD 
      height=105><span class="STYLE2"><IMG src="/tpoa/Public/Images/closed.gif">版权所有：www.itcast.cn<br>
              <IMG src="/tpoa/Public/Images/closed.gif">设计制作：www.itcast.cn<br>
              <IMG src="/tpoa/Public/Images/closed.gif">技术支持：<a href="http://www.itcast.cn" target="_blank">www.itcast.cn</a><br>
              <IMG src="/tpoa/Public/Images/closed.gif">帮助中心：<a href="http://www.itcast.cn" target="_blank">www.itcast.cn</a><br>
            <IMG src="/tpoa/Public/Images/closed.gif">系统版本：1.0</span></TD>
        </TR>
      </TBODY>
    </TABLE>	</td>
  </tr>
  <tr>
    <td height="5" background="/tpoa/Public/Images/tableline_bottom.jpg"></td>
  </tr>
</table>
</body></html>