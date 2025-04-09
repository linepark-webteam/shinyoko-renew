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
