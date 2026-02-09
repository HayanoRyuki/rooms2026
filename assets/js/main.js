// =========================================================
//  共通スクリプト：ヘッダー高さ調整
// =========================================================
document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.l-header');
  var main = document.querySelector('.site-main');

  if (header && main) {
    var adjustPadding = function () {
      main.style.paddingTop = header.offsetHeight + 'px';
    };
    adjustPadding();
    window.addEventListener('resize', adjustPadding);
  }
});
