/*************************************************
 * 守成クラブ新横浜 - メインスクリプト（app.js (統合＆修正版)）
 * 追加点：
 * - モーダルのフォーカス戻し＆フォーカストラップ（A11y）
 * - prefers-reduced-motion 対応（動きを減らす）
 * - inline の onclick を廃止（イベント委任）
 **************************************************/

// 動きを減らす設定（OS側）の検出
const PREFERS_REDUCED_MOTION = window.matchMedia(
  "(prefers-reduced-motion: reduce)"
).matches;

/* =======================
   ヘッダーの透過・解除
======================= */
document.addEventListener("DOMContentLoaded", function () {
  const fvElement = document.querySelector(".js-fv");
  const header = document.querySelector(".js-header");
  if (!fvElement || !header) return;

  function handleScroll() {
    const fvHeight = fvElement.clientHeight;
    if (window.scrollY > fvHeight) {
      header.classList.add("transform");
    } else {
      header.classList.remove("transform");
    }
  }
  window.addEventListener("scroll", handleScroll);
  handleScroll(); // 初期反映
});

/* ==================================================
   ページ内リンク：ヘッダー高さ考慮 + スクロール
   （reduce-motion時は即スクロール）
================================================== */
document.addEventListener("DOMContentLoaded", function () {
  const headerEl = document.querySelector(".header");
  const headerHeight = headerEl ? headerEl.offsetHeight : 0;

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href").substring(1);
      if (!targetId) return;
      const targetElement = document.getElementById(targetId);
      if (!targetElement) return;

      e.preventDefault();
      const targetPosition =
        targetElement.getBoundingClientRect().top +
        window.scrollY -
        headerHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: PREFERS_REDUCED_MOTION ? "auto" : "smooth",
      });
    });
  });
});

/* =======================
   タブメニュー（WAI-ARIA）
======================= */
document.addEventListener("DOMContentLoaded", function () {
  const tablist = document.querySelector('.about-list[role="tablist"]');
  if (!tablist) return;

  const tabs = Array.from(tablist.querySelectorAll('[role="tab"]'));
  const panels = Array.from(
    document.querySelectorAll('.about-contents[role="tabpanel"]')
  );

  function activateTab(tab, { setFocus = true } = {}) {
    tabs.forEach((t) => {
      t.setAttribute("aria-selected", "false");
      t.setAttribute("tabindex", "-1");
      t.classList.remove("is-btn-active");
    });

    panels.forEach((p) => {
      p.hidden = true;
      p.classList.remove("is-contents-active");
    });

    tab.setAttribute("aria-selected", "true");
    tab.setAttribute("tabindex", "0");
    tab.classList.add("is-btn-active");

    const panelId = tab.getAttribute("aria-controls");
    const panel = document.getElementById(panelId);
    if (panel) {
      panel.hidden = false;
      panel.classList.add("is-contents-active");
    }

    if (setFocus) tab.focus();
  }

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => activateTab(tab));
  });

  tablist.addEventListener("keydown", (e) => {
    const currentIndex = tabs.indexOf(document.activeElement);
    if (currentIndex === -1) return;

    let nextIndex = null;

    switch (e.key) {
      case "ArrowRight":
      case "Right":
        nextIndex = (currentIndex + 1) % tabs.length;
        e.preventDefault();
        break;
      case "ArrowLeft":
      case "Left":
        nextIndex = (currentIndex - 1 + tabs.length) % tabs.length;
        e.preventDefault();
        break;
      case "Home":
        nextIndex = 0;
        e.preventDefault();
        break;
      case "End":
        nextIndex = tabs.length - 1;
        e.preventDefault();
        break;
      case "Enter":
      case " ":
        activateTab(tabs[currentIndex], { setFocus: true });
        e.preventDefault();
        return;
      default:
        return;
    }

    if (nextIndex != null) {
      activateTab(tabs[nextIndex], { setFocus: true });
    }
  });

  const initiallySelected =
    tabs.find((t) => t.getAttribute("aria-selected") === "true") || tabs[0];
  if (initiallySelected) activateTab(initiallySelected, { setFocus: false });
});

/* =======================
   デリミタの背景（簡易パララックス）
   reduce-motion時は無効化
======================= */
document.addEventListener("DOMContentLoaded", function () {
  if (PREFERS_REDUCED_MOTION) return;
  const delimiter = document.querySelector(".delimiter");
  if (!delimiter) return;

  function updateBackgroundPosition() {
    const scrollTop = window.scrollY;
    const bgPosition = scrollTop / 2;
    delimiter.style.backgroundPosition = `center ${-bgPosition}px`;
  }
  window.addEventListener("scroll", updateBackgroundPosition);
  updateBackgroundPosition();
});

/* =======================
   ページトップに戻るボタン
======================= */
document.addEventListener("DOMContentLoaded", function () {
  const topBtn = document.getElementById("toPageTop");
  if (!topBtn) return;

  topBtn.style.opacity = "0";
  topBtn.style.visibility = "hidden";
  topBtn.style.transition =
    "opacity 0.3s ease-in-out, visibility 0.3s ease-in-out";

  function handleScroll() {
    if (window.scrollY > 80) {
      topBtn.style.opacity = "1";
      topBtn.style.visibility = "visible";
      topBtn.style.pointerEvents = "auto";
    } else {
      topBtn.style.opacity = "0";
      topBtn.style.visibility = "hidden";
      topBtn.style.pointerEvents = "none";
    }
  }
  window.addEventListener("scroll", handleScroll);
  handleScroll();
});

/* =======================
   FV メッセージアニメーション
   reduce-motion時は一括表示
======================= */
document.addEventListener("DOMContentLoaded", function () {
  const textContainer = document.querySelector(".text-animate");
  if (!textContainer) return;

  const text = textContainer.dataset.text;
  if (typeof text !== "string" || text.length === 0) {
    console.error("data-text が設定されていません");
    return;
  }

  if (PREFERS_REDUCED_MOTION) {
    textContainer.textContent = text;
    return;
  }

  textContainer.innerHTML = [...text]
    .map((c) => `<span class="character-animate">${c}</span>`)
    .join("");

  const chars = document.querySelectorAll(".character-animate");
  let counter = 0;

  function animateCharacter() {
    if (counter < chars.length) {
      chars[counter].style.opacity = "1";
      chars[counter].style.transition = "opacity 0.3s ease-in-out";
      counter++;
      setTimeout(animateCharacter, 100);
    } else {
      setTimeout(() => {
        chars.forEach((char) => {
          char.style.textShadow = "0 0 10px rgba(255, 255, 255, 0.5)";
          char.style.transition = "text-shadow 0.5s ease-in-out";
        });
      }, 500);
    }
  }
  animateCharacter();
});

/* =======================================
   例会風景 モーダルの制御（A11y対応込み）
   - inline onclick を使わず、イベント委任で起動
   - フォーカスを開閉で管理＋フォーカストラップ
======================================= */
let currentIndex = 0;
let images = [];
let lastFocused = null; // モーダルを開く直前のフォーカス

function updateModalImage() {
  if (currentIndex >= 0 && currentIndex < images.length) {
    const modalImg = document.getElementById("modalImg");
    const caption = document.getElementById("caption");
    if (!modalImg) return; // 念のため

    const src = images[currentIndex].src;
    const alt = images[currentIndex].alt || "";

    modalImg.src = src;
    modalImg.alt = alt;
    if (caption) caption.textContent = alt;
  }
}

function changeImage(direction) {
  currentIndex += direction;
  if (currentIndex < 0) currentIndex = images.length - 1;
  else if (currentIndex >= images.length) currentIndex = 0;
  updateModalImage();
}

function getFocusableIn(container) {
  return Array.from(
    container.querySelectorAll(
      'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    )
  ).filter((el) => !el.hasAttribute("disabled") && el.offsetParent !== null);
}

function trapFocus(e) {
  if (e.key !== "Tab") return;
  const modal = document.getElementById("imageModal");
  if (!modal || modal.style.display === "none") return;

  const focusables = getFocusableIn(modal);
  if (focusables.length === 0) return;

  const first = focusables[0];
  const last = focusables[focusables.length - 1];

  if (e.shiftKey) {
    if (document.activeElement === first) {
      e.preventDefault();
      last.focus();
    }
  } else {
    if (document.activeElement === last) {
      e.preventDefault();
      first.focus();
    }
  }
}

function openModal(imgElement) {
  lastFocused = document.activeElement;

  const scope = imgElement.closest(".slideshow") || document;
  images = Array.from(scope.querySelectorAll(".meeting-image.expandable"));
  currentIndex = images.indexOf(imgElement);
  updateModalImage();

  const modal = document.getElementById("imageModal");
  if (modal) {
    modal.style.display = "flex";
    // 初期フォーカスを閉じるボタンへ
    const closeBtn = modal.querySelector(".close");
    if (closeBtn) closeBtn.focus();
    // キーボード操作
    document.addEventListener("keydown", handleKeydown);
    modal.addEventListener("keydown", trapFocus);
  }
}

function closeModal() {
  const modal = document.getElementById("imageModal");
  if (modal) {
    modal.style.display = "none";
    modal.removeEventListener("keydown", trapFocus);
  }
  document.removeEventListener("keydown", handleKeydown);
  // 元の要素へフォーカスを戻す
  if (lastFocused && typeof lastFocused.focus === "function") {
    lastFocused.focus();
  }
}

function handleKeydown(event) {
  if (event.key === "ArrowLeft") changeImage(-1);
  else if (event.key === "ArrowRight") changeImage(1);
  else if (event.key === "Escape") closeModal();
}

// DOM構築後（モーダル内のイベント）
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("imageModal");
  if (!modal) return;

  let touchStartX = 0;
  modal.addEventListener("touchstart", function (event) {
    touchStartX = event.touches[0].clientX;
  });

  modal.addEventListener("touchend", function (event) {
    const touchEndX = event.changedTouches[0].clientX;
    const diffX = touchStartX - touchEndX;
    if (diffX > 50) changeImage(1);
    else if (diffX < -50) changeImage(-1);
  });

  // 背景クリックで閉じる
  modal.addEventListener("click", function (event) {
    if (event.target === this) closeModal();
  });
});

document.addEventListener("click", (e) => {
  // 画像そのもの or アイコン or 画像枠をクリックしたときに拾う
  const wrapper = e.target.closest(".image-wrapper");
  const clickedImg = e.target.closest(".meeting-image.expandable");
  const activeImgInWrapper = wrapper?.querySelector(
    ".meeting-image.expandable.active"
  );

  const img = clickedImg || activeImgInWrapper;
  if (img) {
    e.preventDefault();
    openModal(img);
    return;
  }

  // モーダル内ボタン
  if (e.target.closest("#imageModal .close")) {
    e.preventDefault();
    closeModal();
    return;
  }
  if (e.target.closest("#imageModal .prev")) {
    e.preventDefault();
    changeImage(-1);
    return;
  }
  if (e.target.closest("#imageModal .next")) {
    e.preventDefault();
    changeImage(1);
    return;
  }
});

/* =======================================
   例会風景：ビューポートに入るまで1枚目固定＋入ったら再生
   reduce-motion時は自動再生しない
======================================= */
const slideshowState = new WeakMap(); // el -> { index, timerId, running, images }

function initSlideshowElement(el) {
  const imgs = el.querySelectorAll(".meeting-image");
  if (imgs.length <= 1) return;

  imgs.forEach((img) => img.classList.remove("active"));
  imgs[0].classList.add("active");

  slideshowState.set(el, {
    index: 0,
    timerId: null,
    running: false,
    images: imgs,
  });
}

function startSlideshow(el) {
  if (PREFERS_REDUCED_MOTION) return; // 動きを減らす設定では再生しない
  const st = slideshowState.get(el);
  if (!st || st.running || st.images.length <= 1) return;

  st.running = true;
  st.timerId = setInterval(() => {
    const { images } = st;
    images[st.index].classList.remove("active");
    st.index = (st.index + 1) % images.length;
    images[st.index].classList.add("active");
  }, 3000);
}

function stopSlideshow(el) {
  const st = slideshowState.get(el);
  if (!st || !st.running) return;

  clearInterval(st.timerId);
  st.timerId = null;
  st.running = false;
}

function setupSlideshowsInView() {
  const slideshows = document.querySelectorAll(".slideshow");
  if (!slideshows.length) return;

  slideshows.forEach(initSlideshowElement);

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const el = entry.target;
        if (!slideshowState.has(el)) return;
        if (entry.isIntersecting) startSlideshow(el);
        else stopSlideshow(el);
      });
    },
    {
      root: null,
      threshold: 0.25,
    }
  );

  slideshows.forEach((el) => io.observe(el));
}

document.addEventListener("DOMContentLoaded", setupSlideshowsInView);

/* =======================================
   申込みフォームの表示・非表示自動切換え
======================================= */
document.addEventListener("DOMContentLoaded", function () {
  function toggleDisplayByDate() {
    const now = new Date();
    document.querySelectorAll(".schedule").forEach(function (element) {
      const startDate = new Date(element.dataset.startDate);
      const endDate = new Date(element.dataset.endDate);
      if (now >= startDate && now < endDate) {
        element.style.display = "flex";
      } else {
        element.style.display = "none";
      }
    });
  }
  toggleDisplayByDate();
  // setInterval(toggleDisplayByDate, 86400000);
});

/* =======================================================
   代表/世話人セクション：in-viewでアニメ解禁（入るまで静止）
   reduce-motion時はフェード演出を省略
======================================================= */

function setInitialProfile() {
  const firstThumb = document.querySelector(".thumb");
  const repTitleEl = document.getElementById("repTitle");
  const repNameEl = document.getElementById("repName");
  const mainImageEl = document.getElementById("mainImage");
  const mainBioEl = document.getElementById("mainBio");
  const tableWrapper = document.querySelector(".about-intro-table");
  const imageWrapper = document.querySelector(".about-intro-images");

  if (!firstThumb || !mainImageEl) return;

  const name = firstThumb.dataset.name || "";
  const title = firstThumb.dataset.title || "";
  const bio = (firstThumb.dataset.bio || "").trim();
  const imgSrc = firstThumb.dataset.img || "";

  if (repTitleEl) repTitleEl.textContent = title + " ";
  if (repNameEl) repNameEl.textContent = name;

  mainImageEl.src = imgSrc;

  const isEmptyBio = !bio || /<table[^>]*>\s*<\/table>/.test(bio);
  if (isEmptyBio) {
    if (mainBioEl) mainBioEl.innerHTML = "";
    if (tableWrapper) tableWrapper.classList.add("fade-out");
    if (imageWrapper) imageWrapper.style.alignItems = "center";
  } else {
    if (mainBioEl) mainBioEl.innerHTML = bio;
    if (tableWrapper) tableWrapper.classList.remove("fade-out");
    if (imageWrapper) imageWrapper.style.alignItems = "flex-start";
  }
}

let introArmed = false;

function armIntroAnimations() {
  if (introArmed) return;
  introArmed = true;

  if (PREFERS_REDUCED_MOTION) return; // フェード演出は省略

  const mainImageEl = document.getElementById("mainImage");
  const tableWrapper = document.querySelector(".about-intro-table");

  if (mainImageEl) {
    mainImageEl.classList.add("fade-in-once");
    mainImageEl.addEventListener(
      "animationend",
      () => mainImageEl.classList.remove("fade-in-once"),
      { once: true }
    );
  }
  if (tableWrapper && !tableWrapper.classList.contains("fade-out")) {
    tableWrapper.classList.add("fade-in-once");
    tableWrapper.addEventListener(
      "animationend",
      () => tableWrapper.classList.remove("fade-in-once"),
      { once: true }
    );
  }
}

function bindThumbClicks() {
  document.querySelectorAll(".thumb").forEach((thumb) => {
    thumb.addEventListener("click", function (e) {
      e.preventDefault();

      const name = this.dataset.name || "";
      const title = this.dataset.title || "";
      const bio = (this.dataset.bio || "").trim();
      const imgSrc = this.dataset.img || "";

      const repTitleEl = document.getElementById("repTitle");
      const repNameEl = document.getElementById("repName");
      const mainImageEl = document.getElementById("mainImage");
      const mainBioEl = document.getElementById("mainBio");
      const tableWrapper = document.querySelector(".about-intro-table");
      const imageWrapper = document.querySelector(".about-intro-images");

      if (repTitleEl) repTitleEl.textContent = title + " ";
      if (repNameEl) repNameEl.textContent = name;

      const isEmptyBio = !bio || /<table[^>]*>\s*<\/table>/.test(bio);

      const applyBio = () => {
        if (isEmptyBio) {
          if (mainBioEl) mainBioEl.innerHTML = "";
          if (tableWrapper) tableWrapper.classList.add("fade-out");
          if (imageWrapper) imageWrapper.style.alignItems = "center";
        } else {
          if (mainBioEl) {
            mainBioEl.innerHTML = bio;
          }
          if (tableWrapper) tableWrapper.classList.remove("fade-out");
          if (imageWrapper) imageWrapper.style.alignItems = "flex-start";
        }
      };

      if (!PREFERS_REDUCED_MOTION && introArmed && mainImageEl) {
        mainImageEl.classList.add("fade-out");
        setTimeout(() => {
          mainImageEl.src = imgSrc;
          applyBio();
          mainImageEl.classList.remove("fade-out");
          mainImageEl.classList.add("fade-in");
          setTimeout(() => mainImageEl.classList.remove("fade-in"), 300);
        }, 300);
      } else {
        if (mainImageEl) mainImageEl.src = imgSrc;
        applyBio();
      }
    });
  });
}

function observeIntroSection() {
  const target =
    document.querySelector(".about-intro-wrapper") ||
    document.querySelector(".about-introduction");
  if (!target) return;

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          armIntroAnimations();
          io.unobserve(target);
        }
      });
    },
    { root: null, threshold: 0.3 }
  );
  io.observe(target);
}

document.addEventListener("DOMContentLoaded", () => {
  setInitialProfile(); // 1枚目を静止表示
  bindThumbClicks(); // サムネにバインド
  observeIntroSection(); // in-view監視
});

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".meeting-image.expandable").forEach((img) => {
    img.tabIndex = 0; // フォーカス可能に
    img.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        openModal(img);
      }
    });
  });
});
