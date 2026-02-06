// =========================================================
//  共通スクリプト：ヘッダー高さ調整
// =========================================================
document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.site-header');
  const main = document.querySelector('.site-main');

  if (header && main) {
    const adjustPadding = () => {
      main.style.paddingTop = `${header.offsetHeight}px`;
    };
    adjustPadding();
    window.addEventListener('resize', adjustPadding);
  }
});


// =========================================================
//  ヘッダーメニュー開閉処理
// =========================================================
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.querySelector('.menu-toggle');
  const mainNav = document.querySelector('.main-nav');

  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', function () {
      menuToggle.classList.toggle('active');
      mainNav.classList.toggle('open');
      document.body.classList.toggle('nav-open');
    });
  }
});
