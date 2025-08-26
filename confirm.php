<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 生値を保持（この段階では htmlspecialchars しない）
  $memberType           = trim($_POST['memberType'] ?? '');
  $registrationLocation = trim($_POST['registrationLocation'] ?? '');
  $companyName          = trim($_POST['companyName'] ?? '');
  $name                 = trim($_POST['name'] ?? '');
  $kana                 = trim($_POST['kana'] ?? '');
  $email                = trim($_POST['email'] ?? '');
  $phone                = trim($_POST['phone'] ?? '');
  $message              = trim($_POST['message'] ?? '');

  $_SESSION['formData'] = $_POST; // セッション保存（必要なら使用）

  $e = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
?>
  <div class="contact-container">
    <div class="confirm-headline-wrapper">
      <h2 class="confirm-headline mb-3">以下の内容でお問い合わせを受け付けます。ご確認ください。</h2>
    </div>

    <form id="confirm-form" action="sendmail.php" method="post">
      <!-- hidden は“そのまま”送る。属性用のエスケープのみ。 -->
      <input type="hidden" name="memberType" value="<?php echo $e($memberType); ?>">
      <input type="hidden" name="registrationLocation" value="<?php echo $e($registrationLocation); ?>">
      <input type="hidden" name="companyName" value="<?php echo $e($companyName); ?>">
      <input type="hidden" name="name" value="<?php echo $e($name); ?>">
      <input type="hidden" name="kana" value="<?php echo $e($kana); ?>">
      <input type="hidden" name="email" value="<?php echo $e($email); ?>">
      <input type="hidden" name="phone" value="<?php echo $e($phone); ?>">
      <!-- ★ 改行を壊さないため、message は hidden の textarea で送る -->
      <textarea name="message" hidden><?php echo $e($message); ?></textarea>

      <div class="confirm-group container">
        <div class="confirm-desc-wrapper">
          <div class="confirm-desc">
            <p>会員区分: <strong class="input-data"><?php echo $e($memberType); ?></strong></p>
            <p>登録会場: <strong class="input-data"><?php echo $e($registrationLocation); ?></strong></p>
            <p>会社名: <strong class="input-data"><?php echo $e($companyName); ?></strong></p>
            <p>お名前: <strong class="input-data"><?php echo $e($name); ?></strong></p>
            <p>ふりがな: <strong class="input-data"><?php echo $e($kana); ?></strong></p>
            <p>Email: <strong class="input-data"><?php echo $e($email); ?></strong></p>
            <p>連絡先: <strong class="input-data"><?php echo $e($phone); ?></strong></p>
            <p>お問い合わせ内容:<br>
              <strong class="input-data"><?php echo nl2br($e($message)); ?></strong>
            </p>
          </div>
        </div>

        <!-- 🔹 ボタンエリア：戻るは誤送信防止のため type="button" に -->
        <div class="d-flex justify-content-center mt-4">
          <button id="back-button" type="button" class="submit-btn btn btn-secondary flex-grow-1 me-2">
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
