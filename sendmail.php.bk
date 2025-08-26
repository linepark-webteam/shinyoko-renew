<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require './secret/config.php'; // 設定ファイルを読み込む

if ($_POST) {
    // 入力値のサニタイズ
    $memberType = htmlspecialchars($_POST['memberType'], ENT_QUOTES, 'UTF-8');
    $registrationLocation = htmlspecialchars($_POST['registrationLocation'], ENT_QUOTES, 'UTF-8');
    $companyName = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $kana = htmlspecialchars($_POST['kana'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

    $content = "会員区分: $memberType\n登録会場: $registrationLocation\n会社名: $companyName\n名前: $name\nふりがな: $kana\nEmail: $email\n連絡先: $phone\nお問い合わせ内容: $message";

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    try {
        //Server settings
        $mail->isSMTP(); // SMTPを使用する
        $mail->Host = SMTP_HOST; // config.phpからSMTPホストを読み込む
        $mail->SMTPAuth = true; // SMTP authentication を有効化
        $mail->Username = SMTP_USER; // config.phpからSMTPユーザー名を読み込む
        $mail->Password = SMTP_PASSWORD; // config.phpからSMTPパスワードを読み込む
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port = SMTP_PORT; // config.phpからポート番号を読み込む


        // ユーザーへの確認メール設定
        $mail->setFrom('noreply@shinyoko-shusei.com', '守成クラブ新横浜｜お問い合わせサポート');
        $mail->addAddress($email, $name); // ユーザーのメールアドレスを設定

        // メールの内容
        $mail->isHTML(true); // HTMLメールを設定
        $mail->Subject = 'お問い合わせありがとうございます';
        $mail->Body    = nl2br("新横浜会場HPお問い合わせフォームより、\n以下の内容でお問い合わせを受け付けました。\n\n" . $content); // HTML形式の本文

        $mail->send(); // ユーザーへメール送信

        // 管理者への通知メール
        $mail->clearAddresses(); // アドレスをクリア
        $mail->setFrom('noreply@shinyoko-shusei.com', '守成クラブ新横浜HP運営');
        $mail->addAddress('ywg.japan@gmail.com'); // 管理者のメールアドレス
        $mail->addBCC('gapsmilegeek@gmail.com'); // BCC で追加する管理者のメールアドレス
        $mail->Subject = '新横浜会場HPより、新しいお問い合わせがありました';
        $mail->Body    = nl2br("新横浜会場HPお問い合わせフォームより、\n新しいお問い合わせを以下の内容で受け付けました。\n\n" . $content);
        $mail->send(); // 管理者へメール送信

        header('Location: thanks.php'); // 送信後にサンクスページへリダイレクト
    } catch (Exception $e) {
        echo "申し訳ありませんが、メッセージを送信できませんでした: " . $mail->ErrorInfo;
    }
}
?>
