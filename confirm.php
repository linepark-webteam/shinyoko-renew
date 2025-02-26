<?php
if ($_POST) {
  // フォームからのデータを処理
  $memberType = htmlspecialchars($_POST['memberType']);
  $registrationLocation = htmlspecialchars($_POST['registrationLocation']);
  $companyName = htmlspecialchars($_POST['companyName']);
  $name = htmlspecialchars($_POST['name']);
  $kana = htmlspecialchars($_POST['kana']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = htmlspecialchars($_POST['message']);

?>

  <div class="contact-container">
    <div class="contact-headline">
      <h3>以下の内容でお問い合わせを受け付けます。ご確認ください。</h3>
    </div>
    <form id="confirm-form" action="sendmail.php" method="post" style="
        display: flex;
        justify-content: center;
        font-size: calc(16px + 8 * ((100vw - 320px) / 1120));
    ">
      <input type="hidden" name="memberType" value="<?php echo $memberType; ?>">
      <input type="hidden" name="registrationLocation" value="<?php echo $registrationLocation; ?>">
      <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="kana" value="<?php echo $kana; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="phone" value="<?php echo $phone; ?>">
      <input type="hidden" name="message" value="<?php echo $message; ?>">

      <div class="confirm-group">
        <p>会員区分: <strong class="input-data"> <?php echo $memberType; ?></strong></p>
        <p>登録会場: <strong class="input-data"> <?php echo $registrationLocation; ?></strong></p>
        <p>会社名: <strong class="input-data"><?php echo $companyName; ?></strong></p>
        <p>お名前: <strong class="input-data"><?php echo $name; ?></strong></p>
        <p>ふりがな: <strong class="input-data"><?php echo $kana; ?></strong></p>
        <p>Email: <strong class="input-data"><?php echo $email; ?></strong></p>
        <p>連絡先: <strong class="input-data"><?php echo $phone; ?></strong></p>
        <p>お問い合わせ内容:<br> <strong class="input-data"><?php echo $message; ?></strong></p>
        <input class="contact-submit" type="submit" value="送信する" style="
            display: flex;
            margin: 5vw auto 0;
            padding: 2vw 9vw;
            border-radius: 2vw;
            background: #4663b2;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
            font-size: calc(16px + 8 * ((100vw - 320px) / 1120));"
            >
      </div>
      </div>
  </form>
  <!-- <button id="back-button" class="back-button">修正する</button> -->

<?php
}
?>