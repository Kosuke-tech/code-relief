"use strict";


{
// トップ戻るボタンのスムーススクロール

document.addEventListener('DOMContentLoaded', function() {
    const pageTopBtn = document.getElementById('page-top-btn');

    if (pageTopBtn) { 
        pageTopBtn.addEventListener('click', function(e) {
            e.preventDefault(); // 初期値のアンカーリンク動作をキャンセル

            window.scrollTo({
                top: 0, // 最上部を指定
                behavior: 'smooth' // スムーズスクロール
            });
        });
    }
});

}

//   Intersection Observer (上に戻るボタン)
document.addEventListener('DOMContentLoaded', function () {
  const pageTopBtn = document.getElementById('page-top-btn');

  // スクロールイベントで表示・非表示を切り替え
  window.addEventListener('scroll', function () {
    if (window.scrollY > window.innerHeight / 2) {
      pageTopBtn.classList.add('is-visible');
    } else {
      pageTopBtn.classList.remove('is-visible');
    }
  });

  // スムーススクロール
  pageTopBtn.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});
