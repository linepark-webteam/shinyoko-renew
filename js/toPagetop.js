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
