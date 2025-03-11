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
  