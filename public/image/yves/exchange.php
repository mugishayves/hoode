<?php
// exchange.php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Print the JSON format of the posted data
  $data = json_encode($_POST);
  $youSendValue = $_POST["youSendValue"];
  $youReceiveValue = $_POST["youReceiveValue"];
  $youSendId = $_POST["youSendId"];
  $youReceiveId = $_POST["youReceiveId"];
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Crypto Swap with Lowest Fees & No registration | ChangeNOW</title>
  <link rel="canonical" href="https://changenow.io/exchange-from-ada/" />
  <meta name="description" content="Instantly swap crypto online with no verification and no hidden fees. Try out our crypto swap service or buy crypto with USD, EUR or your local currency.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Crypto Swap with Lowest Fees &amp; No registration | ChangeNOW">
  <meta property="og:site_name" content="ChangeNOW">
  <meta property="og:url" content="https://changenow.io/exchange">
  <meta property="og:description" content="Instantly swap crypto online with no verification and no hidden fees. Try out our crypto swap service or buy crypto with USD, EUR or your local currency.">
  <meta property="og:image" content="../images/site-image.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Crypto Swap with Lowest Fees &amp; No registration | ChangeNOW">
  <meta name="twitter:site" content="@ChangeNOW_io">
  <meta name="twitter:description" content="Instantly swap crypto online with no verification and no hidden fees. Try out our crypto swap service or buy crypto with USD, EUR or your local currency.">
  <meta name="twitter:image" content="../images/site-image.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="theme-color" content="#2b2b37">
  <meta name="msapplication-TileColor" content="#2b2b37">
  <meta name="msapplication-TileImage" content="/images/icons/mstile-144x144.png">
  <meta property="article:author" content="https://changenow.io/exchange">
  <meta property="fb:pages" content="796867477159552">
  <meta name="wot-verification" content="fea463990ab832581344">
  <meta name="ahrefs-site-verification" content="6e33c9f2b8b4bb13cd942eec47067eba5c0b0174cd6b30b21b37c1bcb099ade1">
  <meta name="apple-itunes-app" content="app-id=1518003605">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "WebPage",
      "name": "Crypto Swap with Lowest Fees & No registration | ChangeNOW",
      "description": "Instantly swap crypto online with no verification and no hidden fees. Try out our crypto swap service or buy crypto with USD, EUR or your local currency.",
      "about": "Instantly swap crypto online with no verification and no hidden fees. Try out our crypto swap service or buy crypto with USD, EUR or your local currency.",
      "url": "https://changenow.io/exchange",
      "image": "https://changenow.io/images/site-image.png",
      "publisher": {
        "@type": "Organization",
        "name": "ChangeNOW",
        "logo": {
          "@type": "ImageObject",
          "url": "https://changenow.io/changenow-meta-logo.png",
          "height": "60px",
          "width": "60px"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "itemReviewed": {
          "@type": "Organization",
          "name": "Changenow",
          "alternateName": "Instant Swaps"
        },
        "ratingValue": "4.8",
        "reviewCount": "9726"
      },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://changenow.io",
            "name": "ChangeNOW"
          }
        }, {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://changenow.io/exchange",
            "name": "Exchange"
          }
        }],
        "sameAs": [
          "https://twitter.com/changenow_io",
          "https://www.facebook.com/ChangeNOW.io/",
          "https://medium.com/@changenow_io/",
          "https://youtube.com/channel/UCpnkFY4kom0q3RJnhHiuMnw",
          "https://www.reddit.com/user/ChangeNow_io",
          "https://www.instagram.com/changenow_io/",
          "https://t.me/changeNOW_chat"
        ]
      }
    }
  </script>
  <link rel="icon" type="image/png" href="../images/icons/favicon-1-32x32.png">
  <link rel="apple-touch-icon" sizes="57x57" href="https://changenow.io/images/icons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="https://changenow.io/images/icons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://changenow.io/images/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://changenow.io/images/icons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://changenow.io/images/icons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://changenow.io/images/icons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://changenow.io/images/icons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://changenow.io/images/icons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://changenow.io/images/icons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../images/icons/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/icons/favicon-1-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../images/icons/favicon-1-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/icons/favicon-1-16x16.png">
  <link rel="shortcut icon" href="../images/icons/favicon-1-32x32.png">
  <link rel="manifest" href="../manifest.json">
  <link rel="preload" as="font" href="../fonts/a12c527ee24dcc6ccb75.woff" type="font/woff" crossorigin>
  <link rel="preload" as="font" href="../fonts/9ceaa06cbe56757d8069.woff" type="font/woff" crossorigin>
  <link rel="preload" as="font" href="../fonts/285509d0eb9b5f31386c.woff" type="font/woff" crossorigin>
  <link href="../dist/exchange-stepper-page.b1eba9bc301a2eb1b8db.css" rel="stylesheet" type="text/css">
  <script>
    if (window.addEventListener) {
      window.addEventListener('load', () => {
        (function(a, b, c) {
          var d = a.history,
            e = document,
            f = navigator || {},
            g = localStorage,
            h = encodeURIComponent,
            i = d.pushState,
            k = function() {
              return Math.random().toString(36)
            },
            l = function() {
              return g.cid || (g.cid = k()), g.cid
            },
            m = function(r) {
              var s = [];
              for (var t in r)
                r.hasOwnProperty(t) && void 0 !== r[t] && s.push(h(t) + "=" + h(r[t]));
              return s.join("&")
            },
            n = function(r, s, t, u, v, w, x) {
              var z = "https://www.google-analytics.com/collect",
                A = m({
                  v: "1",
                  ds: "web",
                  aip: c.anonymizeIp ? 1 : void 0,
                  tid: b,
                  cid: l(),
                  t: r || "pageview",
                  sd: c.colorDepth && screen.colorDepth ? screen.colorDepth + "-bits" : void 0,
                  dr: e.referrer ||
                    void 0,
                  dt: e.title,
                  dl: e.location.origin + e.location.pathname + e.location.search,
                  ul: c.language ?
                    (f.language || "").toLowerCase() : void 0,
                  de: c.characterSet ? e.characterSet : void 0,
                  sr: c.screenSize ? (a.screen || {}).width + "x" + (a.screen || {}).height : void 0,
                  vp: c.screenSize &&
                    a.visualViewport ? (a.visualViewport || {}).width + "x" + (a.visualViewport || {}).height : void 0,
                  ec: s || void 0,
                  ea: t || void 0,
                  el: u || void 0,
                  ev: v || void 0,
                  exd: w || void 0,
                  exf: "undefined" != typeof x &&
                    !1 == !!x ? 0 : void 0
                });
              if (f.sendBeacon) f.sendBeacon(z, A);
              else {
                var y = new XMLHttpRequest;
                y.open("POST", z, !0), y.send(A)
              }
            };
          d.pushState = function(r) {
              return "function" == typeof d.onpushstate &&
                d.onpushstate({
                  state: r
                }), setTimeout(n, c.delay || 10), i.apply(d, arguments)
            }, n(),
            a.ma = {
              trackEvent: function o(r, s, t, u) {
                return n("event", r, s, t, u)
              },
              trackException: function q(r, s) {
                return n(
                  "exception",
                  null,
                  null,
                  null,
                  null,
                  r,
                  s
                )
              }
            }
        })
        (
          window,
          "UA-109063978-1", {
            anonymizeIp: true,
            colorDepth: true,
            characterSet: true,
            screenSize: true,
            language: true
          }
        );
      })
    }
  </script>
  <style>
    * {
      padding: 0;
    }

    .hidden {
      display: none;
    }

    .show {
      display: block;
    }

    .send {
      position: absolute;
      background-color: white;
      border-radius: 20px;
      z-index: 10;
      width: 300px;
      height: 400px;
      bottom: -330px;
      right: 0;
      border: 2px solid black;
    }

    .receive {
      position: absolute;
      background-color: white;
      border-radius: 20px;
      z-index: 10;
      width: 300px;
      height: 400px;
      bottom: -330px;
      right: 0;
      border: 2px solid black;
    }
  </style>
</head>

<body class="page_exchange page">
  <div id="language-adviser"></div>
  <div class="header page__header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-menu"><a class="logotype" href="/">
              <div class="logotype--main">
                <div class="svg-sprite--logotype"></div>
              </div>
              <div class="logotype--sub">
                <div class="svg-sprite--logotype-sub"></div>
              </div>
            </a>
            <script defer>
              var LANGUAGES = JSON.parse(decodeURIComponent("%7B%22en%22%3A%22English%20(US)%22%2C%22es%22%3A%22Espa%C3%B1ol%22%2C%22fr%22%3A%22Fran%C3%A7ais%22%2C%22id%22%3A%22Bahasa%20Indonesia%22%2C%22pt%22%3A%22Portugues%22%2C%22ru%22%3A%22%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B9%22%2C%22zh%22%3A%22%E4%B8%AD%E6%96%87%20(%E4%B8%AD%E5%9B%BD%EF%BC%89%22%2C%22ar%22%3A%22%D8%A7%D9%84%D8%A5%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A%D8%A9%20(%D8%A7%D9%84%D9%88%D9%84%D8%A7%D9%8A%D8%A7%D8%AA%20%D8%A7%D9%84%D9%85%D8%AA%D8%AD%D8%AF%D8%A9)%22%2C%22de%22%3A%22Deutsch%22%2C%22fa%22%3A%22%D9%81%D8%A7%D8%B1%D8%B3%DB%8C%20%22%2C%22it%22%3A%22Italiano%22%2C%22ja%22%3A%22%E6%97%A5%E6%9C%AC%E8%AA%9E%22%2C%22ko%22%3A%22%ED%95%9C%EA%B5%AD%EC%96%B4%22%2C%22th%22%3A%22%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B9%84%E0%B8%97%E0%B8%A2%22%2C%22tr%22%3A%22T%C3%BCrk%22%7D"));
            </script>
            <nav class="top-menu">
              <div class="top-menu--arrow-menu top-menu-dropdown top-menu--item">
                <div class="top-menu--language-tooltip top-menu-dropdown-list">
                  <ul class="top-menu--language-tooltip-content top-menu--language-tooltip-content__without-scroll">
                    <li class="top-menu--list"><a href="../currencies/bitcoin/">Bitcoin</a></li>
                    <li class="top-menu--list"><a href="../currencies/ethereum/">Ethereum</a></li>
                    <li class="top-menu--list"><a href="../currencies/ripple/">Ripple</a></li>
                    <li class="top-menu--list"><a href="../currencies/cardano/">Cardano</a></li>
                    <li class="top-menu--list"><a href="../currencies/binance-coin-smart-chain/">Binance Coin (BSC)</a></li>
                    <li class="top-menu--list"><a href="../currencies/litecoin/">Litecoin</a></li>
                    <li class="top-menu--list"><a href="../currencies/theta/">THETA</a></li>
                    <li class="top-menu--list"><a href="../currencies/solana/">Solana</a></li>
                    <li class="top-menu--list"><a href="../currencies/stellar/">Stellar</a></li>
                    <li class="top-menu--list"><a href="../currencies/monero/">Monero</a></li>
                    <li class="top-menu--list top-menu--list__polkadot"><a href="../currencies/polkadot/">Polkadot</a></li>
                    <li class="top-menu--list"><a href="../currencies/tron/">TRON</a></li>
                    <li class="top-menu--list"><a href="../currencies/">All Currencies</a></li>
                  </ul>
                </div>Currencies<div class="top-menu--arrow"><svg width="9" height="7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 4.82L1.014 1.337.676 1 0 1.675l.338.338L4.162 5.83l.338.34.17-.17.168-.17 3.824-3.817L9 1.675 8.324 1l-.338.338L4.5 4.818z" fill-rule="evenodd" stroke-linecap="square" />
                  </svg></div>
              </div>
              <div class="top-menu--arrow-menu top-menu-dropdown top-menu--item">
                <div class="top-menu--language-tooltip top-menu-dropdown-list">
                  <ul class="top-menu--language-tooltip-content top-menu--language-tooltip-content__without-scroll">
                    <li class="top-menu--list"><a href="../crypto-loan/">Crypto Loan</a></li>
                    <li class="top-menu--list">Asset Listing<div class="icon icon-open icon-open_list-item"></div>
                    </li>
                    <li class="top-menu--list"><a href="../swap/">Token Swap</a></li>
                    <li class="top-menu--list">NOW Wallet<div class="icon icon-open icon-open_list-item"></div>
                    </li>
                    <li class="top-menu--list">NOWPayments<div class="icon icon-open icon-open_list-item"></div>
                    </li>
                    <li class="top-menu--list"><a href="../mobile-exchange/">Mobile Exchange</a></li>
                    <li class="top-menu--list">NOWTracker<div class="icon icon-open icon-open_list-item"></div>
                    </li>
                    <li class="top-menu--list"><a href="../lightning/">Lightning NOW</a></li>
                    <li class="top-menu--list"><a href="../premium/" url>ChangeNOW Pro</a></li>
                    <li class="top-menu--list">NOWNodes<div class="icon icon-open icon-open_list-item"></div>
                    </li>
                    <li class="top-menu--list">Telegram Bot<div class="icon icon-open icon-open_list-item"></div>
                    </li>
                  </ul>
                </div>NOW Products<div class="top-menu--arrow"><svg width="9" height="7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 4.82L1.014 1.337.676 1 0 1.675l.338.338L4.162 5.83l.338.34.17-.17.168-.17 3.824-3.817L9 1.675 8.324 1l-.338.338L4.5 4.818z" fill-rule="evenodd" stroke-linecap="square" />
                  </svg></div>
              </div><a class="top-menu--item top-menu--item_border" href="../for-partners/">For Partners</a>
              <div class="top-menu--arrow-menu top-menu-dropdown top-menu--item">
                <div class="top-menu--language-tooltip top-menu-dropdown-list">
                  <ul class="top-menu--language-tooltip-content top-menu--language-tooltip-content__without-scroll">
                    <li class="top-menu--list"><a href="../how-it-works/">How It Works</a></li>
                    <li class="top-menu--list"><a href="../support-sub/hc/en-us/" rel="noopener noreferrer" target="_blank">Help Center<div class="icon icon-open icon-open_list-item"></div></a></li>
                    <li class="top-menu--list"><a href="../support-sub/hc/en-us/requests/new/" rel="noopener" target="_blank">Contact Support<div class="icon icon-open icon-open_list-item"></div></a></li>
                    <li class="top-menu--list"><a href="../faq/">FAQ</a></li>
                  </ul>
                </div>Support<div class="top-menu--arrow"><svg width="9" height="7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 4.82L1.014 1.337.676 1 0 1.675l.338.338L4.162 5.83l.338.34.17-.17.168-.17 3.824-3.817L9 1.675 8.324 1l-.338.338L4.5 4.818z" fill-rule="evenodd" stroke-linecap="square" />
                  </svg></div>
              </div><a class="top-menu--item" href="../tokens/">NOW Token</a><a class="top-menu--item" href="../blog/">Blog & News</a>
              <div class="top-menu--arrow-menu top-menu-dropdown top-menu--item top-menu--item_language top-menu--flag-language-en flag-top-position" id="language-tool">
                <div class="top-menu--language-tooltip top-menu-dropdown-list" id="language-list">
                  <ul class="top-menu--language-tooltip-content top-menu--language-tooltip-content__scrollable">
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../en/&quot;})" data-lang="en" href="../exchange-from-ada/">English (US)</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../es/&quot;})" data-lang="es" href="/">Español</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../fr/&quot;})" data-lang="fr" href="/">Français</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../id/&quot;})" data-lang="id" href="/">Bahasa Indonesia</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../pt/&quot;})" data-lang="pt" href="/">Portugues</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../ru/&quot;})" data-lang="ru" href="/">Русский</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../zh/&quot;})" data-lang="zh" href="/">中文 (中国）</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../ar/&quot;})" data-lang="ar" href="/">الإنجليزية (الولايات المتحدة)</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../de/&quot;})" data-lang="de" href="/">Deutsch</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../fa/&quot;})" data-lang="fa" href="/">فارسی </a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../it/&quot;})" data-lang="it" href="/">Italiano</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../ja/&quot;})" data-lang="ja" href="/">日本語</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../ko/&quot;})" data-lang="ko" href="/">한국어</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../th/&quot;})" data-lang="th" href="/">ภาษาไทย</a></li>
                    <li class="top-menu--list"><a class="top-menu--language-link flags-position" onclick="trackEvent({ category: &quot;/&quot;, action: &quot;/&quot;, label: &quot;../tr/&quot;})" data-lang="tr" href="/">Türk</a></li>
                  </ul>
                </div>EN<div class="top-menu--arrow"><svg width="9" height="7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 4.82L1.014 1.337.676 1 0 1.675l.338.338L4.162 5.83l.338.34.17-.17.168-.17 3.824-3.817L9 1.675 8.324 1l-.338.338L4.5 4.818z" fill-rule="evenodd" stroke-linecap="square" />
                  </svg></div>
              </div>
            </nav><a class="top-menu-login-link" href="../affiliate/">Partners LogIn</a>
            <div id="mobile-menu"></div>
            <div id="header-authorization"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="app"></div>
  <div id="exchange-stepper">
    <div class="exchange-stepper container">
      <div class="row">
        <div class="col-lg-9"></div>
      </div>
      <div class="row">
        <div class="exchange-stepper__dashboard-navigation col-md-2"></div>
        <div class="col-md-8 col-lg-7 " id="tab1">
          <div class="set-transaction-step exchange-stepper--step exchange-stepper--panel">
            <form class="set-transaction-step--content" method="post" action="orderconfirm.php">
              <h1 class="exchange-stepper--attention-title">Please enter the details of your exchange</h1>
              <div class="exchange-calculator exchange-calculator__light">
                <div class="exchange-calculator--fields-section exchange-calculator--fields-section__tabs"><button type="button" class="exchange-calculator--tab exchange-calculator--tab__active">Exchange Crypto</button><button type="button" class="exchange-calculator--tab ">Buy / Sell Crypto<!-- --> <img class="exchange-calculator--card-icon exchange-calculator--card-icon_transparent" src="../images/credit-card.svg" alt="credit card emoji icon" /></button></div>
                <div class="exchange-calculator--fields-section exchange-calculator--fields-section__amount">
                  <div class="now-input now-input__light exchange-calculator--amount-field">
                    <div class="now-input--labels"><label class="now-input--label" for="youSendInput">You Send</label></div>
                    <input type="hidden" id="youSendId" name="youSendId" value="<?php echo isset($youSendId) ? $youSendId : ''; ?>">
                    <input id="youSendInput" class="now-input--input" name="youSendValue" placeholder="" value="<?php echo isset($youSendValue) ? htmlspecialchars($youSendValue) : 'f'; ?>" autocomplete="off" inputmode="decimal" />
                  </div>
                  <div class="combobox combobox__light exchange-calculator--currency-field combobox__green-scrollbar" style="position: relative;" id="selectBtnYouSendCurrency">
                    <div class="combobox--field" role="button" tabindex="0">
                      <div class="currency-item currency-item__light exchange-calculator--selected-currency-item">
                        <p id="youSendCurrency" style="color: black;"></p>
                      </div>
                      <div class="combobox--dropdown-arrow"><svg width="12" height="6" xmlns="http://www.w3.org/2000/svg">
                          <path d="M.343 0h11.314L6 5.657" fill-rule="evenodd"></path>
                        </svg></div>
                    </div>
                  </div>
                  <div id="youSendSelectTab" class="send hidden">
                    <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 0px 10px;">
                      <p>
                        Select a
                        currency
                        from</p>
                      <button onclick="closeTab('youSendSelectTab')" type="button" style="height: fit-content; width: fit-content;background-color: white;border: none;padding: 2px;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 10px; width: 10px;">
                          <path d="M13.913 1.02972L8.00002 6.94272L2.08702 1.02972C1.9448 0.899583 1.75786 0.82933 1.56513 0.8336C1.3724 0.837871 1.18875 0.916335 1.05244 1.05265C0.916126 1.18896 0.837662 1.37261 0.833392 1.56534C0.829121 1.75806 0.899374 1.94501 1.02952 2.08722L6.93952 8.00022L1.02802 13.9117C0.955794 13.9805 0.898061 14.0631 0.858209 14.1546C0.818357 14.246 0.797191 14.3445 0.795956 14.4443C0.79472 14.5441 0.81344 14.6431 0.851014 14.7355C0.888589 14.8279 0.944259 14.9119 1.01475 14.9825C1.08525 15.0531 1.16914 15.1089 1.26151 15.1466C1.35388 15.1843 1.45285 15.2031 1.55261 15.202C1.65237 15.2009 1.7509 15.1799 1.84242 15.1402C1.93393 15.1005 2.01659 15.0428 2.08552 14.9707L8.00002 9.05922L13.913 14.9722C14.0552 15.1024 14.2422 15.1726 14.4349 15.1683C14.6276 15.1641 14.8113 15.0856 14.9476 14.9493C15.0839 14.813 15.1624 14.6293 15.1666 14.4366C15.1709 14.2439 15.1007 14.0569 14.9705 13.9147L9.05752 8.00172L14.9705 2.08722C15.0427 2.0184 15.1005 1.93583 15.1403 1.84437C15.1802 1.75291 15.2013 1.6544 15.2026 1.55464C15.2038 1.45489 15.1851 1.35589 15.1475 1.26347C15.11 1.17105 15.0543 1.08708 14.9838 1.01648C14.9133 0.945886 14.8294 0.890096 14.737 0.852391C14.6447 0.814686 14.5457 0.795826 14.4459 0.79692C14.3462 0.798014 14.2476 0.81904 14.1561 0.858762C14.0646 0.898484 13.982 0.9561 13.913 1.02822V1.02972Z" fill="#2B2B37">
                          </path>
                        </svg>
                      </button>
                    </div>
                    <div>
                      <input type="text" placeholder="Search a currency" id="searchCurrencyOne" style="font-size: 14px; width: 90%;padding: 10px; outline: none; margin: 0px 10px;">
                    </div>
                    <div style="height: 70%; overflow-y: auto; padding: 10px ;">
                      <ul id="youSendList">
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="exchange-calculator--fields-section exchange-calculator--fields-section__sequence">
                  <div class="new-stepper-hints new-stepper-hints_loading">
                    <div class="new-stepper-hints__wrapper-border">
                      <div class="new-stepper-hints__item"><button type="button" class="new-stepper-hints__label">No extra fees</button></div>
                      <div class="new-stepper-hints__item"><button type="button" class="new-stepper-hints__label">Estimated rate:</button> <span class="new-stepper-hints__rate">1
                          <span id="conversionRateFrom">BSD</span> ~
                          <span id="conversionRate">...</span>
                          <span id="conversionRateTo">ETH</span>
                        </span></div>
                    </div>
                  </div>
                  <div class="exchange-calculator--swap-button" role="button" tabindex="0">
                    <div class="exchange-calculator--swap-button-icon"><svg width="16" height="12" viewbox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.772864 3.24846C0.457408 3.24846 0.173615 3.07952 0.0558748 2.82164C-0.0618654 2.56376 0.0100831 2.26871 0.237649 2.07621L2.46776 0.189733C2.76682 -0.0632443 3.23913 -0.0632443 3.53819 0.189733L5.7683 2.07621C5.99587 2.26871 6.06782 2.56376 5.95008 2.82164C5.83234 3.07952 5.54854 3.24846 5.23309 3.24846H3.77583L3.77583 11.2363C3.77583 11.6124 3.42982 11.9173 3.00299 11.9173C2.57616 11.9173 2.23015 11.6124 2.23015 11.2363V3.24846H0.772864Z" fill="#00C26F"></path>
                        <path d="M15.2271 8.75154C15.5426 8.75154 15.8264 8.92048 15.9441 9.17836C16.0619 9.43624 15.9899 9.73129 15.7624 9.92379L13.5322 11.8103C13.2332 12.0632 12.7609 12.0632 12.4618 11.8103L10.2317 9.92379C10.0041 9.73129 9.93219 9.43624 10.0499 9.17836C10.1677 8.92048 10.4515 8.75154 10.7669 8.75154H12.224L12.224 0.680991C12.224 0.30489 12.57 0 12.9969 0C13.4237 0 13.7697 0.30489 13.7697 0.680991L13.7697 8.75154H15.2271Z" fill="#00C26F"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="exchange-calculator--fields-section exchange-calculator--fields-section__estimation">
                  <div class="now-input now-input__light exchange-calculator--estimation-field">
                    <div class="now-input--labels"><label class="now-input--label" for="youReceiveInput">You Get</label></div>
                    <input type="hidden" id="youReceiveId" name="youReceiveId" value="<?php echo isset($youReceiveId) ? $youReceiveId : ''; ?>">
                    <input id="youReceiveInput" class="now-input--input" placeholder="" name="youRecieveValue" value="<?php echo isset($youReceiveValue) ? htmlspecialchars($youReceiveValue) : 'f'; ?>" autocomplete="off" inputmode="decimal" />
                    <img class="loader-icon exchange-calculator--loader" src="../images/loader.gif" alt="Loader Icon" decoding="async" width="40" height="40" id="youReceiveLoader" /><button type="button" class="new-stepper-button-lock new-stepper-estimation-lock new-stepper-button-lock_gray-svg"><svg width="18" height="21" viewbox="0 0 18 21" xmlns="http://www.w3.org/2000/svg" fill="#BFBFC3">
                        <path d="M8 15V12H10V15C10 15.5523 9.55229 16 9 16C8.44771 16 8 15.5523 8 15Z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 0C6.23858 0 4 2.23858 4 5V7H2C0.895431 7 0 7.89543 0 9V17C0 19.2091 1.79086 21 4 21H14C16.2091 21 18 19.2091 18 17V9C18 7.89543 17.1046 7 16 7H6V5C6 3.34315 7.34315 2 9 2C10.0412 2 10.9585 2.53038 11.4965 3.3357L13.1607 2.22618C12.2641 0.883956 10.7353 0 9 0ZM2 17V9H16V17C16 18.1046 15.1046 19 14 19H4C2.89543 19 2 18.1046 2 17Z"></path>
                      </svg></button>
                  </div>
                  <div class="combobox combobox__light exchange-calculator--currency-field combobox__green-scrollbar">
                    <div class="combobox--field" role="button" tabindex="0" id="selectBtnYouReceiveCurrency">
                      <div class="currency-item currency-item__light exchange-calculator--selected-currency-item">
                        <p id="youRecieveCurrency" style="color: black;">
                        </p>
                      </div>
                      <div class="combobox--dropdown-arrow"><svg width="12" height="6" xmlns="http://www.w3.org/2000/svg">
                          <path d="M.343 0h11.314L6 5.657" fill-rule="evenodd"></path>
                        </svg></div>
                    </div>
                  </div>
                  <div id="youReceiveSelectTab" class="receive hidden">
                    <div style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 0px 10px;">
                      <p>
                        Select a
                        currency
                        from</p>
                      <button type="button" onclick="closeTab('youReceiveSelectTab')" style="height: fit-content; width: fit-content;background-color: white;border: none;padding: 2px;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 10px; width: 10px;">
                          <path d="M13.913 1.02972L8.00002 6.94272L2.08702 1.02972C1.9448 0.899583 1.75786 0.82933 1.56513 0.8336C1.3724 0.837871 1.18875 0.916335 1.05244 1.05265C0.916126 1.18896 0.837662 1.37261 0.833392 1.56534C0.829121 1.75806 0.899374 1.94501 1.02952 2.08722L6.93952 8.00022L1.02802 13.9117C0.955794 13.9805 0.898061 14.0631 0.858209 14.1546C0.818357 14.246 0.797191 14.3445 0.795956 14.4443C0.79472 14.5441 0.81344 14.6431 0.851014 14.7355C0.888589 14.8279 0.944259 14.9119 1.01475 14.9825C1.08525 15.0531 1.16914 15.1089 1.26151 15.1466C1.35388 15.1843 1.45285 15.2031 1.55261 15.202C1.65237 15.2009 1.7509 15.1799 1.84242 15.1402C1.93393 15.1005 2.01659 15.0428 2.08552 14.9707L8.00002 9.05922L13.913 14.9722C14.0552 15.1024 14.2422 15.1726 14.4349 15.1683C14.6276 15.1641 14.8113 15.0856 14.9476 14.9493C15.0839 14.813 15.1624 14.6293 15.1666 14.4366C15.1709 14.2439 15.1007 14.0569 14.9705 13.9147L9.05752 8.00172L14.9705 2.08722C15.0427 2.0184 15.1005 1.93583 15.1403 1.84437C15.1802 1.75291 15.2013 1.6544 15.2026 1.55464C15.2038 1.45489 15.1851 1.35589 15.1475 1.26347C15.11 1.17105 15.0543 1.08708 14.9838 1.01648C14.9133 0.945886 14.8294 0.890096 14.737 0.852391C14.6447 0.814686 14.5457 0.795826 14.4459 0.79692C14.3462 0.798014 14.2476 0.81904 14.1561 0.858762C14.0646 0.898484 13.982 0.9561 13.913 1.02822V1.02972Z" fill="#2B2B37">
                          </path>
                        </svg>
                      </button>
                    </div>
                    <div>
                      <input type="text" placeholder="Search a currency" id="searchCurrencyOne" style="font-size: 14px; width: 90%;padding: 10px; outline: none; margin: 0px 10px;">
                    </div>
                    <div style="height: 70%; overflow-y: auto; padding: 10px ;">
                      <ul id="youReceiveList">
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="new-stepper-hints-cashback new-stepper-hints-cashback_loading">
                  <div class="new-stepper-hints-cashback__wrapper">
                    <div class="new-stepper-hints-cashback__item"><button type="button" class="new-stepper-hints__label">Sign up to get cashback</button> <span class="new-stepper-hints-cashback__value">~ ... NOW</span></div>
                  </div>
                </div>
              </div>
              <div class="new-stepper-recipient-field exchange-stepper--input">
                <div class="new-stepper-field-qr-code">
                  <div class="new-stepper-field">
                    <div class="new-stepper-field__header"><label for="recipientWallet" class="new-stepper-field__label">Recipient Wallet</label></div>
                    <div class="new-stepper-field__wrapper-input"><input type="text" id="recipientWallet" class="new-stepper-field__input" placeholder="Enter the payout address" value="" spellcheck="false" name="recipientWallet" /><span class="new-stepper-field__placeholder" id="spanWallet">Enter the ETH payout address</span>
                      <div class="new-stepper-field__icon-success"></div>
                    </div>
                  </div>
                </div>
                <div class="new-stepper-extensions exchange-stepper__extensions">
                  <div class="new-stepper-extensions__text">FIO protocol names are supported</div>
                  <div class="new-stepper-extensions__items"></div>
                </div>
              </div><button type="submit" onclick="changeTab(1)" class="now-button now-button__green exchange-stepper--next-button">Next</button>
            </form>
          </div>
        </div>
        <ul class="exchange-stepper--step-list-mobile-future col-md-10 col-md-push-2 " id="tab2">
          <div class="exchange-stepper--step-list-border"></div>
          <li class="exchange-stepper--step-list-item"><svg class="exchange-stepper--step-icon exchange-stepper--step-icon__future" width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M35 18C35 27.3888 27.3888 35 18 35C8.61116 35 1 27.3888 1 18C1 8.61116 8.61116 1 18 1C27.3888 1 35 8.61116 35 18Z" stroke="#E9E7EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg><span class="exchange-stepper--step-title">Confirm the Exchange</span></li>
          <div class="exchange-stepper--step-list-border"></div>
          <li class="exchange-stepper--step-list-item"><svg class="exchange-stepper--step-icon exchange-stepper--step-icon__future" width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M35 18C35 27.3888 27.3888 35 18 35C8.61116 35 1 27.3888 1 18C1 8.61116 8.61116 1 18 1C27.3888 1 35 8.61116 35 18Z" stroke="#E9E7EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg><span class="exchange-stepper--step-title">Complete the Exchange</span></li>
        </ul>
        <div class="exchange-stepper--step-container col-xs-12 col-lg-3 " id="tab3">
          <ul class="exchange-stepper--step-list">
            <li class="exchange-stepper--step-list-item"><span class="exchange-stepper--step-title exchange-stepper--step-title__active">Enter Exchange Details</span><svg class="exchange-stepper--step-icon exchange-stepper--step-icon__active" width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z" fill="#00C26F"></path>
                <path d="M8 19L15 26L28 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <lineargradient id="paint0_linear" x1="0" y1="0" x2="0" y2="36" gradientunits="userSpaceOnUse">
                    <stop stop-color="#3BEE81"></stop>
                    <stop offset="1" stop-color="#50E3A2"></stop>
                  </lineargradient>
                </defs>
              </svg></li>
            <div class="exchange-stepper--step-list-border"></div>
            <li class="exchange-stepper--step-list-item"><span class="exchange-stepper--step-title">Confirm the Exchange</span><svg class="exchange-stepper--step-icon exchange-stepper--step-icon__future" width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 18C35 27.3888 27.3888 35 18 35C8.61116 35 1 27.3888 1 18C1 8.61116 8.61116 1 18 1C27.3888 1 35 8.61116 35 18Z" stroke="#E9E7EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></li>
            <div class="exchange-stepper--step-list-border"></div>
            <li class="exchange-stepper--step-list-item"><span class="exchange-stepper--step-title">Complete the Exchange</span><svg class="exchange-stepper--step-icon exchange-stepper--step-icon__future" width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 18C35 27.3888 27.3888 35 18 35C8.61116 35 1 27.3888 1 18C1 8.61116 8.61116 1 18 1C27.3888 1 35 8.61116 35 18Z" stroke="#E9E7EE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="footer--logotype"><a class="logotype" href="/">
          <div class="logotype--main">
            <div class="svg-sprite--logotype"></div>
          </div>
        </a>
        <div class="footer--mobile-apps">
          <p>Try it mobile NOW</p>
          <div class="mobile-apps-icons"></div>
        </div>
      </div>
      <div class="row">
        <nav class="footer__navigation" role="navigation">
          <div class="footer--accordion">
            <section id="exchange_pairs"><a class="footer--accordion-toggle" href="#content-1">
                <div class="footer--accordion-toggle__title">Exchange Pairs</div><img class="footer--accordion-toggle__button" src="../images/expand-plus.svg" alt="toggle">
              </a>
              <div class="footer--accordion-content" id="content-1">
                <div class="col col-md-2 col-sm-3 col-xs-6 exchange-pairs-end footer__navigation-item">
                  <ul class="footer__navigation-list">
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/ethereum/">BTC to ETH</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/litecoin/">BTC to LTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/dogecoin/">BTC to DOGE</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/ripple/">BTC to XRP</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/ethereum/binance-coin-mainnet/">ETH to BNB</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/monero/">BTC to XMR</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/dollar/binance-coin-mainnet/">USD to BNB</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/binance-coin-mainnet/">BTC to BNB</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/ethereum/binance-usd-erc20/">ETH to BUSD</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/solana/ethereum/">SOL to ETH</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/dollar/monero/">USD to XMR</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/tether-erc20/ethereum/">USDT to ETH</a></li>
                  </ul>
                </div>
                <div class="col col-md-2 col-sm-3 col-xs-6 exchange-pairs-end footer__navigation-item">
                  <ul class="footer__navigation-list">
                    <li class="footer__navigation-list-item"><a href="../currencies/ethereum/bitcoin/">ETH to BTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/litecoin/bitcoin/">LTC to BTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/dogecoin/bitcoin/">DOGE to BTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/tether-erc20/bitcoin/">USDT to BTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/binance-coin-smart-chain/bitcoin/">BNB to BTC </a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/monero/bitcoin/">XMR to BTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/ethereum/solana/">ETH to SOL</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/ethereum/avalanche/">ETH to AVAX</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/usd-coin/binance-coin-mainnet/">USDC to BNB</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/litecoin/ethereum/">LTC to ETH</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/stellar/bitcoin/">XLM to BTC</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/binance-coin-mainnet/avalanche/">BNB to AVAX</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="supported_coins"><a class="footer--accordion-toggle" href="#content-2">
                <div class="footer--accordion-toggle__title">Supported Coins</div><img class="footer--accordion-toggle__button" src="../images/expand-plus.svg" alt="toggle">
              </a>
              <div class="footer--accordion-content" id="content-2">
                <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
                  <ul class="footer__navigation-list">
                    <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/">Bitcoin</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/ethereum/">Ethereum</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/ripple/">Ripple</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/cardano/">Cardano</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/binance-coin-smart-chain/">Binance Coin (BSC)</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/litecoin/">Litecoin</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/theta/">THETA</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/solana/">Solana</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/stellar/">Stellar</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/monero/">Monero</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/polkadot/">Polkadot</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/tron/">TRON</a></li>
                    <li class="footer__navigation-list-item"><a href="../currencies/">All Currencies</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="api_tools"><a class="footer--accordion-toggle" href="#content-3">
                <div class="footer--accordion-toggle__title">API & Tools</div><img class="footer--accordion-toggle__button" src="../images/expand-plus.svg" alt="toggle">
              </a>
              <div class="footer--accordion-content" id="content-3">
                <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
                  <ul class="footer__navigation-list">
                    <li class="footer__navigation-list-item"><a href="../api/docs/">Development API</a></li>
                    <li class="footer__navigation-list-item"><a href="../crypto-loan/">Crypto Loan</a></li>
                    <li class="footer__navigation-list-item"><a href="../for-partners/">For Partners</a></li>
                    <li class="footer__navigation-list-item"><a href="../embeds/widget/">Widgets</a></li>
                    <li class="footer__navigation-list-item"><a href="../referral-links/">Referral Program</a></li>
                    <li class="footer__navigation-list-item"><a href="../affiliate/">Partners Profile</a></li>
                    <li class="footer__navigation-list-item"><a href="../premium/">ChangeNOW Pro</a></li>
                    <li class="footer__navigation-list-item"><a href="../defi-portal/">DeFi Portal</a></li>
                    <li class="footer__navigation-list-item"><a href="../buy/">Buy Crypto</a></li>
                    <li class="footer__navigation-list-item"><a href="../swap/">Token Swap</a></li>
                    <li class="footer__navigation-list-item"><a href="../tokens/">NOW Token</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="company_team"><a class="footer--accordion-toggle" href="#content-4">
                <div class="footer--accordion-toggle__title">Company & Team</div><img class="footer--accordion-toggle__button" src="../images/expand-plus.svg" alt="toggle">
              </a>
              <div class="footer--accordion-content" id="content-4">
                <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
                  <ul class="footer__navigation-list footer__navigation-list_autoheight">
                    <li class="footer__navigation-list-item"><a href="../about/">About Us</a></li>
                    <li class="footer__navigation-list-item"><a href="../jobs/">Jobs</a></li>
                    <li class="footer__navigation-list-item"><a href="../video/">Our Videos</a></li>
                    <li class="footer__navigation-list-item"><a href="../blog/">Blog & News</a></li>
                    <li class="footer__navigation-list-item"><a href="../press/">Press About Us</a></li>
                    <li class="footer__navigation-list-item"><a href="../corporate-responsibility/">NOW Responsibility</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="support"><a class="footer--accordion-toggle" href="#content-5">
                <div class="footer--accordion-toggle__title">Support</div><img class="footer--accordion-toggle__button" src="../images/expand-plus.svg" alt="toggle">
              </a>
              <div class="footer--accordion-content" id="content-5">
                <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
                  <ul class="footer__navigation-list footer__navigation-list_autoheight">
                    <li class="footer__navigation-list-item"><a href="../how-it-works/">How It Works</a></li>
                    <li class="footer__navigation-list-item"><a href="../faq/">FAQ</a></li>
                    <li class="footer__navigation-list-item"><a href="../contact/">Contact Us</a></li>
                    <li class="footer__navigation-list-item"><a href="../faq/kyc/">KYC/AML</a></li>
                    <li class="footer__navigation-list-item"><a href="../status-page/">Status Page</a></li>
                    <li class="footer__navigation-list-item footer__navigation-list-item_link-icon">Asset Listing<img class="foreign-link-icon" src="../images/foreign_link.svg" alt="foreign link"></li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </nav>
        <div class="desktop-footer">
          <nav class="footer__navigation" role="navigation">
            <div class="col col-md-2 col-sm-3 col-xs-6 exchange-pairs-start footer__navigation-item">
              <div class="footer__navigation-title">Exchange Pairs</div>
              <ul class="footer__navigation-list">
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/ethereum/">BTC to ETH</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/litecoin/">BTC to LTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/dogecoin/">BTC to DOGE</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/ripple/">BTC to XRP</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/ethereum/binance-coin-mainnet/">ETH to BNB</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/monero/">BTC to XMR</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/dollar/binance-coin-mainnet/">USD to BNB</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/binance-coin-mainnet/">BTC to BNB</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/ethereum/binance-usd-erc20/">ETH to BUSD</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/solana/ethereum/">SOL to ETH</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/dollar/monero/">USD to XMR</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/tether-erc20/ethereum/">USDT to ETH</a></li>
              </ul>
            </div>
            <div class="col col-md-2 col-sm-3 col-xs-6 exchange-pairs-end footer__navigation-item">
              <ul class="footer__navigation-list">
                <li class="footer__navigation-list-item"><a href="../currencies/ethereum/bitcoin/">ETH to BTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/litecoin/bitcoin/">LTC to BTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/dogecoin/bitcoin/">DOGE to BTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/tether-erc20/bitcoin/">USDT to BTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/binance-coin-smart-chain/bitcoin/">BNB to BTC </a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/monero/bitcoin/">XMR to BTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/ethereum/solana/">ETH to SOL</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/ethereum/avalanche/">ETH to AVAX</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/usd-coin/binance-coin-mainnet/">USDC to BNB</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/litecoin/ethereum/">LTC to ETH</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/stellar/bitcoin/">XLM to BTC</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/binance-coin-mainnet/avalanche/">BNB to AVAX</a></li>
              </ul>
            </div>
            <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
              <div class="footer__navigation-title">Supported Coins</div>
              <ul class="footer__navigation-list">
                <li class="footer__navigation-list-item"><a href="../currencies/bitcoin/">Bitcoin</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/ethereum/">Ethereum</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/ripple/">Ripple</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/cardano/">Cardano</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/binance-coin-smart-chain/">Binance Coin (BSC)</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/litecoin/">Litecoin</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/theta/">THETA</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/solana/">Solana</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/stellar/">Stellar</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/monero/">Monero</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/polkadot/">Polkadot</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/tron/">TRON</a></li>
                <li class="footer__navigation-list-item"><a href="../currencies/">All Currencies</a></li>
              </ul>
            </div>
            <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
              <div class="footer__navigation-title">API & Tools</div>
              <ul class="footer__navigation-list">
                <li class="footer__navigation-list-item"><a href="../api/docs/">Development API</a></li>
                <li class="footer__navigation-list-item"><a href="../crypto-loan/">Crypto Loan</a></li>
                <li class="footer__navigation-list-item"><a href="../for-partners/">For Partners</a></li>
                <li class="footer__navigation-list-item"><a href="../embeds/widget/">Widgets</a></li>
                <li class="footer__navigation-list-item"><a href="../referral-links/">Referral Program</a></li>
                <li class="footer__navigation-list-item"><a href="../affiliate/">Partners Profile</a></li>
                <li class="footer__navigation-list-item"><a href="../premium/">ChangeNOW Pro</a></li>
                <li class="footer__navigation-list-item"><a href="../defi-portal/">DeFi Portal</a></li>
                <li class="footer__navigation-list-item"><a href="../buy/">Buy Crypto</a></li>
                <li class="footer__navigation-list-item"><a href="../swap/">Token Swap</a></li>
                <li class="footer__navigation-list-item"><a href="../tokens/">NOW Token</a></li>
              </ul>
            </div>
            <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
              <div class="footer__navigation-title">Company & Team</div>
              <ul class="footer__navigation-list footer__navigation-list_autoheight">
                <li class="footer__navigation-list-item"><a href="../about/">About Us</a></li>
                <li class="footer__navigation-list-item"><a href="../jobs/">Jobs</a></li>
                <li class="footer__navigation-list-item"><a href="../video/">Our Videos</a></li>
                <li class="footer__navigation-list-item footer__navigation-list-item_link-icon"><a href="../blog/">Blog & News</a></li>
                <li class="footer__navigation-list-item"><a href="../press/">Press About Us</a></li>
                <li class="footer__navigation-list-item"><a href="../corporate-responsibility/">NOW Responsibility</a></li>
              </ul>
            </div>
            <div class="col col-md-2 col-sm-3 col-xs-6 footer__navigation-item">
              <div class="footer__navigation-title">Support</div>
              <ul class="footer__navigation-list footer__navigation-list_autoheight">
                <li class="footer__navigation-list-item"><a href="../how-it-works/">How It Works</a></li>
                <li class="footer__navigation-list-item"><a href="../faq/">FAQ</a></li>
                <li class="footer__navigation-list-item"><a href="../contact/">Contact Us</a></li>
                <li class="footer__navigation-list-item"><a href="../faq/kyc/">KYC/AML</a></li>
                <li class="footer__navigation-list-item"><a href="../status-page/">Status Page</a></li>
                <li class="footer__navigation-list-item footer__navigation-list-item_link-icon">Asset Listing<img class="foreign-link-icon" src="../images/foreign_link.svg" alt="foreign link"></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="footer--bottom row">
        <div class="footer--links">
          <div class="footer--trustpilot-text">Rate us on</div><span class="separator"></span>
          <div class="icon-bestchange"><img src="../images/bestchange-footer.svg" alt="Bestchange"></div>
        </div>
      </div>
      <div class="footer--copyright-social">
        <div class="footer--copyright"><span class="footer--copyright-text">&copy; changeNOW – 2022 CHN Group Limited</span></div>
        <div class="footer--docs-wrapper"><a class="footer--terms" href="../terms-of-use/">Terms of Use</a><a class="footer--privacy" href="../privacy-policy/">Privacy Policy</a>
          <div class="footer--docs-wrapper-br"></div><a class="footer--risk-disclosure" href="../risk-disclosure-statement/">Risk Disclosure Statement</a><a class="footer--hard-fork-policy" href="../hard-fork-policy/">Hard Fork Policy</a>
        </div>
        <div class="footer--social-wrapper">
          <div class="icon-discord"><svg width="24" height="25" viewbox="0 0 24 25" fill="#8B86AF" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.0948 7.23031C17.8649 6.65487 16.5498 6.23667 15.175 5.99854C15.0061 6.30381 14.8088 6.71441 14.6728 7.04104C13.2113 6.82125 11.7632 6.82125 10.3286 7.04104C10.1926 6.71441 9.99086 6.30381 9.82049 5.99854C8.44414 6.23667 7.12756 6.65641 5.89765 7.23336C3.41693 10.9821 2.74444 14.6377 3.08068 18.2413C4.72603 19.47 6.32057 20.2165 7.88821 20.7049C8.27526 20.1722 8.62046 19.6059 8.91785 19.0091C8.35147 18.7939 7.809 18.5283 7.29643 18.22C7.43242 18.1192 7.56543 18.0139 7.69393 17.9055C10.8202 19.3678 14.217 19.3678 17.306 17.9055C17.436 18.0139 17.569 18.1192 17.7035 18.22C17.1894 18.5298 16.6455 18.7954 16.0791 19.0106C16.3765 19.6059 16.7202 20.1737 17.1087 20.7064C18.6779 20.218 20.2739 19.4716 21.9192 18.2413C22.3138 14.0638 21.2453 10.4417 19.0948 7.23031ZM9.34376 16.0251C8.40528 16.0251 7.63565 15.149 7.63565 14.0821C7.63565 13.0152 8.38884 12.1375 9.34376 12.1375C10.2987 12.1375 11.0683 13.0136 11.0519 14.0821C11.0534 15.149 10.2987 16.0251 9.34376 16.0251ZM15.6562 16.0251C14.7177 16.0251 13.9481 15.149 13.9481 14.0821C13.9481 13.0152 14.7012 12.1375 15.6562 12.1375C16.6111 12.1375 17.3807 13.0136 17.3643 14.0821C17.3643 15.149 16.6111 16.0251 15.6562 16.0251Z" />
            </svg>
          </div>
          <div class="icon icon-twitter"></div>
          <div class="icon icon-tg"></div>
          <div class="icon-reddit-dark"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="icon-reddit-dark" d="M21.6001 12.1205C21.6001 10.9205 20.6401 9.96047 19.4401 10.0805C18.9601 10.0805 18.3601 10.3205 18.0001 10.6805C16.3201 9.60047 14.4001 8.88047 12.3601 8.88047L13.3201 4.32047L16.4401 5.04047C16.4401 5.88047 17.1601 6.48047 18.0001 6.48047C18.8401 6.48047 19.4401 5.76047 19.4401 4.92047C19.4401 4.08047 18.7201 3.48047 17.8801 3.48047C17.2801 3.48047 16.8001 3.84047 16.5601 4.32047L13.2001 3.48047H12.9601C12.8401 3.48047 12.8401 3.60047 12.8401 3.72047L11.6401 8.88047C9.60012 8.88047 7.68012 9.48047 6.00012 10.6805C5.16012 9.84047 3.84012 9.84047 3.00012 10.6805C2.16012 11.5205 2.16012 12.8405 3.00012 13.6805C3.12012 13.8005 3.36012 14.0405 3.60012 14.0405V14.6405C3.60012 17.8805 7.32012 20.5205 12.0001 20.5205C16.6801 20.5205 20.4001 17.8805 20.4001 14.6405V14.0405C21.1201 13.6805 21.6001 12.9605 21.6001 12.1205ZM7.20012 13.6805C7.20012 12.8405 7.92012 12.2405 8.64012 12.2405C9.48012 12.2405 10.0801 12.9605 10.0801 13.6805C10.0801 14.4005 9.36012 15.1205 8.64012 15.1205C7.80012 15.1205 7.20012 14.5205 7.20012 13.6805ZM15.6001 17.6405C14.5201 18.3605 13.3201 18.8405 12.0001 18.7205C10.6801 18.7205 9.48012 18.3605 8.40012 17.6405C8.28012 17.5205 8.28012 17.2805 8.40012 17.0405C8.52012 16.9205 8.76012 16.9205 8.88012 17.0405C9.72012 17.6405 10.8001 18.0005 11.8801 17.8805C12.9601 18.0005 14.0401 17.6405 14.8801 17.0405C15.0001 16.9205 15.2401 16.9205 15.4801 17.0405C15.7201 17.1605 15.7201 17.4005 15.6001 17.6405ZM15.2401 15.1205C14.4001 15.1205 13.8001 14.4005 13.8001 13.6805C13.8001 12.9605 14.5201 12.2405 15.2401 12.2405C16.0801 12.2405 16.6801 12.9605 16.6801 13.6805C16.8001 14.5205 16.0801 15.1205 15.2401 15.1205Z" fill="#8B86AF" />
            </svg>
          </div>
          <div class="icon-medium-dark"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="icon-medium-dark" d="M21.957 6.72917C21.9666 6.71356 21.9699 6.69493 21.9664 6.67697C21.9629 6.659 21.9528 6.64301 21.938 6.63217C21.934 6.62817 21.93 6.62417 21.926 6.62217L21.92 6.62017L15.887 3.60217C15.7954 3.55986 15.6959 3.53705 15.595 3.53517C15.4785 3.53443 15.3638 3.56309 15.2613 3.6185C15.1589 3.67392 15.0721 3.75429 15.009 3.85217L11.535 9.49817L15.894 16.5812L21.957 6.72917ZM20.893 20.2722C21.504 20.5782 22 20.3642 22 19.7942V8.48217L16.191 17.9212L20.893 20.2722ZM9.622 8.21217V14.6382L15.333 17.4932L9.622 8.21217ZM2.554 17.7702L7.744 20.3652C7.85942 20.4263 7.98743 20.4598 8.118 20.4632C8.441 20.4632 8.667 20.2132 8.667 19.7942V6.70017C8.66702 6.68809 8.66379 6.67624 8.65762 6.66585C8.65146 6.65547 8.64261 6.64694 8.632 6.64117L2.739 3.69617C2.64657 3.64669 2.54381 3.61963 2.439 3.61717C2.181 3.61717 2 3.81617 2 4.15117V16.8742C2 17.2152 2.25 17.6182 2.554 17.7702Z" fill="#8B86AF" />
            </svg>
          </div>
          <div class="icon icon-facebook"></div>
          <div class="icon icon-instagram"></div>
          <div class="icon-youtube-dark"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="icon-youtube-dark" d="M22.0617 6.93984C21.9422 6.49462 21.7078 6.0886 21.382 5.76243C21.0563 5.43625 20.6505 5.20136 20.2055 5.08125C18.5672 4.64063 12 4.64062 12 4.64062C12 4.64062 5.43281 4.64062 3.79453 5.07891C3.34927 5.19862 2.94334 5.43339 2.61751 5.75962C2.29169 6.08586 2.05744 6.49208 1.93828 6.9375C1.5 8.57812 1.5 12 1.5 12C1.5 12 1.5 15.4219 1.93828 17.0602C2.17969 17.9648 2.89219 18.6773 3.79453 18.9188C5.43281 19.3594 12 19.3594 12 19.3594C12 19.3594 18.5672 19.3594 20.2055 18.9188C21.1102 18.6773 21.8203 17.9648 22.0617 17.0602C22.5 15.4219 22.5 12 22.5 12C22.5 12 22.5 8.57813 22.0617 6.93984ZM9.91406 15.1406V8.85938L15.3516 11.9766L9.91406 15.1406Z" fill="#8B86AF" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div id="cookie-warning"></div>
  </div>
  <script type="application/json" id="redux-store-initial-state" defer>
    {
      "exchange": {
        "hasExternalId": false,
        "externalIdName": null,
        "recipientWallet": "",
        "extraId": "",
        "refundAddress": "",
        "refundExtraId": "",
        "email": "",
        "createTransactionError": "",
        "warningsFrom": [],
        "wallets": {
          "primary": [],
          "secondary": []
        },
        "isCurrencyFromAnonymous": false,
        "isWalletListShown": false,
        "isRefundAddressHintShown": false,
        "validationStatus": {
          "isValid": false,
          "isRecipientWalletValid": true,
          "isExtraIdValid": true,
          "isRefundAddressValid": true,
          "isFioValid": true,
          "isCoinIncludesToFioValid": true
        },
        "validatedFields": {
          "isFio": false,
          "recipientWallet": false,
          "extraId": false,
          "refundAddress": false
        },
        "isCreating": false,
        "isChangeNowAgreementsRead": true,
        "isThirdPartyAgreementsRead": true,
        "isLoadingFio": false,
        "apiErrorMessage": "",
        "qrScannerVisibility": {
          "recipientWallet": false,
          "refundWallet": false
        }
      },
      "exchangeCalculator": {
        "rateMode": "FLOATING",
        "flow": "standard",
        "type": "direct",
        "isFiatMode": false,
        "hideModes": {
          "floatRate": false,
          "fixedRate": false,
          "fiatMode": false
        },
        "from": {
          "id": 7,
          "ticker": "ada",
          "currentTicker": "ada",
          "name": "Cardano",
          "link": "cardano",
          "network": "ada",
          "decimals": "6",
          "isFiat": false,
          "hasExternalId": false,
          "addressExplorerMask": "https://blockchair.com/cardano/address/$$?from=changenow",
          "txExplorerMask": "https://blockchair.com/cardano/transaction/$$?from=changenow",
          "trustWalletAssetPrefix": "c1815",
          "tokenContract": null,
          "externalIdName": null,
          "regex": "^(([1-9A-HJ-NP-Za-km-z]{59})|([0-9A-Za-z]{100,104}))$",
          "regexTag": "",
          "warningFrom": "",
          "warningTo": "",
          "locale": "en",
          "publishedAt": "2021-06-10T15:22:44.565Z",
          "createdAt": "2021-06-10T15:22:45.253Z",
          "updatedAt": "2022-11-26T00:00:12.526Z",
          "isDefi": false,
          "isPopular": true,
          "isPage": true,
          "isPopularFiat": false,
          "isFixedRateEnabled": true,
          "isStable": false,
          "isWallet": true,
          "position": 9,
          "isAvailableInSimplex": true,
          "icon": {
            "id": 45,
            "name": "ada.svg",
            "alternativeText": "cardano logo",
            "caption": "",
            "hash": "ada_3e3be3b950",
            "ext": ".svg",
            "url": "https://content-api.changenow.io/uploads/ada_3e3be3b950.svg",
            "createdAt": "2021-06-23T12:59:58.218Z",
            "updatedAt": "2021-11-22T13:44:58.694Z"
          },
          "localizations": [{
            "id": 1020,
            "locale": "es",
            "published_at": "2022-05-18T19:59:05.647Z"
          }, {
            "id": 877,
            "locale": "ru",
            "published_at": "2022-04-11T15:15:40.398Z"
          }, {
            "id": 1058,
            "locale": "th",
            "published_at": "2022-05-18T20:34:47.432Z"
          }, {
            "id": 1056,
            "locale": "ko",
            "published_at": "2022-05-18T20:34:12.196Z"
          }, {
            "id": 1057,
            "locale": "pt",
            "published_at": "2022-05-18T20:34:27.842Z"
          }, {
            "id": 1003,
            "locale": "ar",
            "published_at": "2022-05-18T15:48:11.042Z"
          }, {
            "id": 1059,
            "locale": "tr",
            "published_at": "2022-05-18T20:35:10.047Z"
          }, {
            "id": 1054,
            "locale": "it",
            "published_at": "2022-05-18T20:33:34.644Z"
          }, {
            "id": 1028,
            "locale": "fa",
            "published_at": "2022-05-18T20:04:59.345Z"
          }, {
            "id": 1055,
            "locale": "ja",
            "published_at": "2022-05-18T20:33:54.388Z"
          }, {
            "id": 1011,
            "locale": "de",
            "published_at": "2022-05-18T16:00:22.942Z"
          }, {
            "id": 1060,
            "locale": "zh",
            "published_at": "2022-05-18T20:35:18.285Z"
          }, {
            "id": 1052,
            "locale": "fr",
            "published_at": "2022-05-18T20:33:07.586Z"
          }, {
            "id": 1053,
            "locale": "id",
            "published_at": "2022-05-18T20:33:17.368Z"
          }],
          "defaultValue": 20000,
          "manualDefaultValue": null,
          "price": 0.3171146835511316,
          "percentChange24h": -2.70728933,
          "percentChange7d": 2.34762519,
          "marketCap": 10927550694.153795,
          "volume24h": 179833238.89208782,
          "marketCapByTotalSupply": 11166324990.461502,
          "isAnonymous": false
        },
        "to": {
          "id": 2,
          "ticker": "eth",
          "currentTicker": "eth",
          "name": "Ethereum",
          "link": "ethereum",
          "network": "eth",
          "decimals": "18",
          "isFiat": false,
          "hasExternalId": false,
          "addressExplorerMask": "https://blockexplorers.nownodes.io/ethereum/address/$$",
          "txExplorerMask": "https://blockexplorers.nownodes.io/ethereum/tx/$$",
          "trustWalletAssetPrefix": "c60",
          "tokenContract": null,
          "externalIdName": null,
          "regex": "^(0x)[0-9A-Fa-f]{40}$",
          "regexTag": "",
          "warningFrom": "Please be careful not to deposit your ETH from a smart contract. ",
          "warningTo": "",
          "locale": "en",
          "publishedAt": "2021-06-10T15:22:44.565Z",
          "createdAt": "2021-06-10T15:22:45.232Z",
          "updatedAt": "2022-11-22T13:37:23.184Z",
          "isDefi": false,
          "isPopular": true,
          "isPage": true,
          "isPopularFiat": false,
          "isFixedRateEnabled": true,
          "isStable": false,
          "isWallet": true,
          "position": 2,
          "isAvailableInSimplex": true,
          "icon": {
            "id": 100,
            "name": "eth.svg",
            "alternativeText": "ethereum logo",
            "caption": "",
            "hash": "eth_f4ebb54ec0",
            "ext": ".svg",
            "url": "https://content-api.changenow.io/uploads/eth_f4ebb54ec0.svg",
            "createdAt": "2021-06-23T12:59:58.523Z",
            "updatedAt": "2021-11-22T14:54:16.567Z"
          },
          "localizations": [{
            "id": 1067,
            "locale": "th",
            "published_at": "2022-05-18T20:39:31.295Z"
          }, {
            "id": 1063,
            "locale": "it",
            "published_at": "2022-05-18T20:38:01.604Z"
          }, {
            "id": 875,
            "locale": "ru",
            "published_at": "2022-04-11T15:14:59.658Z"
          }, {
            "id": 1061,
            "locale": "fr",
            "published_at": "2022-05-18T20:37:07.511Z"
          }, {
            "id": 1062,
            "locale": "id",
            "published_at": "2022-05-18T20:37:36.892Z"
          }, {
            "id": 1065,
            "locale": "ko",
            "published_at": "2022-05-18T20:38:44.491Z"
          }, {
            "id": 1012,
            "locale": "de",
            "published_at": "2022-05-18T16:00:41.356Z"
          }, {
            "id": 1029,
            "locale": "fa",
            "published_at": "2022-05-18T20:05:55.378Z"
          }, {
            "id": 1021,
            "locale": "es",
            "published_at": "2022-05-18T20:00:10.249Z"
          }, {
            "id": 1066,
            "locale": "pt",
            "published_at": "2022-05-18T20:39:06.555Z"
          }, {
            "id": 1069,
            "locale": "zh",
            "published_at": "2022-05-18T20:40:10.281Z"
          }, {
            "id": 1064,
            "locale": "ja",
            "published_at": "2022-05-18T20:38:25.499Z"
          }, {
            "id": 1004,
            "locale": "ar",
            "published_at": "2022-05-18T15:48:36.829Z"
          }, {
            "id": 1068,
            "locale": "tr",
            "published_at": "2022-05-18T20:39:56.732Z"
          }],
          "defaultValue": 4,
          "manualDefaultValue": null,
          "price": 1258.2020847932695,
          "percentChange24h": -2.50594493,
          "percentChange7d": 3.93110116,
          "marketCap": 153971053599.4486,
          "volume24h": 5521086185.071883,
          "marketCapByTotalSupply": 153971053599.4486,
          "isAnonymous": false
        },
        "amount": 20000,
        "amountTo": null,
        "minAmount": 0,
        "estimation": 0,
        "rate": 0,
        "currencyList": [{
          "id": 2,
          "ticker": "eth",
          "currentTicker": "eth",
          "name": "Ethereum",
          "link": "ethereum",
          "network": "eth",
          "decimals": "18",
          "isFiat": false,
          "hasExternalId": false,
          "addressExplorerMask": "https://blockexplorers.nownodes.io/ethereum/address/$$",
          "txExplorerMask": "https://blockexplorers.nownodes.io/ethereum/tx/$$",
          "trustWalletAssetPrefix": "c60",
          "tokenContract": null,
          "externalIdName": null,
          "regex": "^(0x)[0-9A-Fa-f]{40}$",
          "regexTag": "",
          "warningFrom": "Please be careful not to deposit your ETH from a smart contract. ",
          "warningTo": "",
          "locale": "en",
          "publishedAt": "2021-06-10T15:22:44.565Z",
          "createdAt": "2021-06-10T15:22:45.232Z",
          "updatedAt": "2022-11-22T13:37:23.184Z",
          "isDefi": false,
          "isPopular": true,
          "isPage": true,
          "isPopularFiat": false,
          "isFixedRateEnabled": true,
          "isStable": false,
          "isWallet": true,
          "position": 2,
          "isAvailableInSimplex": true,
          "icon": {
            "id": 100,
            "name": "eth.svg",
            "alternativeText": "ethereum logo",
            "caption": "",
            "hash": "eth_f4ebb54ec0",
            "ext": ".svg",
            "url": "https://content-api.changenow.io/uploads/eth_f4ebb54ec0.svg",
            "createdAt": "2021-06-23T12:59:58.523Z",
            "updatedAt": "2021-11-22T14:54:16.567Z"
          },
          "localizations": [{
            "id": 1067,
            "locale": "th",
            "published_at": "2022-05-18T20:39:31.295Z"
          }, {
            "id": 1063,
            "locale": "it",
            "published_at": "2022-05-18T20:38:01.604Z"
          }, {
            "id": 875,
            "locale": "ru",
            "published_at": "2022-04-11T15:14:59.658Z"
          }, {
            "id": 1061,
            "locale": "fr",
            "published_at": "2022-05-18T20:37:07.511Z"
          }, {
            "id": 1062,
            "locale": "id",
            "published_at": "2022-05-18T20:37:36.892Z"
          }, {
            "id": 1065,
            "locale": "ko",
            "published_at": "2022-05-18T20:38:44.491Z"
          }, {
            "id": 1012,
            "locale": "de",
            "published_at": "2022-05-18T16:00:41.356Z"
          }, {
            "id": 1029,
            "locale": "fa",
            "published_at": "2022-05-18T20:05:55.378Z"
          }, {
            "id": 1021,
            "locale": "es",
            "published_at": "2022-05-18T20:00:10.249Z"
          }, {
            "id": 1066,
            "locale": "pt",
            "published_at": "2022-05-18T20:39:06.555Z"
          }, {
            "id": 1069,
            "locale": "zh",
            "published_at": "2022-05-18T20:40:10.281Z"
          }, {
            "id": 1064,
            "locale": "ja",
            "published_at": "2022-05-18T20:38:25.499Z"
          }, {
            "id": 1004,
            "locale": "ar",
            "published_at": "2022-05-18T15:48:36.829Z"
          }, {
            "id": 1068,
            "locale": "tr",
            "published_at": "2022-05-18T20:39:56.732Z"
          }],
          "defaultValue": 4,
          "manualDefaultValue": null,
          "price": 1258.2020847932695,
          "percentChange24h": -2.50594493,
          "percentChange7d": 3.93110116,
          "marketCap": 153971053599.4486,
          "volume24h": 5521086185.071883,
          "marketCapByTotalSupply": 153971053599.4486,
          "isAnonymous": false
        }, {
          "id": 7,
          "ticker": "ada",
          "currentTicker": "ada",
          "name": "Cardano",
          "link": "cardano",
          "network": "ada",
          "decimals": "6",
          "isFiat": false,
          "hasExternalId": false,
          "addressExplorerMask": "https://blockchair.com/cardano/address/$$?from=changenow",
          "txExplorerMask": "https://blockchair.com/cardano/transaction/$$?from=changenow",
          "trustWalletAssetPrefix": "c1815",
          "tokenContract": null,
          "externalIdName": null,
          "regex": "^(([1-9A-HJ-NP-Za-km-z]{59})|([0-9A-Za-z]{100,104}))$",
          "regexTag": "",
          "warningFrom": "",
          "warningTo": "",
          "locale": "en",
          "publishedAt": "2021-06-10T15:22:44.565Z",
          "createdAt": "2021-06-10T15:22:45.253Z",
          "updatedAt": "2022-11-26T00:00:12.526Z",
          "isDefi": false,
          "isPopular": true,
          "isPage": true,
          "isPopularFiat": false,
          "isFixedRateEnabled": true,
          "isStable": false,
          "isWallet": true,
          "position": 9,
          "isAvailableInSimplex": true,
          "icon": {
            "id": 45,
            "name": "ada.svg",
            "alternativeText": "cardano logo",
            "caption": "",
            "hash": "ada_3e3be3b950",
            "ext": ".svg",
            "url": "https://content-api.changenow.io/uploads/ada_3e3be3b950.svg",
            "createdAt": "2021-06-23T12:59:58.218Z",
            "updatedAt": "2021-11-22T13:44:58.694Z"
          },
          "localizations": [{
            "id": 1020,
            "locale": "es",
            "published_at": "2022-05-18T19:59:05.647Z"
          }, {
            "id": 877,
            "locale": "ru",
            "published_at": "2022-04-11T15:15:40.398Z"
          }, {
            "id": 1058,
            "locale": "th",
            "published_at": "2022-05-18T20:34:47.432Z"
          }, {
            "id": 1056,
            "locale": "ko",
            "published_at": "2022-05-18T20:34:12.196Z"
          }, {
            "id": 1057,
            "locale": "pt",
            "published_at": "2022-05-18T20:34:27.842Z"
          }, {
            "id": 1003,
            "locale": "ar",
            "published_at": "2022-05-18T15:48:11.042Z"
          }, {
            "id": 1059,
            "locale": "tr",
            "published_at": "2022-05-18T20:35:10.047Z"
          }, {
            "id": 1054,
            "locale": "it",
            "published_at": "2022-05-18T20:33:34.644Z"
          }, {
            "id": 1028,
            "locale": "fa",
            "published_at": "2022-05-18T20:04:59.345Z"
          }, {
            "id": 1055,
            "locale": "ja",
            "published_at": "2022-05-18T20:33:54.388Z"
          }, {
            "id": 1011,
            "locale": "de",
            "published_at": "2022-05-18T16:00:22.942Z"
          }, {
            "id": 1060,
            "locale": "zh",
            "published_at": "2022-05-18T20:35:18.285Z"
          }, {
            "id": 1052,
            "locale": "fr",
            "published_at": "2022-05-18T20:33:07.586Z"
          }, {
            "id": 1053,
            "locale": "id",
            "published_at": "2022-05-18T20:33:17.368Z"
          }],
          "defaultValue": 20000,
          "manualDefaultValue": null,
          "price": 0.3171146835511316,
          "percentChange24h": -2.70728933,
          "percentChange7d": 2.34762519,
          "marketCap": 10927550694.153795,
          "volume24h": 179833238.89208782,
          "marketCapByTotalSupply": 11166324990.461502,
          "isAnonymous": false
        }, {
          "id": 1,
          "ticker": "btc",
          "currentTicker": "btc",
          "name": "Bitcoin",
          "link": "bitcoin",
          "network": "btc",
          "decimals": "8",
          "isFiat": false,
          "hasExternalId": false,
          "addressExplorerMask": "https://blockexplorers.nownodes.io/bitcoin/address/$$",
          "txExplorerMask": "https://blockexplorers.nownodes.io/bitcoin/tx/$$",
          "trustWalletAssetPrefix": "c0",
          "tokenContract": null,
          "externalIdName": null,
          "regex": "^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$|^(bc1)[0-9A-Za-z]{39,59}$",
          "regexTag": "",
          "warningFrom": "",
          "warningTo": "",
          "locale": "en",
          "publishedAt": "2021-06-10T15:22:44.564Z",
          "createdAt": "2021-06-10T15:22:45.231Z",
          "updatedAt": "2022-11-30T01:17:43.010Z",
          "isDefi": false,
          "isPopular": true,
          "isPage": true,
          "isPopularFiat": false,
          "isFixedRateEnabled": true,
          "isStable": false,
          "isWallet": true,
          "position": 1,
          "isAvailableInSimplex": true,
          "icon": {
            "id": 4224,
            "name": "btc.svg",
            "alternativeText": "",
            "caption": "",
            "hash": "btc_d8db07f87d",
            "ext": ".svg",
            "url": "https://content-api.changenow.io/uploads/btc_d8db07f87d.svg",
            "createdAt": "2022-03-09T12:39:25.208Z",
            "updatedAt": "2022-03-09T12:39:25.220Z"
          },
          "localizations": [{
            "id": 1035,
            "locale": "id",
            "published_at": "2022-05-18T20:10:31.474Z"
          }, {
            "id": 1001,
            "locale": "ar",
            "published_at": "2022-05-18T15:47:18.286Z"
          }, {
            "id": 1026,
            "locale": "fa",
            "published_at": "2022-05-18T20:03:44.300Z"
          }, {
            "id": 1018,
            "locale": "es",
            "published_at": "2022-05-18T19:57:19.560Z"
          }, {
            "id": 1037,
            "locale": "ja",
            "published_at": "2022-05-18T20:24:44.350Z"
          }, {
            "id": 1036,
            "locale": "it",
            "published_at": "2022-05-18T20:10:50.888Z"
          }, {
            "id": 1038,
            "locale": "ko",
            "published_at": "2022-05-18T20:25:10.907Z"
          }, {
            "id": 1034,
            "locale": "fr",
            "published_at": "2022-05-18T20:10:12.918Z"
          }, {
            "id": 1041,
            "locale": "tr",
            "published_at": "2022-05-18T20:26:34.249Z"
          }, {
            "id": 1040,
            "locale": "th",
            "published_at": "2022-05-18T20:26:17.497Z"
          }, {
            "id": 1039,
            "locale": "pt",
            "published_at": "2022-05-18T20:25:43.940Z"
          }, {
            "id": 788,
            "locale": "ru",
            "published_at": "2022-03-22T12:16:50.869Z"
          }, {
            "id": 1009,
            "locale": "de",
            "published_at": "2022-05-18T15:52:08.662Z"
          }, {
            "id": 1042,
            "locale": "zh",
            "published_at": "2022-05-18T20:27:03.426Z"
          }],
          "defaultValue": 0.3,
          "manualDefaultValue": 0.1,
          "price": 17017.48174029206,
          "percentChange24h": -1.41555225,
          "percentChange7d": 3.47668215,
          "marketCap": 327176180963.4185,
          "volume24h": 19544250442.92829,
          "marketCapByTotalSupply": 327176180963.4185,
          "isAnonymous": false
        }, {
          "id": 201,
          "ticker": "usd",
          "currentTicker": "usd",
          "name": "Dollar",
          "link": "dollar",
          "network": "usd",
          "decimals": "2",
          "isFiat": true,
          "hasExternalId": false,
          "addressExplorerMask": null,
          "txExplorerMask": null,
          "trustWalletAssetPrefix": null,
          "tokenContract": null,
          "externalIdName": null,
          "regex": null,
          "regexTag": null,
          "warningFrom": "Please notice that you’re purchasing BTC that will be exchanged for the selected currency.",
          "warningTo": "",
          "locale": "en",
          "publishedAt": "2021-06-10T15:22:44.576Z",
          "createdAt": "2021-06-10T15:22:45.867Z",
          "updatedAt": "2022-07-13T15:03:32.250Z",
          "isDefi": false,
          "isPopular": false,
          "isPage": true,
          "isPopularFiat": true,
          "isFixedRateEnabled": false,
          "isStable": false,
          "isWallet": true,
          "position": 0,
          "isAvailableInSimplex": false,
          "icon": {
            "id": 291,
            "name": "usd.svg",
            "alternativeText": "",
            "caption": "",
            "hash": "usd_90681e5a82",
            "ext": ".svg",
            "url": "https://content-api.changenow.io/uploads/usd_90681e5a82.svg",
            "createdAt": "2021-06-23T12:59:59.557Z",
            "updatedAt": "2021-06-23T12:59:59.567Z"
          },
          "localizations": [],
          "defaultValue": 1500,
          "manualDefaultValue": 1500,
          "price": null,
          "percentChange24h": null,
          "percentChange7d": null,
          "marketCap": null,
          "volume24h": null,
          "marketCapByTotalSupply": null,
          "isAnonymous": false
        }],
        "fixedRatePairs": [],
        "currencyFromSearchString": "",
        "currencyToSearchString": "",
        "autoFocusAmountField": true,
        "isAmountFieldFocused": true,
        "isLoading": true,
        "amountFieldWarning": null,
        "estimationFieldWarning": null,
        "errors": {
          "from": [],
          "to": []
        },
        "fiatAmountError": null,
        "errorsVisibility": {
          "from": true,
          "to": true
        },
        "providers": [],
        "nextEstimates": [],
        "nextEstimateSummary": {},
        "isEstimatesExpired": true,
        "isCurrenciesListFetched": false,
        "currenciesListFetching": false,
        "promoCode": "",
        "filterFrom": "ALL",
        "filterTo": "ALL",
        "networks": [],
        "isNetworksFetched": false,
        "networksFetching": false,
        "defaultTickers": {
          "exchangeTickerFrom": "btc",
          "exchangeTickerTo": "eth",
          "buyTickerFrom": "usd",
          "buyTickerTo": "btc"
        }
      }
    }
  </script>
  <script defer id="i18n-variables">
    var i18n = {
      "PREFIX": "",
      "HEADER": {
        "LANGUAGE_ACTIVE": "English (US)",
        "SHORT_LANGUAGE_ACTIVE": "EN",
        "FOR_PARTNERS": "For Partners",
        "SUPPORT": "Support",
        "HOW_IT_WORKS": "How It Works",
        "HELP_CENTER": "Help Center",
        "CONTACT_SUPPORT": "Contact Support",
        "FAQ": "FAQ",
        "BLOG_LINK": "Blog & News",
        "NOW_TOKEN": "NOW Token",
        "PRODUCTS": "NOW Products",
        "TOKEN_SWAP": "Token Swap",
        "PAYMENTS": "NOWPayments",
        "ACADEMY": "NOWAcademy",
        "DEFI_PORTAL": "DeFi Portal",
        "LISTING": "Asset Listing",
        "SUPPORTED_COINS": "Supported coins",
        "LIGHTNING": "Lightning NOW",
        "NODES": "NOWNodes",
        "TELEGRAM_BOT": "Telegram Bot",
        "PREMIUM": "ChangeNOW Pro",
        "CURRENCIES": "All Currencies",
        "CURRENCIES_2": "Currencies",
        "MOBILE_APP": "Mobile Exchange",
        "WALLET": "NOW Wallet",
        "TRACKER": "NOWTracker",
        "CRYPTO_LOAN": "Crypto Loan",
        "PARTNERS_LOGIN": "Partners LogIn",
        "EXCHANGE_API": "Exchange API",
        "PAYMENTS_TEXT": "Payments",
        "TRAFFIC_MONETIZATION": "Traffic Monetization",
        "CUSTODY": "Custody",
        "ASSET_LISTING": "Asset Listing",
        "LIQUIDITY_PROVIDER": "Liquidity Provider",
        "WHITE_LABEL": "White Label",
        "PARTNERS_MAIN": "Main",
        "PRIVILEGES": "Privileges"
      },
      "WARNINGS": {
        "MESSAGE_1": "Please, fill in the 'Name' field",
        "MESSAGE_2": "Please enter a valid email address",
        "MESSAGE_3": "Please, fill in the 'Message' field",
        "MESSAGE_4": "Seems like you are missing something",
        "MESSAGE_5": "You are subscribed. Our owl is on the way to deliver the latest news from ChangeNOW!",
        "MESSAGE_6": "This address is not valid",
        "MESSAGE_7": "This memo is not valid",
        "MESSAGE_8": "Please enter a valid email address",
        "MESSAGE_9": "Too big files size. The limit is 10mb",
        "MESSAGE_10": "Please fill the field",
        "MESSAGE_11": "Use only ETH Wallet Address (ERC-20 Compatible). Do not use the addresses of exchanges and contracts.",
        "MESSAGE_12": "Please, make sure you're on https://changenow.io",
        "MESSAGE_13": "Please make your deposit within a certain time frame, otherwise your exchange will not proceed with the fixed rate.",
        "MESSAGE_14": "For your safety, we will execute a refund to the initial deposit address by default.\n\nWe can't guarantee a refund if exchange addresses are involved. Make sure that your wallet balance exceeds the minimal exchange amount.\n\nIf you need help with your case, reach out to our ",
        "MESSAGE_15": "support team",
        "MESSAGE_16": "."
      },
      "CONTACT_US": {
        "TITLE": "Contact us",
        "TEXT": "If you have any questions, concerns or suggestions, feel free to contact us via the following emails:",
        "NAME": "Name",
        "MESSAGE": "Message",
        "SUPPORT_EMAIL": "For support queries",
        "SUPPORT_EMAIL_LEGAL": "For legal queries",
        "PR_EMAIL": "For PR queries",
        "API_EMAIL": "For API issues",
        "PHONE": "Phone number",
        "SOCIAL": "Social media",
        "SEND": "Send",
        "SUCCESS_TEXT": "Your message has been sent.",
        "TOOLTIP_NAME": "Please fill in the \"Name\" field",
        "TOOLTIP_MAIL": "Please enter a valid email address",
        "TOOLTIP_MESSAGE": "Please fill in the \"Message\" field"
      },
      "SUBSCRIPTION": {
        "TEXT_1": "Thank you for using ",
        "TEXT_2": ", a non-custodial service for fast coin exchanges.",
        "TEXT_3": "Your coins are on the way to your wallet! Please, provide your email address and we'll notify you once your funds reach your wallet. Thanks!",
        "EMAIL_TEXT": "Email",
        "CONFIRM_TEXT": "Confirm",
        "LEAVE_EMAIL": "Leave your email if you'd like to be notified when the exchange is done"
      },
      "COOKIE": {
        "COOKIES": "We use cookies to ensure you get the best experience. By using ChangeNOW, you agree to our",
        "COOKIES_TERMS": "Terms of Use",
        "COOKIES_AND": "and",
        "COOKIES_PRIVACY": "Privacy Policy",
        "COOKIES_ACCEPT": "Accept"
      },
      "FOOTER": {
        "COLUMN_NAME_1": "API & Tools",
        "DEVELOPMENT_API": "Development API",
        "FOR_PARTNERS": "For Partners",
        "WIDGETS_BUTTONS": "Widgets",
        "REFERRAL_PROGRAM": "Referral Program",
        "PARTNERS_PROFILE": "Partners Profile",
        "DEFI_PORTAL": "DeFi Portal",
        "BUY_CRYPTO": "Buy Crypto",
        "NOW_TOKEN": "NOW Token",
        "BITCOIN_HALVING": "Bitcoin Halving",
        "BUSINESS_ETHICS": "NOW Responsibility",
        "COLUMN_NAME_2": "Company & Team",
        "ABOUT_US": "About Us",
        "JOBS": "Jobs",
        "NEWS_AND_BLOG": "News & Blog",
        "BITCOIN_WIKI": "Bitcoin Wiki",
        "COLUMN_NAME_3": "Support",
        "KYC_AML": "KYC/AML",
        "TERMS_OF_USE": "Terms of Use",
        "PRIVACY_POLICY": "Privacy Policy",
        "RISK_DISCLOSURE": "Risk Disclosure Statement",
        "HARD_FORK_POLICY": "Hard Fork Policy",
        "LINKS": "Links",
        "COMPANY_TEAM": "Company & Team",
        "SUPPORT": "Support",
        "NEWS_AND_BLOGS": "Blog & News",
        "HOW_IT_WORKS": "How It Works",
        "FAQ": "FAQ",
        "CONTACT_US": "Contact Us",
        "RATE_US_ON": "Rate us on",
        "API": "API",
        "STATUS_PAGE": "Status Page",
        "EXCHANGE_PAIRS": "Exchange Pairs",
        "BTC_TO_ETH": "BTC to ETH",
        "BTC_TO_LTC": "BTC to LTC",
        "BTC_TO_DOGE": "BTC to DOGE",
        "BTC_TO_XRP": "BTC to XRP",
        "ETH_TO_BNB": "ETH to BNB",
        "BTC_TO_XMR": "BTC to XMR",
        "USD_TO_BNB": "USD to BNB",
        "BTC_TO_BNB": "BTC to BNB",
        "ETH_TO_BUSD": "ETH to BUSD",
        "SOL_TO_ETH": "SOL to ETH",
        "USD_TO_XMR": "USD to XMR",
        "USDT_TO_ETH": "USDT to ETH",
        "ETH_TO_BTC": "ETH to BTC",
        "LTC_TO_BTC": "LTC to BTC",
        "DOGE_TO_BTC": "DOGE to BTC",
        "USDT_TO_BTC": "USDT to BTC",
        "BNB_TO_BTC": "BNB to BTC ",
        "XMR_TO_BTC": "XMR to BTC",
        "ETH_TO_SOL": "ETH to SOL",
        "ETH_TO_AVAX": "ETH to AVAX",
        "USDC_TO_BNB": "USDC to BNB",
        "LTC_TO_ETH": "LTC to ETH",
        "XLM_TO_BTC": "XLM to BTC",
        "BNB_TO_AVAX": "BNB to AVAX",
        "ALL_PAIRS": "All Pairs",
        "SUPPORTED_COINS": "Supported Coins",
        "ALL_CURRENCIES": "All Currencies",
        "API_TOOLS": "API & Tools",
        "TOKEN_SWAP": "Token Swap",
        "PRICE_PREDICTIONS": "Price Predictions",
        "PRESS": "Press About Us",
        "BITCOIN": "Bitcoin",
        "ETHEREUM": "Ethereum",
        "RIPPLE": "Ripple",
        "CARDANO": "Cardano",
        "BINANCE_COIN_SMART_CHAIN": "Binance Coin (BSC)",
        "LITECOIN": "Litecoin",
        "THETA": "THETA",
        "SOLANA": "Solana",
        "STELLAR": "Stellar",
        "MONERO": "Monero",
        "POLKADOT": "Polkadot",
        "TRON": "TRON",
        "VIDEO": "Our Videos",
        "LISTING": "Asset Listing",
        "CRYPTO_LOAN": "Crypto Loan"
      },
      "AUTHORIZATION": {
        "EMAIL": {
          "LABEL": "Your email",
          "PLACEHOLDER": "Enter your email",
          "INVALID_EMAIL": "Invalid email",
          "EMAIL_ALREADY_EXIST": "Account with this email already exist",
          "EMPTY": "Please enter your email"
        },
        "PASSWORD": {
          "LABEL": "Password",
          "SECOND_LABEL": "Forgot password?",
          "PLACEHOLDER": "Enter your password",
          "PLACEHOLDER_SIGN_UP": "Set up your password",
          "REPEAT_PLACEHOLDER": "Repeat your password",
          "MIN_CHARACTERS": "Password is too short",
          "MAX_CHARACTERS": "Password is too long",
          "LENGTH_ERROR": "Please make sure your password is between 8 and 100 characters",
          "INCORRECT": "Incorrect password",
          "EMPTY": "Please enter password",
          "NOT_MATCH": "Password doesn't match",
          "OLD_PASSWORD_LABEL": "Old password",
          "OLD_PASSWORD_PLACEHOLDER": "Enter your old password",
          "NEW_PASSWORD_LABEL": "New password",
          "NEW_PASSWORD_PLACEHOLDER": "Enter your new password",
          "CONFIRM_NEW_PASSWORD_LABEL": "Confirm new password",
          "CONFIRM_NEW_PASSWORD_PLACEHOLDER": "Confirm your new password"
        },
        "SET_UP_LOGIN_INFO": "Set up login info",
        "SET_UP": "Set Up",
        "REGISTRATION_TITLE": "Enter the Premium Lounge",
        "LOGIN_TITLE": "Enter the Premium Lounge",
        "LOGIN_TITLE_WELCOME_BACK": "Welcome back!",
        "FORGOT_PASSWORD": {
          "TITLE": "Forgot Password?",
          "DESCRIPTION": "Enter your email below and we'll send you a link to reset your password.",
          "BUTTON": "Send instructions"
        },
        "RESET_PASSWORD": {
          "TITLE": "Password reset",
          "DESCRIPTION": "Please enter here a new strong password to protect your account",
          "PASSWORD_UPDATED": "Password updated",
          "BUTTON": "Log in to the Lounge"
        },
        "CHANGE_PASSWORD": {
          "TITLE": "Change login password",
          "PASSWORD_SUCCESS": "Password successfully changed"
        },
        "EMAIL_TEXTS": {
          "CHECK_EMAIL": "Check your email",
          "EMAIL_CONFIRMED": "Email confirmed",
          "LINK_EXPIRED": "Link expired",
          "DESCRIPTION_1": "An email has been sent to",
          "DESCRIPTION_2": "with instructions to reset your password",
          "DESCRIPTION_3": "We've sent a message to",
          "DESCRIPTION_4": "with a link to activate your account.",
          "BUTTON": "Resend",
          "BUTTON_2": "Resend email",
          "BUTTON_3": "Take me to the Lounge"
        },
        "GOOGLE_AUTHENTICATION": {
          "TITLE": "Security verification",
          "DESCRIPTION": "To secure your account, please complete two-factor authentication",
          "LABEL": "Verification code",
          "MIN_CHARACTERS": "Enter a 6-digit verification code.",
          "CODE_WITH_SPACES": "Code must not contain spaces"
        },
        "SUBMIT": "Submit",
        "SIGN_UP": "Sign Up",
        "SIGN_IN": "Sign in",
        "LOG_IN": "Log In",
        "LOG_OUT": "Log out",
        "NEW_TO_CHANGENOW": "New to ChangeNOW?",
        "ALREADY_REGISTERED": "Already registered?",
        "ACCOUNT_NOT_FOUND": "No account with this email/password was found.",
        "AGREEMENT_TEXT": "I've read and agree to the ChangeNOW",
        "TERMS_OF_USE": "Terms of Use",
        "PRIVACY_POLICY": "Privacy Policy",
        "AND": "and",
        "RISK_DISCLOSURE": "Risk Disclosure statement",
        "CONFIRM": "Confirm",
        "CONFIRM_CHANGES": "Confirm changes",
        "IN": "in",
        "DONE": "Done",
        "CONNECT_ERROR": "Something went wrong",
        "CLOSE": "Close",
        "OR_USE_EMAIL_FOR": "or use e-mail for",
        "WELCOME_TO": "Welcome to Changenow.io!",
        "CLICK_TO_SIGN_IN": "Click “Sign” to Sign In.",
        "CLICK_TO_SIGN_UP": "Click “Sign” to Sign Up.",
        "NO_PASSWORD": "No password needed!",
        "NOT_TRIGGER_BLOCKCHAIN": "This request will not trigger a blockchain transaction or cost any gas fees.",
        "WALLET_CONNECT": {
          "REJECTED": "Rejected. Please,",
          "TRY_AGAIN": "try again",
          "DENIED_SIGNATURE": "User denied signature. Please,",
          "UNKNOWN_ERROR": "Unknown error",
          "ALREADY_EXISTS": "An account with this address already exists. Please try to",
          "SOMETHING_WENT_WRONG": "Something went wrong.",
          "CONNECTING_TO_WALLET": "Connecting to your wallet."
        }
      },
      "DASHBOARD": {
        "PROFILE": "Profile",
        "HISTORY": "History",
        "EXCHANGE": "Exchange",
        "SETTINGS": "Settings",
        "LOG_OUT": "Logout",
        "TOOLTIP": {
          "TITLE": "VIP Level",
          "TEXT_LEVEL_0": "To upgrade your level please finish your email ownership verification",
          "TEXT_LEVEL_1": "Complete the account verification in settings section to upgrade VIP level",
          "TEXT_LEVEL_2": "This is the maximum available level, stay tuned for more privileges",
          "TEXT_LEVEL_3": ""
        },
        "AUTHENTICATION": {
          "TITLE": "2FA",
          "AUTHENTICATOR": "Authenticator",
          "TEXT": "6-digits one-time code",
          "SUPPORTED_APPS": "Supported apps",
          "AUTHY": "Authy",
          "GOOGLE_AUTHENTICATOR": "Google Authenticator",
          "ENABLE_AUTHENTICATION": "Enable authentication",
          "DISABLE_AUTHENTICATION": "Disable authentication",
          "INSTALL_APP": "Install authenticator app on your mobile device",
          "SCAN_QR_CODE": "Scan QR code with Authenticator",
          "APP_VERIFICATION_CODE": "Verification code",
          "EMAIL_VERIFICATION_CODE": "Email verification code",
          "ENTER_6_DIGIT_CODE": "Enter the 6 digit verification code",
          "DISABLE_TEXT": "You are about to disable two-factor authentication.<br>It will make your account less secure.<br>If you are sure, enter the verification code sent to your email.",
          "COPY_SECRET_KEY": "Copy secret key",
          "INVALID_CODE": "Invalid code"
        },
        "LOGIN": {
          "TITLE": "Login info",
          "PASSWORD": "Password",
          "EMAIL": "Email",
          "NOT_CONFIRMED": "(not confirmed <span>&#x26A0;&#xFE0F;</span> )",
          "WEB3_WALLET": "Web3 wallet",
          "EMAIL_AND_PASSWORD": "Email and Password"
        },
        "IDENTITY_VERIFICATION": {
          "TITLE": "Identity Verification",
          "TITLE_TWO": "Verified",
          "VERIFY_TEXT": "You can verify your identity to upgrade the VIP level",
          "VERIFY_TEXT_2": "Please verify your identity to proceed.",
          "PENDING_TEXT": "Verification is processing",
          "REJECT_TEXT": "Your verification application is rejected",
          "BUTTON_VERIFY_LABEL": "Verify",
          "BUTTON_PENDING_LABEL": "Check",
          "BUTTON_REJECTED_LABEL": "Retry"
        },
        "ENABLE": "Enable",
        "DISABLE": "Disable",
        "CHANGE": "Change",
        "RESEND_LINK": "Resend link",
        "VERIFY": "Verify",
        "SET_UP": "Set Up",
        "LINK_YOUR_WALLET": "Link your wallet to account to participate in <span>airdrops</span> and <span>get more</span> from ChangeNOW"
      },
      "MAIN": {
        "TOOLTIP_HEAD_CLASSIC": "This is an expected rate",
        "TOOLTIP_TEXT_CLASSIC": "ChangeNOW will pick the best rate for you during the moment of the exchange.",
        "TOOLTIP_LINK_CLASSIC": "Learn more",
        "TOOLTIP_HEAD_FIXED": "Exact exchange amount",
        "TOOLTIP_TEXT_FIXED": "You will get the exact exchange amount displayed - ChangeNOW takes all the rate risks.",
        "TOOLTIP_LINK_FIXED": "Learn more",
        "MAP_SEND": "Sent",
        "MAP_GOT": "Got",
        "SUBSCRIBE_BUTTON": "Subscribe",
        "NEWS_BANNER": {
          "NEWS_TEXT": "Exchange on the go ",
          "NEWS_TEXT_WITH": "with ",
          "NEWS_TEXT_CHANGE": "Change",
          "NEWS_TEXT_NOW": "NOW",
          "NEWS_TEXT_APP": " app"
        }
      },
      "EXCHANGE": {
        "DROPDOWN_PLACEHOLDER": "No matches were found for your query",
        "CLASSIC_RATE": "Classic Rate",
        "FIXED_RATE": "Fixed Rate:",
        "FIAT_RATE": "Buy Crypto",
        "SEND_TEXT": "You Send",
        "GET_TEXT": "You Get",
        "SEND_CRYPTO_TEXT": "You Pay",
        "BUTTON_TEXT": "Exchange",
        "BUTTON_TEXT_BUY": "Buy",
        "MAXIMUM_AMOUNT": "Maximum amount",
        "MINIMUM_AMOUNT": "Minimum amount",
        "EXCHANGE_RATE_TEXT": "Expected rate",
        "ALL_FEE_INCLUDED": {
          "LINK": "No extra fees",
          "TOOLTIP": {
            "TEXT_1": "Network fees and all other exchange charges are included in the rate.",
            "TEXT_2_CLASSIC": "We guarantee no extra costs.",
            "TEXT_2_FIXED": "You will get the exact amount shown."
          }
        },
        "DEPOSIT_FROM": "Deposit from",
        "TO": "to",
        "EXCHANGE": "Exact exchange amount ",
        "CURRENCIES_PLACEHOLDER": "Type a currency",
        "CURRENCIES_POPULAR": "Popular Currencies",
        "CURRENCIES_POPULAR_FIATS": "Popular Fiats",
        "CURRENCIES_DEFI": "DeFi Tokens",
        "CURRENCIES_STABLE": "Stablecoins",
        "CURRENCIES_ALL": "All Currencies",
        "CURRENCIES_NEW": "New Currencies",
        "CURRENCIES_GAINERS": "Top Gainers",
        "CURRENCIES_LOSERS": "Top Losers",
        "SELECT_FROM": "Select a currency from",
        "SELECT_TO": "Select a currency to",
        "WARNING_FIXED_RATE": {
          "MIN_AMOUNT": {
            "TEXT_1": "Minimum amount is ",
            "TEXT_2": " For a lower amount you can ",
            "LINK_TO_FLOATING_RATE": "proceed to standard rate"
          },
          "MAX_AMOUNT": {
            "TEXT_1": "Maximum amount is ",
            "TEXT_2": " For a higher amount you can ",
            "LINK_TO_FLOATING_RATE": "proceed to standard rate"
          },
          "PAIR_IS_NOT_AVAILABLE": "Pair not available for fixed rate. ",
          "LINK_TO_FLOATING_RATE": "Return to standard rate"
        },
        "WARNING_CLASSIC_RATE": {
          "MAX_AMOUNT": "Maximum amount is ",
          "MIN_AMOUNT": "Minimum amount is ",
          "PAIR_IS_NOT_AVAILABLE": "Trading pair is not available now. Please, check back later."
        },
        "WARNING_FOR_BOTH_RATES": {
          "UNEXPECTED_ERROR": {
            "TEXT": "Amount calculation unsuccessful. ",
            "REFRESH_LINK": "Please try to refresh"
          }
        },
        "FIX_RATE_TOOLTIP_TITLE": "Fixed rate mode",
        "FIX_RATE_TOOLTIP_TEXT": "If mode on: the exchange is completed regardless of the rate fluctuations. ChangeNOW guarantees you will receive the agreed amount.",
        "TIMER_TOOLTIP_TEXT": "Till the next rate update"
      },
      "EXCHANGE_STEPPER": {
        "STEPS_LIST": {
          "ENTER_EXCHANGE_DETAILS": "Enter Exchange Details",
          "CONFIRM_THE_EXCHANGE": "Confirm the Exchange",
          "COMPLETE_THE_EXCHANGE": "Complete the Exchange",
          "RECEIVE_YOUR_FUNDS": "Receive Your Funds"
        },
        "SET_TRANSACTION_STEP": {
          "TITLE": "Please enter the details of your exchange",
          "RECIPIENT_WALLET": "Recipient Wallet",
          "SAME_COINS_PAIR_DISCLAIMER": {
            "TEXT_1": "Same-coin pairs allow you to privately send transactions while hiding your balance and history from a recipient.",
            "TEXT_2": "Note: ",
            "TEXT_3": "these transactions may still be subject to AML/KYC screening."
          },
          "AVAILABLE_WALLETS_HINT_LINK": "Don’t have a wallet yet?",
          "PAYOUT_ADDRESS_LABEL": "Enter the {0} payout address",
          "EXTRA_ID_LABEL": "{0} (optional)",
          "REFUND_WALLET": "Refund Wallet",
          "REFUND_ADDRESS_LABEL": "Enter {0} refund address (required)",
          "REFUND_ADDRESS_LABEL_SECOND": "Enter {0} refund address",
          "REFUND_REQUIRED_HINT_LINK": "Why it matters?",
          "REFUND_REQUIRED_HINT_MESSAGE": "In case something goes wrong during the exchange, we might need a refund address so we can return your coins back to you.",
          "IDENTIFICATION": "Identification",
          "EMAIL_LABEL": "Email (required)",
          "VALIDATION_ERRORS": {
            "INVALID_ADDRESS": "Please enter a valid address or FIO name",
            "INVALID_ADDRESS_ONLY": "Please enter a valid address",
            "INVALID_EXTRA_ID": "This {0} is not valid",
            "REQUIRED_EXTRA_ID": "{0} is required to proceed with this address",
            "INVALID_EMAIL": "Please enter a valid email address",
            "INVALID_FIO": "Entered FIO name is not found",
            "INVALID_COIN_TO_FIO": "Sorry, {0} address not found in your FIO"
          },
          "NEXT_BUTTON": "Next",
          "PAYMENT_OFFERS_BLOCK_TITLE": "Payment offers",
          "EMERGENCY_NOTIFICATION": "<p><b>Important PSA:</b> any transactions involving Ethereum and/or ERC-20 tokens as they will be processed with a delay due to the current state of the Ethereum network and extremely high transaction fees. ⚠️</p>",
          "USER_MEDIA_DENIED_MESSAGE": "Access to your camera has been denied. Update the permissions in your browser, then restart the page to continue."
        },
        "CONFIRM_TRANSACTION_STEP": {
          "TITLE": "Please confirm the details of your exchange",
          "YOU_SEND": "You Send",
          "YOU_GET": "You Get",
          "ESTIMATED_ARRIVAL": "Estimated Arrival",
          "MINUTES": "minutes",
          "EMAIL": "Email",
          "DESTINATION_TAG": "Destination Tag",
          "REFUND_ADDRESS": "Refund address",
          "REFUND": "Refund",
          "CONVERTED_TO": "converted to",
          "FIAT_LABEL": "You Buy",
          "FIAT_TO_BTC_WARNING": "The estimated BTC amount doesn’t include the network fee",
          "CONFIRM_BUTTON": "Confirm",
          "BACK_BUTTON": "Back",
          "INCORRECT_ADDRESS": "Please make sure you have entered a correct address. To proceed anyway, please contact our support team.",
          "CHANGENOW_AGREEMENTS": {
            "TEXT_1": "I've read and agree to the ChangeNOW ",
            "TERMS_OF_USE_LINK": "Terms of Use",
            "TEXT_2": "and",
            "TEXT_3": ", ",
            "PRIVACY_POLICY_LINK": "Privacy Policy",
            "RISK_DISCLOSURE": "Risk Disclosure Statement"
          },
          "THIRD_PARTY_AGREEMENTS": {
            "TEXT_1": "I'm aware that this exchange is made through a",
            "FAQ_LINK": "third-party service"
          },
          "PHISHING_WARNING": "Please, make sure you're on https://changenow.io",
          "INVALID_REGION": "Unfortunately, Guardarian is not available for the residents of your country just yet. Please try another provider. Sorry for the inconvience!"
        },
        "TRANSACTION_STEP": {
          "TRANSACTION_ID": "Transaction ID ",
          "DEPOSIT_INFO": {
            "TITLE": {
              "FLOAT_RATE": "Please send the funds you would like to exchange",
              "FIXED_RATE": "Please send the funds for exchange within 20 minutes",
              "CONFIRMING": "Your {LINK} of {AMOUNT} {TICKER} is confirming.",
              "CONFIRMING_TEXT_1": "It usually takes ~ 2-15 minutes",
              "CONFIRMING_TEXT_2": "{NUMBER}/1 confirmations received",
              "DEPOSIT": "deposit",
              "EXCHANGING": "Your deposit of {AMOUNT} {TICKER} is exchanging. It usually takes just a few seconds",
              "SENDING": "The exchange succeeded, your coins will be sent to you shortly"
            },
            "DEPOSIT_WITH": "Deposit with",
            "WITH": "with",
            "UNLOCK": "Unlock",
            "DEPOSIT": "Deposit",
            "AMOUNT_LABEL": "Amount",
            "ADDRESS_LABEL": "To this address",
            "FIAT_LABEL": "You buy",
            "CONVERTED_TO": "converted to",
            "SHOW_QR_CODE": "Show QR code",
            "HIDE_QR_CODE": "Hide QR code",
            "ONE_TAP_TEXT": "One tap",
            "ONE_TAP_DEPOSIT_TEXT": "deposit",
            "ONE_CLICK_DEPOSIT_TEXT": "One click deposit:",
            "TRUST_WALLET_BUTTON_LABEL": "Trust Wallet",
            "OPTIONS_TEXT": "More deposit options",
            "METAMASK_WRONG_NETWORK_TEXT": "Wrong network. Please connect Metamask to the appropriate network.",
            "TRONLINK_WRONG_NETWORK_TEXT": "Wrong network. Please connect TronLink to the appropriate network.",
            "KAIKAS_WRONG_NETWORK_TEXT": "Wrong network. Please connect Kaikas to the appropriate network.",
            "WALLET_CONNECT_WRONG_NETWORK_TEXT": "Wrong network. Please connect wallet to the appropriate network.",
            "DISCONNECT": "Disconnect",
            "INSUFFICIENT_BALANCE": "Insufficient balance",
            "AVAILABLE": "Available",
            "CONNECTION_CANCELLED": "Connection cancelled",
            "TRANSACTION_CANCELLED": "Transaction cancelled",
            "SOMETHING_WENT_WRONG": "Something went wrong"
          },
          "EXCHANGE_STATUS": {
            "AWAITING": "Awaiting deposit",
            "AWAITING_DONE_TEXT": "Deposit received",
            "AWAITING_TEXT_FIAT": "Waiting for payment",
            "AWAITING_TEXT_FIAT_DONE": "Payment received",
            "EXCHANGING": "Exchanging",
            "EXCHANGING_TEXT_FIAT": "Purchasing crypto",
            "EXCHANGING_DONE_TEXT": "Exchanged",
            "EXCHANGING_TEXT_FIAT_DONE": "Crypto purchased",
            "SENDING": "Sending to you",
            "SENT_TEXT": "Sending to your wallet",
            "CONFIRMING": "Confirming"
          },
          "GET_INFO": {
            "YOU_GET": "You Get",
            "RECIPIENT_WALLET": "Recipient Wallet",
            "REFUND_ADDRESS": "Refund address",
            "REFUND_EXTRA_ID": "Refund extra ID"
          },
          "FAILED_TRANSACTION_FORM": {
            "TITLE": "The transaction was not completed",
            "TEXT_1": "We are working on this error. We apologize for the inconvenience.",
            "TEXT_2": "Any additional information about exchange will be very useful.",
            "TEXT_3": "Thank you!"
          },
          "TRANSACTION_DATA": {
            "TRANSACTION_DETAILS": "Transaction details",
            "RECIPIENT_WALLET": "Recipient wallet address"
          },
          "KYC_AML_INFO": {
            "TITLE": "The transaction",
            "TITLE_1": "has been placed on hold by our automated risk prevention system.",
            "TITLE_2": "KYC/AML procedure.",
            "TITLE_3": "Your exchange is under review by risk control team and will be processed soon.",
            "ACCORDION": {
              "FAQ": {
                "0": {
                  "QUESTION": "Why is there a KYC/AML procedure?",
                  "ANSWER": "The crypto market is a subject of certain rules and regulations which make it mandatory for most crypto services to have certain procedures implemented according to European Anti-Money Laundering (AML) and Know Your Customer (KYC) regulations."
                },
                "1": {
                  "QUESTION": "How to pass it?",
                  "ANSWER": "To proceed with the verification process, please contact <a class=\"darken-green-color\" href=\"mailto:support@changenow.io\">support@changenow.io</a> and follow the instructions provided. As soon as we receive the information required under KYC/AML regulations, the exchange will be completed."
                },
                "2": {
                  "QUESTION": "Can I refuse?",
                  "ANSWER": "To refuse the KYC procedure, please contact our support at <a class=\"darken-green-color\" href=\"mailto:support@changenow.io\">support@changenow.io</a>. In case of refusal, we will not be able to proceed with the transaction, and we will issue a refund to the originating address. <p class=\"accordion-paragraph\"> Please note that the procedure will differ if the address is suspected in connection to illegal activity. In such cases, we will not be able to issue a refund without KYC, and we will require additional documents. Please contact our support team for more information.</p>"
                }
              }
            },
            "READ_MORE": "You can read more about KYC procedure and our risk prevention policies",
            "HERE": "here."
          },
          "TRANSACTION_FAILED": {
            "TITLE": "The transaction was not completed.",
            "SUB_TITLE": "No worries, your funds are safe!",
            "PARAGRAPH": "For more information, please contact our support team through the form below, and our tech team is going to fix it in no time. Kindly provide your transaction ID",
            "PARAGRAPH_1": "and include the words \"Transaction failed\" in your message. We'll get back to you promptly with a viable solution.",
            "PUSH_REFUND": {
              "TITLE": "The rate has changed",
              "DESCRIPTION": "The exchange rate has changed due to the market situation. Please pick the option",
              "SUPPORT_FORM_TITLE": "Contact support",
              "SUPPORT_FORM_DESCRIPTION": "If you would like us to arrange a refund to another address, please contact our support team",
              "SUPPORT_FORM_SUCCESS_TEXT": "Your message has been sent",
              "BUTTON_CONTINUE": "Continue",
              "TRANSACTION_TITLE": "Transaction details",
              "INVALID_FETCH": "Something went wrong. Please try again.",
              "REFUND_TEXT_1": "Request the refund of",
              "REFUND_TEXT_2": "to the address",
              "PUSH_TEXT_1": "Proceed the exchange with estimate of",
              "PUSH_TEXT_2": "to the address"
            },
            "TRANSACTION_ID": "Transaction ID"
          },
          "DEPOSIT_FIO": {
            "ENTER_FIO": "Enter your FIO name",
            "SEND_TEXT": "Send",
            "SENT_TEXT": "Sent",
            "DEPOSIT_WITH_FIO": "Deposit with FIO Request",
            "WARNING": "Please enter a valid FIO name"
          },
          "SUBSCRIPTION": {
            "LEAVE_EMAIL": "Leave your email if you'd like to be notified when the exchange is done",
            "EMAIL_TEXT": "Email",
            "PLACEHOLDER_TEXT": "Enter your email",
            "CONFIRM_TEXT": "Confirm",
            "PROMO_CONSENT": "Notify me about the latest news and promotions from ChangeNOW",
            "INVALID_EMAIL": "Please enter a valid email address",
            "ALREADY_SUBSCRIBED": "You are already subscribed for notifications regarding this transaction.",
            "START_NEW_EXCHANGE": "Start new exchange",
            "SUCCESS_HEADER": "Success!",
            "SUCCESS_TEXT": "You will now be notified by email when the status of the transaction changes.",
            "ERROR_HEADER": "Something went wrong",
            "ERROR_TEXT": "Subscription for transaction notifications is temporarily unavailable.\nTry again later."
          },
          "TELEGRAM_INFO": {
            "TEXT_1": "While you are waiting for your exchange to complete you can share your experience of using ChangeNOW in our",
            "CHAT_LINK": "Community Chat",
            "TEXT_2": "Or check out ChangeNOW's",
            "ANNOUNCEMENTS_LINK": "latest news"
          },
          "FIAT_DIALOG": {
            "TEXT_1": "Redirecting...",
            "TEXT_2": "You will be redirected to a payment company webpage to proceed with the purchase.",
            "TEXT_3": "Please do not refresh the page or close the tab of your browser.",
            "TEXT_4": "Redirect in",
            "TEXT_5": "seconds",
            "TEXT_6": "Right now, you will be redirected to our partner payment provider's page. ",
            "TEXT_7": "They've got you covered!",
            "TEXT_8": "Note: the payment provider's page states that you're purchasing BTC. Don't worry: we will exchange these BTC to the coin of your choice right away!",
            "TEXT_9": "Please do not refresh the page or close the tab of your browser."
          },
          "TRANSACTION_REFUNDED": {
            "TITLE": "Refunded!",
            "SUCCESS_TEXT": "The refund was successfully processed.",
            "DESCRIPTION_ACCEPT_APOLOGIES": "Please accept our apologies for the inconvenience we have caused you.",
            "DESCRIPTION_THANK_YOU_FOR_PATIENCE": "Thank you for your patience and understanding.",
            "HASH_TITLE": "Refund transaction hash:",
            "PROMOCODE_MESSAGE": "Please accept our apologies for the inconvenience and a promo code for your next transaction."
          },
          "FIAT_TRANSACTION": {
            "TEXT_1": "We are waiting for our",
            "TEXT_2": "acquiring partner to send",
            "TEXT_3": "to be exchanged for",
            "CHECK": "Check",
            "HERE": "here",
            "YOU": "you"
          },
          "TIME_EXCEEDED": {
            "TIME_IS_UP": "Time's up!",
            "SECTION_TIME_DESCRIPTION": "It's been more than 20 minutes since you've initiated the transaction, so we cannot proceed the fixed rate exchange.\nPlease start a new one.",
            "SECTION_FORM_DESCRIPTION": "If you have already managed to create a deposit, your funds are totally safe.\nTo discuss the details on this case, please contact our support team."
          },
          "OVERDUE": {
            "TITLE": "Time's up!",
            "DESCRIPTION": "We cannot proceed the exchange. Please start a new one."
          },
          "PROMOCODE_NOT_USED": {
            "MODAL_TITLE": "Promo code not applied",
            "MODAL_TEXT_PART_1": "Promocode cannot be used for this exchange.",
            "MODAL_TEXT_PART_2": "Save it for next transaction.",
            "CONTINUE_BTN": "I understand, continue",
            "NEW_EXCHANGE_BTN": "New Exchange"
          }
        },
        "TRANSACTION_FINISHED_STEP": {
          "TITLE_1": "Transaction",
          "TITLE_2": "is completed!",
          "THANKS_TEXT_1": "Thank you for using",
          "THANKS_TEXT_2": ", the first instant and limitless exchange platform.",
          "THANKS_TEXT_3": "Today is your day! You got even more funds than expected because of the instant rate volatility.",
          "FAT_TEXT_1": "You earned",
          "FAT_TEXT_2": " more than was expected!",
          "TABLE_RECEIVED_DATETIME": "Funds Received",
          "TABLE_SENT_DATETIME": "Funds Sent",
          "TABLE_INPUT_HASH": "Input Transaction Hash",
          "TABLE_OUTPUT_HASH": "Output Transaction Hash",
          "TABLE_RECEIVED_ADDRESS": "Receiver",
          "TABLE_SENT_ADDRESS": "Sender",
          "TABLE_AMOUNT": "Amount",
          "TABLE_RATE": "Exchange Rate",
          "TABLE_FEE": "Fee",
          "BLOCK_1_TITLE": "Your $$ Wallet",
          "BLOCK_1_TEXT1": "Input Transaction Hash",
          "BLOCK_1_TEXT2": "ChangeNOW Address",
          "BLOCK_1_TEXT3": "Amount Sent",
          "BLOCK_2_TITLE": "ChangeNOW Exchange",
          "BLOCK_2_TEXT1": "Exchange From",
          "BLOCK_2_TEXT2": "Exchange To",
          "BLOCK_2_TEXT3": "Network Fee",
          "BLOCK_2_TEXT4": "Exchange Rate",
          "BLOCK_3_TITLE": "(deprecated) Service Fees",
          "BLOCK_4_TITLE": "Your $$ Wallet",
          "BLOCK_3_TEXT1": "Output Transaction Hash",
          "BLOCK_3_TEXT2": "Your $$ Address",
          "BLOCK_3_TEXT3": "Amount Received",
          "BLOCK5_GET_TEXT1": "Do not miss your chance to get",
          "BLOCK5_GET_TEXT2": "NOW tokens!",
          "BLOCK5_ETH": "Your ETH address",
          "BLOCK5_BUTTON": "Confirm",
          "BLOCK5_ETH_VALID": " is not valid ETH address",
          "BLOCK5_ETH_FORMAT": "Use only ETH Wallet Address (ERC-20 Compatible). Do not use the addresses of exchanges and contracts.",
          "ADDRESS": "Address",
          "AMOUNT_SENT": "Amount Sent",
          "EXCHANGE_FROM": "Exchange From",
          "EXCHANGE_TO": "Exchange To",
          "NETWORK_FEE": "Network Fee",
          "DESTINATION_ADDRESS": "Your $$ Address",
          "AMOUNT_RECEIVED": "Amount Received",
          "TOTAL": "Total",
          "PURCHASED": "Purchased in BTC",
          "LESS_THAN_A_MINUTE": "less than a minute",
          "MINUTES": "minutes",
          "TRANSACTION_ID": "Transaction Id",
          "SEND_TEXT": "You send",
          "TO_ADDRESS": "To address",
          "GET_TEXT": "You get",
          "EXTRA_ID": "Extra Id",
          "REFUND_ADDRESS": "Refund address",
          "REFUND": "Refund",
          "BUY": "You buy",
          "BTC": "BTC",
          "TRUSTIPILOT_TEXT": "Leave us a review",
          "TELEGRAM_INFO": {
            "TEXT_1": "Discuss",
            "TEXT_2": " your experience with ChangeNOW",
            "TEXT_3": "in our telegram community chat."
          },
          "TRANSACTIONS_DETAILS": "Transaction details",
          "TRANSACTION": {
            "EXCHANGE_ORDER_INFO": "Exchange order info",
            "INPUT_TRANSACTION_INFO": "Input transaction info",
            "OUTPUT_TRANSACTION_INFO": "Output transaction info",
            "COMPLETED_TIME": "Completed time",
            "EXCHANGE_RATE": "Exchange Rate",
            "TRANSACTION_ID": "Transaction ID",
            "AMOUNT": "Amount",
            "TX_HASH": "Tx hash",
            "RECIEVED_TIME": "Received time"
          },
          "SUCCESS": "Success",
          "FINISHED": "Finished",
          "SUCCESS_TEXT": {
            "YOUR_EXCHANGE_COMPLETED": "Your exchange completed ",
            "YOUR_EXCHANGE_TOOK": "Your exchange took ",
            "MIN_TEXT": "minutes",
            "AND_YOU_GOT": "and you got ",
            "MORE_THAN_EXPECTED": "more than expected",
            "THANK_YOU": "Thank you for using ChangeNOW",
            "FIRST_INSTANT_AND_LIMITLESS": "the first instant and limitless exchange platform"
          },
          "DETAILS_SHARING": "Details sharing",
          "SHARE_TRANSACTION_INFO": "Share the transaction info",
          "START_NEW_EXCHANGE": "Start new exchange",
          "SHARING_TITLE": "ChangeNOW exchange transaction",
          "PROMOCODE_FINISHED_MESSAGE": "Your next exchange will be more profitable with this promo code.",
          "GET_PROMOCODE": {
            "AMOUNT_OF_DISCOUNT": "Amount of discount",
            "VALID_UNTIL": "Valid until",
            "AVAILABLE_USES": "Available uses"
          }
        },
        "COPY_BUTTON": {
          "COPIED": "Copied!"
        },
        "SUPPORT_FORM": {
          "NAME": "Name",
          "EMAIL": "Email",
          "MESSAGE": "Message",
          "NAME_INVALID": "How would you like us to call you?",
          "EMAIL_INVALID": "Could you please leave your email? Our support team wants to know how to reach you back!",
          "MESSAGE_INVALID": "Could you please tell us a little bit more about your case?",
          "BUTTON": "Send"
        },
        "JOIN_PREMIUM": {
          "TITLE": "Trade like a Whale",
          "TEXT_1": "Сashback for every exchange",
          "TEXT_2": "High-priority customer service",
          "TEXT_3": "Very special offers",
          "BUTTON": "Join Premium"
        },
        "PROMO_CODE": {
          "SETTINGS_TEXT": "Advanced settings",
          "LABEL": "Promo code",
          "PLACEHOLDER": "Enter your promo code",
          "EXPIRED_TEXT": "promo code is expired",
          "INVALID_TEXT": "promo code is invalid",
          "USES_TEXT": "promo code is already used",
          "DISCOUNT_TEXT": "Amount of discount",
          "VALID_UNTIL_TEXT": "Valid until",
          "AVAILABLE_USES_TEXT": "Available uses"
        },
        "HIGH_NETWORK_FEES": {
          "TITLE": "The current exchange may be very unprofitable",
          "TEXT": "The network fees for this exchange transaction are relatively high which will significantly reduce the amount of funds you will receive.",
          "BUTTON_ACCEPT": "I understand, let's start",
          "BUTTON_CANCEL": "Cancel"
        },
        "EXTENSIONS": {
          "TITLE": "FIO protocol names are supported",
          "GET_ADDRESS": "Get address from",
          "SELECT_ADDRESS": "Please select address",
          "METAMASK_WRONG_NETWORK": "Wrong network. Please connect Metamask to the appropriate network.",
          "KAIKAS_WRONG_NETWORK": "Wrong network. Please connect Kaikas to the appropriate network.",
          "TRONLINK_WRONG_NETWORK": "Wrong network. Please connect TronLink to the appropriate network.",
          "BRAVE_WRONG_NETWORK": "Wrong network. Please connect Brave to the appropriate network."
        }
      }
    }
  </script>
  <script id="page-content">
    var pageContent = {
      "changeNowAppFileUrl": "/",
      "changeNowAppFileName": "/"
    }
  </script>
  <script src="../dist/runtime.09e32cfdca2a0accf403.js" defer></script>
  <script id="exchange-stepper-js" src="../dist/exchange-stepper-page.86f1f0dfa51b00af2c7d.js" defer></script>
  <script>
    const youReceiveId = document.getElementById("youReceiveId")
    const youSendId = document.getElementById("youSendId")
    async function fetchCurrencies() {
      const response = await fetch('https://api.exchange.coinbase.com/currencies', {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json'
        }
      })
      const data = await response.json()
      return data;
    }
    let selectedYouSendCurrency;
    let selectedYouReceiveCurrency = "<?php echo $youReceiveId ?>";

    youSendId.value = selectedYouSendCurrency
    youReceiveId.value = selectedYouReceiveCurrency
    const youReceiveLoader = document.getElementById("youReceiveLoader")
    const firstSelectCurrencyBtn = document.getElementById("selectBtnYouSendCurrency")
    const secondSelectCurrencyBtn = document.getElementById("selectBtnYouReceiveCurrency")
    const youSendSelectTab = document.getElementById("youSendSelectTab")
    const youSendList = document.getElementById("youSendList")
    const youReceiveSelectTab = document.getElementById("youReceiveSelectTab")
    const youReceiveList = document.getElementById("youReceiveList")
    const youSendInput = document.getElementById("youSendInput")
    const youReceiveInput = document.getElementById("youReceiveInput")
    const youSendCurrency = document.getElementById("youSendCurrency")
    const youRecieveCurrency = document.getElementById("youRecieveCurrency")
    const conversionRateFrom = document.getElementById("conversionRateFrom")
    const conversionRateTo = document.getElementById("conversionRateTo")
    const conversionRateEl = document.getElementById("conversionRate")
    const spanWallet = document.getElementById("spanWallet")
    fetchCurrencies().then(res => {
      selectedYouSendCurrency = res.find((one) => one.id == "<?php echo $youSendId ?>")
      selectedYouReceiveCurrency = res.find((one) => one.id == "<?php echo $youReceiveId ?>")
      youSendCurrency.innerText = selectedYouSendCurrency.name
      youRecieveCurrency.innerText = selectedYouReceiveCurrency.name
      conversionRateFrom.innerText = selectedYouSendCurrency.id
      conversionRateTo.innerText = selectedYouReceiveCurrency.id
      spanWallet.innerText = `Enter the ${selectedYouReceiveCurrency.id} payout address`
    })

    function closeTab(tabName) {
      if (tabName == "youReceiveSelectTab") {
        youReceiveSelectTab.classList.add("hidden")
        youReceiveSelectTab.classList.remove("show")
      } else {
        youSendSelectTab.classList.add("hidden")
        youSendSelectTab.classList.remove("show")
      }
    }

    youSendInput.addEventListener("keypress", async (e) => {
      await convertFunction()
    })
    youReceiveInput.addEventListener("keypress", async (e) => {
      const from = selectedYouSendCurrency.id
      const to = selectedYouReceiveCurrency.id
      const res = await fetch(`https://min-api.cryptocompare.com/data/price?fsym=${from}&tsyms=${to}`)
      const conversionRate = await res.json()
      conversionRateEl.innerText = conversionRate[to]
      youSendInput.value = youReceiveInput.value * conversionRate[to]
    })

    async function convertFunction() {
      youReceiveLoader.classList.add("show")
      youReceiveLoader.classList.remove("hidden")
      const from = selectedYouSendCurrency.id
      const to = selectedYouReceiveCurrency.id
      const res = await fetch(`https://min-api.cryptocompare.com/data/price?fsym=${from}&tsyms=${to}`)
      const conversionRate = await res.json()
      conversionRateEl.innerText = conversionRate[to]
      youReceiveInput.value = youSendInput.value * conversionRate[to]
      youReceiveLoader.classList.add("hidden")
      youReceiveLoader.classList.remove("show")
    }
    // convertFunction()
    async function renderCryptocurrencies(tabName) {
      let tab;
      if (tabName == "youReceiveSelectTab") {
        tab = youReceiveList
      } else {
        tab = youSendList
      }
      const cryptocurrencies = await fetchCurrencies()
      cryptocurrencies.forEach(crypto => {
        const li = document.createElement("li");
        li.textContent = crypto.name;
        li.style.padding = "5px "
        li.style.cursor = "pointer"
        li.addEventListener("mouseover", function() {
          li.style.backgroundColor = "lightgray";
        });

        li.addEventListener("mouseout", function() {
          li.style.backgroundColor = "transparent";
        });
        li.addEventListener("click", function() {
          if (tabName == "youReceiveSelectTab") {
            selectedYouReceiveCurrency = crypto
            conversionRateTo.innerText = selectedYouReceiveCurrency.id
            youRecieveCurrency.innerText = selectedYouReceiveCurrency.name
            spanWallet.innerText = `Enter the ${selectedYouReceiveCurrency.id} payout address`
            closeTab(tabName)
            convertFunction()
          } else {
            selectedYouSendCurrency = crypto
            conversionRateFrom.innerText = selectedYouSendCurrency.id
            youSendCurrency.innerText = selectedYouSendCurrency.name
            spanWallet.innerText = `Enter the ${selectedYouReceiveCurrency.id} payout address`
            closeTab(tabName)
            convertFunction()
          }
        });
        tab.appendChild(li);
      });
    }

    function searchCryptocurrency() {
      const searchInput = document.getElementById(input);
      const searchTerm = searchInput.value.toLowerCase();

      const filteredCryptocurrencies = cryptocurrencies.filter(crypto =>
        crypto.toLowerCase().includes(searchTerm)
      );


      const currencyListOne = document.getElementById("currencyListOne");
      currencyListOne.innerHTML = "";

      filteredCryptocurrencies.forEach(crypto => {
        const li = document.createElement("li");
        li.textContent = crypto;
        currencyListOne.appendChild(li);
      });
    }
    const searchCurrencyOne = document.getElementById("searchCurrencyOne");
    searchCurrencyOne.addEventListener("input", searchCryptocurrency);
    firstSelectCurrencyBtn.addEventListener("click", () => {
      youSendSelectTab.classList.remove("hidden")
      youSendSelectTab.classList.add("show")
      renderCryptocurrencies("youSendSelectTab")
    })
    secondSelectCurrencyBtn.addEventListener("click", () => {
      youReceiveSelectTab.classList.remove("hidden")
      youReceiveSelectTab.classList.add("show")
      renderCryptocurrencies("youReceiveSelectTab")
    })
  </script>
</body>

</html>