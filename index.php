<?php require_once('Connections/member_con.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['user_name'])) {
  $loginUsername=$_POST['user_name'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "welcome.php";
  $MM_redirectLoginFailed = "loginFail.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_member_con, $member_con);
  
  $LoginRS__query=sprintf("SELECT user_name, password FROM user_admin WHERE user_name=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $member_con) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理系统</title>
<style type="text/css">
body,td,th {
	/* [disabled]font-size: 16px; */
}
body {
	background-color: #6CC;
	margin-left: 1px;
	margin-top: 1px;
	margin-right: 1px;
	margin-bottom: 1px;
}
</style>
</head>

<body>
<table width="1146" height="694" border="1">
  <tr>
    <td height="236" colspan="3"><img src="images/7e3e37dfa9ec8a13c6a75501f703918fa1ecc0a0.jpg" width="1147" height="228" /></td>
  </tr>
  <tr>
    <td width="307"><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
      <table width="307" height="149" border="1">
        <tr>
          <td height="23" colspan="2" align="center">会员登录</td>
        </tr>
        <tr>
          <td width="64" height="31">登录名</td>
          <td width="227"><label for="user_name">
            <input name="user_name" type="text" id="user_name" />
          </label></td>
        </tr>
        <tr>
          <td height="33" nowrap="nowrap">登录密码</td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2" align="center" nowrap="nowrap"><input type="submit" name="submit" id="submit" value="提交" />
            <input type="reset" name="reset" id="reset" value="重置" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2" align="center" nowrap="nowrap"><label for="password">注册新用户         找回密码</label></td>
        </tr>
      </table>
    </form></td>
    <td width="464" height="242">&nbsp;</td>
    <td width="364" rowspan="2"><img src="images/3.gif" width="360" height="446" align="texttop" /></td>
  </tr>
  <tr>
    <td width="307"><img src="images/1.gif" width="300" height="193" /></td>
    <td>版权所有，不得抄袭！！！！！！！！！！！！！！！！！</td>
  </tr>
</table>
</body>
</html>