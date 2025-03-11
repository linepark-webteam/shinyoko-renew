// FV メッセージアニメーション
$(document).ready(function () {
    const $textContainer = $('.text-animate');
    const text = $textContainer.data('text'); 
  
    if (typeof text === 'string' && text.length > 0) {  // 文字列かつ空でない場合のみ実行
        let htmlContent = '';
  
        for (let char of text) {
            htmlContent += `<span class="character-animate">${char}</span>`;
        }
  
        $textContainer.html(htmlContent); // HTMLに適用
    } else {
        console.error("data-text が設定されていません");
        return; // textが不適切なら処理を中止
    }
  
    let chars = $('.character-animate');
    let counter = 0;
  
    function animateCharacter() {
        if (counter < chars.length) {
            $(chars[counter]).css({
                opacity: '1',
                transition: 'opacity 0.3s ease-in-out'
            });
            counter++;
  
            setTimeout(animateCharacter, 100); // 一文字ずつ出現させる間隔
        } else {
            // 全文字が表示された後、光るエフェクトを適用
            setTimeout(() => {
                chars.css({
                    textShadow: '0 0 10px rgba(255, 255, 255, 0.5)', // ほのかに光らせる
                    transition: 'text-shadow 0.5s ease-in-out'
                });
            }, 500);
        }
    }
  
    animateCharacter();
  });