<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
 <head>
  <title>camp78_reservation_sumit</title>
 </head>
 <body>
   <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $month = $_POST['month'];
      $date = $_POST['date'];
      $clock = $_POST['clock'];
      $time = $_POST['time'];
      $member = $_POST['member'];
      $yourname= $_POST['yourname'];
      $tel = $_POST['tel'];

      if(mb_send_mail($month, $date, $clock,$time,$member,$yourname,$tel)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
    ?>
 </body>
 </html>
