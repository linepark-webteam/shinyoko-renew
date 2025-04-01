// ★ 先に関数を定義
function attachImageContainerListener() {
    document.querySelectorAll(".img-container img").forEach((img) => {
      img.addEventListener("click", function () {
        const newSrc = this.getAttribute("src");
        const mainImageEl = document.getElementById("mainImage");
        if (mainImageEl) {
          mainImageEl.src = newSrc;
        }
      });
    });
  }
  
  // ★ thumbクリックの処理
  document.querySelectorAll(".thumb").forEach((thumb) => {
    thumb.addEventListener("click", function (e) {
      e.preventDefault();
  
      const name = this.dataset.name;
      const title = this.dataset.title;
      const bio = this.dataset.bio?.trim();
      const imgSrc = this.dataset.img;
  
      const repTitleEl = document.getElementById("repTitle");
      const repNameEl = document.getElementById("repName");
      const mainImageEl = document.getElementById("mainImage");
      const mainBioEl = document.getElementById("mainBio");
      const tableWrapper = document.querySelector(".about-intro-table");
      const imageWrapper = document.querySelector(".about-intro-images");
  
      if (repTitleEl) repTitleEl.textContent = title + " ";
      if (repNameEl) repNameEl.textContent = name;
      if (mainImageEl) mainImageEl.src = imgSrc;
  
      const isEmptyBio =
        !bio || /<table[^>]*>\s*<\/table>/.test(bio); // 空テーブル検出
  
      if (isEmptyBio) {
        // 経歴が空の場合
        if (mainBioEl) mainBioEl.innerHTML = "";
        if (tableWrapper) {
          tableWrapper.style.display = "none";
        }
        if (imageWrapper) {
          imageWrapper.style.alignItems = "center";
        }
      } else {
        // 経歴がある場合
        if (mainBioEl) {
          mainBioEl.innerHTML = bio;
          attachImageContainerListener(); // ★ここで関数が定義済みならOK
        }
        if (tableWrapper) {
          tableWrapper.style.removeProperty("display"); // ← ← ← display指定を確実に戻す
        }
        if (imageWrapper) {
          imageWrapper.style.alignItems = "flex-start";
        }
      }
    });
  });
  