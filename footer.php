<!------------------------------------- フッター ------------------------------------->
<footer class="footer">
    <div class="footer__wrap blContainer">
        <a class="footer__logoWrap" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="footer__logo" alt="ロゴ"
                src="<?php echo esc_url(get_theme_file_uri('/img/logo@1x.png')); ?>"
                srcset="<?php echo esc_url(get_theme_file_uri('/img/logo@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('/img/logo@2x.png')); ?> 2x"
                loading="lazy">
        </a>
        <div class="footer__menuWrap">
            <ul class="footer__menuInner">
                <li class="footer__listItemWrap footer__order2">
                    <a class="footer__mainLink" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                    <div class="footer__subLinkWrap">
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_issue')); ?>">お悩み</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_service')); ?>">サービス一覧</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_feature')); ?>">サービスの特徴一覧</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/contact/#target_page-contact')); ?>">ご相談・お見積もり</a>
                    </div>
                </li>
                <li class="footer__listItemWrap  footer__order3">
                    <a class="footer__mainLink" href="<?php echo esc_url(home_url('/service/#target_page-service')); ?>">サービス</a>
                    <div class="footer__subLinkWrap">
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/service/#target_page-service')); ?>">サービス一覧</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/service/#target_page-feature')); ?>">サービスの特徴一覧</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-price')); ?>">料金一覧へ</a>
                    </div>
                </li>
                <li class="footer__listItemWrap  footer__order1">
                    <a class="footer__mainLink" href="<?php echo esc_url(home_url('')); ?>">お問い合わせ</a>
                    <div class="footer__subLinkWrap">
                        <a class="footer__chatworkLink" href="https://www.chatwork.com/2xvld0jel7k08" target="_blank" rel="noopener noreferrer">
                            <img class="footer__img" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('/img/chatwork_logo@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('/img/chatwork_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('/img/chatwork_logo@2x.png')); ?> 2x"
                                loading="lazy">
                            <span class="">Chatworkで相談</span>
                        </a>
                        <a class="footer__mailLink" href="<?php echo esc_url(home_url('/contact/#target_page-contact')); ?>">
                            <img class="footer__img" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('/img/mail_logo@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('/img/mail_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('/img/mail_logo@2x.png')); ?> 2x"
                                loading="lazy">
                            <span class="">メールで相談</span>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="footer__menuInner">
                <li class="footer__listItemWrap">
                    <a class="footer__mainLink" href="<?php echo esc_url(home_url('/price/#target_page-price')); ?>">料金表</a>
                    <div class="footer__subLinkWrap">
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-price')); ?>">料金一覧</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-price-html-css')); ?>">HTML/CSSコーディング</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-price-wordpress')); ?>">WordPressコーディング</a>
                    </div>
                </li>
                <li class="footer__listItemWrap">
                    <a class="footer__mainLink" href="<?php echo esc_url(home_url('/flow/#target_page-flow')); ?>">納品の流れ</a>
                    <div class="footer__subLinkWrap">
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/flow/#target_page-flow')); ?>">お問い合わせから納品まで</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/contact/#target_page-contact')); ?>">ご相談・お見積もり</a>
                    </div>
                </li>
                <li class="footer__listItemWrap">
                    <a class="footer__mainLink" href="<?php echo esc_url(home_url('/about/#target_page-office')); ?>">事業所概要</a>
                    <div class="footer__subLinkWrap">
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/about/#target_page-about')); ?>">担当者</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/about/#target_page-office')); ?>">事業所詳細</a>
                        <a class="footer__subLink" href="<?php echo esc_url(home_url('/contact/#target_page-contact')); ?>">お問い合わせ</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <a id="page-top-btn" class="footer__goTopBtn" href="#">
        <span class="footer__goTopLink">トップに戻る</span>
    </a>

    <div class="footer__copyWrap">
        <small class="footer__copy"> &copy; <?php echo get_the_date('Y'); ?>フリーランス WordPress コーディング代行 <br class="footer__break1">士業向けコーポレートサイト</small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>