<?php
  $name = trim(strip_tags($_POST["name"]));
  $surname = trim(strip_tags($_POST["surname"]));
  $phone = trim(strip_tags($_POST["phone"]));
  $email = trim(strip_tags($_POST["email"]));
  $subject = "заказ на консультацию";
  $msg = "Ваши данные формы регистрации:\n" ."Имя: $name\n" ."Фамилия: $surname\n" ."Ваш email: $email\n" ."телефон: $phone";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Ваше_имя <ваш_email>" . "\r\n";
  $headers .= "Bcc: ваш_email". "\r\n";
  if(!empty($name) && !empty($surname) && !empty( $phone) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($email, $subject, $msg, $headers);
    echo "Спасибо! Вы успешно зарегистрировались на консультацию.";
    }
?>