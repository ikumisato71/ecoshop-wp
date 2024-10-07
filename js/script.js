// ページトップボタンの要素を取得
const pageTopButton = document.getElementById("js-page-top");

// クリックイベントをアロー関数で設定
pageTopButton.addEventListener("click", () => {
  // ページの一番上へスムーズにスクロール
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// $(".single-item").slick({
//   autoplay: true, // 自動再生
//   fade: true, // スライドをフェードイン・フェードアウト
//   cssEase: "linear", // アニメーション
//   speed: 600, // フェードアニメーションの速度設定
// });

// ハンバーガーメニュー
// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
  const scrollingElement = () => {
    const browser = window.navigator.userAgent.toLowerCase();
    if ("scrollingElement" in document) return document.scrollingElement;
    return document.documentElement;
  };

  const scrollY = bool
    ? scrollingElement().scrollTop
    : parseInt(document.body.style.top || "0");

  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw",
  };

  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";
  });

  if (!bool) {
    window.scrollTo(0, scrollY * -1);
  }
};

// 変数定義
const CLASS = "-active";
let flg = false;
let accordionFlg = false;

let hamburger = document.getElementById("js-hamburger");
let focusTrap = document.getElementById("js-focus-trap");
let menu = document.querySelector(".js-nav-area");
let accordionTrigger = document.querySelectorAll(".js-sp-accordion-trigger");
let accordion = document.querySelectorAll(".js-sp-accordion");

// メニュー開閉制御
hamburger.addEventListener("click", (e) => {
  //ハンバーガーボタンが選択されたら
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);
  if (flg) {
    // flgの状態で制御内容を切り替え
    backgroundFix(false);
    hamburger.setAttribute("aria-expanded", "false");
    hamburger.focus();
    flg = false;
  } else {
    backgroundFix(true);
    hamburger.setAttribute("aria-expanded", "true");
    flg = true;
  }
});
window.addEventListener("keydown", () => {
  //escキー押下でメニューを閉じられるように
  if (event.key === "Escape") {
    hamburger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    backgroundFix(false);
    hamburger.focus();
    hamburger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});

// メニュー内アコーディオン制御
accordionTrigger.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle(CLASS);
    e.currentTarget.nextElementSibling.classList.toggle(CLASS);
    if (accordionFlg) {
      e.currentTarget.setAttribute("aria-expanded", "false");
      accordionFlg = false;
    } else {
      e.currentTarget.setAttribute("aria-expanded", "true");
      accordionFlg = true;
    }
  });
});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  hamburger.focus();
});

// -----------
// swiper
// -----------
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "vertical", // 縦方向にスライド
  loop: true, // ループを有効にする

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // Scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },

  // Autoplay option (自動再生設定)
  autoplay: {
    delay: 3000, // 3秒ごとにスライドが切り替わる
    disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
  },
});

// const slideLength = document.querySelectorAll(".card05 .swiper-slide").length;

// const initSwiper = () => {
//   const mySwiper = new Swiper(".card05 .swiper", {
//     slidesPerView: "auto",
//     spaceBetween: 16,
//     loop: true,
//     loopedSlides: slideLength,
//     speed: 8000,
//     autoplay: {
//       delay: 0,
//       disableOnInteraction: false,
//     },
//     freeMode: {
//       enabled: true,
//       momentum: false,
//     },
//     grabCursor: true,
//     breakpoints: {
//       1025: {
//         spaceBetween: 32,
//       },
//     },
//     on: {
//       touchEnd: (swiper) => {
//         swiper.slideTo(swiper.activeIndex + 1);
//       },
//     },
//   });
// };

// window.addEventListener("load", function () {
//   initSwiper();
// });
