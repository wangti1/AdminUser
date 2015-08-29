<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理系统</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1087" height="395" border="0" cellspacing="0">
    <tr>
      <td height="149" colspan="2"><img src="images/144727b4b4zbfbyhbmfv4a.jpg" width="1070" height="147" /></td>
    </tr>
    <tr>
      <td width="338" height="246"><img src="images/7.gif" width="320" height="233" /></td>
      <td width="745"><table width="492" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2" align="center">新用户注册</td>
          </tr>
        <tr>
          <td width="110" align="center">用户名</td>
          <td width="382"><label for="user_name"></label>
            <input type="text" name="user_name" id="user_name" /></td>
        </tr>
        <tr>
          <td align="center">密码</td>
          <td><label for="password"></label>
            <input type="text" name="password" id="password" /></td>
        </tr>
        <tr>
          <td align="center">确认密码</td>
          <td nowrap="nowrap"><label for="password"></label>
            <input type="text" name="password" id="password" />
            密码不一致，请重新输入！</td>
        </tr>
        <tr>
          <td align="center">真实姓名</td>
          <td><label for="true_name"></label>
            <input type="text" name="true_name" id="true_name" /></td>
        </tr>
        <tr>
          <td align="center">性别</td>
          <td><label for="sex"></label>
            <input type="radio" name="radio" id="radio" value="radio" />
            <label for="radio">男  
              <input type="radio" name="radio2" id="radio2" value="radio2" />
            女 
            <input type="radio" name="radio3" id="radio3" value="radio3" />
            保密</label></td>
        </tr>
        <tr>
          <td align="center">E-mail</td>
          <td><label for="email"></label>
            <input type="text" name="email" id="email" /></td>
        </tr>
        <tr>
          <td align="center">qq</td>
          <td><label for="qq"></label>
            <input type="text" name="qq" id="qq" /></td>
        </tr>
        <tr>
          <td align="center">电话</td>
          <td><label for="mobile"></label>
            <input type="text" name="mobile" id="mobile" /></td>
        </tr>
        <tr>
          <td align="center">地址</td>
          <td><label for="address"></label>
            <input type="text" name="address" id="address" /></td>
        </tr>
        <tr>
          <td align="center" nowrap="nowrap">密码提示问题</td>
          <td align="left"><label for="question"></label>
            <label for="select"></label>
            <select name="select" id="select">
            </select></td>
        </tr>
        <tr>
          <td align="center">答案</td>
          <td><label for="answer"></label>
            <input type="text" name="answer" id="answer" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="register" id="register" value="注册" />
            <input type="reset" name="reset" id="reset" value="重置" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>