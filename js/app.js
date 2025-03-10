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


// ページ内リンククリック時にヘッダーの高さを考慮 ＆ スムーススクロール
document.addEventListener("DOMContentLoaded", function () {
  const headerHeight = document.querySelector(".header").offsetHeight; // ヘッダーの高さ取得

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      
      if (targetElement) {
        e.preventDefault(); // デフォルトのジャンプ動作を防ぐ
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;
        
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth" // スムーズスクロール
        });
      }
    });
  });
});


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
  const topBtn=$('#page_top');
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
  });





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


// 例会風景 モーダルの制御
let currentIndex = 0; // 現在の画像のインデックス
let images = []; // 画像リスト

// 画像クリック時にモーダルを開く
function openModal(imgElement) {
  images = Array.from(document.querySelectorAll(".meeting-image.expandable")); // クリック可能な画像を取得
  currentIndex = images.indexOf(imgElement); // クリックした画像のインデックスを取得

  updateModalImage();
  document.getElementById("imageModal").style.display = "flex";

  // キーボードイベントを追加
  document.addEventListener("keydown", handleKeydown);
}

// モーダル内の画像を更新
function updateModalImage() {
  if (currentIndex >= 0 && currentIndex < images.length) {
    document.getElementById("modalImg").src = images[currentIndex].src;
    document.getElementById("caption").innerHTML = images[currentIndex].alt;
  }
}

// 次/前の画像へ移動
function changeImage(direction) {
  currentIndex += direction;

  // 範囲外に行かないように調整
  if (currentIndex < 0) {
    currentIndex = images.length - 1; // 最後の画像に移動
  } else if (currentIndex >= images.length) {
    currentIndex = 0; // 最初の画像に移動
  }

  updateModalImage();
}

// モーダルを閉じる
function closeModal() {
  document.getElementById("imageModal").style.display = "none";

  // キーボードイベントを削除
  document.removeEventListener("keydown", handleKeydown);
}

// キーボードの左右矢印キーに対応
function handleKeydown(event) {
  if (event.key === "ArrowLeft") {
    changeImage(-1);
  } else if (event.key === "ArrowRight") {
    changeImage(1);
  } else if (event.key === "Escape") {
    closeModal();
  }
}

// スワイプイベントの追加
let touchStartX = 0;
document.getElementById("imageModal").addEventListener("touchstart", function (event) {
  touchStartX = event.touches[0].clientX;
});

document.getElementById("imageModal").addEventListener("touchend", function (event) {
  let touchEndX = event.changedTouches[0].clientX;
  let diffX = touchStartX - touchEndX;

  if (diffX > 50) {
    changeImage(1); // スワイプ左で次の画像へ
  } else if (diffX < -50) {
    changeImage(-1); // スワイプ右で前の画像へ
  }
});

// 画像以外の部分をクリックでモーダルを閉じる
document.getElementById("imageModal").addEventListener("click", function (event) {
  if (event.target === this) {
    closeModal();
  }
});


// 申込みフォームの表示・非表示自動切換え
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