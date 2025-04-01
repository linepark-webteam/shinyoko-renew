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
  
      if (mainImageEl) {
        // フェードアウト → 画像変更 → フェードイン
        mainImageEl.classList.add("fade-out");
        setTimeout(() => {
          mainImageEl.src = imgSrc;
          mainImageEl.classList.remove("fade-out");
        }, 300); // 0.3秒後に切り替え
      }
  
      const isEmptyBio =
        !bio || /<table[^>]*>\s*<\/table>/.test(bio); // 空テーブル検出
  
      if (isEmptyBio) {
        if (mainBioEl) mainBioEl.innerHTML = "";
        if (tableWrapper) tableWrapper.classList.add("fade-out"); // テーブル消す
        if (imageWrapper) imageWrapper.style.alignItems = "center";
      } else {
        if (mainBioEl) {
          mainBioEl.innerHTML = bio;
          attachImageContainerListener();
        }
        if (tableWrapper) tableWrapper.classList.remove("fade-out"); // テーブル表示
        if (imageWrapper) imageWrapper.style.alignItems = "flex-start";
      }
    });
  });
  