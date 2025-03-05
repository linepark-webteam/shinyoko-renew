<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせ完了</title>
    <script>
        // IPアドレスを取得し、Google Analytics に送信する関数
        function sendUserIPToGA() {
            fetch("https://api64.ipify.org?format=json")
                .then(response => response.json())
                .then(data => {
                    // GA4 にIPアドレスを送信
                    gtag('event', 'user_ip', {
                        'user_ip': data.ip
                    });
                })
                .catch(error => console.error("IPアドレス取得エラー:", error));
        }

        // Google Analytics の gtag が読み込まれた後に実行
        window.onload = function() {
            sendUserIPToGA();
        };
    </script>
</head>

<body>
    <div class="contact-headline">
        <h3>お問い合わせを受け付けました。<br>ありがとうございます。</h3>
    </div>
    <!-- その他の完了メッセージや情報 -->
</body>

</html>