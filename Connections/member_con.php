<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_member_con = "localhost";
$database_member_con = "member";
$username_member_con = "root";
$password_member_con = "";
$member_con = mysql_pconnect($hostname_member_con, $username_member_con, $password_member_con) or trigger_error(mysql_error(),E_USER_ERROR); 
?>