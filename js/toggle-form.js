// 申込みフォームの表示・非表示自動切換え vanilla
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