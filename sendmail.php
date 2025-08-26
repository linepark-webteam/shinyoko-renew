<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require './secret/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 生値を取得（ここでは htmlspecialchars しない）
    $memberType           = $_POST['memberType'] ?? '';
    $registrationLocation = $_POST['registrationLocation'] ?? '';
    $companyName          = $_POST['companyName'] ?? '';
    $name                 = $_POST['name'] ?? '';
    $kana                 = $_POST['kana'] ?? '';
    $email                = $_POST['email'] ?? '';
    $phone                = $_POST['phone'] ?? '';
    $message              = $_POST['message'] ?? '';

    // 最低限のバリデーション
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit('メールアドレスの形式が正しくありません。');
    }

    // テキスト版（AltBody 用）：改行はそのまま
    $contentText =
        "会員区分: {$memberType}\n".
        "登録会場: {$registrationLocation}\n".
        "会社名: {$companyName}\n".
        "名前: {$name}\n".
        "ふりがな: {$kana}\n".
        "Email: {$email}\n".
        "連絡先: {$phone}\n".
        "お問い合わせ内容:\n{$message}";

    // HTML版（Body 用）：この瞬間だけエスケープ＋改行を <br> に
    $e = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
    $row = function($label, $value) use ($e) {
        return "<dt>{$e($label)}</dt><dd>".nl2br($e($value))."</dd>";
    };
    $contentHtml =
        "<p>新横浜会場HPお問い合わせフォームより、以下の内容でお問い合わせを受け付けました。</p>".
        "<dl>".
            $row('会員区分', $memberType).
            $row('登録会場', $registrationLocation).
            $row('会社名', $companyName).
            $row('名前', $name).
            $row('ふりがな', $kana).
            $row('Email', $email).
            $row('連絡先', $phone).
            $row('お問い合わせ内容', $message).
        "</dl>";

    $mail = new PHPMailer(true);
    $mail->CharSet  = 'UTF-8';
    // 必要に応じて有効化（日本語環境で文字化け回避に有効な場合あり）
    // $mail->Encoding = 'base64';

    try {
        // SMTP 設定
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;

        // --- ユーザー宛 ---
        $mail->setFrom('noreply@shinyoko-shusei.com', '守成クラブ新横浜｜お問い合わせサポート');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'お問い合わせありがとうございます';
        $mail->Body    = $contentHtml;
        $mail->AltBody = "新横浜会場HPお問い合わせフォームより、以下の内容でお問い合わせを受け付けました。\n\n".$contentText;

        $mail->send();

        // --- 管理者宛 ---
        $mail->clearAllRecipients(); // 受信者系を全クリア
        $mail->setFrom('noreply@shinyoko-shusei.com', '守成クラブ新横浜HP運営');
        $mail->addAddress('ywg.japan@gmail.com');
        $mail->addBCC('gapsmilegeek@gmail.com');
        $mail->addReplyTo($email, $name); // 返信でユーザーに返せるように

        $mail->Subject = '新横浜会場HPより、新しいお問い合わせがありました';
        $mail->Body    =
            "<p>新横浜会場HPお問い合わせフォームより、以下の内容で新規お問い合わせを受け付けました。</p>".
            "<dl>".
                $row('会員区分', $memberType).
                $row('登録会場', $registrationLocation).
                $row('会社名', $companyName).
                $row('名前', $name).
                $row('ふりがな', $kana).
                $row('Email', $email).
                $row('連絡先', $phone).
                $row('お問い合わせ内容', $message).
            "</dl>";
        $mail->AltBody = "新横浜会場HPより、新しいお問い合わせがありました。\n\n".$contentText;

        $mail->send();

        header('Location: thanks.php');
        exit;
    } catch (Exception $e) {
        echo "申し訳ありませんが、メッセージを送信できませんでした: " . $mail->ErrorInfo;
    }
}
