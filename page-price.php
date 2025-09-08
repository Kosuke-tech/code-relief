<?php get_header(); ?>

<section class="price" id="target_page-price">
    <div class="price__wrap">
        <div class="price__headingWrap headingWrap">
            <h2 class="price__heading heading">Price</h2>
            <p class="price__subHeading subHeading">サービスの料金表</p>
        </div>
        <div class="price__descriptionWrap">
            <div class="price__catchWrap">
                <p class="price__catch">
                    コーディング代行の基本の料金体系です。<br>詳細は内容によって異なりますのでお気軽にお問い合わせください。
                </p>
            </div>
            <div class="price__listWrap">
                <div class="price__listInner" id="target_page-price-html-css">
                    <div class="price__serviceNameWrap">
                        <h3 class="price__serviceName">HTML,CSSコーディング(レスポンシブ対応含む)</h3>
                    </div>
                    <dl class="price__list">
                        <dt class="price__term">・トップページ（ヘッダー、フッター含む）</dt>
                        <dd class="price__unitPrice">20,000円(税込)~</dd>
                        <dt class="price__term">・下層ページ/1ページ</dt>
                        <dd class="price__unitPrice">　5,500円(税込)~</dd>
                        <dt class="price__term">・お問い合わせフォーム</dt>
                        <dd class="price__unitPrice">15,000円(税込)~</dd>
                    </dl>
                </div>
                <div class="price__listInner">
                    <div class="price__serviceNameWrap" id="target_page-price-wordpress">
                        <h3 class="price__serviceName">WordPressコーディング(レスポンシブ)</h3>
                    </div>
                    <dl class="price__list">
                        <dt class="price__term">・トップページ（ヘッダー、フッター含む）</dt>
                        <dd class="price__unitPrice">25,000円(税込)~</dd>
                        <dt class="price__term">・固定ページ/1ページ</dt>
                        <dd class="price__unitPrice">　6,500円(税込)~</dd>
                        <dt class="price__term">・一覧ページ(ブログ一覧ページなど)</dt>
                        <dd class="price__unitPrice">15,000円(税込)~</dd>
                        <dt class="price__term">・詳細ページ</dt>
                        <dd class="price__unitPrice">10,000円(税込)~</dd>
                        <dt class="price__term">・お問い合わせフォーム</dt>
                        <dd class="price__unitPrice">15,000円(税込)~</dd>
                        <dt class="price__term">・カスタム投稿タイプ</dt>
                        <dd class="price__unitPrice">30,000円(税込)~</dd>
                        <dt class="price__term">・カスタムフィールド</dt>
                        <dd class="price__unitPrice">10,000円(税込)~</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- コンタクトセクションは、partsフォルダ内のファイルでパーツ化 -->
<?php get_template_part('parts/contact', 'section'); ?>

<?php get_footer(); ?>