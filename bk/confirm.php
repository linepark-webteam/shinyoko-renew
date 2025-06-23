<?php
session_start(); // 🔹 セッションを開始

if ($_POST) {
  $_SESSION['formData'] = $_POST; // 🔹 セッションにフォームデータを保存

  // フォームデータを取得
  $memberType = htmlspecialchars($_POST['memberType'] ?? '');
  $registrationLocation = htmlspecialchars($_POST['registrationLocation'] ?? '');
  $companyName = htmlspecialchars($_POST['companyName'] ?? '');
  $name = htmlspecialchars($_POST['name'] ?? '');
  $kana = htmlspecialchars($_POST['kana'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $phone = htmlspecialchars($_POST['phone'] ?? '');
  $message = htmlspecialchars($_POST['message'] ?? '');
?>
  <div class="contact-container">
    <div class="confirm-headline-wrapper">
      <h2 class="confirm-headline mb-3">以下の内容でお問い合わせを受け付けます。ご確認ください。</h2>
    </div>
    <form id="confirm-form" action="sendmail.php" method="post">
      <input type="hidden" name="memberType" value="<?php echo $memberType; ?>">
      <input type="hidden" name="registrationLocation" value="<?php echo $registrationLocation; ?>">
      <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="kana" value="<?php echo $kana; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="phone" value="<?php echo $phone; ?>">
      <input type="hidden" name="message" value="<?php echo nl2br($message, false); ?>">

      <div class="confirm-group container">
        <div class="confirm-desc-wrapper">
          <div class="confirm-desc">
            <p>会員区分: <strong class="input-data"><?php echo $memberType; ?></strong></p>
            <p>登録会場: <strong class="input-data"><?php echo $registrationLocation; ?></strong></p>
            <p>会社名: <strong class="input-data"><?php echo $companyName; ?></strong></p>
            <p>お名前: <strong class="input-data"><?php echo $name; ?></strong></p>
            <p>ふりがな: <strong class="input-data"><?php echo $kana; ?></strong></p>
            <p>Email: <strong class="input-data"><?php echo $email; ?></strong></p>
            <p>連絡先: <strong class="input-data"><?php echo $phone; ?></strong></p>
            <p>お問い合わせ内容:<br> <strong class="input-data"><?php echo nl2br($message); ?></strong></p>
          </div>
        </div>

        <!-- 🔹 ボタンエリア -->
        <div class="d-flex justify-content-center mt-4">
          <button id="back-button" class="submit-btn btn btn-secondary flex-grow-1 me-2">
            <span class="submit-btn-text">修正する</span>
          </button>

          <button type="submit" class="submit-btn btn btn-primary text-right">
            <span class="submit-btn-text">送信する</span>
          </button>
        </div>
      </div>
    </form>
  </div>

<?php
}
?>
