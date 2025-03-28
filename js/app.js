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
  "./img/s2.JPEG": `
        <table class="manager-table table table-bordered mt-5">
          <tr><td class="col-3 col-lg-2">会社名</td><td>東京海上あんしんエージェンシー</td></tr>
          <tr><td>役職</td><td>代表</td></tr>
          <tr><td>業種</td><td>生保・損保代理店</td></tr>
          <tr><td>会社PR</td><td>皆様の不安をあんしんに変える為に、日々活動しております。よろしくお願い致します。</td></tr>
        </table>`,
  // "./img/tokuda1.webp": `
  //   <table class="manager-table table table-bordered mt-5">
  //     <tr><td class="col-3 col-lg-2">会社名</td><td>トータルビューティーサロン出逢い</td></tr>
  //     <tr><td>役職</td><td>代表</td></tr>
  //     <tr><td>業種</td><td>美容・健康</td></tr>
  //     <tr><td>会社PR</td><td>身体の内側から、外側からも心身経済共に豊かにする美容法、健康法、経営法を伝授！魔法のエステティシャン！</td></tr>
  //   </table>`,
  "./img/s3.JPEG": `
    <table class="manager-table table table-bordered mt-5">
    </table>`,
  "./img/s4.JPEG": `
    <table class="manager-table table table-bordered mt-5">
    </table>`,
  "./img/s5.JPEG": `
    <table class="manager-table table table-bordered mt-5">
    </table>`,
  "./img/s6.JPEG": `
    <table class="manager-table table table-bordered mt-5">
    </table>`,
  "./img/s7.JPEG": `
    <table class="manager-table table table-bordered mt-5">
    </table>`,
};

const representatives = {
  "./img/s1.JPEG": {
    repTitle: "代表世話人",
    repName: "笹川 政吉",
  },
  // "./img/sasagawa2.webp": {
  //   repTitle: "代表世話人",
  //   repName: "笹川 政吉",
  // },
  // "./img/sasagawa3.webp": {
  //   repTitle: "代表世話人",
  //   repName: "笹川 政吉",
  // },
  "./img/s2.JPEG": {
    repTitle: "副代表世話人",
    repName: "西川 毅",
  },
  "./img/s3.JPEG": {
    repTitle: "副代表世話人",
    repName: "小林 陽子",
  },
  "./img/s4.JPEG": {
    repTitle: "世話人",
    repName: "冨澤 亮二",
  },
  "./img/s5.JPEG": {
    repTitle: "世話人",
    repName: "西村 慎太郎",
  },
  "./img/s6.JPEG": {
    repTitle: "世話人",
    repName: "森 穂高",
  },
  "./img/s7.JPEG": {
    repTitle: "世話人",
    repName: "渡邉 真澄",
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
