// contactform.js

document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contact-form");
    const formResult = document.getElementById("form-result");
  
    if (contactForm) {
      // 確認画面へ遷移
      contactForm.addEventListener("submit", function (e) {
        e.preventDefault();
        saveFormData(); // 🔹 送信前にデータを保存
  
        const formData = new FormData(contactForm);
  
        fetch("confirm.php", {
          method: "POST",
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          formResult.innerHTML = result;
          formResult.style.display = "block";
          contactForm.style.display = "none";
        })
        .catch(error => console.error("エラー:", error));
      });
    }
  
    // 修正ボタンのクリックイベント
    document.addEventListener("click", function (e) {
      if (e.target && e.target.id === "back-button") {
        formResult.style.display = "none";
        contactForm.style.display = "block";
        fillFormWithData(); // 🔹 修正時にデータを復元
      }
    });
  
    // 送信処理（確認画面から送信）
    document.addEventListener("submit", function (e) {
      if (e.target && e.target.id === "confirm-form") {
        e.preventDefault();
  
        const confirmForm = e.target;
        const formData = new FormData(confirmForm);
  
        fetch("sendmail.php", {
          method: "POST",
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          formResult.innerHTML = result;
        })
        .catch(error => console.error("エラー:", error));
      }
    });
  
    // フォームデータの保存（localStorage）
    function saveFormData() {
      const formData = {
        memberType: document.getElementById("memberType")?.value || "",
        registrationLocation: document.getElementById("registrationLocation")?.value || "",
        companyName: document.getElementById("companyName")?.value || "",
        name: document.getElementById("name")?.value || "",
        kana: document.getElementById("kana")?.value || "",
        email: document.getElementById("email")?.value || "",
        phone: document.getElementById("phone")?.value || "",
        message: document.getElementById("message")?.value || ""
      };
  
      localStorage.setItem("formData", JSON.stringify(formData));
      console.log("保存されたデータ:", formData);
    }
  
    // フォームデータの復元
    function fillFormWithData() {
      const formData = JSON.parse(localStorage.getItem("formData"));
      if (formData) {
        console.log("復元するデータ:", formData);
        document.getElementById("memberType").value = formData.memberType || "";
        document.getElementById("registrationLocation").value = formData.registrationLocation || "";
        document.getElementById("companyName").value = formData.companyName || "";
        document.getElementById("name").value = formData.name || "";
        document.getElementById("kana").value = formData.kana || "";
        document.getElementById("email").value = formData.email || "";
        document.getElementById("phone").value = formData.phone || "";
        document.getElementById("message").value = formData.message || "";
      } else {
        console.warn("復元するデータが見つかりません");
      }
    }
  
    // 🔹 ページロード時にデータを復元（フォームページのみ）
    if (contactForm) {
      fillFormWithData();
    }
  });
  