// contactform.js
$(document).ready(function () {
    // 確認画面へ遷移
    $("#contact-form").on("submit", function (e) {
      e.preventDefault();
      saveFormData(); // 🔹 送信前にデータを保存
      $.ajax({
        url: "confirm.php",
        type: "post",
        data: $("#contact-form").serialize(),
        success: function (result) {
          $("#form-result").html(result);
          $("#form-result").show();
          $("#contact-form").hide();
        },
      });
    });
  
    // 修正ボタンのクリックイベント
    $(document).on("click", "#back-button", function () {
      $("#form-result").hide();
      $("#contact-form").show();
      fillFormWithData(); // 🔹 修正時にデータを復元
    });
  
    // 送信処理（確認画面から送信）
    $(document).on("submit", "#confirm-form", function (e) {
      e.preventDefault();
      $.ajax({
        url: "sendmail.php",
        type: "post",
        data: $("#confirm-form").serialize(),
        success: function (result) {
          $("#form-result").html(result);
        },
      });
    });
  
    // フォームデータの保存（localStorage）
    function saveFormData() {
      const formData = {
        memberType: $("#memberType").val(),
        registrationLocation: $("#registrationLocation").val(),
        companyName: $("#companyName").val(),
        name: $("#name").val(),
        kana: $("#kana").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),
        message: $("#message").val(),
      };
  
      localStorage.setItem("formData", JSON.stringify(formData));
      console.log("保存されたデータ:", formData);
    }
  
    // フォームデータの復元
    function fillFormWithData() {
      const formData = JSON.parse(localStorage.getItem("formData"));
      if (formData) {
        console.log("復元するデータ:", formData);
        $("#memberType").val(formData.memberType || "");
        $("#registrationLocation").val(formData.registrationLocation || "");
        $("#companyName").val(formData.companyName || "");
        $("#name").val(formData.name || "");
        $("#kana").val(formData.kana || "");
        $("#email").val(formData.email || "");
        $("#phone").val(formData.phone || "");
        $("#message").val(formData.message || "");
      } else {
        console.warn("復元するデータが見つかりません");
      }
    }
  
    // 🔹 ページロード時にデータを復元（フォームページのみ）
    if (document.getElementById("contact-form")) {
      fillFormWithData();
    }
  });
  