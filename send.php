<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="3; url=index.html"> 
<title>Untitled Document</title>
</head>

<body>
<?php 
$message = "
維鬘夏令營報名資料
姓名: $_POST[name]
生日: $_POST[YYYY]$_POST[month]$_POST[day]
性別: $_POST[sex]
電話: $_POST[phone]
email: $_POST[email]
";
mb_internal_encoding("UTF-8");
mb_send_mail("conversemomo@gmail.com,conversemomo@gmail.com", "維鬘夏令營報名資料", $message ,"From:send");
?>
</body>
</html>