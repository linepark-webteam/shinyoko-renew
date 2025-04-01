// 代表情報の切り替え機能（data属性ベース）
document.querySelectorAll(".thumb").forEach((thumb) => {
  thumb.addEventListener("click", function (e) {
    e.preventDefault(); // ページ内リンクのジャンプ抑制

    const name = this.dataset.name;
    const title = this.dataset.title;
    const bio = this.dataset.bio;
    const imgSrc = this.dataset.img;

    // 各要素が存在するかを確認しつつ更新
    const repTitleEl = document.getElementById("repTitle");
    const repNameEl = document.getElementById("repName");
    const mainImageEl = document.getElementById("mainImage");
    const mainBioEl = document.getElementById("mainBio");

    if (repTitleEl) repTitleEl.textContent = title + " ";
    if (repNameEl) repNameEl.textContent = name;
    if (mainImageEl) mainImageEl.src = imgSrc;
    if (mainBioEl && bio) {
      mainBioEl.innerHTML = bio;

      // 再度 img-container 内の画像にイベント追加（サムネイルクリックでメイン画像変更）
      attachImageContainerListener();
    }
  });
});

// img-container 内の画像クリックでメイン画像を変更
function attachImageContainerListener() {
  document.querySelectorAll(".img-container img").forEach((img) => {
    img.addEventListener("click", function () {
      const newSrc = this.getAttribute("src");
      const mainImageEl = document.getElementById("mainImage");
      if (mainImageEl) mainImageEl.src = newSrc;
    });
  });
}

// 初回実行：img-container のサムネイル画像にもイベントを設定
attachImageContainerListener();
