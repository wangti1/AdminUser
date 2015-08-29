<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "logout.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理系统</title>
</head>

<body>
<table width="1088" height="540" border="0">
  <tr>
    <td height="214" colspan="2"><p>&nbsp;</p>
    <p><img src="images/07t58PICjVm_1024.jpg" width="1078" height="212" /></p></td>
  </tr>
  <tr>
    <td width="503" height="208" rowspan="4"><img src="images/5.gif" width="500" height="333" /></td>
    <td width="575"><p>&nbsp;</p>
      <p>登陆成功</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>中国欢迎你：<?php echo $_SESSION['MM_username']; ?></td>
  </tr>
  <tr>
    <td height="86">修改您的资料</td>
  </tr>
  <tr>
    <td height="21"><a href="<?php echo $logoutAction ?>">注销登录</a></td>
  </tr>
</table>
</body>
</html>