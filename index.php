<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="canonical" href="https://shinyoko-shusei.com/" />

  <meta
    name="description"
    content="守成クラブ新横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />

  <meta property="og:site_name" content="守成クラブ新横浜会場" />
  <meta property="og:url" content="https://shinyoko-shusei.com/" />
  <meta property="og:title" content="守成クラブ新横浜会場" />
  <meta
    property="og:description"
    content="守成クラブ新横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ja_JP" />
  <meta
    property="og:image"
    content="https://shinyoko-shusei.com/img/ogp.jpg" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="守成クラブ新横浜会場" />
  <meta
    name="twitter:description"
    content="守成クラブ新横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta name="twitter:url" content="https://shinyoko-shusei.com/" />
  <meta name="twitter:domain" content="shinyoko-shusei.com" />
  <meta
    name="twitter:image"
    content="https://shinyoko-shusei.com/img/ogp.jpg" />

  <title>守成クラブ｜新横浜会場</title>
  <link
    rel="icon"
    href="./img/site-icon.png"
    sizes="32x32"
    type="image/png" />
  <link
    rel="icon"
    href="./img/site-icon.png"
    sizes="192x192"
    type="image/png" />
  <link rel="apple-touch-icon" href="./img/site-icon.png" sizes="180x180" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="./css/ress.min.css" />

  <!-- CSS BootStrap CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <link rel="stylesheet" href="./css/my-bootstrap.css" />
  <link rel="stylesheet" href="./css/common.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/contact.css" />

  <!-- FV プリロード -->
  <link rel="preload" as="image" href="./img/fv.webp" />

  <!-- Google tag (gtag.js) -->
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-Z3TMZ3DZJQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-Z3TMZ3DZJQ");
  </script>
</head>

<body>
  <header class="header js-header container-fluid">
    <div class="header-wrapper container-fluid px-3 px-lg-5">
      <a class="header-logo-link" href="#main"><img
          class="header-logo"
          src="./img/heading-logo.png"
          alt="守成クラブ新横浜"
          width="399"
          height="160"
          loading="eager"
          decoding="async" /></a>
    </div>
  </header>

  <h1 class="title visually-hidden">守成クラブ新横浜会場</h1>

  <main id="main">
    <!-- FV -->
    <section class="fv js-fv slider container-fluid">
      <div class="fv-wrap">
        <picture aria-hidden="true">
          <img
            class="fv-bg"
            src="./img/fv.webp"
            alt=""
            width="1920"
            height="1080"
            decoding="async"
            fetchpriority="high" />
        </picture>
        <p
          class="fv-headline text-animate"
          data-text="新横浜の例会が始まる！"></p>
      </div>
    </section>

    <?php
    require_once __DIR__ . '/data/form_elements.php';

    $form_items      = $form_elements;
    $section_title   = '例会申し込みフォーム';
    $section_classes = 'application container mt-5';

    include __DIR__ . '/components/form_link.php';

    unset($form_items, $section_title, $section_classes);
    ?>

    <!-- 守成ロゴ -->
    <div class="shusei-logo-wrap container my-5">
      <img
        class="shusei-logo-img"
        src="./img/slider-logo.png"
        alt="守成クラブ"
        width="358"
        height="283"
        loading="lazy"
        decoding="async" />
    </div>

    <!-- CONTENTS -->
    <section id="about" class="about" aria-labelledby="about-title">
      <div class="about-wrap">
        <div class="delimiter container-fluid">
          <div class="section-title">
            <h2 id="about-title">Contents</h2>
          </div>

          <!-- タブメニュー -->
          <div
            class="about-list"
            role="tablist"
            aria-label="コンテンツ切替タブ"
            aria-orientation="horizontal">
            <button
              type="button"
              class="about-list-item is-btn-active"
              id="tab-meeting"
              role="tab"
              aria-selected="true"
              aria-controls="panel-meeting"
              tabindex="0">
              例会情報
            </button>
            <button
              type="button"
              class="about-list-item"
              id="tab-greeting"
              role="tab"
              aria-selected="false"
              aria-controls="panel-greeting"
              tabindex="-1">
              代表あいさつ
            </button>
            <button
              type="button"
              class="about-list-item"
              id="tab-introduction"
              role="tab"
              aria-selected="false"
              aria-controls="panel-introduction"
              tabindex="-1">
              世話人紹介
            </button>
            <button
              type="button"
              class="about-list-item"
              id="tab-about"
              role="tab"
              aria-selected="false"
              aria-controls="panel-about"
              tabindex="-1">
              守成クラブとは
            </button>
          </div>
        </div>
      </div>

      <!-- パネル群 -->
      <div class="about-contents-wrap container mb-3">
        <!-- meeting -->
        <div
          id="panel-meeting"
          class="about-contents is-contents-active"
          role="tabpanel"
          aria-labelledby="tab-meeting">
          <div class="about-meeting">
            <div class="about-img">
              <img
                class="mb-3"
                src="./img/meeting4.webp"
                alt="守成クラブ新横浜"
                width="1600"
                height="900"
                loading="lazy"
                decoding="async" />
            </div>
            <div class="about-text">
              <h2>例会情報</h2>

              <div class="schedule-group">
                <div
                  class="schedule mt-3"
                  data-start-date="2025-01-27T00:00:00+09:00"
                  data-end-date="2025-10-27T23:59:59+09:00">
                  <div>
                    <h3>第22回例会</h3>
                    <p class="meeting-date">日時:2025年10月27日(月)</p>
                  </div>
                </div>
              </div>
              <!-- .schedule-group -->

              <table class="meeting-table">
                <tbody>
                  <tr>
                    <th scope="row">
                      <span class="label">受 付 開 始</span><span class="colon">：</span>
                    </th>
                    <td>17:00</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <span class="label">ゲスト説明</span><span class="colon">：</span>
                    </th>
                    <td>
                      17:30～<span>
                        (ゲスト様は17:15までにお越しください)</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <span class="label">開 始 時 間</span><span class="colon">：</span>
                    </th>
                    <td>18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <span class="label">終 了 時 間</span><span class="colon">：</span>
                    </th>
                    <td>21:00</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <span class="label">例 会 費 用</span><span class="colon">：</span>
                    </th>
                    <td>6,000円(食事付き)</td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <span class="label">場　　所</span><span class="colon">：</span>
                    </th>
                    <td>
                      〒222-0033<br />
                      <span class="meeting-table-place">神奈川県横浜市港北区新横浜3-18-8</span><br />
                      アルカンシエル横浜
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- greeting -->
        <div
          id="panel-greeting"
          class="about-contents"
          role="tabpanel"
          aria-labelledby="tab-greeting"
          hidden>
          <div class="about-greeting container">
            <div class="about-img">
              <img
                class="mb-3"
                src="./img/sasagawa2.webp"
                alt="笹川代表"
                width="500"
                height="500"
                loading="lazy"
                decoding="async" />
            </div>
            <div class="about-text">
              <h2>代表あいさつ</h2>
              <h3>代表世話人　笹川 政吉</h3>
              <p>
                皆様こんにちは。2024 年 1 月 22 日に神奈川県で 12
                番目の会場、<br />
                「新横浜会場」を立ち上げる運びとなりました。<br />
                2021 年はコロナ渦の中、例会は時短になり、<br />
                懇親会もなくなり、なかなかビジネスにつながらなかったことも多かったと思います。<br />
                新型コロナウイルスの感染拡大が収まり、世の中はまた新たな秩序を求めて動き出しコロナと共存する時代が長く続くと考えられます。<br />
                新横浜会場は、新しい時代に向けて、皆様のビジネスを拡大できるチャンスある会場の一つとして
                皆様にご活用いただければと思います。
              </p>
            </div>
          </div>
        </div>

        <!-- introduction -->
        <section
          id="panel-introduction"
          class="about-contents"
          role="tabpanel"
          aria-labelledby="tab-introduction"
          hidden>
          <div class="about-introduction container">
            <div id="desc"></div>
            <div class="about-intro-wrapper container">
              <div class="about-intro-images">
                <div class="">
                  <div>
                    <span id="repTitle" class="fs-4">代表世話人</span>
                    <span>　</span>
                    <span id="repName" class="fs-4">笹川 政吉</span>
                  </div>
                  <img
                    id="mainImage"
                    src="./img/s1.JPEG"
                    alt="代表世話人 笹川政吉の写真"
                    class="img-fluid"
                    width="1076"
                    height="1522"
                    loading="lazy"
                    decoding="async" />
                </div>
              </div>
              <div class="about-intro-table">
                <div id="mainBio">
                  <br />
                  <table class="manager-table table table-bordered">
                    <tr>
                      <td>会社名</td>
                      <td>国際貿易YMG株式会社</td>
                    </tr>
                    <tr>
                      <td>役職</td>
                      <td>代表取締役</td>
                    </tr>
                    <tr>
                      <td>業種</td>
                      <td>
                        貿易業、貿易商社、外国人材紹介、オーダースーツFC本部
                      </td>
                    </tr>
                    <tr>
                      <td>会社PR</td>
                      <td>
                        貿易輸出入、外国人材紹介、日本語学校運営、オーダースーツ業、やってますのでご相談下さい
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex justify-content-center flex-wrap">
                    <div class="managers-box">
                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="笹川 政吉"
                          data-title="代表世話人"
                          data-img="./img/s1.JPEG"
                          data-bio='
                          <table class="manager-table table table-bordered mt-5">
                            <tr><td>会社名</td><td>国際貿易YMG株式会社</td></tr>
                            <tr><td>役職</td><td>代表取締役</td></tr>
                            <tr><td>業種</td><td>貿易業、貿易商社、外国人材紹介、オーダースーツFC本部</td></tr>
                            <tr><td>会社PR</td><td>貿易輸出入、外国人材紹介、日本語学校運営、オーダースーツ業、やってますのでご相談下さい</td></tr>
                          </table>'>
                          <p class="manager-text name mb-0">笹川 政吉</p>
                          <img
                            class="col-12"
                            src="./img/s1.JPEG"
                            alt="代表世話人 笹川 政吉の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">代表世話人</p>
                        </a>
                      </div>
                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="西川 毅"
                          data-title="副代表世話人"
                          data-img="./img/s2.JPEG"
                          data-bio='
                          <table class="manager-table table table-bordered mt-5">
                            <tr><td>会社名</td><td>東京海上あんしんエージェンシー</td></tr>
                            <tr><td>役職</td><td>代表</td></tr>
                            <tr><td>業種</td><td>生保・損保代理店</td></tr>
                            <tr><td>会社PR</td><td>皆様の不安をあんしんに変える為に、日々活動しております。よろしくお願い致します。</td></tr>
                          </table>'>
                          <p class="manager-text name mb-0">西川 毅</p>
                          <img
                            class="col-12"
                            src="./img/s2.JPEG"
                            alt="副代表世話人 西川 毅の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">副代表世話人</p>
                        </a>
                      </div>
                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="小林 陽子"
                          data-title="副代表世話人"
                          data-img="./img/s3.JPEG"
                          data-bio='
                        <table class="manager-table table table-bordered mt-5">
                          <tr><td>会社名</td><td>Ary</td></tr>
                          <tr><td>役職</td><td>代表</td></tr>
                          <tr><td>業種</td><td> 美容業</td></tr>
                          <tr><td>会社PR</td><td>桜木町でエステサロン経営、美容機器代理店よろしくお願い致します。</td></tr>
                        </table>'>
                          <p class="manager-text name mb-0">小林 陽子</p>
                          <img
                            class="col-12"
                            src="./img/s3.JPEG"
                            alt="副代表世話人 小林 陽子の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">副代表世話人</p>
                        </a>
                      </div>

                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="西村 慎太郎"
                          data-title="会計"
                          data-img="./img/s5.JPEG"
                          data-bio='
                        <table class="manager-table table table-bordered mt-5">
                          <tr><td>会社名</td><td>西村人事労務事務所</td></tr>
                          <tr><td>役職</td><td>代表</td></tr>
                          <tr><td>業種</td><td> 社会保険労務士</td></tr>
                          <tr><td>会社PR</td><td>社会保険労務士です。労働保険・社会保険の手続代行、給与計算、就業規則の作成・見直し、助成金申請、労務相談を中心にしっかりとお話を伺い、きめ細かなサポートを提供いたします。</td></tr>
                        </table>'>
                          <p class="manager-text name mb-0">西村 慎太郎</p>
                          <img
                            class="col-12"
                            src="./img/s5.JPEG"
                            alt="会計 西村 慎太郎の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">会計</p>
                        </a>
                      </div>
                    </div>

                    <div class="managers-box">
                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="冨澤 亮二"
                          data-title="世話人"
                          data-img="./img/s4.JPEG"
                          data-bio='
                        <table class="manager-table table table-bordered mt-5">
                          <tr><td>会社名</td><td>(有)ウェッブアイ</td></tr>
                          <tr><td>役職</td><td>取締役</td></tr>
                          <tr><td>業種</td><td>ITサービス業</td></tr>
                          <tr><td>会社PR</td><td>★新製品★オリーブ葉を主原料とした飲む日焼け止め！UVケアサプリメント「UV-OLEUROPEIN」【販売店(買取/委託)・販促支援など募集中】</td></tr>
                        </table>'>
                          <p class="manager-text name mb-0">冨澤 亮二</p>
                          <img
                            class="col-12"
                            src="./img/s4.JPEG"
                            alt="世話人 冨澤 亮二の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">世話人</p>
                        </a>
                      </div>

                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="森 穂高"
                          data-title="世話人"
                          data-img="./img/s6.JPEG"
                          data-bio='
                      <table class="manager-table table table-bordered mt-5">
                        <tr><td>会社名</td><td>もりしん未来ホーム</td></tr>
                        <tr><td>役職</td><td>代表取締役</td></tr>
                        <tr><td>業種</td><td>不動産業</td></tr>
                        <tr><td>会社PR</td><td>中古物件、訳あり物件、空き家、土地などの買取と再販売をメインに行ってます。ご自宅の不用品回収、遺品整理、家財の買取にも対応しております</td></tr>
                      </table>'>
                          <p class="manager-text name mb-0">森 穂高</p>
                          <img
                            class="col-12"
                            src="./img/s6.JPEG"
                            alt="世話人 森 穂高の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">世話人</p>
                        </a>
                      </div>

                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="渡邉 真澄"
                          data-title="世話人"
                          data-img="./img/s7.JPEG"
                          data-bio='
                      <table class="manager-table table table-bordered mt-5">
                        <tr><td>会社名</td><td>SOWEL</td></tr>
                        <tr><td>役職</td><td>店長</td></tr>
                        <tr><td>業種</td><td>酵素風呂サロン</td></tr>
                        <tr><td>会社PR</td><td>港北区樽町で、米ぬか100%風呂で、酵素風呂サロンをやっています。男性のお客様からも高評価頂いています。日々のストレス発散に是非ご活用下さい。</td></tr>
                      </table>'>
                          <p class="manager-text name mb-0">渡邉 真澄</p>
                          <img
                            class="col-12"
                            src="./img/s7.JPEG"
                            alt="世話人 渡邉 真澄の写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">世話人</p>
                        </a>
                      </div>

                      <div class="col-3 col-lg-2 mb-3 mx-1">
                        <a
                          href="#desc"
                          class="thumb mx-1"
                          data-name="安達 エリック"
                          data-title="世話人"
                          data-img="./img/s8.JPEG"
                          data-bio='
                      <table class="manager-table table table-bordered mt-5">
                        <tr><td>会社名</td><td>天然石卸ニッピ</td></tr>
                        <tr><td>役職</td><td>代表</td></tr>
                        <tr><td>業種</td><td>宝石商</td></tr>
                        <tr><td>会社PR</td><td>国内外から天然石ビーズや宝石、隕石ジュエリーなどの素材を卸売、オーダーメイドジュエリーや結婚・婚約指輪の製作、高額ジュエリーの卸売</td></tr>
                      </table>'>
                          <p class="manager-text name mb-0">安達 エリック</p>
                          <img
                            class="col-12"
                            src="./img/s8.JPEG"
                            alt="世話人 安達 エリックの写真"
                            loading="lazy" />
                          <p class="manager-text title mt-1">世話人</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- what-is-shusei -->
        <div
          id="panel-about"
          class="about-contents"
          role="tabpanel"
          aria-labelledby="tab-about"
          hidden>
          <div class="about-what-is-shusei container">
            <div class="about-img">
              <img
                class="mb-3"
                src="./img/group-photo3.webp"
                alt="守成クラブ集合写真"
                width="1168"
                height="777"
                loading="lazy"
                decoding="async" />
            </div>
            <div class="about-text">
              <h2>守成クラブとは</h2>
              <h3 class="my-2">
                守成クラブは、中小企業経営者かそれに準ずる方によって構成される、会員制の商談会！
              </h3>
              <p>
                2002年4月、日本商工振興会を運営母体に、守成クラブ創設者
                伊藤小一他17名で、 札幌からスタートしました。
              </p>
              <p>
                現在は全国に271を超える会場が存在、会員数は約30,000社を超えます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 例会申し込みボタン -->
    <?php
    require_once __DIR__ . '/data/form_elements.php';

    $form_items      = $form_elements;
    $section_title   = null; // 見出しなし
    $section_classes = 'application container my-5';

    include __DIR__ . '/components/form_link.php';

    unset($form_items, $section_title, $section_classes);
    ?>

    <!-- Venue -->
    <section class="venue container mt-5">
      <div class="venue-head-wrapper head-wrapper">
        <h2 class="venue-head">会場情報</h2>
      </div>

      <div class="venue-contents contents-container container mt-4">
        <div class="venue-desc-wrapper">
          <p class="venue-desc">〒222-0033</p>
          <p class="venue-desc">神奈川県横浜市港北区新横浜3-18-8</p>
          <p class="venue-desc">アルカンシエル横浜</p>
          <p class="venue-desc mt-3">
            TEL: <a href="tel:0454755670">045-475-5670</a>
          </p>
        </div>
        <div class="venue-img-wrapper img-wrapper">
          <img
            class="venue-img"
            src="./img/venue-img.webp"
            alt="会場イメージ"
            width="1671"
            height="1114"
            loading="lazy"
            decoding="async" />
        </div>
      </div>
    </section>

    <!-- Access -->
    <section class="access container mt-5">
      <div class="access-head-wrapper head-wrapper">
        <h2 class="access-head">会場アクセス</h2>
      </div>

      <div class="access-contents contents-container container mt-4">
        <div class="access-desc-wrapper">
          <p class="access-desc"><i class="fa-solid fa-train"></i> 電車</p>
          <p class="access-desc">
            JR東海道新幹線・JR横浜線「新横浜駅」北口より徒歩5分
          </p>
          <p class="access-desc">
            市営地下鉄ブルーライン「新横浜駅」10番出口より徒歩2分
          </p>
          <p class="access-desc">
            相鉄新横浜線「新横浜駅」10番出口より徒歩2分
          </p>
          <p class="access-desc">
            東急新横浜線「新横浜駅」10番出口より徒歩2分
          </p>
          <p class="access-desc mt-3"><i class="fa-solid fa-car"></i> 車</p>
          <p class="access-desc">東名高速道路横浜青葉ICより約10.5ｋｍ</p>
          <p class="access-desc">第三京浜道路港北ICより約2.7ｋｍ</p>
        </div>
        <div class="access-img-wrapper img-wrapper">
          <iframe
            class="access-google-map"
            title="アルカンシエル横浜の地図"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.7456660776184!2d139.61395097622542!3d35.51056663932948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ed1255acba3%3A0xef28325dfb262147!2z44Ki44Or44Kr44Oz44K344Ko44Or5qiq5rWcIGx1eGUgbWFyaWFnZQ!5e0!3m2!1sja!2sus!4v1740616300799!5m2!1sja!2sus"
            width="600"
            height="600"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <!-- annual-schedule -->
    <section class="annual-schedule container mt-5">
      <div class="annual-schedule-head-wrapper head-wrapper">
        <h2 class="annual-schedule-head">年間例会スケジュール</h2>
      </div>

      <div class="annual-schedule-table-wrapper mt-4">
        <table class="annual-schedule-table">
          <thead>
            <tr class="annual-schedule-table-th-row">
              <th>例会</th>
              <th>例会日</th>
              <th>出欠締切日</th>
              <th>キャンセル費用発生日</th>
            </tr>
          </thead>
          <tbody>
            <tr class="annual-schedule-table-tbody-row">
              <td>第13回</td>
              <td>1月 27日(月)</td>
              <td>1月 25日(土)</td>
              <td>1月 26日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第14回</td>
              <td>2月 24日(月)</td>
              <td>2月 22日(土)</td>
              <td>2月 23日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第15回</td>
              <td>3月 24日(月)</td>
              <td>3月 22日(土)</td>
              <td>3月 23日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第16回</td>
              <td>4月 28日(月)</td>
              <td>4月 26日(土)</td>
              <td>4月 27日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第17回</td>
              <td>5月 26日(月)</td>
              <td>5月 24日(土)</td>
              <td>5月 25日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第18回</td>
              <td>6月 23日(月)</td>
              <td>6月 21日(土)</td>
              <td>6月 22日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第19回</td>
              <td>7月 28日(月)</td>
              <td>7月 26日(土)</td>
              <td>7月 27日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第20回</td>
              <td>8月 25日(月)</td>
              <td>8月 23日(土)</td>
              <td>8月 24日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第21回</td>
              <td>9月 22日(月)</td>
              <td>9月 20日(土)</td>
              <td>9月 21日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第22回</td>
              <td>10月 27日(月)</td>
              <td>10月 25日(土)</td>
              <td>10月 26日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第23回</td>
              <td>11月 24日(月)</td>
              <td>11月 22日(土)</td>
              <td>11月 23日(日)</td>
            </tr>
            <tr class="annual-schedule-table-tbody-row">
              <td>第24回</td>
              <td>12月 22日(月)</td>
              <td>12月 20日(土)</td>
              <td>12月 21日(日)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="meeting-images container mt-5">
      <div class="meeting-images-head-wrapper head-wrapper">
        <h2 class="meeting-images-head">例会風景</h2>
      </div>

      <div class="container my-3">
        <p>2025年</p>
      </div>

      <div class="meeting-images-container container-fluid">
        <div class="meeting-images-row">
          <!-- <div class="meeting-item"> /* 1月 */
          <p>1月</p>
          <div class="image-wrapper slideshow" data-month="1">
            <img class="meeting-image expandable active" src="./img/click01.png" alt="2025年1月-1" loading="lazy" >
            <img class="meeting-image expandable" src="./img/click02.png" alt="2025年1月-2" loading="lazy" >
            <img class="meeting-image expandable" src="./img/click03.png" alt="2025年1月-3" loading="lazy" >
            <img class="meeting-image expandable" src="./img/click04.png" alt="2025年1月-4" loading="lazy" >
            <img class="meeting-image expandable" src="./img/click05.png" alt="2025年1月-5" loading="lazy" >
            <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div> -->
          <!-- <div class="meeting-item"> /* 2月 */
          <p>2月</p>
            <div class="image-wrapper slideshow" data-month="2">
              <img class="meeting-image expandable active" src="./img/click02.png" alt="2025年2月-1" loading="lazy" >
              <img class="meeting-image expandable" src="./img/click03.png" alt="2025年2月-2" loading="lazy" >
              <img class="meeting-image expandable" src="./img/click04.png" alt="2025年2月-3" loading="lazy" >
              <img class="meeting-image expandable" src="./img/click05.png" alt="2025年2月-4" loading="lazy" >
              <img class="meeting-image expandable" src="./img/click01.png" alt="2025年2月-5" loading="lazy" >
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
        </div> -->

          <div class="meeting-item">
            <p>3月</p>
            <div class="image-wrapper slideshow" data-month="3">
              <img
                class="meeting-image expandable active"
                src="./img/202503/3-1.JPEG"
                alt="2025年3月-1"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202503/3-2.JPEG"
                alt="2025年3月-2"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202503/3-3.JPEG"
                alt="2025年3月-3"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202503/3-4.JPEG"
                alt="2025年3月-4"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202503/3-5.JPEG"
                alt="2025年3月-5"
                loading="lazy" />
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
          </div>

          <div class="meeting-item">
            <p>4月</p>
            <div class="image-wrapper slideshow" data-month="4">
              <img
                class="meeting-image expandable active"
                src="./img/202504/4-1.JPEG"
                alt="2025年4月-1"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202504/4-2.JPEG"
                alt="2025年4月-2"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202504/4-3.JPEG"
                alt="2025年4月-3"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202504/4-4.JPEG"
                alt="2025年4月-4"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202504/4-5.JPEG"
                alt="2025年4月-5"
                loading="lazy" />
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
          </div>

          <div class="meeting-item">
            <p>5月</p>
            <div class="image-wrapper slideshow" data-month="5">
              <img
                class="meeting-image expandable active"
                src="./img/202505/5-1.JPEG"
                alt="2025年5月-1"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202505/5-2.JPEG"
                alt="2025年5月-2"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202505/5-3.JPEG"
                alt="2025年5月-3"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202505/5-4.JPEG"
                alt="2025年5月-4"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202505/5-5.JPEG"
                alt="2025年5月-5"
                loading="lazy" />
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
          </div>

          <div class="meeting-item">
            <p>6月</p>
            <div class="image-wrapper slideshow" data-month="6">
              <img
                class="meeting-image expandable active"
                src="./img/202506/6-1.JPEG"
                alt="2025年6月-1"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202506/6-2.JPEG"
                alt="2025年6月-2"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202506/6-3.JPEG"
                alt="2025年6月-3"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202506/6-4.JPEG"
                alt="2025年6月-4"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202506/6-5.JPEG"
                alt="2025年6月-5"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202506/6-6.JPEG"
                alt="2025年6月-6"
                loading="lazy" />
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
          </div>

          <!-- 7月分例会写真 -->
          <div class="meeting-item">
            <p>7月</p>
            <div class="image-wrapper slideshow" data-month="7">
              <img
                class="meeting-image expandable active"
                src="./img/202507/7-1.JPEG"
                alt="2025年7月-1"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202507/7-2.JPEG"
                alt="2025年7月-2"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202507/7-3.JPEG"
                alt="2025年7月-3"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202507/7-4.JPEG"
                alt="2025年7月-4"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202507/7-5.JPEG"
                alt="2025年7月-5"
                loading="lazy" />
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
          </div>

          <!-- 8月分例会写真 -->
          <div class="meeting-item">
            <p>8月</p>
            <div class="image-wrapper slideshow" data-month="8">
              <img
                class="meeting-image expandable active"
                src="./img/202508/8-1.JPEG"
                alt="2025年8月-1"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-2.JPEG"
                alt="2025年8月-2"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-3.JPEG"
                alt="2025年8月-3"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-4.JPEG"
                alt="2025年8月-4"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-5.JPEG"
                alt="2025年8月-5"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-6.JPEG"
                alt="2025年8月-6"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-7.JPEG"
                alt="2025年8月-7"
                loading="lazy" />
              <img
                class="meeting-image expandable"
                src="./img/202508/8-8.JPEG"
                alt="2025年8月-8"
                loading="lazy" />
              <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
            </div>
          </div>

          <div class="meeting-item">
            <p>9月</p>
            <div class="image-wrapper">
              <img
                class="meeting-image"
                src="./img/coming-soon.png"
                alt="準備中"
                loading="lazy" />
              <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年9月" loading="lazy" > -->
              <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
            </div>
          </div>
          <div class="meeting-item">
            <p>10月</p>
            <div class="image-wrapper">
              <img
                class="meeting-image"
                src="./img/coming-soon.png"
                alt="準備中"
                loading="lazy" />
              <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年10月" loading="lazy" > -->
              <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
            </div>
          </div>
          <div class="meeting-item">
            <p>11月</p>
            <div class="image-wrapper">
              <img
                class="meeting-image"
                src="./img/coming-soon.png"
                alt="準備中"
                loading="lazy" />
              <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年11月" loading="lazy" > -->
              <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
            </div>
          </div>
          <div class="meeting-item">
            <p>12月</p>
            <div class="image-wrapper">
              <img
                class="meeting-image"
                src="./img/coming-soon.png"
                alt="準備中"
                loading="lazy" />
              <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年12月" loading="lazy" > -->
              <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
            </div>
          </div>
        </div>
      </div>

      <!-- モーダル（拡大画像用） -->
      <div
        id="imageModal"
        class="modal"
        role="dialog"
        aria-modal="true"
        aria-label="画像ビューア"
        aria-describedby="caption">
        <button type="button" class="close" aria-label="閉じる">
          &times;
        </button>
        <button type="button" class="prev" aria-label="前の画像">
          &#10094;
        </button>
        <button type="button" class="next" aria-label="次の画像">
          &#10095;
        </button>

        <img id="modalImg" class="modal-content" alt="" />
        <p id="caption"></p>
      </div>
    </section>

    <!-- お問い合わせ -->
    <section class="contact mt-5">
      <div class="container">
        <div class="contact-headline">
          <h2>お問い合わせ</h2>
        </div>

        <form id="contact-form" action="confirm.php" method="post">
          <div class="form-group">
            <label for="memberType">会員区分:　<span class="any">任意</span></label>
            <select id="memberType" name="memberType">
              <option class="default" value="">--選択してください--</option>
              <option value="正会員【ゴールドバッチ】">
                正会員【ゴールドバッチ】
              </option>
              <option value="正会員【赤バッチ】">正会員【赤バッチ】</option>
              <option value="準会員【緑バッチ】">準会員【緑バッチ】</option>
              <option value="非会員">非会員</option>
            </select>
          </div>
          <div class="form-group">
            <label for="registrationLocation">登録会場:　<span class="any">任意</span></label>
            <input
              type="text"
              id="registrationLocation"
              name="registrationLocation"
              value="" />
          </div>
          <div class="form-group">
            <label for="companyName">会社名:　<span class="any">任意</span></label>
            <input type="text" id="companyName" name="companyName" value="" />
          </div>
          <div class="form-group">
            <label for="name">お名前:　<span class="required">必須</span></label>
            <input
              type="text"
              id="name"
              name="name"
              autocomplete="name"
              required />
          </div>
          <div class="form-group">
            <label for="kana">ふりがな:　<span class="required">必須</span></label>
            <input type="text" id="kana" name="kana" value="" required />
          </div>
          <div class="form-group">
            <label for="email">Email:　<span class="required">必須</span></label>
            <input
              id="email"
              name="email"
              type="email"
              autocomplete="email"
              required />
          </div>
          <div class="form-group">
            <label for="phone">連絡先:　<span class="required">必須</span></label>
            <input
              id="phone"
              name="phone"
              inputmode="tel"
              autocomplete="tel"
              required />
          </div>
          <div class="form-group">
            <label for="message">お問い合わせ内容:　<span class="required">必須</span></label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <div class="submit-btn-wrapper mt-5">
            <button type="submit" class="submit-btn btn btn-primary">
              <span class="submit-btn-text">確認画面へ</span>
            </button>
          </div>
        </form>

        <div id="form-result"></div>
      </div>
    </section>

    <!-- SNS icons & toTOP button -->
    <div id="toPageTop" class="bottom-components">
      <div class="bottom-components-wrapper">
        <a
          href="https://www.instagram.com/shinyokohama_syusei?igsh=M294NjVsNHMycG83&utm_source=qr"
          target="_blank"
          rel="noopener"><img
            class="sns-icons"
            src="./img/instagram.png"
            alt="Instagram"
            width="151"
            height="151"
            loading="lazy"
            decoding="async" /></a>
        <a
          href="https://www.facebook.com/groups/837003928068548/?locale=ja_JP"
          target="_blank"
          rel="noopener"><img
            class="sns-icons"
            src="./img/facebook.png"
            alt="Facebook"
            width="494"
            height="496"
            loading="lazy"
            decoding="async" /></a>
        <a href="https://lin.ee/umL7RKZ" target="_blank" rel="noopener"><img
            class="sns-icons"
            src="./img/line.png"
            alt="LINE"
            width="427"
            height="430"
            loading="lazy"
            decoding="async" /></a>
        <a class="totop" href="#" aria-label="ページ上部へ戻る"></a>
      </div>
    </div>
  </main>

  <footer class="container-fluid">
    <div class="footer-items">
      <div class="footer-logo-wrapper">
        <a href="#main"><img
            class="footer-logo"
            src="./img/footer-logo.png"
            alt="守成クラブ新横浜"
            width="419"
            height="173"
            loading="lazy"
            decoding="async" /></a>
      </div>
    </div>
    <div class="copyright">
      <p>© 2023 守成クラブ新横浜会場</p>
    </div>
  </footer>

  <!-- Font Awesome -->
  <script
    src="https://kit.fontawesome.com/e7eaec89a2.js"
    crossorigin="anonymous"></script>

  <script src="./js/app.js" defer></script>
  <script src="./js/contactform.js" defer></script>
</body>

</html>