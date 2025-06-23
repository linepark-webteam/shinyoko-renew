// imageData、bios、およびrepresentativesのデータ構造を定義します
const imageData = [
  {
    src: "../img/sasagawa2.webp",
    repName: "代表世話人",
    repTitle: "笹川 政吉",
  },
  {
    src: "../img/sasagawa3.webp",
    repName: "代表世話人",
    repTitle: "笹川 政吉",
  },
  {
    src: "../img/nishikawa1.webp",
    repName: "世話人",
    repTitle: "西川 毅",
  },
  {
    src: "../img/tokuda1.webp",
    repName: "世話人",
    repTitle: "徳田 広美",
  },
  // 他の画像と関連情報も同様に追加
];

const bios = {
  "../img/sasagawa2.webp": `
    <table class="manager-table table table-bordered my-5">
      <tr><td class="col-2">会社名</td><td>国際貿易YMG株式会社</td></tr>
      <tr><td>役職</td><td>代表取締役</td></tr>
      <tr><td>業種</td><td>貿易業、貿易商社、外国人材紹介、オーダースーツFC本部</td></tr>
      <tr><td>会社PR</td><td>貿易輸出入、外国人材紹介、日本語学校運営、オーダースーツ業、やってますのでご相談下さい</td></tr>
    </table>
    <div class="img-container row">
      <a href="#desc" class="col-3"><img class="each-img4 col-12" src="../img/sasagawa2.webp" alt="笹川 政吉"></a>
      <a href="#desc" class="col-3"><img class="each-img5 col-12" src="../img/sasagawa3.webp" alt="笹川 政吉"></a>
    </div>`,
  "../img/nishikawa1.webp": `
        <table class="manager-table table table-bordered my-5">
          <tr><td class="col-2">会社名</td><td>東京海上あんしんエージェンシー</td></tr>
          <tr><td>役職</td><td>代表</td></tr>
          <tr><td>業種</td><td>生保・損保代理店</td></tr>
          <tr><td>会社PR</td><td>皆様の不安をあんしんに変える為に、日々活動しております。よろしくお願い致します。</td></tr>
        </table>`,
  "../img/tokuda1.webp": `
    <table class="manager-table table table-bordered my-5">
      <tr><td class="col-2">会社名</td><td>トータルビューティーサロン出逢い</td></tr>
      <tr><td>役職</td><td>代表</td></tr>
      <tr><td>業種</td><td>美容・健康</td></tr>
      <tr><td>会社PR</td><td>身体の内側から、外側からも心身経済共に豊かにする美容法、健康法、経営法を伝授！魔法のエステティシャン！</td></tr>
    </table>`,
  // 他の画像と略歴も同様に設定
};

const representatives = {
  "../img/sasagawa2.webp": {
    repTitle: "代表世話人",
    repName: "笹川 政吉",
  },
  "../img/sasagawa3.webp": {
    repName: "代表世話人",
    repTitle: "笹川 政吉",
  },
  "../img/nishikawa1.webp": {
    repTitle: "世話人",
    repName: "西川 毅",
  },
  "../img/tokuda1.webp": {
    repTitle: "世話人",
    repName: "徳田 広美",
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
