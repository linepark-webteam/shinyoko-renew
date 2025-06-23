// ヘッダーの透過・解除
document.addEventListener("DOMContentLoaded", function () {
  const fvElement = document.querySelector(".js-fv");
  const header = document.querySelector(".js-header");

  if (!fvElement || !header) return; // 要素が存在しない場合は処理を中断

  function handleScroll() {
    const fvHeight = fvElement.clientHeight; // ファーストビューの高さを取得
    if (window.scrollY > fvHeight) {
      header.classList.add("transform"); // スクロール位置がファーストビューより下ならクラスを付与
    } else {
      header.classList.remove("transform"); // スクロール位置が上ならクラスを削除
    }
  }

  window.addEventListener("scroll", handleScroll);
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
document.addEventListener("DOMContentLoaded", function () {
  const tabItems = document.querySelectorAll(".about-list-item");
  const tabContents = document.querySelectorAll(".about-contents");

  if (!tabItems.length || !tabContents.length) return; // 要素が存在しない場合は処理を中断

  tabItems.forEach((item, index) => {
    item.addEventListener("click", function () {
      // すべてのタブから is-btn-active を削除
      tabItems.forEach(tab => tab.classList.remove("is-btn-active"));
      // クリックしたタブに is-btn-active を追加
      this.classList.add("is-btn-active");

      // すべてのコンテンツから is-contents-active を削除
      tabContents.forEach(content => content.classList.remove("is-contents-active"));
      // 対応するコンテンツに is-contents-active を追加
      tabContents[index].classList.add("is-contents-active");
    });
  });
});


// デリミタの背景
document.addEventListener("DOMContentLoaded", function () {
  const delimiter = document.querySelector(".delimiter");

  if (!delimiter) return; // 要素が存在しない場合は処理を中断

  function updateBackgroundPosition() {
    const scrollTop = window.scrollY; // スクロール量を取得
    const bgPosition = scrollTop / 2; // 背景の移動距離を調整

    delimiter.style.backgroundPosition = `center top -${bgPosition}px`;
  }

  window.addEventListener("scroll", updateBackgroundPosition);
});



// ページトップに戻るボタン
document.addEventListener("DOMContentLoaded", function () {
  const topBtn = document.getElementById("toPageTop");

  if (!topBtn) return; // 要素が存在しない場合は処理を中断

  // 初期状態で非表示
  topBtn.style.opacity = "0";
  topBtn.style.visibility = "hidden";
  topBtn.style.transition = "opacity 0.3s ease-in-out, visibility 0.3s ease-in-out";

  function handleScroll() {
    if (window.scrollY > 80) {
      topBtn.style.opacity = "1"; // フェードイン
      topBtn.style.visibility = "visible";
      topBtn.style.pointerEvents = "auto"; // クリック可能にする
    } else {
      topBtn.style.opacity = "0"; // フェードアウト
      topBtn.style.visibility = "hidden";
      topBtn.style.pointerEvents = "none"; // クリックできなくする
    }
  }

  window.addEventListener("scroll", handleScroll);
});




// FV メッセージアニメーション
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

function initSlideshows() {
  const slideshows = document.querySelectorAll('.slideshow');

  slideshows.forEach((slideshow) => {
    const images = slideshow.querySelectorAll('.meeting-image');
    let index = 0;

    if (images.length <= 1) return;

    // 最初の状態を確実にセット
    images.forEach(img => img.classList.remove('active'));
    images[0].classList.add('active');

    setInterval(() => {
      images[index].classList.remove('active');
      index = (index + 1) % images.length;
      images[index].classList.add('active');
    }, 3000); // 4秒おきに切り替え
  });
}

document.addEventListener("DOMContentLoaded", () => {
  initSlideshows();
});


// 申込みフォームの表示・非表示自動切換え
document.addEventListener("DOMContentLoaded", function () {
  function toggleDisplayByDate() {
    const now = new Date();

    document.querySelectorAll(".schedule").forEach(function (element) {
      const startDate = new Date(element.dataset.startDate);
      const endDate = new Date(element.dataset.endDate);

      if (now >= startDate && now < endDate) {
        element.style.display = "flex"; // 表示
      } else {
        element.style.display = "none"; // 非表示
      }
    });
  }

  // 初回実行（ページ読み込み時）
  toggleDisplayByDate();

  // 24時間ごとに更新（必要ならコメントを外す）
  // setInterval(toggleDisplayByDate, 86400000); // 毎日更新(単位㎳)
});
