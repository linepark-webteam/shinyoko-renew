$(document).ready(function() {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'confirm.php',
            type: 'post',
            data: $('#contact-form').serialize(),
            success: function(result) {
                $('#form-result').html(result);
                $('#form-result').show();
                $('#contact-form').hide();
            }
        });
    });

    $(document).on('click', '#back-button', function() {
        $('#form-result').hide();
        $('#contact-form').show();
        fillFormWithData();
    });

    $(document).on('submit', '#confirm-form', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'sendmail.php',
            type: 'post',
            data: $('#confirm-form').serialize(),
            success: function(result) {
                $('#form-result').html(result);
            }
        });
    });

    function fillFormWithData() {
        // 各フィールドに確認画面で表示されていた値をセットします。
        $('#memberType').val($('#confirm-memberType').text());
        $('#registrationLocation').val($('#confirm-registrationLocation').text());
        $('#companyName').val($('#confirm-companyName').text());
        $('#name').val($('#confirm-firstName').text());
        $('#kana').val($('#confirm-lastName').text());
        $('#email').val($('#confirm-email').text());
        $('#phone').val($('#confirm-phone').text());
        $('#message').val($('#confirm-message').text());
        // 他のフィールドも同様にセット
    }
});