<?php
if ($_POST) {
  if($_POST){
    $memberType = $_POST['memberType'];
    $registrationLocation = $_POST['registrationLocation'];
    $companyName = $_POST['companyName'];
    $firstName = $_POST['name'];
    $lastName = $_POST['kana'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $content = "会員区分: $memberType\n登録会場: $registrationLocation\n会社名: $companyName\n名前: $firstName\n姓: $lastName\nEmail: $email\n連絡先: $phone\nお問い合わせ内容: $message";

    // send email
    mail("ko.nagai.0801@gmail.com", "お問い合わせを受け付けました", $content, "From: $companyName <$email>");


    echo '<div class="contact-headline"><h3>お問い合わせを受け付けました。ありがとうございます。</h3></div>';
    // echo '<p>お問い合わせ内容は正常に送信されました。24時間以内に返信を差し上げます。</p>';
}
}
?>
