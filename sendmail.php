<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="3; url=index.html"> 
<title>Untitled Document</title>
</head>

<body>
<?php
    require_once('./phpmailer/PHPMailerAutoload.php');
    $C_name=$_POST['C_name'];
    $C_email=$_POST['C_email'];
    $C_tel=$_POST['C_tel'];
    $C_message=$_POST['C_message'];
   
    $mail= new PHPMailer();                          //建立新物件
    $mail->IsSMTP();                                    //設定使用SMTP方式寄信
    $mail->SMTPAuth = true;                        //設定SMTP需要驗證
    $mail->SMTPSecure = "ssl";                    // Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com";             //Gamil的SMTP主機
    $mail->Port = 465;                                 //Gamil的SMTP主機的埠號(Gmail為465)。
    $mail->CharSet = "utf-8";                       //郵件編碼
    $mail->Username = "conversemomo@gmail.com"; //Gamil帳號
    $mail->Password = "ABCabc910";                 //Gmail密碼
    $mail->From = "XXXX@gmail.com";        //寄件者信箱
    $mail->FromName = "XXXX";                  //寄件者姓名
    $mail->Subject ="來自".$name."留言"; //郵件標題
    $mail->Body = "姓名:".$name."<br />信箱:".$email."<br />電話:".$phone."<br />生日:".$YYYY.$month.$day; //郵件內容
    $mail->IsHTML(true);                             //郵件內容為html
    $mail->AddAddress("$name");            //收件者郵件及名稱
    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
    }else{
        echo "<b>感謝您的報名，幾秒後將會轉自首頁。</b>";
    }
?>
</body>
</html>