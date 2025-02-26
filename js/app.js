// ヘッダーの透過・解除
$(function () {
  // スクロールを開始したら
  $(window).on("scroll", function () {
    // ファーストビューの高さを取得
    mvHeight = $(".js-mv").height();
    if ($(window).scrollTop() > mvHeight) {
      // スクロールの位置がファーストビューより下の場合にclassを付与
      $(".js-header").addClass("transform");
    } else {
      // スクロールの位置がファーストビューより上の場合にclassを外す
      $(".js-header").removeClass("transform");
    }
  });
});

// fvのズームアウト
$(function(){
  $('.slider').slick({
    fade: true,
    arrows: false,
    autoplay:true,
    autoplaySpeed:1500,
    pauseOnFocus: false,
    pauseOnHover: false
  });
});

// fadeIn.js
// fv上のテキストのフェードイン
// $('.fv-headline').hide().fadeIn(1500);
// $('.fv-text').hide().fadeIn(1500);

// タブメニュー
$(function(){
  $('.about-list-item').on('click', function(){
    let index = $('.about-list-item').index(this);

    $('.about-list-item').removeClass('is-btn-active');
    $(this).addClass('is-btn-active');
    $('.about-contents').removeClass('is-contents-active');
    $('.about-contents').eq(index).addClass('is-contents-active');
  });
});

// デリミタの背景
$(window).on('scroll', function(){

  var scrollTop = $(window).scrollTop();
  var bgPosition = scrollTop / 2; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）

  if(bgPosition){
    $('.delimiter').css('background-position', 'center top -'+ bgPosition + 'px');
  }
});

// ページトップに戻るボタン
$(function(){
  var topBtn=$('#page_top');
  topBtn.hide();
    
  //ボタンの表示設定
  $(window).scroll(function(){
    if($(this).scrollTop()>80){
      // 画面を80pxスクロールしたら、ボタンを表示する
      topBtn.fadeIn();
    }else{
      // 画面が80pxより上なら、ボタンを表示しない
      topBtn.fadeOut();
    }
  });
  
  // ボタンをクリックしたら、スクロールして上に戻る
  topBtn.click(function(){
    $('body,html').animate({
    scrollTop: 0},500);
    return false;
  });
  
  });

  // contactform.js
  //ページを切り替えずに問い合わせ画面遷移
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
        $('#firstName').val($('#confirm-firstName').text());
        $('#lastName').val($('#confirm-lastName').text());
        $('#email').val($('#confirm-email').text());
        $('#phone').val($('#confirm-phone').text());
        $('#message').val($('#confirm-message').text());
        // 他のフィールドも同様にセット
    }
});

$(document).ready(function () {
  const $textContainer = $('.text-animate');
  const text = $textContainer.data('text');
  let htmlContent = '';

  for (let char of text) {
      htmlContent += `<span class="character-animate">${char}</span>`;
  }

  $textContainer.html(htmlContent);

  let chars = $('.character-animate');
  let counter = 0;

  function animateCharacter() {
      if (counter < chars.length) {
          $(chars[counter]).css('opacity', '1');
          counter++;

          setTimeout(animateCharacter, 100); // 一文字ずつ出現させる間隔
      } else {
          // 全文字が表示された後、ほのかに光らせるアニメーション
          $textContainer.css('opacity', '1');
      }
  }

  animateCharacter();
});
$(document).ready(function () {
  const $textContainer = $('.text-animate2');
  const text = $textContainer.data('text');
  let htmlContent = '';

  for (let char of text) {
      htmlContent += `<span class="character-animate2">${char}</span>`;
  }

  $textContainer.html(htmlContent);

  let chars = $('.character-animate2');
  let counter = 0;

  function animateCharacter() {
      if (counter < chars.length) {
          $(chars[counter]).css('opacity', '1');
          counter++;

          setTimeout(animateCharacter, 100); // 一文字ずつ出現させる間隔
      } else {
          // 全文字が表示された後、ほのかに光らせるアニメーション
          $textContainer.css('opacity', '1');
      }
  }

  animateCharacter();
});

// 世話人紹介
// imageData、bios、およびrepresentativesのデータ構造を定義します
const imageData = [
  {
    src: "./img/sasagawa2.webp",
    repName: "代表世話人",
    repTitle: "笹川 政吉",
  },
  {
    src: "./img/sasagawa3.webp",
    repName: "代表世話人",
    repTitle: "笹川 政吉",
  },
  {
    src: "./img/nishikawa1.webp",
    repName: "副代表世話人",
    repTitle: "西川 毅",
  },
  {
    src: "./img/tokuda1.webp",
    repName: "世話人",
    repTitle: "徳田 広美",
  },
  // 他の画像と関連情報も同様に追加
];

const bios = {
  "./img/sasagawa2.webp": `
    <table class="manager-table table table-bordered mt-5">
      <tr><td class="col-3 col-lg-2">会社名</td><td>国際貿易YMG株式会社</td></tr>
      <tr><td>役職</td><td>代表取締役</td></tr>
      <tr><td>業種</td><td>貿易業、貿易商社、外国人材紹介、オーダースーツFC本部</td></tr>
      <tr><td>会社PR</td><td>貿易輸出入、外国人材紹介、日本語学校運営、オーダースーツ業、やってますのでご相談下さい</td></tr>
    </table>
    <div class="img-container row">
      <a href="#desc" class="col-3"><img class="each-img4 col-12" src="./img/sasagawa2.webp" alt="笹川 政吉"></a>
      <a href="#desc" class="col-3"><img class="each-img5 col-12" src="./img/sasagawa3.webp" alt="笹川 政吉"></a>
    </div>`,
  "./img/nishikawa1.webp": `
        <table class="manager-table table table-bordered mt-5">
          <tr><td class="col-3 col-lg-2">会社名</td><td>東京海上あんしんエージェンシー</td></tr>
          <tr><td>役職</td><td>代表</td></tr>
          <tr><td>業種</td><td>生保・損保代理店</td></tr>
          <tr><td>会社PR</td><td>皆様の不安をあんしんに変える為に、日々活動しております。よろしくお願い致します。</td></tr>
        </table>`,
  "./img/tokuda1.webp": `
    <table class="manager-table table table-bordered mt-5">
      <tr><td class="col-3 col-lg-2">会社名</td><td>トータルビューティーサロン出逢い</td></tr>
      <tr><td>役職</td><td>代表</td></tr>
      <tr><td>業種</td><td>美容・健康</td></tr>
      <tr><td>会社PR</td><td>身体の内側から、外側からも心身経済共に豊かにする美容法、健康法、経営法を伝授！魔法のエステティシャン！</td></tr>
    </table>`,
  // 他の画像と略歴も同様に設定
};

const representatives = {
  "./img/sasagawa2.webp": {
    repTitle: "代表世話人",
    repName: "笹川 政吉",
  },
  "./img/sasagawa3.webp": {
    repTitle: "代表世話人",
    repName: "笹川 政吉",
  },
  "./img/nishikawa1.webp": {
    repTitle: "副代表世話人",
    repName: "西川 毅",
  },
  "./img/tokuda1.webp": {
    repTitle: "世話人",
    repName: "徳田 広美",
  },
  // 他の画像に対応する代表世話人のデータを追加
};

// メイン画像を変更する関数
function changeMainImage(newSrc) {
  const mainImg = document.getElementById("mainImage");
  if (mainImg) {
    mainImg.src = newSrc;
  }
}

// 画像コンテナの画像にイベントリスナーを設定する関数
function attachImageContainerListener() {
  document.querySelectorAll(".img-container img").forEach((img) => {
    img.addEventListener("click", function () {
      const newSrc = this.getAttribute("src");
      changeMainImage(newSrc);
    });
  });
}

// .thumbクラス要素に対するイベントリスナーを設定
document.querySelectorAll(".thumb").forEach((thumbnail) => {
  thumbnail.addEventListener("click", function () {
    // クリックされた要素から正しい画像ソースを取得
    const image = thumbnail.querySelector("img");
    const newSrc = image ? image.getAttribute("src") : null;

    // 新しいソースでメイン画像を更新
    if (newSrc && document.getElementById("mainImage")) {
      document.getElementById("mainImage").src = newSrc;
    }

    // 画像に対応する代表世話人情報を取得
    const repEach = representatives[newSrc];
    if (repEach) {
      const repTitleEl = document.getElementById("repTitle");
      const repNameEl = document.getElementById("repName");
      if (repTitleEl && repNameEl) {
        // "世話人" と "笹川 政吉" のように表示する
        repTitleEl.textContent = repEach.repTitle + " "; // タイトルを更新
        repNameEl.textContent = repEach.repName; // 名前を更新
      }
    }

    // mainBioと画像を更新
    const newHTML = bios[newSrc];
    if (newHTML && document.getElementById("mainBio")) {
      document.getElementById("mainBio").innerHTML = newHTML;
      attachImageContainerListener(); // mainBioの更新後にリスナーを再度設定
    }
  });
});

// 初期設定としてimg-containerにイベントリスナーを設定
attachImageContainerListener();



// 申込みフォームの表示・非表示自動切換え
// $(document).ready(function() {
//   function toggleDisplayByEndDate(elementClass, endDate) {
//     let now = new Date();
//     let end = new Date(endDate);

//     if (now <= end) {
//       $("." + elementClass).show();
//     } else {
//       $("." + elementClass).hide();
//     }
//   }
//   // 表示終了日時を指定
//   toggleDisplayByEndDate("schedule1", "2024-08-26T23:59:59");
//   toggleDisplayByEndDate("schedule2", "2024-09-23T23:59:59");
//   toggleDisplayByEndDate("schedule3", "2024-10-28T23:59:59");
//   // toggleDisplayByEndDate("schedule4", "2024-08-26T23:59:59");
// });

// new 申込みフォームの表示・非表示自動切換え
$(document).ready(function () {

  function toggleDisplayByDate() {
    const now = new Date();

    $(".schedule").each(function () {
      const startDate = new Date($(this).data("start-date"));
      const endDate = new Date($(this).data("end-date"));

      if (now >= startDate && now < endDate) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }

  // スケジュールデータの初期化とスケジュール表示の更新
  toggleDisplayByDate();

  // 指定した時間間隔でスケジュールの表示状態を更新
  // setInterval(toggleDisplayByDate, 86400000); // 毎日更新
});