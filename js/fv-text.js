document.addEventListener("DOMContentLoaded", function () {
    const textContainer = document.querySelector(".text-animate");
    
    if (!textContainer) return; // 要素が存在しない場合は処理を中断
  
    const text = textContainer.dataset.text; // data-text 属性から文字列を取得
  
    if (typeof text === "string" && text.length > 0) {
      let htmlContent = "";
  
      for (let char of text) {
        htmlContent += `<span class="character-animate">${char}</span>`;
      }
  
      textContainer.innerHTML = htmlContent; // HTMLに適用
    } else {
      console.error("data-text が設定されていません");
      return; // textが不適切なら処理を中止
    }
  
    const chars = document.querySelectorAll(".character-animate");
    let counter = 0;
  
    function animateCharacter() {
      if (counter < chars.length) {
        chars[counter].style.opacity = "1";
        chars[counter].style.transition = "opacity 0.3s ease-in-out";
        counter++;
  
        setTimeout(animateCharacter, 100); // 一文字ずつ出現させる間隔
      } else {
        // 全文字が表示された後、光るエフェクトを適用
        setTimeout(() => {
          chars.forEach(char => {
            char.style.textShadow = "0 0 10px rgba(255, 255, 255, 0.5)"; // ほのかに光らせる
            char.style.transition = "text-shadow 0.5s ease-in-out";
          });
        }, 500);
      }
    }
  
    animateCharacter();
  });
  