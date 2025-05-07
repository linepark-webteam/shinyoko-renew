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
