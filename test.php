<?php
session_start(); // セッションを開始

// フォームのデータをセッションから復元
$memberType = $_SESSION['formData']['memberType'] ?? '';
$registrationLocation = $_SESSION['formData']['registrationLocation'] ?? '';
$companyName = $_SESSION['formData']['companyName'] ?? '';
$name = $_SESSION['formData']['name'] ?? '';
$kana = $_SESSION['formData']['kana'] ?? '';
$email = $_SESSION['formData']['email'] ?? '';
$phone = $_SESSION['formData']['phone'] ?? '';
$message = $_SESSION['formData']['message'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="守成クラブ新横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta property="og:site_name" content="守成クラブ新横浜会場" />
  <meta property="og:url" content="https://shinyoko-shusei.online/" />
  <meta property="og:title" content="守成クラブ新横浜会場" />
  <meta property="og:description" content="守成クラブ新横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="守成クラブ新横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。">
  <meta name="twitter:title" content="守成クラブ新横浜会場">
  <meta name="twitter:url" content="https://shinyoko-shusei.online">
  <meta name="twitter:domain" content="shinyoko-shusei.com">
  <title>守成クラブ｜新横浜会場</title>
  <link rel="icon" href="./img/site-icon.png" sizes="32x32" />
  <link rel="icon" href="./img/site-icon.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="./img/site-icon.png" sizes="180x180">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="./css/ress.min.css" />

  <!-- CSS BootStrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="./css/my-bootstrap.css" />
  <link rel="stylesheet" href="./css/common.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/contact.css" />

  <!-- jQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- Google tag (gtag.js) new -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3TMZ3DZJQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Z3TMZ3DZJQ');
  </script>
</head>

<body>

  <header class="header js-header container-fluid">
    <div class="header-wrapper container-fluid px-3 px-lg-5">
      <a class="header-logo-link" href="#"><img class="header-logo" src="./img/heading-logo.png" alt="守成クラブ新横浜"
          loading="lazy" /></a>
      <!-- <h3 class="manager d-flex justify-content-end align-items-center col-3"><a href="../manager/">世話人紹介</a></h3> -->
    </div>
  </header>

  <h1 class="title" style="display: none;">守成クラブ新横浜会場</h1>

  <!-- FV -->
  <section class="fv js-fv slider container-fruid">
    <div class="fv-wrap">
      <p class="fv-headline text-animate" data-text="新横浜の例会が始まる！"></p>
    </div>
  </section>

  <section class="application container mt-5">
    <h2>例会申し込みフォーム</h2>

    <div class="schedule-group mt-3">

      <div class="application-btn schedule my-3" data-start-date="2025-03-15T00:00:00"
        data-end-date="2025-04-28T23:59:59">
        <a href="https://www.shuseiclub.jp/shinyokohama/entry_form/index.php?e=8866">
          <span class="label">第16回 4月28日(月) 例会お申し込みフォーム</span>
        </a>
      </div>

  </section>

  <!-- 守成ロゴ -->
  <div class="shusei-logo-wrap container my-5">
    <img class="shusei-logo-img" src="./img/slider-logo.png" alt="守成クラブ" loading="lazy">
  </div>

  <!-- CONTENTS -->
  <section class="about">

    <div class="about-wrap">
      <div class="delimiter container-fluid">
        <div class="section-title">
          <h2>Contents</h2>
        </div>
        <!-- タブメニューを構成するブロック -->
        <div class="about-list">
          <a class="about-list-item is-btn-active">例会情報</a>
          <a class="about-list-item">代表あいさつ</a>
          <a class="about-list-item">世話人紹介</a>
          <a class="about-list-item">守成クラブとは</a>
        </div>
      </div>
    </div>

    <!-- コンテンツブロック -->
    <div class="about-contents-wrap container mb-3">

      <!-- meeting -->
      <div class="about-contents is-contents-active">
        <div class="about-meeting">
          <div class="about-img">
            <img class="mb-3" src="./img/meeting4.webp" alt="例会時の写真" loading="lazy">
          </div>
          <div class="about-text">
            <h2>例会情報</h2>

            <div class="schedule-group">

              <div class="schedule" data-start-date="2025-01-27T00:00:00" data-end-date="2025-04-28T23:59:59">
                <h3>第16回例会</h3>
                <p class="meeting-date">日時:2025年4月28日(月) </p>
              </div>

            </div>

            <table class="meeting-table">
              <tbody>
                <tr>
                  <td><span class="label">受 付 開 始</span><span class="colon">：</span></td>
                  <td>17:00</td>
                </tr>
                <tr>
                  <td><span class="label">ゲスト説明</span><span class="colon">：</span></td>
                  <td>17:30～<span> (ゲスト様は17:15までにお越しください)</span></td>
                </tr>
                <tr>
                  <td><span class="label">開 始 時 間</span><span class="colon">：</span></td>
                  <td>18:00</td>
                </tr>
                <tr>
                  <td><span class="label">終 了 時 間</span><span class="colon">：</span></td>
                  <td>21:00</td>
                </tr>
                <tr>
                  <td><span class="label">例 会 費 用</span><span class="colon">：</span></td>
                  <td>6,000円(食事付き)</td>
                </tr>
                <tr>
                  <td><span class="label">場　　所</span><span class="colon">：</span></td>
                  <td>
                    〒222-0033<br>
                    <span class="meeting-table-place">神奈川県横浜市港北区新横浜3-18-8</span><br>
                    アルカンシエル横浜
                  </td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>
      </div>

      <!-- greeting -->
      <div class="about-contents">
        <div class="about-greeting container">
          <div class="about-img">
            <img class="mb-3" src="./img/sasagawa2.webp" alt="笹川代表" loading="lazy">
          </div>
          <div class="about-text">
            <h2>代表あいさつ</h2>
            <h3>代表世話人　笹川 政吉</h3>
            <p>
              皆様こんにちは。2024 年 1 月 22 日に神奈川県で 12 番目の会場、<br>
              「新横浜会場」を立ち上げる運びとなりました。<br>
              2021 年はコロナ渦の中、例会は時短になり、<br>
              懇親会もなくなり、なかなかビジネスにつながらなかったことも多かったと思います。<br>
              新型コロナウイルスの感染拡大が収まり、世の中はまた新たな秩序を求めて動き出しコロナと共存する時代が長く続くと考えられます。<br>
              新横浜会場は、新しい時代に向けて、皆様のビジネスを拡大できるチャンスある会場の一つとして 皆様にご活用いただければと思います。
            </p>
          </div>
        </div>
      </div>

      <!-- introduction -->
      <div class="about-contents">
        <div class="about-introduction container">

          <div id="desc"></div>
          <div class="about-intro-wrapper">
            <div class="about-intro-images">
              <div class="">
                <div>
                  <span id="repTitle" class="fs-4">代表世話人</span>
                  <span>　</span>
                  <span id="repName" class="fs-4">笹川 政吉</span>
                </div>
                <img id="mainImage" src="./img/s1.JPEG" alt="Main Image" class="img-fluid" loading="lazy">
              </div>
            </div>
            <div class="about-intro-table">
              <div id="mainBio">
                <br>
                <table class="manager-table row table table-bordered">
                  <tr>
                    <td class="col-3 col-lg-2">会社名</td>
                    <td>国際貿易YMG株式会社</td>
                  </tr>
                  <tr>
                    <td>役職</td>
                    <td>代表取締役</td>
                  </tr>
                  <tr>
                    <td>業種</td>
                    <td>貿易業、貿易商社、外国人材紹介、オーダースーツFC本部</td>
                  </tr>
                  <tr>
                    <td>会社PR</td>
                    <td>貿易輸出入、外国人材紹介、日本語学校運営、オーダースーツ業、やってますのでご相談下さい</td>
                  </tr>
                </table>
                <div class="img-container row">
                  <!-- <a href="#desc" class="col-3"><img class="each-img2 col-12" src="./img/sasagawa2.webp" alt="笹川 政吉" loading="lazy"></a> -->
                  <!-- <a href="#desc" class="col-3"><img class="each-img3 col-12" src="./img/sasagawa3.webp" alt="笹川 政吉" loading="lazy"></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-flex flex-wrap">

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="笹川 政吉" data-title="代表世話人" data-img="./img/s1.JPEG"
                      data-bio='
                        <table class="manager-table table table-bordered mt-5">
                          <tr><td class="col-3 col-lg-2">会社名</td><td>国際貿易YMG株式会社</td></tr>
                          <tr><td>役職</td><td>代表取締役</td></tr>
                          <tr><td>業種</td><td>貿易業、貿易商社、外国人材紹介、オーダースーツFC本部</td></tr>
                          <tr><td>会社PR</td><td>貿易輸出入、外国人材紹介、日本語学校運営、オーダースーツ業、やってますのでご相談下さい</td></tr>
                        </table>'>
                      <p class="manager-text name mb-0">笹川 政吉</p>
                      <img class="col-12" src="./img/s1.JPEG" alt="笹川 政吉" loading="lazy">
                      <p class="manager-text title mt-1">代表世話人</p>
                    </a>
                  </div>

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="西川 毅" data-title="副代表世話人" data-img="./img/s2.JPEG"
                      data-bio='
                        <table class="manager-table table table-bordered mt-5">
                          <tr><td class="col-3 col-lg-2">会社名</td><td>東京海上あんしんエージェンシー</td></tr>
                          <tr><td>役職</td><td>代表</td></tr>
                          <tr><td>業種</td><td>生保・損保代理店</td></tr>
                          <tr><td>会社PR</td><td>皆様の不安をあんしんに変える為に、日々活動しております。よろしくお願い致します。</td></tr>
                        </table>'>
                      <p class="manager-text name mb-0">西川 毅</p>
                      <img class="col-12" src="./img/s2.JPEG" alt="西川 毅" loading="lazy">
                      <p class="manager-text title mt-1">副代表世話人</p>
                    </a>
                  </div>

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="小林 陽子" data-title="副代表世話人" data-img="./img/s3.JPEG"
                      data-bio='<table class="manager-table table table-bordered mt-5"></table>'>
                      <p class="manager-text name mb-0">小林 陽子</p>
                      <img class="col-12" src="./img/s3.JPEG" alt="小林 陽子" loading="lazy">
                      <p class="manager-text title mt-1">副代表世話人</p>
                    </a>
                  </div>

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="冨澤 亮二" data-title="世話人" data-img="./img/s4.JPEG"
                      data-bio='<table class="manager-table table table-bordered mt-5"></table>'>
                      <p class="manager-text name mb-0">冨澤 亮二</p>
                      <img class="col-12" src="./img/s4.JPEG" alt="冨澤 亮二" loading="lazy">
                      <p class="manager-text title mt-1">世話人</p>
                    </a>
                  </div>

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="西村 慎太郎" data-title="世話人" data-img="./img/s5.JPEG"
                      data-bio='<table class="manager-table table table-bordered mt-5"></table>'>
                      <p class="manager-text name mb-0">西村 慎太郎</p>
                      <img class="col-12" src="./img/s5.JPEG" alt="西村 慎太郎" loading="lazy">
                      <p class="manager-text title mt-1">世話人</p>
                    </a>
                  </div>

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="森 穂高" data-title="世話人" data-img="./img/s6.JPEG"
                      data-bio='<table class="manager-table table table-bordered mt-5"></table>'>
                      <p class="manager-text name mb-0">森 穂高</p>
                      <img class="col-12" src="./img/s6.JPEG" alt="森 穂高" loading="lazy">
                      <p class="manager-text title mt-1">世話人</p>
                    </a>
                  </div>

                  <div class="col-3 col-lg-2 mb-3 mx-1">
                    <a href="#desc" class="thumb mx-1" data-name="渡邉 真澄" data-title="世話人" data-img="./img/s7.JPEG"
                      data-bio='<table class="manager-table table table-bordered mt-5"></table>'>
                      <p class="manager-text name mb-0">渡邉 真澄</p>
                      <img class="col-12" src="./img/s7.JPEG" alt="渡邉 真澄" loading="lazy">
                      <p class="manager-text title mt-1">世話人</p>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- whtis-shusei -->
      <div class="about-contents">
        <div class="about-whtis-shusei container">
          <div class="about-img">
            <img class="mb-3" src="./img/group-photo3.webp" alt="守成クラブ集合写真" loading="lazy">
          </div>
          <div class="about-text">
            <h2>守成クラブとは</h2>
            <h3 class="my-2">守成クラブは、中小企業経営者かそれに準ずる方によって構成される、会員制の商談会！</h3>
            <p>2002年4月、日本商工振興会を運営母体に、守成クラブ創設者 伊藤小一他17名で、
              札幌からスタートしました。</p>
            <p>現在は全国に271を超える会場が存在、会員数は約30,000社を超えます。</p>
          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- 例会申し込みボタン -->
  <section class="application container my-5">
    <div class="schedule-group">

      <div class="application-btn schedule" data-start-date="2025-01-27T00:00:00" data-end-date="2025-04-28T23:59:59">
        <a href="https://www.shuseiclub.jp/shinyokohama/entry_form/index.php?e=8866">
          <span class="label">第16回 4月28日(月) 例会お申し込みフォーム</span>
        </a>
      </div>

  </section>

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
        <p class="venue-desc mt-3">TEL: 045-475-5670</p>
      </div>
      <div class="venue-img-wrapper img-wrapper">
        <img class="venue-img" src="./img/image.webp" alt="会場イメージ" loading="lazy">
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
        <p class="access-desc">JR東海道新幹線・JR横浜線「新横浜駅」北口より徒歩5分</p>
        <p class="access-desc">市営地下鉄ブルーライン「新横浜駅」10番出口より徒歩2分</p>
        <p class="access-desc">相鉄新横浜線「新横浜駅」10番出口より徒歩2分</p>
        <p class="access-desc">東急新横浜線「新横浜駅」10番出口より徒歩2分</p>
        <p class="access-desc mt-3"><i class="fa-solid fa-car"></i> 車</p>
        <p class="access-desc">東名高速道路横浜青葉ICより約10.5ｋｍ</p>
        <p class="access-desc">第三京浜道路港北ICより約2.7ｋｍ</p>
      </div>
      <div class="access-img-wrapper img-wrapper">
        <iframe class="access-google-map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.7456660776184!2d139.61395097622542!3d35.51056663932948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ed1255acba3%3A0xef28325dfb262147!2z44Ki44Or44Kr44Oz44K344Ko44Or5qiq5rWcIGx1eGUgbWFyaWFnZQ!5e0!3m2!1sja!2sus!4v1740616300799!5m2!1sja!2sus"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        <div class="meeting-item">
          <p>1月</p>
          <div class="image-wrapper">
            <img class="meeting-image 
          expandable" src="./img/click01.png" alt="2025年1月" loading="lazy" onclick="openModal(this)">
            <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>
        <div class="meeting-item">
          <p>2月</p>
          <div class="image-wrapper">
            <!-- <img class="meeting-image" src="./img/coming-soon.png" alt=""> -->
            <img class="meeting-image expandable" src="./img/click02.png" alt="2025年2月" loading="lazy"
              onclick="openModal(this)">
            <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>
        <div class="meeting-item">
          <p>3月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image expandable" src="./img/coming-soon.png" alt="2025年3月" loading="lazy" onclick="openModal(this)">
            <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>4月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年4月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>5月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年5月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>6月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年6月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>7月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年7月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>8月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年8月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>9月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年9月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>10月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年10月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>11月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年11月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
        <div class="meeting-item">
          <p>12月</p>
          <div class="image-wrapper">
            <img class="meeting-image" src="./img/coming-soon.png" alt="" loading="lazy">
            <!-- <img class="meeting-image 
            expandable" src="./img/coming-soon.png" alt="2025年12月" loading="lazy" onclick="openModal(this)"> -->
            <!-- <i class="zoom-icon fa-solid fa-magnifying-glass-plus"></i> -->
          </div>
        </div>
      </div>

    </div>

    <!-- モーダル（拡大画像用） -->
    <div id="imageModal" class="modal">
      <span class="close" onclick="closeModal()">&times;</span>
      <img class="modal-content" id="modalImg">
      <div id="caption"></div>

      <!-- 前後の画像に切り替えるボタン -->
      <span class="prev" onclick="changeImage(-1)">&#10094;</span>
      <span class="next" onclick="changeImage(1)">&#10095;</span>
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
            <option value="正会員【ゴールドバッチ】" <?= ($memberType == "正会員【ゴールドバッチ】") ? 'selected' : '' ?>>正会員【ゴールドバッチ】</option>
            <option value="正会員【赤バッチ】" <?= ($memberType == "正会員【赤バッチ】") ? 'selected' : '' ?>>正会員【赤バッチ】</option>
            <option value="準会員【緑バッチ】" <?= ($memberType == "準会員【緑バッチ】") ? 'selected' : '' ?>>準会員【緑バッチ】</option>
            <option value="非会員" <?= ($memberType == "非会員") ? 'selected' : '' ?>>非会員</option>
          </select>
        </div>
        <div class="form-group">
          <label for="registrationLocation">登録会場:　<span class="any">任意</span></label>
          <input type="text" id="registrationLocation" name="registrationLocation" value="<?= htmlspecialchars($registrationLocation) ?>">
        </div>
        <div class="form-group">
          <label for="companyName">会社名:　<span class="any">任意</span></label>
          <input type="text" id="companyName" name="companyName" value="<?= htmlspecialchars($companyName) ?>">
        </div>
        <div class="form-group">
          <label for="name">お名前:　<span class="required">必須</span></label>
          <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" required>
        </div>
        <div class="form-group">
          <label for="kana">ふりがな:　<span class="required">必須</span></label>
          <input type="text" id="kana" name="kana" value="<?= htmlspecialchars($kana) ?>" required>
        </div>
        <div class="form-group">
          <label for="email">Email:　<span class="required">必須</span></label>
          <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
        </div>
        <div class="form-group">
          <label for="phone">連絡先:　<span class="required">必須</span></label>
          <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>" required>
        </div>
        <div class="form-group">
          <label for="message">お問い合わせ内容:　<span class="required">必須</span></label>
          <textarea id="message" name="message" required><?= htmlspecialchars($message) ?></textarea>
        </div>
        <div class="submit-btn-wrapper mt-5">
          <button type="submit" class="submit-btn btn btn-primary"><span class="submit-btn-text">確認画面へ</span></button>
        </div>
      </form>

      <div id="form-result"></div>
    </div>
  </section>

  <!-- SNS icons & toTOP button -->
  <div id="toPageTop" class="bottom-components container-fruid">
    <div class="bottom-components-wrapper">
      <a href="#" target="_blank"><img class="sns-icons" src="./img/instagram.png" alt="Instagram" loading="lazy"></a>
      <a href="https://www.facebook.com/groups/837003928068548/?locale=ja_JP" target="_blank"><img class="sns-icons" src="./img/facebook.png" alt="Facebook" loading="lazy"></a>
      <a href="#" target="_blank"><img class="sns-icons" src="./img/line.png" alt="LINE" loading="lazy"></a>
      <a class="totop" href="#"></a>
    </div>
  </div>

  <footer class="container-fluid">
    <div class="footer-items">
      <div class="footer-logo-wrapper">
        <a href="#"><img class="footer-logo" src="./img/footer-logo.png" alt="守成クラブ新横浜" loading="lazy" /></a>
      </div>
    </div>
    </div>
    <div class="copyright">
      <p>© 2023 守成クラブ新横浜会場</p>
    </div>
  </footer>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/e7eaec89a2.js" crossorigin="anonymous"></script>

  <script src="./js/app.js"></script>
  <script src="./js/introduction.js"></script>
  <script src="./js/contactform.js"></script>
</body>

</html>